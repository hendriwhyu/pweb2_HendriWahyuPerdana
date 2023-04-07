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
        Schema::create('detail_proyek', function (Blueprint $table) {
            $table->mediumIncrements('id_detailproyek');
            $table->date('tanggal_proyek');
            $table->date('target_proyek');
            $table->string('budget',50);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_proyek');
    }
};
