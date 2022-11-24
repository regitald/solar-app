<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationModel extends Model
{
    use HasFactory;
    protected $table   = 'notifications';
	public $primarykey = 'id';
	public $timestamps = true;

    protected $fillable = [
        'user_id',
        'notification_type',
        'notification_title',
        'notification_desc',
        'order_status'
	];

}
