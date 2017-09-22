<?php namespace AyatMaulana\Swiftid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAyatmaulanaSwiftidHomeSlider extends Migration
{
    public function up()
    {
        Schema::create('ayatmaulana_swiftid_home_slider', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('slider_title');
            $table->text('slider_desc');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ayatmaulana_swiftid_home_slider');
    }
}
