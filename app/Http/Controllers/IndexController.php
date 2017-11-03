<?php

namespace App\Http\Controllers;

use function foo\func;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $f = function () {
            echo 'fun';
        };
        echo $f instanceof \Closure;
    }
}
