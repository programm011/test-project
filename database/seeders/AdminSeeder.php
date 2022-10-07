<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $admin = [
            'username' => 'admin',
            'password' => '123456',
        ];

        /**
         * @var $user User
         */
        $user = User::query()->create($admin);

        $user->assignRole('admin');
    }
}
