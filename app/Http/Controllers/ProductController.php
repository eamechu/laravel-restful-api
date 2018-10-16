<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\Product\ProductResource;
use App\Http\Resources\Product\ProductCollection;


class ProductController extends Controller
{

    public function index()
    {
        $products = Product::paginate(10);
        return ProductCollection::collection($products);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Product $product)
    {
        //return $product;
        return new ProductResource($product);
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}
