<?php

use Illuminate\Database\Seeder;

class ServiceCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('service_categories')->delete();

      \DB::table('service_categories')->insert(array (
        0 =>
        array (
            'id' => 1,
            'name' => 'Pre-construction Services',
            'created_at' => '2019-08-14 13:36:17',
            'updated_at' => '2019-08-14 13:36:17',
        ),
        1 =>
        array (
            'id' => 2,
            'name' => 'Construction Management Services',
            'created_at' => '2019-08-14 13:37:27',
            'updated_at' => '2019-08-14 13:37:27',
        ),
        2 =>
        array (
            'id' => 3,
            'name' => 'Construction Building Services',
            'created_at' => '2019-08-14 13:37:33',
            'updated_at' => '2019-08-14 13:37:33',
        ),
        3 =>
        array (
            'id' => 4,
            'name' => 'Post Construction Services',
            'created_at' => '2019-08-14 13:37:33',
            'updated_at' => '2019-08-14 13:37:33',
        ),
      ));
    }
}
