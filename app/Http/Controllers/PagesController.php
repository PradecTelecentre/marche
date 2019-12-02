<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marche;
class PagesController extends Controller
{
    //
    public function index(){
        // $products = "this is the queries from database";
        $products = Marche::orderBy('id', 'desc')->paginate(1);
        // $products = ["Phone", "tablet", "ordinateur", "moto", "boeuf"];

        return view('pages.index', compact('products'));
    }
    public function about(){
        $products = "about products";
        return view('pages.about', compact('products'));
    }
}
