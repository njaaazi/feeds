<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        app()[PermissionRegistrar::class]->forgetCachedPermissions();



        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'unpublish articles']);
        Permission::create(['name' => 'approve users']);


        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'admin']);
        $role1->givePermissionTo('edit articles');
        $role1->givePermissionTo('delete articles');
        $role1->givePermissionTo('publish articles');
        $role1->givePermissionTo('unpublish articles');

        $role2 = Role::create(['name' => 'super-admin']);


        $user = Factory(App\User::class)->create([
            'username' => 'admin',
            'email' => 'njazi@admin.com',
            'password' => Hash::make('njazi123'),
            'approved' => 1,
            'insta_account' => 'njazi',
        ]);
        $user->assignRole($role1);
        $user->profile()->save(new App\Profile);

        $user = Factory(App\User::class)->create([
            'username' => 'superadmin ',
            'email' => 'njazi@superadmin.com',
            'password' => Hash::make('njazi123'),
            'approved' => 1,
            'insta_account' => 'shehu',
        ]);
        $user->assignRole($role2);
        $user->profile()->save(new App\Profile);

    }
}
