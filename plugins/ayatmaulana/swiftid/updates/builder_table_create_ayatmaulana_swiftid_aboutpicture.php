<?php namespace AyatMaulana\Swiftid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAyatmaulanaSwiftidAboutpicture extends Migration
{
    public function up()
    {
        Schema::create('ayatmaulana_swiftid_aboutpicture', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ayatmaulana_swiftid_aboutpicture');
    }
}
