<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocratingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docratings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Lst')->default('0');
            $table->string('Qk')->default('null');
            $table->string('Nqb')->default('0');
            $table->string('Nob')->default('0');
            $table->string('Ncb')->default('0');
            $table->string('Nmsh')->default('0');
            $table->string('Ntch')->default('0');
            $table->string('Nnt')->default('0');
            $table->string('Nut')->default('0');
            $table->float('drating')->default('0');
            $table->string('user_name')->default('unknown');
            $table->timestamps();
            $table->float('Kr1');
            $table->float('Kr2');
            $table->float('Kr3');
            $table->float('Kr4');
            $table->float('Kr5');
            $table->float('Kr6');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docratings');
    }
}
