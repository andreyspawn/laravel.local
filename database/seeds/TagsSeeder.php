<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

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
        $faker =Faker::create('ru_RU');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('tags')->insert([
                'tag'=>$faker->word()
                //'tag' => rand(1, 10) . 'TagName ' . Str::random(6)

            ]);
        }
    }
}
