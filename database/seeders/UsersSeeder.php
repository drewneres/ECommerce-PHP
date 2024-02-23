<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Hendrew',
            'last_name' => 'Neres',
            'email' =>  'hendrew@gmaill.com',
            'password' => bcrypt('12345678'),

        ]);
    }
}
