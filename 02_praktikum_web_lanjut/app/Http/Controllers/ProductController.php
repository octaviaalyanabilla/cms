<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function marbel_edu_games()
    {
        return '<a href="https://www.educastudio.com/category/marbel-edu-games">Marbel Edu Games</a>';
    }
    public function marbel_and_friends_kids_games()
    {
        return '<a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">Marbel and Friends Kids Games</a>';
    }
    public function riri_story_books()
    {
        return '<a href="https://www.educastudio.com/category/riri-story-books">Riri Story Books</a>';
    }
    public function kolak_kids_songs()
    {
        return '<a href="https://www.educastudio.com/category/kolak-kids-songs">Kolak Kids Songs</a>';
    }
}
