<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = new Role();
        $roles->title = 'admin';
        $roles->save();
        $roles = new Role();
        $roles->title = 'guest';
        $roles->save();
        //
    }
}
