<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    function autocomplete(Request $r)
    {
        $item=$r->get('query');
        // print_r($item);die();
        $data = Product::select("name")
        ->where("name","LIKE",'%'.$item.'%')
        ->get();

        return response()->json($data);
    }

}
