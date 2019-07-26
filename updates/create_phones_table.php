<?php namespace Amorphine\Relationissue\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePhonesTable extends Migration
{
    public function up()
    {
        Schema::create('amorphine_relationissue_phones', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('number');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('amorphine_relationissue_phones');
    }
}
