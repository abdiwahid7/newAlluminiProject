<?php

namespace App\Http\Controllers;


use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admindashboard');
    }

    // Other resource methods (create, store, show, edit, update, destroy) can be added here as needed
}
