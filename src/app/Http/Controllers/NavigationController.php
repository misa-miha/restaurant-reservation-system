<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NavigationController extends Controller
{
    public function showNav()
    {
        if (Auth::check()) {

            return $this->showNavAfterLogin();
        } else {

            return $this->showNavBeforeLogin();
        }
    }

    public function showNavBeforeLogin()
    {

        return view ('navigations.beforelogin');
    }

    public function showNavAfterLogin()
    {
        return view ('navigations.afterlogin');
    }
}
