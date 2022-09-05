<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static $products = [
        ["id"=>"1", "name"=>"Lucas", "description"=>"Dev", "image" => "game.png", "price"=>"1000"],
        ["id"=>"2", "name"=>"Frank", "description"=>"Cantor", "image" => "safe.png", "price"=>"999"],
        ["id"=>"3", "name"=>"Edith", "description"=>"Cantora", "image" => "submarine.png", "price"=>"30"],
        ["id"=>"4", "name"=>"Nat", "description"=>"Cantor", "image" => "game.png", "price"=>"100"]
    ];

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Perfis - Veja nossos talentos";
        $viewData["subtitle"] =  "Lista de Devs";
        $viewData["products"] = ProductController::$products;
        return view('product.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $product = ProductController::$products[$id-1];
        $viewData["title"] = $product["name"]." - Online Store";
        $viewData["subtitle"] =  $product["name"]." - Product information";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }
}