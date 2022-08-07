<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Metric;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Metric::create(
            [
                'name'        => 'Angry',
                'description' => 'How many times you were angry?',
                'user_id'     => 1,
            ]
        );

        Metric::create(
            [
                'name'        => 'Happy',
                'description' => 'How many times you were happy?',
                'user_id'     => 1,
            ]
        );

        Metric::create(
            [
                'name'        => 'Sad',
                'description' => 'How many times you were sad?',
                'user_id'     => 1,
            ]
        );

        Metric::create(
            [
                'name'        => 'Angry',
                'description' => 'How many times you were angry?',
                'user_id'     => 2,
            ]
        );

        Metric::create(
            [
                'name'        => 'Cool',
                'description' => 'How many times you were cool?',
                'user_id'     => 2,
            ]
        );
    }
}
