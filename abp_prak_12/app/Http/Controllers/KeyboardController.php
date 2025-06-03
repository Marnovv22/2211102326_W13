<?php

namespace App\Http\Controllers;

use App\Models\Keyboard;
use App\Data\DummyKeyboards;
use Illuminate\Http\Request;

class KeyboardController extends Controller
{
    public function index()
    {
        // Use dummy data instead of database
        $keyboards = DummyKeyboards::all();
        return view('keyboards.index', compact('keyboards'));
    }

    public function show($id)
    {
        $keyboard = DummyKeyboards::find($id);
        if (!$keyboard) {
            abort(404);
        }
        return view('keyboards.show', compact('keyboard'));
    }
}
