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

class PageController extends Controller
{
    public function index()
    {
        return view('public.page');
    }
}
