<?php

namespace Database\Seeders;
use App\Models\Actor;
use App\Models\Genre;
use App\Models\Salle;
use App\Models\Film;
use App\Models\Chairs;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Actor::create(['name' => 'Mostafa']);
        Actor::create(['name' => 'Youssef']);
        Genre::create(['name' => 'Horror']);
        Genre::create(['name' => 'Action']);
        Salle::create(['name' => 'salle1']);
        Salle::create(['name' => 'sall2']);
        Chairs::create(['seatNumber' => 1,
                        'salle_id' =>1 ]);
        Film::create([
            'name' => 'Film 1',
            'hour' => '8:00',
            'genre_id' => 1, 
            'actor_id' => 1, 
            'salle_id' => 1,
        ]);
    
    }
}
