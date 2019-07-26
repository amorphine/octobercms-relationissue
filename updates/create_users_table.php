<?php namespace Amorphine\Relationissue\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('amorphine_relationissue_users', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->integer('phone_id')->unsigned();
            $table->foreign('phone_id')->references('id')->on('amorphine_relationissue_phones');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('amorphine_relationissue_users');
    }
}
