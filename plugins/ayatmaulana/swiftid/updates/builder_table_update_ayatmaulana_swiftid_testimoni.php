<?php namespace AyatMaulana\Swiftid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAyatmaulanaSwiftidTestimoni extends Migration
{
    public function up()
    {
        Schema::table('ayatmaulana_swiftid_testimoni', function($table)
        {
            $table->dropColumn('picture');
        });
    }
    
    public function down()
    {
        Schema::table('ayatmaulana_swiftid_testimoni', function($table)
        {
            $table->text('picture');
        });
    }
}
