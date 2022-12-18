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
        Schema::create('user_items', function (Blueprint $table) {
            $table->id();
            $table->integer('item_id')->default(0);
            $table->integer('user_id')->default(0);
            $table->integer('equipped')->default(0);
            $table->integer('parent_id')->default(0);
            $table->integer('trying_on')->default(0);
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->integer('deleted_by')->nullable();
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
        Schema::dropIfExists('user_items');
    }
};
