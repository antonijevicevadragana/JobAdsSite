<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Dragana',
            'email' => 'antonijevicd.1991@gmail.com',
        ]);


        Listing::create([
        'title' =>'Laravel Senior Developer',
        'tags'=>'laravel, javascript',
        'company'=>'Acme Copr',
        'location'=> 'Boston MA',
        'email'=>'email1@gmail.com',
        'website'=>'https"//www.acme.com',
        'description'=>'Opis posla neki'
     ]);

     Listing::create([
        'title' =>'Laravel Junior Developer',
        'tags'=>'laravel, php',
        'company'=>'Acme Copr',
        'location'=> 'Boston MA',
        'email'=>'email1@gmail.com',
        'website'=>'https"//www.acme.com',
        'description'=>'Opis posla neki'
     ]);
    }
}
