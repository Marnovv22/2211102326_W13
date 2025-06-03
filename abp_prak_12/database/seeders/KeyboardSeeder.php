<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Keyboard;

class KeyboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Keyboard::create([
            'name' => 'Basic Mechanical Keyboard',
            'description' => 'A simple mechanical keyboard with tactile feedback.',
            'price' => 49.99,
            'image_url' => 'https://via.placeholder.com/200x150?text=Mechanical+Keyboard',
        ]);

        Keyboard::create([
            'name' => 'Wireless Keyboard',
            'description' => 'A wireless keyboard with long battery life.',
            'price' => 59.99,
            'image_url' => 'https://via.placeholder.com/200x150?text=Wireless+Keyboard',
        ]);

        Keyboard::create([
            'name' => 'Compact Keyboard',
            'description' => 'A compact keyboard perfect for small desks.',
            'price' => 39.99,
            'image_url' => 'https://via.placeholder.com/200x150?text=Compact+Keyboard',
        ]);
    }
}
