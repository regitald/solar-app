<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSubSpkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('job_instruction', function (Blueprint $table) {
            $table->boolean('sub_spk')->default(false)->after('spk_type');
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
            $table->boolean('sub_spk')->default(false)->after('spk_type');
        });
    }
}
