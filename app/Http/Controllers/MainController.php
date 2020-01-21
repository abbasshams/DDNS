<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main(){
        \log('request()->header()');
        return request()->header('user');
    }
}
