<?php

namespace App\Http\Controllers;

use App\View\Components\aamal;
use Illuminate\Http\Request;

class tripController extends Controller
{
	public function index()
    {
        return "index";
        //
    }

    public function getTt($n, $name= null)
    {
        return 'the number is ' . $n . ' the name is: ' . $name;
        //
    }

    public function getXx()
    {


        print_r( route('aa'));
        print_r('aamal');

        //
    }
    //
    public function test(Request $reuest)
    {
        echo $reuest->is('project1/*');
    }
}
