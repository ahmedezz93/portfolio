<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->delete();

        User::create([
            "name"=>"superAdmin",
            "email"=>"admin@gmail.com",
            'type'=>'superadmin',
            "password"=>bcrypt('123456789'),
        ]);
    }
}
