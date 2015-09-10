<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;

class StaticPageController extends Controller
{
    public function home()
    {
        $posts = Post::paginate(5);
        return view('staticpage.home', ['posts' => $posts]);
    }

    public function help()
    {
        return view('staticpage.help');
    }

    public function about()
    {
        return view('staticpage.about');
    }
}
