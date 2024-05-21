<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Stock;
use Illuminate\Http\Request;

class UserstockController extends Controller
{
    public function index()
    {
        $stocks = Stock::all();
        return view('stocks.index', compact('stocks'));
    }

    public function show(Stock $stock)
    {
        return view('stocks.show', compact('stock'));
    }
}