<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date')->nullable();
            $table->string('linkt')->nullable();
            $table->string('heading')->nullable();
            $table->text('details')->nullable();
            $table->string('img')->nullable();
            $table->string('mmenu')->nullable();
            $table->string('subMenu')->nullable();
            $table->string('home')->nullable();
            $table->string('head')->nullable();
            $table->string('slide')->nullable();
            $table->string('lhead')->nullable();
            $table->string('popular')->nullable();
            $table->string('verti')->nullable();
            $table->string('rname')->nullable();
            $table->string('desi')->nullable();
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
        Schema::dropIfExists('news');
    }
}
