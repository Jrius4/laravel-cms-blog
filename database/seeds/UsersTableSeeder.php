<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

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
        $faker=Factory::create();

        DB::table('users')->insert([
            [
                'name'=>"Kazibwe Julius Junior",
                'slug'=>"kazibwe-julius-junior",
                'email'=>"kazibwejuliusjunior@gmail.com",
                'password'=>bcrypt('secret'),
                'bio'=>$faker->text(rand(250,300))
            ],
            [
                'name'=>"Jjuuko Henry",
                'slug'=>"jjuuko-henry",
                'email'=>"jh1@gmail.com",
                'password'=>bcrypt('secret'),
                'bio'=>$faker->text(rand(250,300))
            ],
            [
                'name'=>"Male Paul",
                'slug'=>"male-paul",
                'email'=>"mp1@gmail.com",
                'password'=>bcrypt('secret'),
                'bio'=>$faker->text(rand(250,300))
            ],
            [
                'name'=>"Kamya Moses",
                'slug'=>"kamya-moses",
                'email'=>"km1@gmail.com",
                'password'=>bcrypt('secret'),
                'bio'=>$faker->text(rand(250,300))
            ]
        ]);
    }
}
