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
        $user = new \App\User();
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->status = false;
        $user->password = \Illuminate\Support\Facades\Hash::make('123456');
        $user->save();

        $user = new \App\User();
        $user->name = 'dieu';
        $user->email = 'dieu@gmail.com';
        $user->status = false;
        $user->password = \Illuminate\Support\Facades\Hash::make('123456');
        $user->save();
    }
}
