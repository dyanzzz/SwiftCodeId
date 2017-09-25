<?php namespace AyatMaulana\Swiftid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAyatmaulanaSwiftidWhatwedo extends Migration
{
    public function up()
    {
        Schema::create('ayatmaulana_swiftid_whatwedo', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title');
            $table->text('desc');
            $table->text('icon');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ayatmaulana_swiftid_whatwedo');
    }
}
