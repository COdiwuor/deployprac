<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('fees',function (Blueprint $table){
            $table->increments('id');
            $table->string('student_number');
            $table->string('full_name');
            $table->date('date_of_birth');
            $table->string('address');
            $table->date('date_of_payment');
            $table->float('amount');
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
         Schema::dropIfExists('fees');
    }
}
