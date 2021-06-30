<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AclResourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('acl_resources')->insert([
            'acl_name' => 'admin.about',
        ]);
        DB::table('acl_resources')->insert([
            'acl_name' => 'admin.employee.index',
        ]);
        DB::table('acl_resources')->insert([
            'acl_name' => 'admin.department.indexList',
        ]);
        DB::table('acl_resources')->insert([
            'acl_name' => 'admin.position.index',
        ]);

    }
}
