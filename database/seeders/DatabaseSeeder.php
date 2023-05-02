<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Samuel Situmeang',
            'email' => 'samuel@situmeang.org',
            'password' => bcrypt(value: '12345678')
        ]);

        \App\Models\User::factory(10)->create();

        \App\Models\Property::factory(50)->create();
    }
}
