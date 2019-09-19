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
            'id' => 1,
            'parent_service_id' => 1,
            'name' => 'Land Valuation',
            'created_at' => '2019-08-14 13:36:17',
            'updated_at' => '2019-08-14 13:36:17',
        ),
        3 =>
        array (
            'id' => 1,
            'parent_service_id' => 1,
            'name' => 'Permitts and Approvals',
            'created_at' => '2019-08-14 13:36:17',
            'updated_at' => '2019-08-14 13:36:17',
        ),
        1 =>
        array (
            'id' => 2,
            'parent_service_id' => 1,
            'name' => 'Cost Estimation/Quantity Surveying',
            'created_at' => '2019-08-14 13:36:17',
            'updated_at' => '2019-08-14 13:36:17',
        ),
        2 =>
        array (
            'id' => 1,
            'parent_service_id' => 1,
            'name' => 'Land Valuation',
            'created_at' => '2019-08-14 13:36:17',
            'updated_at' => '2019-08-14 13:36:17',
        ),
        3 =>
        array (
            'id' => 1,
            'parent_service_id' => 1,
            'name' => 'Cost Estimation/Quantity Surveying',
            'created_at' => '2019-08-14 13:36:17',
            'updated_at' => '2019-08-14 13:36:17',
        ),
      ));
    }
}
