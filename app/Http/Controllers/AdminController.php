<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function getLogin() {
        return view('user.login');
    }

    function getListProduct() {
        return 'list products page';
    }

    function getHome() {
        return 'home page';
    }

    function getRegister() {
        return view('user.register');
    }
}
