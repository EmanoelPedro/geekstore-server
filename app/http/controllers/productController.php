<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Core\Http\Controller;

class productController extends Controller
{
    public function index()
    {
        $products = (new Product)->find()->order('DESC')->limit(20)->fetch(true);
        var_dump($products);
    }

    public function store()
    {
        $product = new Product;
        $product->name = $this->request->input('name');
    var_dump($this->request->files());
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }
}
