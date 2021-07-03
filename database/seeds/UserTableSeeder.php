<?php

use Illuminate\Database\Seeder;
use App\User;
use App\role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::truncate();
       DB::table('role_user')->truncate();


       $admin = User::create([
           'name'=>'admin',
           'email'=>'admin@admin.com',
           'password'=>Hash::make('password')
       ]);


      $President= User::create([
        'name'=>'President',
        'email'=>'President@President.com',
        'password'=>Hash::make('password')
       ]);

       $chef_personnel = User::create([
        'name'=>'chef_personnel',
        'email'=>'chef_personnel@chef_personnel.com',
        'password'=>Hash::make('password')
         ]);

         $admin_role = role::where('name','admin')->first();
         $President_role = role::where('name','President')->first();
         $chef_personnel_role = role::where('name','chef_personnel')->first();

         $admin->roles()->attach($admin_role);
         $President->roles()->attach($President_role);
         $chef_personnel->roles()->attach($chef_personnel_role);

    }
}
