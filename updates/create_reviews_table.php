<?php namespace Amorphine\Relationissue\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateGuestBooksTable extends Migration
{
    public function up()
    {
        Schema::create('amorphine_relationissue_reviews', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('reason');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('amorphine_relationissue_users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('amorphine_relationissue_reviews');
    }
}
