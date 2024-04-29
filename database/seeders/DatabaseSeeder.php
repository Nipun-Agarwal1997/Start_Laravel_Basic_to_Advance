<?php

namespace Database\Seeders;

use App\Models\ClientReview;
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
        $this->call([
            ClientReviewSeeder::class
        ]);

        // ClientReview::factory(2)->create();
         
        // \App\Models\User::factory(10)->create();
    }
}
