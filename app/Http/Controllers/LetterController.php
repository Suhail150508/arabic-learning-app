<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use Illuminate\Http\Request;

class LetterController extends Controller
{
    public function index(Request $request)
    {
        return view('welcome');
    }
    
    public function alphabet(Letter $letter)
    {
        return view('alphabet', ['letters' => $letter]); 
    }
    
    public function lessonOne(Request $request)
    {
        return view('alphabet');
    }

    public function apiList(Request $request)
    {
        $perPage = (int) ($request->query('per_page', 6));
        $letters = Letter::orderBy('sort_order')->paginate($perPage);
        return response()->json([
            'page' => $letters->currentPage(),
            'per_page' => $letters->perPage(),
            'total' => $letters->total(),
            'data' => $letters->items(),
        ]);
    }

    public function show(Letter $letter)
    {
        return view('letters.show', ['letter' => $letter]);
    }

    public function apiShow(Letter $letter)
    {
        return response()->json($letter);
    }

    public function harakat(Letter $letter, string $type)
    {
        $valid = ['plain','fatha','kasra','damma'];
        abort_unless(in_array($type, $valid, true), 404);
        return view('letters.harakat', [
            'letter' => $letter,
            'type' => $type,
        ]);
    }
}
