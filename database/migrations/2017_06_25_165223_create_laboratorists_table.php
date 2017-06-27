<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaboratoristsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('laboratorists', function(Blueprint $table)
        {
            $table->increments('id');


$table->string('name');
$table->string('email');
$table->text('address');
$table->string('phone');

$table->string('sexe');
$table->string('image');
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
        Schema::drop('laboratorists');
    }
}
