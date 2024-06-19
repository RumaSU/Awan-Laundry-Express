<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tubesController extends Controller
{
    public function index()
    {
        return view('tubes.index');
    }
    public function index2()
    {
        return view('tubes.index2');
    }

    public function findRoute(Request $request)
    {
        $grid = $request->input('grid');
        $src = $request->input('src');
        $dest = $request->input('dest');

        // Implementasi Algoritma A*
        $path = $this->aStarSearch($grid, $src, $dest);

        return response()->json($path);
    }

    private function aStarSearch($grid, $src, $dest)
    {
        // Implementasi algoritma A* (sama seperti yang dijelaskan sebelumnya)
        // Kembalikan path yang ditemukan
    }
}
