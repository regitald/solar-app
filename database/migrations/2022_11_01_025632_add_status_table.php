<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('spk_operators', function (Blueprint $table) {
            $table->enum('status',['pending','process','reject','canceled','hold'])->default('pending')->after('spk_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('spk_operators', function (Blueprint $table) {
            $table->enum('status',['pending','process','reject','canceled'])->default('pending')->after('spk_id');
        });
    }
}
