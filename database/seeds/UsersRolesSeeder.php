<?php

use Illuminate\Database\Seeder;
use App\User_Role;

class UsersRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user_role = new User_Role();
        $user_role->user_id = 1;
        $user_role->role_id = 1;
        $user_role->save();
        $user_role = new User_Role();
        $user_role->user_id = 2;
        $user_role->role_id = 2;
        $user_role->save();
    }
}
