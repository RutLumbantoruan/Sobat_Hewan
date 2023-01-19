<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdopsisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adopsis', function (Blueprint $table) {
            $table->id();
            $table->integer('donasi_id');
            $table->integer('user_id');
            $table->longText('lokasi');
            $table->longText('alasan');
            $table->enum('st',['Pending','Deny','Accept']);
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
        Schema::dropIfExists('adopsis');
    }
}
