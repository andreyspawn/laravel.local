<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1; $i <= 10; $i++) {
            DB::table('posts')->insert([
                'title'=>'Title '.Str::random(6),
                'image'=>"images/author.png",
                'content'=>'Content '.Str::random(6),
                'category_id'=>rand(1,10),

            ]);
        }

    }
}

//$table->id();
//$table->string('title',100);
//$table -> string('image');
//$table->text('content');
//$table->integer('category_id')->nullable();
//$table->integer('user_id')->nullable();
//$table->date('date')->nullable();
//$table->integer('views')->default(0);
//$table->integer('is_featured')->default(0);
//$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
//$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
