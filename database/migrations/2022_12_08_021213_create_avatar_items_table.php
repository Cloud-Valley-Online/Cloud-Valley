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
        Schema::create('avatar_items', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->string('item_image');
            $table->string('item_thumb');
            $table->integer('item_special_type')->default(0);
            $table->enum('item_type', ['common', 'uncommon', 'rare', 'legendary', 'special'])->default('common');
            $table->integer('item_composite')->default(0);
            $table->integer('item_layer_id');
            $table->integer('tab');
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
        Schema::dropIfExists('avatar_items');
    }
};
