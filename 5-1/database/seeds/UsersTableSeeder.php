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
        DB::table('users')->insert([
            [
                'name' => '丹佑太',
                'email' => 'test1@test.com',
                'password' => bcrypt('testtest1')
            ],
            [
                'name' => '丹宏介',
                'email' => 'test2@test.com',
                'password' => bcrypt('testtest2')
            ],
            [
                'name' => '丹夏実',
                'email' => 'test3@test.com',
                'password' => bcrypt('testtest3')
            ]
        ]);
    }
}
