<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function marbel(){
        // echo '<a href="https://www.educastudio.com/category/marbel-edu-games">Marbel Edu Page</a>';
        return redirect()->to('https://www.educastudio.com/category/marbel-edu-games');
    }

    public function marbelandfriend(){
        // echo '<a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">Marbel And Friends Kids Games</a>';
        return redirect()->to('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    }

    public function riri(){
        // echo '<a href="https://www.educastudio.com/category/riri-story-books">Riri Story Books</a>';
        return redirect()->to('https://www.educastudio.com/category/riri-story-books');
    }

    public function kolakkids(){
        // echo '<a href="https://www.educastudio.com/category/kolak-kids-songs">Kolak Kids Songs</a>';
        return redirect()->to('https://www.educastudio.com/category/kolak-kids-songs');
    }

}
