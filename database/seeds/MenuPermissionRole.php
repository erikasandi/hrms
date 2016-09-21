<?php

use Illuminate\Database\Seeder;

class MenuPermissionRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::create([
            'id'    => 1,
            'name'  => 'Pasha Mahardika',
            'email' => 'me@pashamahardika.com',
            'password'  => bcrypt('secret')
        ]);

        $role = \Spatie\Permission\Models\Role::create([
            'name'  => 'Administrator'
        ]);

        $user->assignRole($role->name);

        $permissions = [
            ['id' => 1, 'name' => 'setting'],
            ['id' => 2, 'name' => 'add.menu'],
            ['id' => 3, 'name' => 'edit.menu'],
            ['id' => 4, 'name' => 'delete.menu'],
            ['id' => 5, 'name' => 'add.permission'],
            ['id' => 6, 'name' => 'edit.permission'],
            ['id' => 7, 'name' => 'delete.permission'],
        ];
        foreach ($permissions as $permission) {
            \Spatie\Permission\Models\Permission::create([
                'id'    => $permission['id'],
                'name'  => $permission['name']
            ]);
            $role->givePermissionTo($permission['name']);
        }



    }
}
