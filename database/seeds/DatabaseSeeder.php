<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            EmployeesSeeder::class,
            DepartmentsSeeder::class,
            PositionsSeeder::class,
            EmpForDepSeeder::class,
            EmpPosSeeder::class,
            RolesSeeder::class,
            UsersSeeder::class,
            UsersRolesSeeder::class,
            AclResourcesSeeder::class,
            AclRolesSeeder::class
        ]);
    }
}
