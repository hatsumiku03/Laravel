<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product {
    public $name, $id;

    function __construct($name, $id) {
        $this->name = $name;
        $this->id = $id;
    }
}

class ProductController extends Controller
{
    public $selection, $deals, $topsales;

    function init_variables() {

        // JSON String
        $this->selection = json_decode('[
        { "name" : "producto selection 1", "id" : 991},
        { "name" : "producto selection 2", "id" : 992}
        ]');

        // Array asociativo
        $this->deals = [
            [ "name" => "producto oferta 1", "id" => 993],
            [ "name" => "producto oferta 2", "id" => 994]
        ];

        // Array de objetos
        $this->topsales = [
            new Product("producto top 1", 995),
            new Product("producto top 2", 996)
        ];
    }
}
