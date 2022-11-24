<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpkOperatorModel extends Model
{
    use HasFactory;
    protected $table   = 'spk_operators';
	public $primarykey = 'id';
	public $timestamps = true;

	protected $fillable = [ 'operator_id', 'spk_id','created_at','updated_at'];

	protected $hidden = ['created_at','updated_at'];

	public function spk() {
		return $this->hasMany('App\Models\JobInstructionModel', 'id','spk_id');
  	}

      public function operator_progress() {
		return $this->belongsTo('App\Models\JobInstructionModel', 'id','spk_id');
  	}

    public function work_step() {
		return $this->hasOne('App\Models\OperatorModel', 'id','operator_id');
  	}
}
