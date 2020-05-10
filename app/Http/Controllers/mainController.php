<?php


namespace App\Http\Controllers;


use App\Http\Category;

class mainController extends Controller
{

    public function main()
    {
        $categories=Category::all();
        foreach ($categories as $category)
        {
            echo $category->name.'<br>';
        }
    }
}
