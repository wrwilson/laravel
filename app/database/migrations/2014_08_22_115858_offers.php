<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Offers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('offers', function($table) {
			$table->increments('id')->unique();
			$table->integer('supplier-id');
			$table->integer('category-id');
			$table->string('title');
			$table->string('subtitle');
			$table->string('summary');
			$table->decimal('headline-price');
			$table->decimal('linerental-price');
			$table->string('description');
			$table->string('promotion-conditions');
			$table->string('url');
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
		Schema::drop('offers');
	}

}
