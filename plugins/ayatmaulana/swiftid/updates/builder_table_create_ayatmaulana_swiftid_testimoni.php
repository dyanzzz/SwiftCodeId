<?php namespace AyatMaulana\Swiftid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAyatmaulanaSwiftidTestimoni extends Migration
{
    public function up()
    {
        Schema::create('ayatmaulana_swiftid_testimoni', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('testimoni');
            $table->string('name');
            $table->string('position');
            $table->text('picture');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ayatmaulana_swiftid_testimoni');
    }
}
