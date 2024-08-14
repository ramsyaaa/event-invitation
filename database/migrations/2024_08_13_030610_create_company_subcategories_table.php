<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanySubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_subcategories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('company_category_id')->nullable();
            $table->string('subcategory_name')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('company_subcategories');
    }
}
