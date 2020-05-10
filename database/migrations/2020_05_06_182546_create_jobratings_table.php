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
            $table->string('disl')->default('1');
            $table->float('npipl')->default('0');
            $table->float('nfabc')->default('0');
            $table->float('nfbc')->default('0');
            $table->float('nab_c')->default('0');
            $table->float('nfgps')->default('0');
            $table->float('nfvr')->default('0');
            $table->float('npvr')->default('0');
            $table->float('nfpara')->default('0');
            $table->float('nppara')->default('0');
            $table->float('nffeld')->default('0');
            $table->float('npfeld')->default('0');
            $table->float('stv5_7')->default('0');
            $table->float('stv5_7_2')->default('0');
            $table->float('stv7_10')->default('0');
            $table->float('stv7_10_1')->default('0');
            $table->float('stv10')->default('0');
            $table->float('stv10_pr')->default('0');
            $table->float('stf5_7')->default('0');
            $table->float('stf5_7_2')->default('0');
            $table->float('stf7_10')->default('0');
            $table->float('stf7_10_1')->default('0');
            $table->float('stf10')->default('0');
            $table->float('stf10_pr')->default('0');
            $table->float('t11')->default('0');
            $table->float('t12')->default('0');
            $table->float('t21')->default('0');
            $table->float('t22')->default('0');
            $table->float('nfv')->default('0');
            $table->float('nv')->default('0');
            $table->float('nfav')->default('0');
            $table->float('nfl0')->default('0');
            $table->float('nfl1')->default('0');
            $table->float('nfpv')->default('0');
            $table->float('nop')->default('0');
            $table->float('npr')->default('0');
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
