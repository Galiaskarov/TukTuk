<?php

namespace App\Http\Controllers;

use App\Models\Advantag;
use App\Models\Hero;
use App\Models\Landing;
use App\Models\Logo;
use App\Models\Menu;
use App\Models\Product;
use App\Models\We;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $logo = Logo::first();
        $menu = Menu::all();
        $hero = Hero::first();
        $advantages = Advantag::all();
        $we  = We::first();
        $products = Product::all();
        return view('public.index', compact('logo', 'menu', 'hero', 'advantages', 'we', 'products'));
    }
}
