<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name'       => ('Julio Castillo'),
            'phone'      => ('04146782876'),
            'email'      => ('castillovox@hotmail.com'),
            'password'   => bcrypt('1234'),
            'role'		 => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
        	'name'       => ('Imanol'),
            'phone'      => ('+34607339080'),
            'email'      => ('info@canofotosports.com'),
            'password'   => bcrypt('1234'),
            'role'		 => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
        	'name'       => ('Jorymar'),
            'phone'      => ('04246865372'),
            'email'      => ('jorymarcardenas@gmail.com'),
            'password'   => bcrypt('1234'),
            'role'		 => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
