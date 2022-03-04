<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!User::where('email' , 'iamklaus01@gmail.com')->first()){
            $user = new User([
                'name' => 'Klaus BOSEL',
                'email' => 'iamklaus01@gmail.com',
                'password' => Hash::make('iamklaus01'),
                'profile' => 'admin'
            ]);
            $user->save();
        }
    }
}
