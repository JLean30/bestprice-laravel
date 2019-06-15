<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use App\Profile;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   
        $role_admin = Role::where('name', 'admin')->first();
        $user = new User();
        $profile = new Profile();
        $user->name = 'Admin';
        $user->lastName = 'admin';
        $user->email = 'admin@example.com';
        $user->username = 'admin';
        $user->phone = '64411050';
        $user->password =  Hash::make('admin');
        $user->location = 'Puntarenas';
        $user->save();
        $user->roles()->attach($role_admin);
        $profile->user_id = $user->id;
        $profile->image = 'default.png';
        $profile->description = 'Aquí va una descripcion';
        $profile->save();

        
        
   
    }
}
