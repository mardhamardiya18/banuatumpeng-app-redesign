<?php

namespace App\Http\Controllers;

use App\Models\Testi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $testies = Testi::with('user')->latest()->get();

        return view('pages.homepage', [
            'testies' => $testies
        ]);
    }
}
