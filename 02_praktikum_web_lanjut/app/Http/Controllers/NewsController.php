<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news()
    {
        return '<a href="https://www.educastudio.com/news">News</a>';
    }
    public function news_covid()
    {
        return '<a href="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19">News Covid</a>';
    }
}
