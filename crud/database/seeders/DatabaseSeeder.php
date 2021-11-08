<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\Measurement;

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
        $client = Client::factory()->create([
            'phone'=>6354113482
        ]);
        $measurement = Measurement::factory(5)->create([
            'client_id'=>$client->id
        ]);
    }
}
