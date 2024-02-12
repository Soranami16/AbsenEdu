<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('absenform', function (Blueprint $table) {
            $table->id('idForm');
            $table->integer('id_user');
            $table->integer('id_absen');
            $table->string('ketAbsen');
            $table->integer('userApprove');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absenform');
    }
};
