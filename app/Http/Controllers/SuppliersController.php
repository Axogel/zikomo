<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuppliersController extends Controller
{
    public function index()
    {
        return view('suppliers.index');
    }
    public function create()
    {
        return view('suppliers.create');
    }

}
