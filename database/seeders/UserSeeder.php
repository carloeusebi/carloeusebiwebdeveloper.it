<?php

namespace Database\Seeders;

use App\Models\Dsp\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'email' => 'admin@example.com',
            'password' => password_hash('admin123', PASSWORD_BCRYPT, ['cost' => 12])
        ];
        User::create($user);
    }
}
