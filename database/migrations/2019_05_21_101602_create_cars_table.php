<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brand');
            $table->string('model');
            $table->Integer('displace');
            $table->Integer('max-speed');
            $table->timestamps();
        });

        DB::table('cars')->insert(
          [
           'brand' => 'Ford',
           'model' => 'Fiesta',
           'displace' => 451,
           'max-speed' => 220

         ]);

         DB::table('cars')->insert(
           [
            'brand' => 'Fiat',
            'model' => 'punto',
            'displace' => 542,
            'max-speed' => 200

          ]);
          DB::table('cars')->insert(
            [
             'brand' => 'Opel',
             'model' => 'corsa',
             'displace' => 744,
             'max-speed' => 250

           ]);
           DB::table('cars')->insert(
             [
              'brand' => 'fiat',
              'model' => 'scudo',
              'displace' => 253,
              'max-speed' => 200

            ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
