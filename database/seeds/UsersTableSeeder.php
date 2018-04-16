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
            'name'=>'admin',
            'email'=>'admin@qq.com',
            'password'=>bcrypt('admin123'),
            'created_at' => time(),
            'updated_at' => time(),
        ]);
    }
}
