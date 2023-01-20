<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Ashish Mainali',
            'email' => 'ashish@admin.com',
            'admin' => 1,
            'profile_image' => '',
            'email_verified_at' => now(),
            'password' => '$2y$10$eyw2kPCKooJxWSz55wNFy.mlPZ7aiL2IwibUvvr58.3/ICnBC5Eli', // password
            'remember_token' => Str::random(10),
        ]);
    }
}
