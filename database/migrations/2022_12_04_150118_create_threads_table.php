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
        Schema::create('threads', function (Blueprint $table) {
            $table->id();
            $table->integer("forum_id");
            $table->integer("thread_status")->default(0);
            $table->integer("thread_stuck")->default(0);
            $table->integer("thread_locked")->default(0);
            $table->integer("thread_announced")->default(0);
            $table->integer("thread_moved")->default(0);
            $table->string("thread_author");
            $table->char("thread_subject", 80);
            $table->text("thread_subject_clean");
            $table->integer("thread_has_poll")->default(0);
            $table->timestamp("last_reply_date");
            $table->integer("last_poster_id");
            $table->integer("reply_count")->default(1);
            $table->string('poll_title')->nullable();
            $table->string('poll_length')->nullable();
            $table->integer('poll_start')->nullable();
            $table->integer('poll_vote_change')->nullable();
            $table->integer('poll_last_vote')->nullable();

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
        Schema::dropIfExists('threads');
    }
};
