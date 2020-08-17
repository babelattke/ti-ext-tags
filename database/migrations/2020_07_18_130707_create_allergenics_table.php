<?php

namespace Yak0d3\Allergenics\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllergenicsTable extends Migration
{
    public function up()
    {
        Schema::create('yak0d3_allergenics_allergenics', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('icon');
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('yak0d3_allergenics_allergenics');
    }
}
