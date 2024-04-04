<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller {
    //

    public function index() {
        $products = Product::get();

        return Inertia::render('Admin/Product/Index', ['products' => $products]);
    }

    public function store(Request $request) {
        $product = Product::create();

        $product->title = $request->title;
        $product->slug = $request->slug;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->inStock = $request->inStock;
        $product->published = $request->published;
        $product->description = $request->description;
        $product->created_by = $request->created_by;
        $product->updated_by = $request->updated_by;
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->save();

        // product image checker

        if ($request->hasFile('product_image')) {
            $image = $request->file('product_image');

            $uniqueName = time() . '.' . $image->extension();
            $image->move(public_path('product_images'), $uniqueName);

            ProductImage::create([
                'product_id' => $product->id,
                'image' => 'product_images/' . $uniqueName,
            ]);
        }
    }
}
