<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
   

    public function index()
    {
        return Inertia::render('Home' );
    }

    public function category($category)
    {
        //THIS WILL BE RETURN HOME PAGE BUT ONLY THE CATEGORY MENTIONED IN THE URL
        return Inertia::render('Home');
    }
    

    
}
 