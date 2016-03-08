<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Expenses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Expenses
        Schema::create('expenses',function(Blueprint $table){
            $table->increments('id');
            $table->string('expense');
            $table->string('edate');
            $table->decimal('amount',5,2);
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
        //
        Sceham::drop('expenses');
    }
}
