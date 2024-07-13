<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void {
		Schema::create('adverts', function (Blueprint $table) {
			$table->id('id');
			$table->string('title')->unique();
			$table->string('slug')->nullable();
			$table->longText('body');
			$table->date('deadline');
			$table->string('status')->nullable();
			$table->string('location');
			$table->string('sector');
			$table->string('education_level')->nullable();
			$table->string('desired_experience')->nullable();
			$table->string('contract_type')->nullable();
			$table->integer('number_of_positions')->nullable();
			$table->unsignedBigInteger('company_id')->nullable();
			$table->foreign('company_id', 'company_fk_9835230')->references('id')->on('companies');
			$table->unsignedBigInteger('category_id')->nullable();
			$table->foreign('category_id', 'category_fk_9843612')->references('id')->on('categories');
			$table->unsignedBigInteger('created_by_id')->nullable();
			$table->foreign('created_by_id', 'created_by_fk_9835245')->references('id')->on('users');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void {
		Schema::dropIfExists('adverts');
	}
};
