<?php namespace AyatMaulana\Swiftid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAyatmaulanaSwiftidAboutdesc extends Migration
{
    public function up()
    {
        Schema::create('ayatmaulana_swiftid_aboutdesc', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('desc');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ayatmaulana_swiftid_aboutdesc');
    }
}
