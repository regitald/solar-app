<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperatorModel extends Model
{
    use HasFactory;
    protected $table   = 'operator';
	public $primarykey = 'id';
	public $timestamps = true;

	protected $fillable = [
        'name',
	];


	public function Spk() {
		return $this->hasMany('App\Models\SpkOperatorModel', 'id','id');
  	}
}
