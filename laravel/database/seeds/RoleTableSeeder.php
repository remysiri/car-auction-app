<?php

use Illuminate\Database\Seeder;
use GTImports\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role();
        $role_user->name = 'Gebruiker';
        $role_user->description = 'Een standaard gebruiker';
        $role_user->save();

        $role_admin = new Role();
        $role_admin->name = 'Beheerder';
        $role_admin->description = 'Een beheerder';
        $role_admin->save();

        $role_superadmin = new Role();
        $role_superadmin->name = 'Hoofdbeheerder';
        $role_superadmin->description = 'Een hoofdbeheerder';
        $role_superadmin->save();
    }
}
