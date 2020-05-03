<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User;
        $user->name = 'test';
        $user->email = 'test@test.pl';
        $user->password = bcrypt('12345678');
        $user->save();
    }
}
