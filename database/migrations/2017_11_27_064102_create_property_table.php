<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    protected $filable =['path'];
    public function up()
    {
        Schema::create('Property', function (Blueprint $table) {

            $table->increments('id');
            $table->string('title') ->nullable();

//            $table->integer('location') ->nullable();
//            $table->string('city') ->nullable();



            $table->string('slug')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('society_id')->nullable();
            $table->integer('phase_id')->nullable();
            $table->integer('block_id')->nullable();
            $table->string('address') ->nullable();





            $table->tinyInteger('status') ->default('0');
            $table->tinyInteger('hot') ->default('0');
            $table->tinyInteger('superhot') ->default('0');




                        $table->integer("user_id")->unsigned();


            $table->string('purpose') ->nullable();
            $table->tinyInteger('ad_status') ->default('1');
            $table->string('property_type') ->nullable();
            $table->longText('description') ->nullable();

            $table->double('price') ->nullable();


            $table->string('unit_type') ->nullable();
            $table->string('unit_size') ->nullable();

            $table->string('position') ->nullable();

            $table->longText('body') ->nullable();
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
        Schema::dropIfExists('Property');
    }
}
