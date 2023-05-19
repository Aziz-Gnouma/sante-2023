<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'=>'Admin',
            'email'=>'HealthHub@iset.com',
            'password'=>bcrypt('HealthHub@iset.com'),
            'profile' => 'user.avif'
        ]);

        $user = User::create([
            'name'=>'IEEE',
            'email'=>'Ieee@iset.com',
            'password'=>bcrypt('password')
        ]);


        $admin_role = Role::create(['name' => 'admin']);
        $user_role = Role::create(['name' => 'user']);

        $permission = Permission::create(['name' => 'Evenement access']);
        $permission = Permission::create(['name' => 'Evenement edit']);
        $permission = Permission::create(['name' => 'Evenement create']);
        $permission = Permission::create(['name' => 'Evenement delete']);

        $permission = Permission::create(['name' => 'Role access']);
        $permission = Permission::create(['name' => 'Role edit']);
        $permission = Permission::create(['name' => 'Role create']);
        $permission = Permission::create(['name' => 'Role delete']);

        $permission = Permission::create(['name' => 'User access']);
        $permission = Permission::create(['name' => 'User edit']);
        $permission = Permission::create(['name' => 'User create']);
        $permission = Permission::create(['name' => 'User delete']);

        $permission = Permission::create(['name' => 'Permission access']);
        $permission = Permission::create(['name' => 'Permission edit']);
        $permission = Permission::create(['name' => 'Permission create']);
        $permission = Permission::create(['name' => 'Permission delete']);

        $permission = Permission::create(['name' => 'Mail access']);
        $permission = Permission::create(['name' => 'Mail edit']);



        $admin->assignRole($admin_role);
        $user->assignRole($user_role);


        $admin_role->givePermissionTo(Permission::all());
    }
}
