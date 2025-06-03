<?php

namespace Tests\Feature;

use App\Models\Keyboard;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class KeyboardDetailTest extends TestCase
{
    use RefreshDatabase;

    public function test_keyboard_detail_page_shows_correct_data()
    {
        $user = User::factory()->create();
        $keyboard = Keyboard::factory()->create([
            'name' => 'Test Keyboard',
            'description' => 'Test description',
            'price' => 99.99,
            'image_url' => 'images/test_keyboard.jpg',
        ]);

        $response = $this->actingAs($user)->get(route('keyboards.show', $keyboard->id));

        $response->assertStatus(200);
        $response->assertSee('Test Keyboard');
        $response->assertSee('Test description');
        $response->assertSee('$ 99.99');
        $response->assertSee('images/test_keyboard.jpg');
    }
}
