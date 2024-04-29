<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClientReview;
use Illuminate\Support\Facades\File;
use Faker\Factory as Fake;

class ClientReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClientReview::factory(2)->create();

        $json_data = File::get('database/json/ClientReview.json');

        $data = collect(json_decode($json_data));

        $data->each(function($val) {
            // print_r($val);
            ClientReview::create([
                "clientName" => $val->clientName,
                "projectType" => $val->projectType,
                "review" => $val->review,
                "image" => $val->image,
                "rating" => $val->rating,
                "isActive" => $val->isActive
            ]);         //Used to insert only one value
        });

        // ClientReview::insert($data);            // Used to insert multple at once
    }
}
