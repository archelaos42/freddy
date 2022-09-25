<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    /**
     * Displays all products from the chosen category.
     */
    public function index()
    {
        $products = Product::all();
        return Inertia::render('Welcome', compact('products'));

    }
}
