<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\NotificationModel;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected function generateCode($id){
        $data['generated_spk']= 'P-'.sprintf("%04d", $id+1);
        $data['generated_spk_pajak']= 'SLN'.date('y').'-'.sprintf("%04d", $id+1);
        $data['generated_spk_nonpajak']= date('y').'-'.sprintf("%04d", $id+1);
        $data['generated_spk_pajak_subspk']= 'SLN'.date('y').'-'.sprintf("%04d", $id+1.).'-A';
        $data['generated_spk_pajak_subspk_null']= 'SLN'.date('y').'-'.sprintf("%04d", $id+1.).'-A';
        $data['generated_spk_nonpajak_subspk_null']= date('y').'-'.sprintf("%04d", $id+1.).'-A';
        $data['generated_spk_pajak_subspk_parent'] = 'SLN'.date('y').'-'.sprintf("%04d", $id+1.).'-C';
        $data['generated_spk_nonpajak_subspk_parent']= date('y').'-'.sprintf("%04d", $id+1.).'-B';
        return $data;
    }

    protected function storeNotification($payload){
        NotificationModel::create($payload);
    }
}
