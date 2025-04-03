<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Category $category = null)
    {
        if ($category) {
            $products = $category->products()->orderBy('name')->paginate(12);
        } else {
            $products = Product::orderBy('name')->paginate(12);
        }

        $categories = Category::orderBy('name')->get();

        return inertia('Product/Index', compact('categories', 'products', 'category'));
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'description' => 'nullable',
        'whole_sale_price' => 'required|numeric',
        'retail_price' => 'required|numeric',
        'category_id' => 'required|exists:categories,id',
    ]);

    Product::create($request->only([
        'name',
        'description',
        'whole_sale_price',
        'retail_price',
        'category_id',
    ]));

    return redirect()->route('products.index')->with('success', 'Product added successfully!');
}

}
