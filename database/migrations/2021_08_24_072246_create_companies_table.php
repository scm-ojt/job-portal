<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_type')->nullable();
            $table->string('logo')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('address')->nullable();
            $table->integer('no_of_employee')->nullable();
            $table->text('history')->nullable();
            $table->text('description')->nullable();
            $table->text('contact_information')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
