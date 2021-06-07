<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Employee;
use Faker\Factory as Faker;

class EmpForDepSeeder extends Seeder
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
        $emps = Employee::all();
        foreach ($emps as $emp) {
            if (is_null($emp->department_id)) {
                $emp->department_id = $faker->numberBetween(6,15);
                $emp->save();
            }
        }
    }
}
