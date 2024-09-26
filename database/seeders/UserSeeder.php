<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'viktor piper';
        $user->email = 'viktor@jeronimo.com';
        $user->password = bcrypt('1242453219');

        $user->save();
        $user = new User();
        $user->name = 'viktor afaer';
        $user->email = 'vikto424r@jeronimo.com';
        $user->password = bcrypt('124fsa3219');

        $user->save();

        User::factory(10)->create();


    }
}
