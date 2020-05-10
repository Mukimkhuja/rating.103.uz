<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Carbon;

class CreateJobratingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobratings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('npipl')->default('0');
            $table->integer('nfabc')->default('0');
            $table->integer('nfbc')->default('0');
            $table->integer('nab_c')->default('0');
            $table->integer('nfgps')->default('0');
            $table->integer('nfvr')->default('0');
            $table->integer('npvr')->default('0');
            $table->integer('nfpara')->default('0');
            $table->integer('nppara')->default('0');
            $table->integer('nffeld')->default('0');
            $table->integer('npfeld')->default('0');
            $table->integer('stv5_7')->default('0');
            $table->integer('stv5_7_2')->default('0');
            $table->integer('stv7_10')->default('0');
            $table->integer('stv7_10_1')->default('0');
            $table->integer('stv10')->default('0');
            $table->integer('stv10_pr')->default('0');
            $table->integer('stf5_7')->default('0');
            $table->integer('stf5_7_2')->default('0');
            $table->integer('stf7_10')->default('0');
            $table->integer('stf7_10_1')->default('0');
            $table->integer('stf10')->default('0');
            $table->integer('stf10_pr')->default('0');
            $table->integer('t11')->default('0');
            $table->integer('t12')->default('0');
            $table->integer('t21')->default('0');
            $table->integer('t22')->default('0');
            $table->integer('nfv')->default('0');
            $table->integer('nv')->default('0');
            $table->integer('nfav')->default('0');
            $table->integer('nfl0')->default('0');
            $table->integer('nfl1')->default('0');
            $table->integer('nfpv')->default('0');
            $table->integer('nop')->default('0');
            $table->integer('npr')->default('0');
            $table->integer('rating')->default('0');
            $table->string('user_name')->default('unknown');
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
        Schema::dropIfExists('jobratings');
    }
}
