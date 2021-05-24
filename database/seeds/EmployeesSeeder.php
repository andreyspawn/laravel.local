<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker=Faker::create('ru_RU');
        for ($i = 1; $i <= 100; $i++) {
            DB::table('employees')->insert([
                'last_name' => $faker->lastName('male'),
                'name' => $faker->firstNameMale(),
                'fathers_name' => $faker->middleNameMale(),
                'date_in' => $faker->date('Y-m-d'),
                'email' => $faker->email
                //'tag' => rand(1, 10) . 'TagName ' . Str::random(6)

            ]);
        }
    }
}

//    protected $fillable=[
//        'last_name',
//        'name',
//        'fathers_name',
//        'date_in',
//        'email',
//        'photo'
//    ];
