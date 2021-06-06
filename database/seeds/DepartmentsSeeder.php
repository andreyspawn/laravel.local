<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Department;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create('ru_RU');

        //set ID to 1 because it's incremental field
        DB::statement('ALTER TABLE departments AUTO_INCREMENT = 1;');
        //Внесем корневую фирму
        DB::table('departments')->insert([
            'department_name'=>'Фирма основная',
            'position_id'=>1
        ]);
        //insert three sub-departments
        for ($i = 1; $i <= 4; $i++) {
            DB::table('departments')->insert([
                'department_name'=>'Отдел №'.$i,
                'parent_id'=>1,
                'position_id'=>4
            ]);
        }
        for ($i = 1; $i <= 10; $i++) {
            DB::table('departments')->insert([
                'department_name'=>'Группа №'.$i,
                'parent_id'=>rand(2,4),
                'position_id'=>5
            ]);
        }

        //handle chief departments
        $count = DB::table('departments')->max('id');
        for ($i =1 ; $i<=$count;$i++) {
            $emp_id = $faker->unique()->numberBetween(1,100);
            $pos = Department::all()->find($i);
            DB::table('departments')->where('id',$i)->update([
                'chief_id'=>$emp_id
            ]);
            DB::table('employees')->where('id',$emp_id)->update([
                'id_department'=>$i,
                'id_position'=> $pos->position_id
            ]);

        }
    }
}
