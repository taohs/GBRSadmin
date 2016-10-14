<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminPossport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('admin_passport', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->index();
            $table->string('password', 60)->index();
            $table->string('token')->index();
            $table->integer('update_times');
            $table->timestamps->nullable();
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
        Schema::drop('admin_passport');
    }
}
