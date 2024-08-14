<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmailInvitationListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_invitation_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('invitation_id')->nullable();
            $table->string('email')->nullable();
            $table->string('status')->nullable();
            $table->timestamp('read_at')->nullable();
            $table->timestamp('accepted_at')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('email_invitation_lists');
    }
}
