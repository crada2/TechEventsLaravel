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
           "title"=>'The Ultimate Java Mastery Series',
           "img"=>'https://wi.wallpapertip.com/wsimgs/83-838172_programming-javascript.jpg',
           "text"=>'From Java zero to hero - Master the world’ls most popular coding language',
           "date_time"=>'2021-12-29 01:12:08'
       ]);  
       Event::factory(4)->create();
    }
}
