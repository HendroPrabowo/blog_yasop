<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rutinitas', function (Blueprint $table) {
            $table->text('text')->nullable()->change();
        });
        Schema::table('ekstrakurikuler', function (Blueprint $table) {
            $table->text('text')->nullable()->change();
        });
        Schema::table('minat_bakat', function (Blueprint $table) {
            $table->text('text')->nullable()->change();
        });
        Schema::table('lainnya', function (Blueprint $table) {
            $table->text('text')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
