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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $usersCount = (int)$this->command->ask('How many users do you need ? Default : ', 10);
        $linksCount = (int)$this->command->ask('How many links do you need ? Default : ', 5);
        \App\Models\User::factory()
            ->count($usersCount)
            ->has(\App\Models\Link::factory()->count($linksCount))
            ->create();
        $this->command->info('Users Created!');
        $this->command->info('Users Links Added!');
    }
}
