<?php


namespace App\Http\Controllers;


use App\Ad;
use App\Category;
use Illuminate\Http\Request;

class mainController extends Controller
{

    public function main()
    {
        $categories = Category::all();

        return view('categories', [
            'categories' => $categories,
        ]);
    }

    public function category(Request $request, $id)
    {
        if ($request->input('title') and
            $request->input('price') and
            $request->description) {
            $db=new Ad;
            $db->title=$request->title;
            $db->price=$request->price;
            $db->description=$request->description;
            $db->category_id=$id;

            $db->save();
            echo 'Объявление успешно добавлено';
        }
        $message = $request->input('text');
        $ads = Category::find($id)->ad()->orderBy('created_at', 'desc')->get();
        $category = Category::find($id);
        return view('categoryId', [
            'ads' => $ads,
            'category' => $category,
            'text' => $message
        ]);

    }
}
