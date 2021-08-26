<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Hash;
class User_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'=>'Dhaval',
            'email'=>'Dhaval9131@gmail.com',
            'password'=>Hash::make('12345')


        ]);
    }
}
