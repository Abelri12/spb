<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbJnprmntnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('tb_jnprmntns', function (Blueprint $table) {
        //     $table->increments('id_jnprmtn');
        //     $table->string('nm_jnprmtn');
        //     $table->string('st_jnprmtn');
        //
        //     $table->foreign('id_prmtn')->reference('id_prmtn')->on('tb_prmtn')->onDelete('CASCADE');
        //     $table->timestamps('creat_at');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_jnprmntns');
    }
}
