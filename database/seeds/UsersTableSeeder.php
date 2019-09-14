<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder {

    public function run() {

        DB::table('users')->truncate();

        App\User::create([
            'name'     => 'sahar',
            'email'    => 'saharkr@kth.se',
            'password' => '739525'
        ]);


        App\User::create([
            'name'     => 'foo',
            'email'    => 'foo@bar.com',
            'password' => Hash::make('123456')
        ]);

    }

}