<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClasseoomsTable extends Migration {

	public function up()
	{
		Schema::create('classeooms', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('Name_Class');
			$table->bigInteger('Grade_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('classeooms');
	}
}