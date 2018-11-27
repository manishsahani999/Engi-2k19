<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Manish',
            'email'     => 'mani00manu@gmail.com',
            'password'  => bcrypt('manish.s19')
        ]);
    }
}
