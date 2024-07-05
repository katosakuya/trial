<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalculatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('calculators')) {
            Schema::create('calculators', function (Blueprint $table) {
                $table->id();
                $table->string('pokemon',6);
                $table->integer('h');
                $table->integer('a');
                $table->integer('b');
                $table->integer('c');
                $table->integer('d');
                $table->integer('s');
                $table->string('type1',10);
                $table->string('type2',10);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calculators');
    }
}
