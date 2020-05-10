<?php


namespace App\Http\Controllers;


use App\Http\Ad;
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
    public function category($id)
    {
        dump(Ad::find($id)->category());
    }
}
