<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalFinanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('personal_finance', function(Blueprint $table)
		{
		    $table->increments('id');
		    $table->string('title', 3);
		    $table->string('first_name', 60);
		    $table->string('last_name', 60);
		    $table->string('previous_names');
		    $table->date('date_of_birth');
		    $table->string('place_of_birth');
		    $table->string('email', 80);
		    $table->integer('telephone', 18);
		    $table->text('address_line_1', 256);
		    $table->text('address_line_2', 256);
		    $table->string('country', 30);
		    $table->string('parish', 30);
		    $table->string('postcode', 9);
		    $table->boolean('lived_3_years');
		    $table->text('old_address_line_1', 256);
		    $table->text('old_address_line_2', 256);
		    $table->string('old_country', 30);
		    $table->string('old_parish', 30);
		    $table->string('old_postcode', 9);
		    $table->string('employer', 80);
		    $table->boolean('employer_3_years');
		    $table->string('old_employer', 80);
		    $table->text('reason_for_application', 256);
		    $table->boolean('used_payday_3_months');
		    $table->boolean('18_to_70');
		    $table->boolean('fulltime_employment');
		    $table->boolean('fulltime_employment');
		    $table->boolean('3_years_residency');
		    $table->boolean('good_credit_history');
		    $table->boolean('3_months_bank_statements');
		    $table->boolean('agreement_to_terms');
		    $table->decimal('amount', 6, 2);
		    $table->integer('duration', 3);
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
		Schema::drop('personal_finance');
	}

}
