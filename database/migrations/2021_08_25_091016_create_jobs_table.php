<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->nullable()->onDelete('cascade');
            $table->foreignId('approved_user_id')->nullable()->onDelete('cascade');
            $table->foreignId('category_id')->nullable()->onDelete('cascade');
            $table->string('title');
            $table->string('employment_status')->nullable();
            $table->string('address')->nullable();
            $table->string('salary')->nullable();
            $table->text('working_hour')->nullable();
            $table->text('requirement')->nullable();
            $table->text('contact_information')->nullable();
            $table->boolean('approve_status')->default(0);
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
        Schema::dropIfExists('jobs');
    }
}
