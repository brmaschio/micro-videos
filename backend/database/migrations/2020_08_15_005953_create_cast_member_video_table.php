<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCastMemberVideoTable extends Migration
{

    public function up()
    {
        Schema::create('cast_member_video', function (Blueprint $table) {
            $table->uuid('cast_member_id')->index();
            $table->foreign('cast_member_id')->references('id')->on('cast_members');
            $table->uuid('video_id')->index();
            $table->foreign('video_id')->references('id')->on('videos');
            $table->unique(['video_id','cast_member_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('cast_member_video');
    }
}
