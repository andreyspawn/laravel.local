<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('ALTER TABLE departments AUTO_INCREMENT = 1;');
        //Внесем корневую фирму
        DB::table('departments')->insert([
            'department_name'=>'Фирма основная',
        ]);
        //insert three sub-departments
        for ($i = 1; $i <= 4; $i++) {
            DB::table('departments')->insert([
                'department_name'=>'Отдел №'.$i,
                'parent_id'=>1
            ]);
        }
        for ($i = 1; $i <= 10; $i++) {
            DB::table('departments')->insert([
                'department_name'=>'Группа №'.$i,
                'parent_id'=>rand(2,4)
            ]);
        }
    }
}
