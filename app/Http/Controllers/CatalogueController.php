<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Http\Requests\Product\FilterRequest;
use App\Http\Filters\ProductFilter;

class CatalogueController extends Controller
{
    public function getAll(FilterRequest $request)
    {
        $data = $request->validated();
        $filter = app()->make(ProductFilter::class, ['queryParams' => array_filter($data)]);
        $catalogues = Product::filter($filter)->paginate(6);
        $categories = Category::all();
        return view('catalogue.index', compact('catalogues','categories'));
    }

    public function show(Product $product)
    {
        return view('catalogue.show', compact('product'));
    }
}
