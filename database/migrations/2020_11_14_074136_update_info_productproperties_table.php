<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateInfoProductpropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productproperties', function (Blueprint $table) {
            $table->foreign('idProduct')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');
        });
        Schema::table('productproperties', function (Blueprint $table) {
            $table->foreign('idProperty')
                ->references('id')
                ->on('properties')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productproperties', function (Blueprint $table) {
            //
        });
    }
}
