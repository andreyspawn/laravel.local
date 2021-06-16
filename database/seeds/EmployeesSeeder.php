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
    const RESOURCES_IMG='/images/';

    public function run()
    {
        DB::statement('ALTER TABLE employees AUTO_INCREMENT = 1;');
        //
        $faker=Faker::create('ru_RU');
        $femail_user='female_user';
        $mail_user='male_user';
        for ($i = 1; $i <= 50; $i++) {
            switch (rand(0,1)) {
                case 0:
                    DB::table('employees')->insert(['last_name' => $faker->lastName('female'),
                    'name' => $faker->firstNameFemale(),
                    'fathers_name' => $faker->middleNameFemale(),
                    'photo'=>self::RESOURCES_IMG.$femail_user.$faker->randomElement([3,4,5,7]).'.jpg',
                    'date_in' => $faker->dateTimeBetween('-5 years'),
                    'birthday'=>$faker->dateTimeBetween('-60 years', '-22 years'),
                    'email' => $faker->email
                        ]);
                case 1:
                    DB::table('employees')->insert(['last_name' => $faker->lastName('male'),
                        'name' => $faker->firstNameMale(),
                        'fathers_name' => $faker->middleNameMale(),
                        'photo'=>self::RESOURCES_IMG.$mail_user.$faker->randomElement([1,2,6,8]).'.jpg',
                        'date_in' => $faker->dateTimeBetween('-5 years'),
                        'birthday'=>$faker->dateTimeBetween('-60 years', '-22 years'),
                        'email' => $faker->email
                    ]);
            }
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
