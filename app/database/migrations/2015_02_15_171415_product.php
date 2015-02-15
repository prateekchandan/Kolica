<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('product_id');
			$table->string('name',400)->nullable();
			$table->text('desc')->nullable();
			$table->string('email', 200)->nullable();
			$table->string('phone', 200)->nullable();
			$table->string('category', 200)->nullable();
			$table->string('sub_category', 200)->nullable();
			$table->string('img', 400)->nullable();
			$table->integer('id')->unsigned();
			$table->timestamps();
			$table->foreign('id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
