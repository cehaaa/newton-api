<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nisn')->nullable();
            $table->string('nama');
            $table->string('kelas')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('alamat');
            $table->string('telp');
            $table->string('email');
            $table->string('password');
            $table->string('angkatan')->nullable();
            $table->string('status');
            $table->string('aktif');
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
        Schema::dropIfExists('users');
    }
}
