<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('title',200);
            $table->string('nation',200);
            $table->string('city',200);
            $table->string('address',200);  
            $table->smallInteger('number_people')->unsigned(); 
            $table->tinyInteger('rooms')->unsigned(); 
            $table->string('type');  
            $table->text('description');
            $table->tinyInteger('is_available')->unsigned()->default(1); 
            $table->float('price', 10, 2);  
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
        Schema::dropIfExists('trips');
    }
}
