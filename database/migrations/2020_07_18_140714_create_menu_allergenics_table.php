<?php

namespace Yak0d3\Allergenics\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuAllergenicsTable extends Migration
{
    public function up()
    {
        Schema::create('yak0d3_allergenics_menu_allergenics', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('menu_id')->unsigned()->index();
            $table->integer('allergenic_id')->unsigned()->index();
        });
    }

    public function down()
    {
        Schema::dropIfExists('yak0d3_allergenics_menu_allergenics');
    }
}
