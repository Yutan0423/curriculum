<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'user_id' => 1,
                'body' => 'hoge1'
            ],
            [
                'user_id' => 2,
                'body' => 'hoge1'
            ],
            [
                'user_id' => 3,
                'body' => 'hoge3'
            ]
        ]);
    }
}
