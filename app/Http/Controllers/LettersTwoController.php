<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use App\Models\LettersTwo;
use Illuminate\Http\Request;

class LettersTwoController extends Controller
{
    public function index(LettersTwo $letter)
    {
        return view('letters_two.show', ['letter' => $letter]);
    }

    public function apiList(Request $request)
    {
        $perPage = (int) ($request->query('per_page', 6));
        $letters = LettersTwo::orderBy('sort_order')->paginate($perPage);
        return response()->json([
            'page' => $letters->currentPage(),
            'per_page' => $letters->perPage(),
            'total' => $letters->total(),
            'data' => $letters->items(),
        ]);
    }

    public function show(LettersTwo $letter)
    {
        return view('letters_two.show', ['letter' => $letter]);
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
