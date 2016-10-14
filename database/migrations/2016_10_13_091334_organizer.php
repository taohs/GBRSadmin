<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Organizer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizer', function (Blueprint $table) {
            $table->increments('id');
            $table->string("username")->index();
            $table->string("name")->index();
            $table->string("tiny_name");
            $table->string("title");
            $table->string("tiny_title");
            $table->string("big_title");
            $table->string("address");
            $table->string('email')->index();
            $table->timestamp('created_at')->nullable();
        });

        //
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
