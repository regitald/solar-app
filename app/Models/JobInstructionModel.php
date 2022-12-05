<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobInstructionModel extends Model
{
    use HasFactory;
    protected $table   = 'job_instruction';
	public $primarykey = 'id';
	public $timestamps = true;

	protected $fillable = [
        'spk_number',
        'taxes_type',
        'spk_type',
        'sub_spk',
        'spk_parent',
        'order_date',
        'shipping_date',
        'customer_name',
        'spk_number_customer',
        'order_name',
        'quantity',
        'follow_up',
        'spk_files',
        'spk_number_layout',
        'spk_number_sample',
        'code_style',
        'price',
        'user_id',
        'username',
        'status',
        'desc'
	];

	protected $hidden = ['created_at','updated_at'];
	public function operators() {
		return $this->hasMany('App\Models\SpkOperatorModel', 'spk_id','id')->with('work_step');
  	}

    public function files() {
		return $this->hasMany('App\Models\FileModels', 'file_id','id');
  	}

    public function operator_progress() {
		return $this->hasOne('App\Models\SpkOperatorModel', 'spk_id','id')->where('status','process')->with('work_step');
  	}

      public function more_orders() {
		return $this->hasMany('App\Models\JobInstructionMoreModel', 'spk_parent','id');
  	}
}
