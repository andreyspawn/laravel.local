<?php

use Illuminate\Database\Seeder;

class AclRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('acl_roles')->insert([
            'role_id' => 1,
            'acl_id' => 1,
        ]);
        DB::table('acl_roles')->insert([
            'role_id' => 1,
            'acl_id' => 2,
        ]);
        DB::table('acl_roles')->insert([
            'role_id' => 1,
            'acl_id' => 3,
        ]);
        DB::table('acl_roles')->insert([
            'role_id' => 1,
            'acl_id' => 4,
        ]);
        DB::table('acl_roles')->insert([
            'role_id' => 2,
            'acl_id' => 1,
        ]);
        DB::table('acl_roles')->insert([
            'role_id' => 2,
            'acl_id' => 3,
        ]);
    }
}
