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
        Schema::create('forums', function (Blueprint $table) {
            $table->id();
            $table->integer("category_id");
            $table->string("forum_name")->unique();
            $table->string("forum_name_clean");
            $table->integer("forum_parents")->default(0);
            $table->text("forum_description");
            $table->integer("forum_topic_count")->default(0);
            $table->integer("forum_post_count")->default(0);
            $table->integer("forum_subforum_count")->default(0);
            $table->integer("forum_thread_count")->default(0);
            $table->integer("forum_can_earn_currency")->default(1);
            $table->integer("forum_currency_bonus_ammount")->default(1);
            $table->integer('forum_status')->default(1);
            $table->integer('forum_type')->default(1);
            $table->text("forum_rules")->nullable();
            $table->string("forum_rules_link")->nullable();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
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
        Schema::dropIfExists('forums');
    }
};
