<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('f_name')->nullable();
            $table->string('s_name')->nullable();
            $table->string('email');
            $table->integer('status')->default(0);
            $table->text('reason')->nullable();
            $table->integer('bunch_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('subscribers', function (Blueprint $table) {
            $table->foreign('bunch_id')->references('id')->on('bunches');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscribers');
    }
}
