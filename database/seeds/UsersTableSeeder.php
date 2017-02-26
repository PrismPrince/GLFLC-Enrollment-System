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
            'name'      => 'Admin',
            'email'      => 'admin@glflc.com',
            'password'   => bcrypt('123456'),
            'created_at' => '2017-1-1',
            'updated_at' => '2017-1-1',
    ]);
    }
}
