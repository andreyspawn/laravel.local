<?php

use Illuminate\Database\Seeder;
use App\Position;

class PositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('ALTER TABLE positions AUTO_INCREMENT = 1;');
        $positions_name = [
            'Директор' => 1000,
            'Заместитель директора' => 700,
            'Бухгалтер' => 600,
            'Начальник отдела'=> 600,
            'Руководитель группы'=>500,
            'Дизайнер'=>400,
            'Разработчик'=>450,
            'Тестировщик'=>400,];

        foreach ($positions_name as $pos=>$salary) {
            $position = new Position();
            $position->position_name = $pos;
            $position->salary = $salary;
            $position->save();
        }
    }
}
