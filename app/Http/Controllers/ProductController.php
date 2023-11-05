<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;

class ProductController extends Controller
{
    public function getAll()
    {
        $products = Product::paginate(12);
        return view('product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::orderBy('id')->get();
        return view('product.create', compact('categories'));
    }

    public function store(ProductStoreRequest $request)
    {
        $data = $request->validated();
        Product::create($data);
        return redirect()->route('product.index');
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::orderBy('id')->get();
        return view('product.edit', compact('product', 'categories'));
    }

    public function update(Product $product, ProductUpdateRequest $request)
    {
        $data = $request->validated();
        $product->update($data);
        return redirect()->route('product.show', $product->id);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }

}