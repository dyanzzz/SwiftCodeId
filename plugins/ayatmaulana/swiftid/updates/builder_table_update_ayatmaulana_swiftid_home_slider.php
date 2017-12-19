<?php namespace AyatMaulana\Swiftid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAyatmaulanaSwiftidHomeSlider extends Migration
{
    public function up()
    {
        Schema::table('ayatmaulana_swiftid_home_slider', function($table)
        {
            $table->text('slider_button');
            $table->string('slider_url');
        });
    }
    
    public function down()
    {
        Schema::table('ayatmaulana_swiftid_home_slider', function($table)
        {
            $table->dropColumn('slider_button');
            $table->dropColumn('slider_url');
        });
    }
}
