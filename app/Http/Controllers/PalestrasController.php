<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PalestrasController extends Controller
{

    public function __invoke() {
        return view('welcome');
    }

    public function index() {
        return view('welcome');
    }

    public function palestras() {
        return view('palestras');
    }

    public function showvideo() {
        return view('showvideo');
    }

    public function confirma() {
        return view('confirma');
    }

}
