<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = \Spatie\Permission\Models\Permission::all();
        $role = factory(Role::class, 1)->create();
        $role[0]->syncPermissions($permissions);
    }
}
