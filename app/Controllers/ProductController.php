<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    public function __construc()
    {
        $this->product = new \App\Models\ProductModel();
    }
    public function index()
    {
      $productModel = new ProductModel();
      $data['products'] = $productModel->getProductsFromDatabase();

      // Load your view and pass the products data
      return view('welcome_message', $data);
    }


}
