<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->ipAddress('ip_address');
            $table->bigInteger('currency');
            $table->bigInteger('currency_premium');
            $table->integer('account_status');
            $table->integer("can_trade")->default(1);
            $table->string("avatar_path");
            $table->integer('posts')->default(0);
            $table->integer('items_owned')->default(0);
            $table->integer('flare_equipped')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
