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
            $table->string("thread_subject");
            $table->text("thread_subject_clean");
            $table->string("tags")->nullable();
            $table->integer("thread_has_poll")->default(0);
            $table->timestamp("last_reply_date");
            $table->string("last_poster_name");
            $table->integer("reply_count")->default(1);
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
