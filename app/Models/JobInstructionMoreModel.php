<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobInstructionMoreModel extends Model
{
    use HasFactory;
    protected $table   = 'job_instruction_more';
	public $primarykey = 'id';
	public $timestamps = true;

	protected $fillable = [ 'spk_number', 'spk_parent','request','quantity','created_at','desc'];

	protected $hidden = ['created_at','updated_at'];

    public function operator_progress() {
		return $this->belongsTo('App\Models\JobInstructionModel', 'id','spk_parent');
  	}
}
