<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        return view('staff.index');
    }
    public function create()
    {
        return view('staff.create');
    }
    public function payment()
    {
        return view('staff.payment');
    }
}
