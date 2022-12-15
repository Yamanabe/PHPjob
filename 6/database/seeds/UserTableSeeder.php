<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * データベース初期値設定の実行
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [
            'name' => Str::random(10),
            'email' => Str::random(10).'@a',
            'password' => bcrypt('password'),
        ],
        [
            'name' => Str::random(10),
            'email' => Str::random(10).'@a',
            'password' => bcrypt('password'),
        ],
        [
            'name' => Str::random(10),
            'email' => Str::random(10).'@a',
            'password' => bcrypt('password'),
        ],
        ]);
    }
}