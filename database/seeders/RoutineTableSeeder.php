<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Routine;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Routine::create(
            [
                'creative_work' => 5,
                'quality_score' => -2,
                'notes'         => "Good Day",
                'user_id'       => 1,
                'created_at'    => '2022-08-03 12:22:34'
            ]
        );

        Routine::create(
            [
                'creative_work' => 12,
                'quality_score' => 2,
                'notes'         => "Good Day",
                'user_id'       => 1,
                'created_at'    => '2022-08-04 16:22:34'
            ]
        );

        Routine::create(
            [
                'creative_work' => 18,
                'quality_score' => +1,
                'notes'         => "Bad Day",
                'user_id'       => 1,
                'created_at'    => '2022-08-05 11:22:34'
            ]
        );

        Routine::create(
            [
                'creative_work' => 7,
                'quality_score' => -2,
                'notes'         => "Good Day",
                'user_id'       => 1,
                'created_at'    => '2021-08-05 10:22:34'
            ]
        );

        Routine::create(
            [
                'creative_work' => 5,
                'quality_score' => +1,
                'notes'         => "Good Day",
                'user_id'       => 2,
                'created_at'    => '2022-08-03 13:22:34'
            ]
        );

        Routine::create(
            [
                'creative_work' => 4,
                'quality_score' => -2,
                'notes'         => "Good Day",
                'user_id'       => 2,
                'created_at'    => '2022-08-04 16:22:34'
            ]
        );

        Routine::create(
            [
                'creative_work' => 6,
                'quality_score' => +2,
                'notes'         => "Good Day",
                'user_id'       => 2,
                'created_at'    => '2022-08-05 17:22:34'
            ]
        );

        Routine::create(
            [
                'creative_work' => 4,
                'quality_score' => 0,
                'notes'         => "Good Day",
                'user_id'       => 2,
                'created_at'    => '2022-08-07 22:22:34'
            ]
        );
    }
}
