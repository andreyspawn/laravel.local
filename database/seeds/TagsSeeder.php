<?php

use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
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
            DB::table('tags')->insert([
                'tag' => rand(1, 10) . 'TagName ' . Str::random(6)

            ]);
        }
    }
}
