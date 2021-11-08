<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user1 = User::create([
            'name'          => 'Agent',
            'email'         => 'agent@gmail.com',
            'password'      => bcrypt('secret'),
            'role'          => '1',
        ]);

        $user2 = User::create([
            'name'          => 'Client',
            'email'         => 'client@gmail.com',
            'password'      => bcrypt('secret'),
            'role'          => '2',
        ]);
    }
}
