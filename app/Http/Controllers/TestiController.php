<?php

namespace App\Http\Controllers;

use App\Models\Testi;
use Illuminate\Http\Request;


class TestiController extends Controller
{
    public function index()
    {
        return view('pages.testimoni');
    }

    public function store(Request $request)
    {
        $item = $request->all();

        Testi::create($item);

        toast('Terimakasih atas testimoninya 😎', 'success');

        return redirect()->route('homepage');
    }
}
