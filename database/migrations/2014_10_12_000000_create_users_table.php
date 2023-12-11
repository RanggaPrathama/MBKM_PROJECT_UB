<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('name');

            $table->string('file_cv')->nullable();
            $table->string('file_ktp')->nullable();
            $table->string('file_kk')->nullable();
            $table->string('surat_pengantar')->nullable();
            $table->string('jenis_kelamin');
            $table->date('tgl_lahir');
            $table->string('tempat_kelahiran');
            $table->string('agama');
            $table->string('nim_nik')->unique();
            $table->tinyInteger('role')->default(0);
            $table->string('perguruan_tinggi');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
