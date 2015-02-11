<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDropsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('drops', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('slug');
            $table->string('name', 32);
            $table->string('email');
            $table->text('text');
            $table->boolean('activated')->default(0);
            $table->integer('category_id')->unsigned();
            $table->timestamp('activated_at')->nullable();
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
		Schema::drop('drops');
	}

}
