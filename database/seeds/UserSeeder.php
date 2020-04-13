<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin Edit User',
            'email' => 'adminedit@webbiskools.com',
            'password' => bcrypt('adminEditPassword'),
            'is_admin' => '1',
            'limited' => '0'
        ]);

        User::create([
            'name' => 'Admin View User',
            'email' => 'adminview@webbiskools.com',
            'password' => bcrypt('adminViewPassword'),
            'is_admin' => '1',
            'limited' => '1'
        ]);

        User::create([
            'name' => 'Restricted User',
            'email' => 'user@webbiskools.com',
            'password' => bcrypt('restrictedPassword'),
            'is_admin' => '0',
            'limited' => '0'
        ]);

    }
}