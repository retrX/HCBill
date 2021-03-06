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
            'ip'=> '127.0.0.1',
            'last_time'=> time(),
            'created_at' => time(),
            'updated_at' => time(),
        ]);
    }
}
