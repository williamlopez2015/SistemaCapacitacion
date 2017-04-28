<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB:: table('users')->insert(array(
            'name' =>'Estrategico',
            'email'=>'estrategico@gmail.com',
            'password'=>\Hash::make('estrategico'),
            'type'=>'estrategico',
        	));

        \DB:: table('users')->insert(array(
            'name' =>'Tactico',
            'email'=>'tactico@gmail.com',
            'password'=>\Hash::make('tactico'),
            'type'=>'tactico',
        	));

        \DB:: table('users')->insert(array(
            'name' =>'Administrador del Sistema',
            'email'=>'admin@gmail.com',
            'password'=>\Hash::make('admin'),
            'type'=>'adminsist',
        	));
    }
}
