<?php

use Illuminate\Database\Seeder;

class ServiceSubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('service_sub_categories')->delete();

      \DB::table('service_sub_categories')->insert(array (
        //start with pre construction services
        0 =>
        array (
            'id' => 1,
            'parent_service_id' => 1,
            'name' => 'Land Surveying',
            'created_at' => '2019-08-14 13:36:17',
            'updated_at' => '2019-08-14 13:36:17',
        ),
        1 =>
        array (
            'id' => 2,
            'parent_service_id' => 1,
            'name' => 'Architectural Design',
            'created_at' => '2019-08-14 13:36:17',
            'updated_at' => '2019-08-14 13:36:17',
        ),
        2 =>
        array (
            'id' => 3,
            'parent_service_id' => 1,
            'name' => 'Structural Engineering Design',
            'created_at' => '2019-08-14 13:36:17',
            'updated_at' => '2019-08-14 13:36:17',
        ),
        3 =>
        array (
            'id' => 4,
            'parent_service_id' => 1,
            'name' => 'Electrical Engineering Design',
            'created_at' => '2019-08-14 13:36:17',
            'updated_at' => '2019-08-14 13:36:17',
        ),
        4 =>
        array (
            'id' => 5,
            'parent_service_id' => 1,
            'name' => 'Mechanical Engineering Design',
            'created_at' => '2019-08-14 13:36:17',
            'updated_at' => '2019-08-14 13:36:17',
        ),
        5 =>
        array (
            'id' => 6,
            'parent_service_id' => 1,
            'name' => 'Physical Planning Services',
            'created_at' => '2019-08-14 13:36:17',
            'updated_at' => '2019-08-14 13:36:17',
        ),
        6 =>
        array (
            'id' => 7,
            'parent_service_id' => 1,
            'name' => 'Land Valuation',
            'created_at' => '2019-08-14 13:36:17',
            'updated_at' => '2019-08-14 13:36:17',
        ),
        7 =>
        array (
            'id' => 8,
            'parent_service_id' => 1,
            'name' => 'Permitts and Approvals',
            'created_at' => '2019-08-14 13:36:17',
            'updated_at' => '2019-08-14 13:36:17',
        ),
        8 =>
        array (
            'id' => 9,
            'parent_service_id' => 1,
            'name' => 'Cost Estimation/Quantity Surveying',
            'created_at' => '2019-08-14 13:36:17',
            'updated_at' => '2019-08-14 13:36:17',
        ),
        9 =>
        array (
            'id' => 10,
            'parent_service_id' => 1,
            'name' => 'Land Purchase/Acquisition',
            'created_at' => '2019-08-14 13:36:17',
            'updated_at' => '2019-08-14 13:36:17',
        ),
        // construction management
        10 =>
        array (
            'id' => 11,
            'parent_service_id' => 2,
            'name' => 'Project Management',
            'created_at' => '2019-08-14 13:36:17',
            'updated_at' => '2019-08-14 13:36:17',
        ),
        11 =>
        array (
            'id' => 12,
            'parent_service_id' => 2,
            'name' => 'Construction Project Management',
            'created_at' => '2019-08-14 13:36:17',
            'updated_at' => '2019-08-14 13:36:17',
        ),
        //building services
        12 =>
        array (
            'id' => 13,
            'parent_service_id' => 3,
            'name' => 'Site Engineering Services',
            'created_at' => '2019-08-14 13:36:17',
            'updated_at' => '2019-08-14 13:36:17',
        ),
        13 =>
        array (
            'id' => 14,
            'parent_service_id' => 3,
            'name' => 'Civil Engineering Works',
            'created_at' => '2019-08-14 13:36:17',
            'updated_at' => '2019-08-14 13:36:17',
        ),
        14 =>
        array (
            'id' => 15,
            'parent_service_id' => 3,
            'name' => 'Electrical Installation works',
            'created_at' => '2019-08-14 13:36:17',
            'updated_at' => '2019-08-14 13:36:17',
        ),
        15 =>
        array (
            'id' => 16,
            'parent_service_id' => 3,
            'name' => 'Plumbing Services',
            'created_at' => '2019-08-14 13:36:17',
            'updated_at' => '2019-08-14 13:36:17',
        ),
        16 =>
        array (
            'id' => 17,
            'parent_service_id' => 3,
            'name' => 'Landscaping Services',
            'created_at' => '2019-08-14 13:36:17',
            'updated_at' => '2019-08-14 13:36:17',
        ),
        // post construction services
        17 =>
        array (
            'id' => 18,
            'parent_service_id' => 4,
            'name' => 'Fumigation',
            'created_at' => '2019-08-14 13:36:17',
            'updated_at' => '2019-08-14 13:36:17',
        ),
        18 =>
        array (
            'id' => 19,
            'parent_service_id' => 4,
            'name' => 'Gabage Collection',
            'created_at' => '2019-08-14 13:36:17',
            'updated_at' => '2019-08-14 13:36:17',
        ),
      ));
    }
}
