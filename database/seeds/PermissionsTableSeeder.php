<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('permissions')->delete();

        \DB::table('permissions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'ViewSystemLogs',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 13:35:58',
                'updated_at' => '2018-11-14 13:35:58',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'ManageSystemBackups',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 13:44:23',
                'updated_at' => '2018-11-14 13:44:23',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'ManagePermissions',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 13:45:07',
                'updated_at' => '2018-11-14 13:45:07',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'ViewUsers',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 14:09:52',
                'updated_at' => '2018-11-14 14:09:52',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'UpdateUsers',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 17:20:56',
                'updated_at' => '2018-11-14 17:20:56',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'DeleteUsers',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 17:21:27',
                'updated_at' => '2018-11-14 17:21:27',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'ViewSchools',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 17:28:02',
                'updated_at' => '2018-11-14 17:28:02',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'CreateSchools',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 17:28:42',
                'updated_at' => '2018-11-14 17:28:42',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'UpdateSchools',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 17:29:12',
                'updated_at' => '2018-11-14 17:29:12',
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'DeleteSchools',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 17:29:45',
                'updated_at' => '2018-11-14 17:29:45',
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'ViewParents',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 17:38:13',
                'updated_at' => '2018-11-14 17:38:13',
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'UpdateParents',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 17:38:42',
                'updated_at' => '2018-11-14 17:38:42',
            ),
            12 =>
            array (
                'id' => 13,
                'name' => 'CreateParents',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 17:39:17',
                'updated_at' => '2018-11-14 17:39:17',
            ),
            13 =>
            array (
                'id' => 14,
                'name' => 'DeleteParents',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 17:40:00',
                'updated_at' => '2018-11-14 17:40:00',
            ),
            14 =>
            array (
                'id' => 15,
                'name' => 'ViewStudents',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 17:47:02',
                'updated_at' => '2018-11-14 17:47:02',
            ),
            15 =>
            array (
                'id' => 16,
                'name' => 'CreateStudents',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 17:47:31',
                'updated_at' => '2018-11-14 17:47:31',
            ),
            16 =>
            array (
                'id' => 17,
                'name' => 'UpdateStudents',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 17:48:14',
                'updated_at' => '2018-11-14 17:48:14',
            ),
            17 =>
            array (
                'id' => 18,
                'name' => 'DeleteStudents',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 17:49:23',
                'updated_at' => '2018-11-14 17:49:23',
            ),
            18 =>
            array (
                'id' => 19,
                'name' => 'ViewMerchants',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 17:55:14',
                'updated_at' => '2018-11-14 17:55:14',
            ),
            19 =>
            array (
                'id' => 20,
                'name' => 'UpdateMerchants',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 18:05:48',
                'updated_at' => '2018-11-14 18:05:48',
            ),
            20 =>
            array (
                'id' => 21,
                'name' => 'CreateMerchants',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 18:06:54',
                'updated_at' => '2018-11-14 18:06:54',
            ),
            21 =>
            array (
                'id' => 22,
                'name' => 'DeleteMerchants',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 18:07:49',
                'updated_at' => '2018-11-14 18:07:49',
            ),
            22 =>
            array (
                'id' => 23,
                'name' => 'ViewWallets',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 18:08:28',
                'updated_at' => '2018-11-14 18:08:28',
            ),
            23 =>
            array (
                'id' => 24,
                'name' => 'CreateWallets',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 18:09:34',
                'updated_at' => '2018-11-14 18:09:34',
            ),
            24 =>
            array (
                'id' => 25,
                'name' => 'UpdateWallets',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 18:10:07',
                'updated_at' => '2018-11-14 18:10:07',
            ),
            25 =>
            array (
                'id' => 26,
                'name' => 'DeleteWallets',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 18:10:44',
                'updated_at' => '2018-11-14 18:10:44',
            ),
            26 =>
            array (
                'id' => 27,
                'name' => 'ViewWalletTransactions',
                'guard_name' => 'web',
                'created_at' => '2018-11-14 18:17:49',
                'updated_at' => '2018-11-14 18:17:49',
            ),
            27 =>
            array (
                'id' => 28,
                'name' => 'CreateWalletTransactions',
                'guard_name' => 'web',
                'created_at' => '2018-11-19 16:48:44',
                'updated_at' => '2018-11-19 16:48:44',
            ),
            28 =>
            array (
                'id' => 29,
                'name' => 'UpdateWalletTransactions',
                'guard_name' => 'web',
                'created_at' => '2018-11-19 16:48:44',
                'updated_at' => '2018-11-19 16:48:44',
            ),
            29 =>
            array (
                'id' => 30,
                'name' => 'DeleteWalletTransactions',
                'guard_name' => 'web',
                'created_at' => '2018-11-19 16:48:44',
                'updated_at' => '2018-11-19 16:48:44',
            ),

            30 =>
            array (
                'id' => 31,
                'name' => 'CreateUsers',
                'guard_name' => 'web',
                'created_at' => '2018-11-19 16:48:44',
                'updated_at' => '2018-11-19 16:48:44',
            ),

        ));


    }
}
