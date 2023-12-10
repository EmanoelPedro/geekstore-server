<?php

namespace App\Http\Controllers\Admin;

use App\models\Product;
use Core\Http\Controller;

class AdminController extends Controller 
{
    public function login() {
        $product = new Product();
        $product->save();
    }
    
}