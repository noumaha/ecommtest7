<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Frontcontroller extends Controller
{
    // public function  __construct() {
    //     $this -> middleware('auth');
    // }

    public function funname()
    {
        return 'you call first function';
    }

    public function funname2()
    {
        return 'you call second function';
    }
}
