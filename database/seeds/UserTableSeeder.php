<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Nanda Arfan Hakim';
        $user->email = 'sonadztux@gmail.com';
        $user->password = bcrypt('k1m0ch1');
        $user->save();
        $user->roles()->attach(Role::where('name', 'user')->first());

        $admin = new User;
        $admin->name = 'Administrator';
        $admin->email = 'nandarfanhakim@gmail.com';
        $admin->password = bcrypt("admin123");
        $admin->save();
        $admin->roles()->attach(Role::where('name', 'admin')->first());
    }
}
