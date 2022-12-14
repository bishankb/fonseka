<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('secret'),
                'remember_token' => Str::random(10)
            ]
        );

        User::create(
            [
                'name'           => 'Bishank Badgami',
                'email'          => 'bishank1993@gmail.com',
                'password'       => bcrypt('bishank123'),
                'remember_token' => Str::random(10)
            ]
        );
    }
}
