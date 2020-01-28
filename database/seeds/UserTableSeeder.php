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
        $user->name = 'User';
        $user->email = 'user@sonadztux.dev';
        $user->password = bcrypt('dubidam');
        $user->save();
        $user->roles()->attach(Role::where('name', 'user')->first());

        $admin = new User;
        $admin->name = 'Administrator';
        $admin->email = 'admin@sonadztux.dev';
        $admin->password = bcrypt("admin123");
        $admin->save();
        $admin->roles()->attach(Role::where('name', 'admin')->first());
    }
}
