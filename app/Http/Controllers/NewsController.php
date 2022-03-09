<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){

        $news = News::get();

        $data = [
            'news' => $news
        ];

        return view('home', $data);
    }

    public function show($id){
        $news = News::find($id);
        
        $data = [
            'news' => $news
        ];

        return view('news', $data);
    }
}
