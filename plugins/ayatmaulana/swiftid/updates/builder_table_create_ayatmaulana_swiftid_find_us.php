<?php namespace AyatMaulana\Swiftid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAyatmaulanaSwiftidFindUs extends Migration
{
    public function up()
    {
        Schema::create('ayatmaulana_swiftid_find_us', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('url');
            $table->text('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ayatmaulana_swiftid_find_us');
    }
}
