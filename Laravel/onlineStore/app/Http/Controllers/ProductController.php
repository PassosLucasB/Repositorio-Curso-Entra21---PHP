<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static $products = [
        ["id"=>"1", "name"=>"Bruno de Souza", "description"=>"Dev", "image" => "bruno.png", "price"=>"1 btc"],
        ["id"=>"2", "name"=>"Denize Bassi Figueiredo", "description"=>"Dev", "image" => "denize.png", "price"=>"1 btc"],
        ["id"=>"3", "name"=>"Icaro Melchior Barbosa", "description"=>"Dev", "image" => "icaro.png", "price"=>"1 btc"],
        ["id"=>"4", "name"=>"Jennifer Barbosa", "description"=>"Dev", "image" => "jennifer.png", "price"=>"1 btc"],
        ["id"=>"5", "name"=>"Lucas Bernardelli dos Passos", "description"=>"Dev", "image" => "lucas.png", "price"=>"1 btc"],
        ["id"=>"6", "name"=>"Paula Eduarda Silva ", "description"=>"Dev", "image" => "paula.png", "price"=>"1 btc"],
        ["id"=>"7", "name"=>"Vinicius Nichetti", "description"=>"Dev", "image" => "vinicius.png", "price"=>"1 btc"]
    ];

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Perfis da Turma de PHP";
        $viewData["subtitle"] =  "Lista de Devs - Grupo 01";
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
