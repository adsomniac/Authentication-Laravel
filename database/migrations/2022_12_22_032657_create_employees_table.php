<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            // $table->id();
            // $table->string('employee_id');
            // $table->string('name');
            // $table->string('ptkp');
            // $table->string('ptk');
            // $table->string('ptk_type');
            // $table->string('departmen');
            // $table->year('graduation_year');
            // $table->enum('gender', ['perempuan', 'laki-laki']);
            // $table->string('ktp_status');
            // $table->string('subject');
            // $table->integer('total_hours');
            // $table->string('educational_certificate');
            // $table->string('workplace');
            // $table->string('stage');
            // $table->string('district');
            // $table->string('area');
            // $table->integer('nikki');
            // $table->string('contract');
            // $table->date('tmt');
            // $table->enum('status', ['active', 'inactive']);
            // $table->year('year_of_contract');
            // $table->date('date_start_kki');
            // $table->timestamps();

            // $table->id();
            // $table->string('name');
            // $table->bigInteger('nip');
            // $table->integer('nrk');
            // $table->string('tempat_lahir');
            // $table->enum('status_kepegawaian', ['Honor Murni' ,'PNS', 'KKI', 'PPPK']);
            // $table->date('tmt_pengangkatan');
            // $table->integer('npsn');
            // $table->string('unit_kerja');
            // $table->string('kecamatan');
            // $table->string('wilayah');
            // $table->integer('usia_pensiun');
            // $table->date('tanggal_pensiun');
            // $table->year('tahun_pensiun');
            // $table->string('keterangan');

            $table->id();
            $table->bigInteger('periode_id');
            $table->bigInteger('nrk');
            $table->string('nama');
            $table->bigInteger('nip');
            $table->bigInteger('nip18');
            $table->string('gol');
            $table->date('tmt_pengangkatan');
            $table->string('eselon');
            $table->string('jabatan');
            $table->date('tmt_cpns');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->bigInteger('masa_kerja');
            $table->string('status_pegawai');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('lokasi_gaji');
            $table->string('skpd');
            $table->string('umur');
            $table->string('kode_jabatan');
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
        Schema::dropIfExists('employees');
    }
};
