<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function($table) {
			$table->increments('id')->unique();
			$table->integer('supplier_id');
			$table->integer('category_id');
			$table->string('title');
			$table->string('subtitle');
			$table->string('summary');
			$table->decimal('headline_price');
			$table->decimal('linerental_price');
			$table->string('description');
			$table->string('promotion_conditions');
			$table->string('url');
			// new fields
			$table->boolean('is_promo');
			$table->string('image_small');
			$table->string('image_medium');
			$table->string('image_large');
			$table->string('data_usage');
			$table->integer('contract_length');
			$table->integer('price_table_id');
			$table->integer('fair_usage_limit'); // optional
			$table->integer('traffic_shaping_id'); // optional. Links to table of different traffic shaping methods. Search Wikipedia for info
			$table->string('broadband_type'); // clarification on terminoligy needed. Ex: Standard BT Line, VDSL, Virgin Line, TalkTalk NGN
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
		Schema::drop('products');
	}

}
