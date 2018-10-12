<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaboratoriumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratoriums', function (Blueprint $table) {
            $table->increments('id');
             $table->string('pilih');
             $table->string('no_registrasi');
            $table->string('no_order');
            $table->date('tgl_order');
            $table->date('tgl_sampling');
            $table->string('perujuk');
            $table->string('parameter');
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
        Schema::dropIfExists('laboratoriums');
    }
}
