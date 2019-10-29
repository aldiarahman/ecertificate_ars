<?php

use Illuminate\Database\Seeder;
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
        $role_user = Role::where('name','user')->first();
        $role_admin = Role::where('name','admin')->first();

        $user = new User();
        $user->name = 'User Dummy';
        $user->email = 'user@dummy.com';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->roles()->attach($role_user);

        $admin = new User();
        $admin->name = 'admin Dummy';
        $admin->email = 'admin@dummy.com';
        $admin->password = bcrypt('12345678');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
