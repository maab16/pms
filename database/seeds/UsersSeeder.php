<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_role = Role::where('slug','admin')->first();
        $admin = new User;
        $admin->first_name = "Md Abu Ahsan";
        $admin->last_name = "Basir";
        $admin->email = "maab.tips@gmail.com";
        $admin->password = Hash::make("123456");
        $admin->active = 1;
        $admin->save();
        $admin->role()->attach($admin_role,['created_at'=>now(),'updated_at'=>now()]);
        // $admin->role()->updateExistingPivot($admin_role, ['created_at'=>now(),'updated_at'=>now()]);
    }
}
