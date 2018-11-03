<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('name', 'admin')->first();
        $user = factory(User::class, 1)->create([
            'email' => 'admin@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make(24049898)
        ]);
        dump($role, $user);
        $user[0]->assignRole($role);


    }
}
