<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_karyawan');
            $table->string('status_karyawan');
            $table->string('foto_karyawan');
            $table->string('alamat_karyawan');
            $table->string('email_karyawan');
            $table->string('divisi');
            $table->date('tanggal_masuk');
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
        Schema::dropIfExists('employies');
    }
}
