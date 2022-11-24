<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileModels extends Model
{
    use HasFactory;
    protected $table   = 'files';
	public $primarykey = 'id';
	public $timestamps = true;

    protected $fillable = [
        'file_id',
        'name'
	];

    public function JobInstruction() {
		return $this->hasOne('App\Models\JobInstructionModel', 'file_id','id');
  	}
}
