<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mobile');
            $table->boolean('mobile_verified')->default(false);
            $table->string('email')->nullable();
            $table->boolean('email_verified')->default(false);
            $table->string('wallet_balance')->default(0);
            $table->string('unpaid_balance')->default(0);
            $table->string('familly_member')->default(0);
            $table->string('order_limit')->default(0);
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('profile_pic')->nullable();
            $table->string('access_token');
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
        Schema::dropIfExists('customers');
    }
}
