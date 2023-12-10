<?php

namespace App\models;
use Core\Database\Model;

class Product extends Model
{
  public function __construct()
  {
    parent::__construct('products',['name','description','price','brand']);
  }
}
