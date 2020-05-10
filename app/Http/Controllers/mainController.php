<?php


namespace App\Http\Controllers;


use App\Ad;
use App\Category;

class mainController extends Controller
{

    public function main()
    {
        $categories=Category::all();

        return view('categories',[
            'categories'=>$categories,
        ]);
    }
    public function category($id)
    {
        $ads=Category::find($id)->ad;
        foreach ($ads as $ad) {
            echo $ad->title.'<br>';
        }

    }
}
