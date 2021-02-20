<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsController extends Controller
{
    public function aboutus()
    {
        return '<a href="https://www.educastudio.com/about-us">About Us</a>';
    }
    public function contactus()
    {
        return '<a href="https://www.educastudio.com/contact-us">Contact Us</a>';
    }
}
