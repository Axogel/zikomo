<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoicesController extends Controller
{
    public function index()
    {
        return view('invoices.index');
    }
    public function create()
    {
        return view('invoices.create');
    }
}
