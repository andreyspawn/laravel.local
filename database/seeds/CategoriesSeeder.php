<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
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
            DB::table('categories')->insert([
                'title' => $i . 'TitleName '

            ]);
        }

//        $generator = \Faker\Factory::create();
//        $populator = new \Faker\ORM\Propel\Populator($generator);
//        $populator->addEntity('Author', 5);
//        $populator->addEntity('Book', 10);
//        $populator->execute();

    }
}
