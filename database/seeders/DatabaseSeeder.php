<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

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

       Event::factory()->create([
           "title"=>'The Ultimate Full-stack JavaScript Developer Bundle',
           "img"=>'https://wi.wallpapertip.com/wsimgs/83-838172_programming-javascript.jpg',
           "text"=>'Master all the JavaScript skills you need to land a full-stack developer job',
           "date"=>'31st December 2021 20:00h'
       ]);
       Event::factory(4)->create();
    }
}
