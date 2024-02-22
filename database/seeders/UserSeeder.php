<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
   
    public function run(): void
    {
       DB::table("users")->insert([
            [
                "name"=> "admin",
                "email"=> "admin@gamil.com",
                "password"=> bcrypt("12345678"),
                "role"=>"admin"
            ],
            [
                "name"=> "vendor",
                "email"=> "vendor@gmail.com",
                "password"=> bcrypt("12345678"),
                "role"=> "vendor"
            ],
            [
                "name"=> "customer",
                "email"=> "customer@gmail.com",
                "password"=> bcrypt("12345678"),
                "role"=> "customer"
            ]
       ]);
    }
}
