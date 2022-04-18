<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create([
            'name' => 'Yves Engetschwiler',
            'email' => "info@bee-interactive.ch",
            'password' => bcrypt('xx60et11.,-'),
        ]);

        // $this->call(BoardSeeder::class);
        // $this->call(BookmarkSeeder::class);
    }
}
