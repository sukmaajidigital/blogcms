<?php

namespace Database\Seeders;

use App\Models\Landing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LandingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Landing::create([
            'title' => 'Welcome to Our Website',
            'subtitle' => 'Experience the Best',
            'description' => 'Discover the amazing features we offer to make your life easier.',
        ]);
    }
}
