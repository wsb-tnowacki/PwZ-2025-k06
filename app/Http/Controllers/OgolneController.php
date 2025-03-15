<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class OgolneController extends Controller
{
    public function start() : View {
        return view('ogolne.welcome');
    }

    public function kontakt() : View {
        return view('ogolne.kontakt');
    }

    public function onas() : View {
        $zadania = [
            'Zadanie 1',
            'Zadanie 2',
            'Zadanie 3'
        ];
        return view('ogolne.onas', compact('zadania'));
    }
}
