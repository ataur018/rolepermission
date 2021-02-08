<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email','sojibmahin01878@gmail.com')->first();
        if(is_null($user)){
            $user =  new User();
            $user->name = "Sojib Mahin";
            $user->email = "sojibmahin01878@gmail.com";
            $user->password = Hash::make('123456789');
            $user->save();
        }
    }
}
