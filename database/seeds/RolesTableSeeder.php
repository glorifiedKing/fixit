<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->delete();

        \DB::table('roles')->insert(array (
          0 =>
          array (
              'id' => 1,
              'name' => 'Administrator',
              'guard_name' => 'web',
              'created_at' => '2019-08-14 13:36:17',
              'updated_at' => '2019-08-14 13:36:17',
          ),
          1 =>
          array (
              'id' => 2,
              'name' => 'Professional',
              'guard_name' => 'web',
              'created_at' => '2019-08-14 13:37:27',
              'updated_at' => '2019-08-14 13:37:27',
          ),
          2 =>
          array (
              'id' => 3,
              'name' => 'Vendor',
              'guard_name' => 'web',
              'created_at' => '2019-08-14 13:37:33',
              'updated_at' => '2019-08-14 13:37:33',
          ),
        ));
    }
}
