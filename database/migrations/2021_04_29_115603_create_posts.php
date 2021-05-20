<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CreatePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //здесь пересоздам мои сущности!!!!
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table -> string('image');
            $table->text('content');
            $table->integer('category_id')->nullable();
            $table->integer('user_id')->default(1);
            $table->date('date')->default(Carbon::now());
            $table->integer('views')->default(0);
            $table->integer('is_featured')->default(0);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
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
}
