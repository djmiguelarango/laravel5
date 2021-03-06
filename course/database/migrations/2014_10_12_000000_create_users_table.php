<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name', 20);
			$table->string('last_name', 20);
			$table->string('full_name', 40);
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->enum('type', ['admin', 'user', 'editor', 'contributor', 'subscriber']);
			$table->boolean('active')->default(true);
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
