<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFasilitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('akomodasi', function (Blueprint $table) {
            $table->text('text')->nullable()->change();
        });
        Schema::table('belajar', function (Blueprint $table) {
            $table->text('text')->nullable()->change();
        });
        Schema::table('praktikum', function (Blueprint $table) {
            $table->text('text')->nullable()->change();
        });
        Schema::table('kesehatan', function (Blueprint $table) {
            $table->text('text')->nullable()->change();
        });
        Schema::table('it', function (Blueprint $table) {
            $table->text('text')->nullable()->change();
        });
        Schema::table('olahraga', function (Blueprint $table) {
            $table->text('text')->nullable()->change();
        });
        Schema::table('sosial', function (Blueprint $table) {
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
