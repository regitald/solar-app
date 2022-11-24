<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->enum('notification_type',['general','status'])->default('general');
            $table->string('notification_title');
            $table->text('notification_desc');
            $table->enum('status',[0,1])->default(0);
            $table->string('order_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->enum('notification_type',['general','status'])->default('general');
            $table->string('notification_title');
            $table->text('notification_desc');
            $table->enum('status',[0,1])->default(0);
            $table->string('order_status')->nullable();
            $table->timestamps();
        });
    }
}
