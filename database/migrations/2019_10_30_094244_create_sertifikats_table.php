<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSertifikatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sertifikats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomor_sertifikat');
            $table->enum('jenis_anggota',['Peserta', 'Pemateri'])->default('Peserta');
            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('id_kegiatan')->unsigned();
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
        Schema::dropIfExists('sertifikats');
    }
}
