<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            [
                'id' => 7007,
                'name' => 'Pial Kanti Samadder',
                'email' => 'pialkanti@ngsolutionsys.com',
                'password' => '1234'

            ],
            [
                'id' => 7008,
                'name' => 'Md. Awon-Uz-Zaman',
                'email' => 'awonuzzaman@ngsolutionsys.com',
                'password' => '1234'

            ]
        ));
    }
}
