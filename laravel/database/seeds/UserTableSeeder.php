<?php

use Illuminate\Database\Seeder;
use GTImports\Role;
use GTImports\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'Gebruiker')->first();
        $role_admin = Role::where('name', 'Beheerder')->first();
        $role_superadmin = Role::where('name', 'Hoofdbeheerder')->first();

        $gebruiker = new User();
        $gebruiker->name = 'Gebruiker';
        $gebruiker->lastname = 'Naam';
        $gebruiker->street = 'Gebruikers straat';
        $gebruiker->postcode = '0000';
        $gebruiker->city = 'Gebruiker';
        $gebruiker->country = 'Gebruiker';
        $gebruiker->gender = 'Male';
        $gebruiker->email = 'gebruiker@example.com';
        $gebruiker->username = 'testgebruiker';
        $gebruiker->password = bcrypt('secret');
        $gebruiker->save();
        $gebruiker->roles()->attach($role_user);

        $beheerder = new User();
        $beheerder->name = 'Beheerder';
        $beheerder->lastname = 'Naam';
        $beheerder->street = 'Beheerder straat';
        $beheerder->postcode = '0000';
        $beheerder->city = 'Beheerder';
        $beheerder->country = 'Beheerder';
        $beheerder->gender = 'Male';
        $beheerder->email = 'beheerder@example.com';
        $beheerder->username = 'testbeheerder';
        $beheerder->password = bcrypt('secret');
        $beheerder->save();
        $beheerder->roles()->attach($role_admin);

        $hoofdbeheerder = new User();
        $hoofdbeheerder->name = 'Hoofdbeheerder';
        $hoofdbeheerder->lastname = 'Naam';
        $hoofdbeheerder->street = 'Beheerder straat';
        $hoofdbeheerder->postcode = '0000';
        $hoofdbeheerder->city = 'Beheerder';
        $hoofdbeheerder->country = 'Beheerder';
        $hoofdbeheerder->gender = 'Male';
        $hoofdbeheerder->email = 'hoofdbeheerder@example.com';
        $hoofdbeheerder->username = 'Superadmin';
        $hoofdbeheerder->password = bcrypt('secret');
        $hoofdbeheerder->save();
        $hoofdbeheerder->roles()->attach($role_superadmin);
    }
}
