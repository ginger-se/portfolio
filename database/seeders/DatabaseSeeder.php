<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $project = Project::create([
            'name' => 'Stocks',
            'link' => '/stocks',
            'imgLink' => 'resources/imgs/image.png',
            'description' => 'Look up company names and symbol information',
        ]);

    }
}
