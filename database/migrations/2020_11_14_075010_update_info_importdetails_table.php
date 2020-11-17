<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateInfoImportdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('importdetails', function (Blueprint $table) {
            $table->foreign('idImport')
                ->references('id')
                ->on('imports')
                ->onDelete('cascade');

            $table->foreign('idProduct')
                ->references('id')
                ->on('products')
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
        Schema::table('importdetails', function (Blueprint $table) {
            //
        });
    }
}
