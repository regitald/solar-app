<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOrderNameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('job_instruction', function (Blueprint $table) {
            $table->string('order_name')->nullable()->after('spk_number_customer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('job_instruction', function (Blueprint $table) {
            $table->string('order_name')->nullable()->after('spk_number_customer');
            //
        });
    }
}
