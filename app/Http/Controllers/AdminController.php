<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function index(){

        return view('admin.page.index');
    }

    public function getCategories(){
        $categories = categories::all();
        return view('admin.page.categories', ['categories' => $categories]);
    }
}
