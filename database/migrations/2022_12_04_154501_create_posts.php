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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer("forum_id");
            $table->integer("thread_id");
            $table->mediumText("post_text");
            $table->string("post_author");
            $table->ipAddress('post_author_ip_address');
            $table->integer("post_tipped")->default(0);
            $table->timestamp("post_edit_time")->nullable();
            $table->string("post_edit_reason")->nullable();
            $table->string("post_edit_user")->nullable();
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
        Schema::dropIfExists('posts');
    }
};
