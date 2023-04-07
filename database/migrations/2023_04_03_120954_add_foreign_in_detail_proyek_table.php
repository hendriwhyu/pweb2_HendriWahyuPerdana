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
        Schema::table('detail_proyek', function (Blueprint $table) {
            $table->UnsignedmediumInteger('id_proyek')->length(8)->after('id_detailproyek');
            $table->UnsignedmediumInteger('id_kontraktor')->length(8)->after('id_proyek');
            $table->foreign('id_proyek')->references('id_proyek')->on('proyek');
            $table->foreign('id_kontraktor')->references('id_kontraktor')->on('kontraktor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_proyek', function (Blueprint $table) {
            // Dropping a foreign key constraint
            $table->dropForeign(['id_proyek']);

            // Dropping a column
            $table->dropColumn(['id_proyek']);
        });
    }
};
