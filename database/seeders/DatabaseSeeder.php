<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Nelson Robles',
            'email' => 'nelsonroblesv+dev@gmail.com',
            'password' => Hash::make('iamwao'),
            'phone' => '9962211095',
            'birthday' => '1988-03-20'
        ]);
    }
}
