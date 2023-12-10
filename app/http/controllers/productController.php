<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Core\Http\Controller;

class productController extends Controller
{
    public function index()
    {
        $products = (new Product)->find()->order('DESC')->limit(20);
    }

    public function store()
    {
        var_dump($this->request->all());    
        var_dump($_POST);
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }
}
