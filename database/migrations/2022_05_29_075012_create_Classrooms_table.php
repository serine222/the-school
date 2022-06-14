<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClassroomsTable extends Migration {

	public function up()
	{
		Schema::create('Classrooms', function(Blueprint $table) {
<<<<<<< HEAD

            $table->id();
=======
			$table->id();
>>>>>>> 28eda57 (Students_Promotions_managemen)
			$table->string('Name_Class');
			$table->bigInteger('Grade_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Classrooms');
	}
}