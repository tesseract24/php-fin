<?php

namespace App\Http\Controllers;


use App\Product;
use App\comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::inRandomOrder()->get();

        // $comments = comments::inRandomOrder()->get();


        $comments = comments::all();

        // return(dd($comments));
        // return(dd($products));



        return view('Front-end/index')->with(['products' => $products, 'comments' => $comments]);
    }




        public function show($slug)
    {


        $comments = comments::all();

        $product = Product::where('slug', $slug)->firstOrFail();

        return view('Front-end/product')->with(['product' => $product, 'comments' => $comments]);
    }



}