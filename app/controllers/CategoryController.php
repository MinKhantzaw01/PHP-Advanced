<?php
namespace App\Controllers;

use App\Classes\Request;

class CategoryController extends BaseController
{
    public function index()
    {
        view("admin/category/create");
    }

    public function store()
    {
        beautify(Request::all());
    }
}





?>