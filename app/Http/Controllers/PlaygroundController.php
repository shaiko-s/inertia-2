<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PlaygroundController extends Controller
{
    public function index()
    {
        return Inertia::render('Play/Index');
    }
    public function index1(Request $request)
    {
        return Inertia::render('Play/Index1', [
            'message' => 'Hello Worlds!',
            'request' => $request,
            'menu' => [
                'home' => route('play'),
                'contacts' => route('play1'),
            ]
        ]);
    }
}
