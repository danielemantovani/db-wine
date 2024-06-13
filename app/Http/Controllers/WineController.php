<?php

namespace App\Http\Controllers;
use App\Models\Wine;
use Illuminate\Http\Request;

class WineController extends Controller
{
  public function index() {

    $winesObj = Wine::all();

    return view('wine.index', compact('winesObj'));
  }
}
