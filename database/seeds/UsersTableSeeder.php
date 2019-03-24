<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //reset the users table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        //generate 4 users/author
        DB::table('users')->insert([
            [
                'name'=>"Kazibwe Julius Junior",
                'email'=>"kazibwejuliusjunior@gmail.com",
                'password'=>bcrypt('secret')
            ],
            [
                'name'=>"Jjuuko Henry",
                'email'=>"jh1@gmail.com",
                'password'=>bcrypt('secret')
            ],
            [
                'name'=>"Male Paul",
                'email'=>"mp1@gmail.com",
                'password'=>bcrypt('secret')
            ],
            [
                'name'=>"Kamya Moses",
                'email'=>"km1@gmail.com",
                'password'=>bcrypt('secret')
            ]
        ]);
    }
}
