<?php

namespace Database\Seeders;
use\App\Models\Listing;
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
        //  \App\Models\User::factory(10)->create();
        $user =User::factory()->create([
            'name'=> 'tamil',
            'email'=>'t.rajamoney@gmail.com'
        ]);
    

//     Listing::factory(6)->create();
 }
}