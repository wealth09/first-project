<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index() {
        /*$posts = DB::select('select * from posts WHERE id = :id', ['id' => 4]);
        dd($posts);*/

        //QUERY BUILDER
        $id = 5;
        $posts = DB::table('posts')
            ->where('id', '=', 6)
            ->delete();
        dd($posts);
    }
}
