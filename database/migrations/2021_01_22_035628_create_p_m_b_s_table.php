<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePMBSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_m_b_s', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->string("jenisKelamin");
            $table->string("alamat");
            $table->string("noTelp");
            $table->string("email");
            $table->string("password");
            $table->string("tempat");
            $table->date("tanggalLahir");
            $table->string("asalSekolah");
            $table->string("kota");
            $table->string("jurusan");
            $table->string("ijazah");
            $table->string("rapor");
            $table->string("suratPernyataan");
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
        Schema::dropIfExists('p_m_b_s');
    }
}
