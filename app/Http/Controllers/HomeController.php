<?php

namespace App\Http\Controllers;


use Auth;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        if(Auth::user()->isAdmin()){
            return view('admin.pages.dashboard');
        }
        return view('home');
    }

    /**
     * Show the application homepage.
     *
     * @return Application|Factory|View
     */
    public function home()
    {
        return view('home');
    }
}
