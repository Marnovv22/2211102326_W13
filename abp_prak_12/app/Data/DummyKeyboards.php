<?php

namespace App\Data;

class DummyKeyboards
{
    public static function all()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Neo75 Cu',
                'description' => 'A simple mechanical keyboard with tactile feedback.',
                'price' => 240.00,
                'image_url' => 'https://mechaland.id/cdn/shop/files/IMG_6516_400x.jpg?v=1730636833',
            ],
            [
                'id' => 2,
                'name' => 'MW Sogurt R2',
                'description' => 'A wireless keyboard with long battery life.',
                'price' => 100.00,
                'image_url' => 'https://mechaland.id/cdn/shop/files/sj2_0001_400x.jpg?v=1736252668',
            ],
            [
                'id' => 3,
                'name' => 'GoMaster Salmon: Reborn R2',
                'description' => 'A compact keyboard perfect for small desks.',
                'price' => 150.00,
                'image_url' => 'https://mechaland.id/cdn/shop/files/00_pJdJruk_400x.jpg?v=1730339685',
            ],
        ];
        return array_map(function($item) {
            return (object) $item;
        }, $data);
    }

    public static function find($id)
    {
        $keyboards = self::all();
        foreach ($keyboards as $keyboard) {
            if ($keyboard->id == $id) {
                return $keyboard;
            }
        }
        return null;
    }
}
