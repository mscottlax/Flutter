<?php
/**
 * Created by PhpStorm.
 * User: matt.scott
 * Date: 7/14/2014
 * Time: 10:19 AM
 */

class UsersTableSeeder extends Seeder {
    public function run() {
        User::create(array(
            array('username' =>'admin','password' => Hash::make('admin'), 'first_name' =>'Matthew', 'last_name' =>'Scott', 'is_admin' =>true, 'email' =>'matt.scott@sebomarketing.com' )
        ));

        User::create(array(
            array('username' =>'one','password' => Hash::make('one'), 'first_name' =>'Mike', 'last_name' =>'Jones', 'is_admin' =>false)
        ));
    }
}