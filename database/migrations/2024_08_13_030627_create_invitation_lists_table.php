<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvitationListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitation_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('company_category_id')->nullable();
            $table->integer('company_subcategory_id')->nullable();
            $table->string('company_name')->nullable();
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->string('salutation')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('invitation_lists');
    }
}
