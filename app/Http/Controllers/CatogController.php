<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatogController extends Controller
{
    //


    public function DisplayCategoryDetail(Request $Request){


        return view('cat');
    }
}
