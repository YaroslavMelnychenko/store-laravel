<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'name' => 'Адміністратор Ярослав',
                'email' => 'jaroslav.melnychenko@gmail.com',
                'password' => Hash::make('1234567890'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);

        DB::table('users')->insert([
            [
                'name' => 'Адміністратор Ярослав',
                'email' => 'jaroslav.melnychenko@gmail.com',
                'password' => Hash::make('1234567890'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
