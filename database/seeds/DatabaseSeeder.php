<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'root@gmail.com',
            'type' => config('const.admin'),
            'password' => password_hash('root1234', PASSWORD_DEFAULT),
        ]);
    }
}
