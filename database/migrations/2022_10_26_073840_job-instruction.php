<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JobInstruction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_instruction', function (Blueprint $table) {
            $table->id();
            $table->string('spk_number');
            $table->string('spk_number_customer');
            $table->string('spk_number_layout');
            $table->string('spk_number_sample');
            $table->enum('spk_type',['sample','layout','production']);
            $table->string('spk_parent')->nullable();
            $table->timestamp('order_date')->useCurrent();
            $table->string('customer_name');
            $table->mediumInteger('quantity');
            $table->string('spk_files')->nullable();
            $table->boolean('taxes_type')->default(false);
            $table->timestamp('shipping_date')->nullable();
            $table->string('code_style');
            $table->string('follow_up');
            $table->string('price');
            $table->smallInteger('user_id')->nullable();
            $table->string('username')->nullable();
            $table->enum('status',['pending','process','reject','canceled','hold'])->default('pending');
            $table->string('desc')->nullable();
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
        //
    }
}
