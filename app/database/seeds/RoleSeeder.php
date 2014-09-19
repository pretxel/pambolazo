<?php
class RoleTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();

        Role::create(array('role' => 'Empleado'));
    }

}