<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //  Schema::create('test_table', function (Blueprint $table) {
        //     $table->id();            
        //     $table->string('pole_test1')->nullable();
        //     $table->string('pole_test2')->nullable();
        //     $table->string('pole_test3')->nullable();
        //     $table->string('pole_test4')->nullable();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('test_table');
    }
}
