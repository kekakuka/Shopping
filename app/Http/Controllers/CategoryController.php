<?php

namespace App\Http\Controllers;

use App\Category;
use App\Souvenir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\AuthController;

class CategoryController extends Controller
{

    public function index()
    {
        AuthController::IsAdmin();
        $categories = Category::all();
        return view('Categories.index', compact('categories'));
    }

    public function Create()
    {
        AuthController::IsAdmin();

        return view('Categories.Create');
    }

    public function CreatePost(Request $request)
    {
        AuthController::IsAdmin();

        $validator = Validator::make($request->all(), [
            'Description' => 'max:100',
            'Name' => 'required|max:50'
        ]);


        if ($validator->fails()) {
            return redirect('Categories/Create')
                ->withErrors($validator)
                ->withInput();
        }
        $category = new Category([
            'Description' => $_POST['Description']
            ,  'Name' => $_POST['Name']
        ]);
        $category->save();
        return redirect('Categories');
    }

    public function Details($id)
    {
        AuthController::IsAdmin();


        $category = DB::table('categories')->where('id', $id)->first();

        $souvenirs = Souvenir::all()->where('category_id', $id);
        return view('Categories.Details', compact('category','souvenirs'));
    }
}
