<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::factory([
            'email' => 'admin@admin.com',
            'name' => 'Admin',
            'isAdmin' => true
        ])->create();

        $user = User::factory([
            'email' => 'paquitalacantaora@gmail.com',
            'name' => 'Paquita',
        ])->create();

      User::factory(4)->create();

      Event::factory()->create([
           "title"=>'The Ultimate Java Mastery Series',
           "img"=>'https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/https://www.filepicker.io/api/file/t12BZqmRoulvCTDhoYie',
           "text"=>'From Java zero to hero - Master the world’ls most popular coding language',
           "date_time"=>'2021-12-29 01:12:08',
           "user_id" =>'1'
       ]);
       Event::factory(4)->create();
    }
}
