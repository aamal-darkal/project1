<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {        
        $posts = DB::table('posts')->where ('id' , 1)->select('body')->get();
        dd($posts);
    }
    
}
?>