<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OperatorModel;
use App\Models\JobInstructionModel;
use App\Models\JobInstructionMoreModel;
use App\Models\SpkOperatorModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\FileModels;

class FollowUpController extends Controller
{
    public function index(Request $request){

        $data['data'] =  JobInstructionModel::select('*')->with(['operators','operator_progress'])->get();
        $data['title'] = 'Dashboard';
        $data['sub_title'] = 'Data Orders';
        return view('follow-up.dashboard',$data);
    }

    public function form(Request $request){
        $last_id =  JobInstructionModel::select('id')->latest('id')->first();
        $data['spk_parent'] =  JobInstructionModel::select('spk_number')->whereMonth('created_at', Carbon::now()->month)->get();
        $data['code'] = $this->generateCode($last_id['id']);
        $data['work_step'] = OperatorModel::get();
        return view('follow-up.form-instruksi-kerja',$data);
    }

    public function store(Request $request){

        $request['spk_files'] = NULL;
        $request['taxes_type'] ? $request['taxes_type'] = 1 : $request['taxes_type'] = 0;
        $store = JobInstructionModel::create($request->except('files'));

        for ($i=0; $i <count($request['work_step']) ; $i++) {
            $payload['operator_id'] = $request['work_step'][$i];
            $payload['spk_id'] = $store->id;
            $arr[] = $payload;
        }

        $work_step = SpkOperatorModel::insert($arr);

        $files =  $request->file('files');
        for ($i=0; $i < count($files); $i++) {
            $path = Storage::putFile(
                'public/images',
                $files[$i]
            );
            $payload['file_id'] =$store->id;
            $payload['name']= basename($path);
            FileModels::create($payload);
        }

        if(!$store && !$work_step) return redirect()->back()->withErrors($store);

        $notification['user_id'] = '1';
        $notification['notification_title'] = 'Request New SPK';
        $notification['notification_desc'] = 'No SPK : '.$request['spk_number'];
        $notification['order_status'] = 'New';
        $this->storeNotification(($notification));

        return redirect('/follow-up')->with('success', "Success Created Order!");
    }

    public function status(Request $request, $status, $id){
        $data['status'] = $status;
        $update = JobInstructionModel::find($id)->update($data);


        $data=  JobInstructionModel::select('spk_number')->where('id',$id)->first();

        if(!$update) return redirect()->back()->withErrors($update);

        $notification['user_id'] = '1';
        $notification['notification_title'] = ucfirst($status).' Penjadawalan';
        $notification['notification_desc'] = 'No SPK : '.$data['spk_number'];
        $notification['order_status'] = $status;
        $this->storeNotification(($notification));

        return redirect('/follow-up')->with('success', "Success Updated Data!");
    }
    public function more(Request $request){
        $data['spk'] =  JobInstructionModel::select('id','spk_number')->get();
        $data['work_step'] = OperatorModel::get();
        return view('follow-up.form-kekurangan-tambahan-spk',$data);
    }

    public function storeMore(Request $request){
        $last_id =  JobInstructionMoreModel::select('id')->latest('id')->first();
        $parent =  JobInstructionModel::select('id','spk_number')->where('spk_number',$request['spk_parent'])->first();
        $code = $request['customer_name'] == 'QC' ? $request['spk_parent'].'.GC'.sprintf("%04d", $last_id['id']+1) : $request['spk_parent'].'.K'.sprintf("%04d", $last_id['id']+1) ;
        $request['spk_number'] = $code;
        $request['spk_parent'] = $parent['id'];
        $store = JobInstructionMoreModel::create($request->all());

        if(!$store) return redirect()->back()->withErrors($store);

        return redirect('/follow-up')->with('success', "Success Created Order!");
    }

    public function order(Request $request){
        $data['orders']      = JobInstructionModel::select('*')->with(['operators','operator_progress','files'])->get();
        $data['pending']    = JobInstructionModel::select('*')->where('status','pending')->with(['operators','operator_progress'])->get();
        $data['active']    = JobInstructionModel::select('*')->whereIn('status',['process','approved'])->with(['operators','operator_progress'])->get();
        $data['reject']     = JobInstructionModel::select('*')->where('status','reject')->with(['operators','operator_progress'])->get();
        $data['late']       = JobInstructionModel::select('*')->where('status','late')->with(['operators','operator_progress'])->get();
        $data['complete']     = JobInstructionModel::select('*')->where('status','finish')->with(['operators','operator_progress'])->get();
        return view('follow-up.manage-orders',$data);
    }

    public function database(Request $request, $status){
        $data['data'] = JobInstructionModel::select('*')->where('spk_type',$status)->with(['operators','operator_progress'])->get();

        return view('follow-up.data-layout',$data);
    }


}
