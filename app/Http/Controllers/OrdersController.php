<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function index()
    {
        return view('orders.index');
    }
    public function create()
    {
        return view('orders.create');
    }
}
