<?php

use App\Models\Siswa;
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
        Schema::create('pelanggarans', function (Blueprint $table) {
            $table->id();
            $table->string("kode_pelanggaran")->unique();
            $table->string("nama_pelanggaran");
            $table->date("tanggal");
            $table->bigInteger('siswa_id')->unsigned();
            $table->timestamps();

            $table->foreign('siswa_id')->references('id')->on('siswas')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggarans');
    }
};
