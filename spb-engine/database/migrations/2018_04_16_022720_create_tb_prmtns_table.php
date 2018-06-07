<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbPrmtnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('tb_prmtns', function (Blueprint $table) {
        //     $table->increments('id_prmtn');
        //     $table->string('nm_prmtn');
        //     $table->string('divisi');
        //     $table->timestamps('creat_at');
        //     $table->timestamps('update_at');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_prmtns');
    }
}
