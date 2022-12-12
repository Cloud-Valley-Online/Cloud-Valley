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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->integer('group_type')->nullable();
            $table->integer('group_founder_manage')->default(0);
            $table->string('group_name');
            $table->text('group_desc');
            $table->integer('group_display')->default(1);
            $table->integer('group_rank')->default(0);
            $table->string('group_color')->nullable();
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
        Schema::dropIfExists('groups');
    }
};
