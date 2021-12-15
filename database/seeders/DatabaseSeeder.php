<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Lukastajic',
            'email' => 'lukastajic@gmail.com',
            'password' => Hash::make('testtest'),
        ]);

        for($i = 0; $i < 10; $i++){
            \App\Models\Fact::create(
                [
                    'title' => 'Title: '.$i.Str::random(10),
                    'description' => Str::random(50),
                    'category_id' => 1,
                    'status_id' => 1,
                    'user_id' => null,
                    'guest_id' => null,
                ]
            );
        }
    }
}
