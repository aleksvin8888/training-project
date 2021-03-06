<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

final class MainController extends BaseController
{
    /**
     * Display a dashboard page.
     *
     * @return Application|Factory|View
     */
    public function dashboard(){
        return view('admin.pages.dashboard');
    }


}
