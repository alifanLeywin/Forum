<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users =  [

            ['name'=>'admin','email'=>'admin111@gmail.com','usertype'=>'admin','password'=>Hash::make('pol098890')],

        ];
        DB::table('users')->insert($users); 
    }
}
