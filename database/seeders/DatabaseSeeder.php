<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Event;
use App\Models\Friend;
use App\Models\Review;
use App\Models\TypeEvent;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Test',
            'email'=>'test@test.fr',
            'password'=>Hash::make('12345678'),
            'age' => 18,
        ]);
        User::factory(50)->create();
        Category::factory(50)->create();
        Friend::factory(50)->create();
        TypeEvent::factory(30)->create();
        Event::factory(40)->create();
        Review::factory(100)->create();
    }
}
