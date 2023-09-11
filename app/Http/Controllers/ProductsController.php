<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){

        $title = "Welcome to laravel 8";
        $description = "Created by Fahad";

        $data = [
            'product1' => "Samsung",
            'product2' => "Iphone"
        ];

        //return view('products.index',compact('title', 'description'));

        return view('products.index')->with('data', $data);

    }


    public function show($name){

        $data = [
            'samsung' => "Samsung",
            'iphone' => "Iphone"
        ];

        return view("products/index", [
            'products' => $data[$name] ?? 'Product ' .$name. " Product dose'nt exist"
        ]);

    }
}
