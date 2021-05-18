<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagazinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magazines', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('coverphoto');
            $table->string('volumeno');
            $table->string('mpublishyear');
            $table->string('epublishyear');
            $table->string('content');
            $table->string('article');
            $table->timestamps();
        });

    }

    /**cv@vacjobsearch.com
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('magazines');
    }
}
