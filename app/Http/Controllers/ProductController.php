<?php

namespace App\Http\Controllers;

use App\Models;
use Illuminate\Http\Request;
use Illuminate\Database\DatabaseManager;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;
class ProductController extends Controller {
    public function createProduct(Request $request){
        $product = new Product();
        $product->name = "thisname";
        // $request->input('name');
        return $product->name;
    }

    public function readProduct(Request $request){

    }


}
