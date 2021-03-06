<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the product.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $products = Product::all();

        $products = Product::with('category')->get();

        return view('products.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:150'],
            'description' => ['max:500'],
            'price' => ['required'],
        ]);

        $product = Product::create($request->only(
            'name',
            'description',
            'price',
            'category_id'
        ));

        return redirect()->route('products.show', [$product])
                ->with('status', 'Producto creado');
    }

    /**
     * Display the specified product.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

        return view('products.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified product.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', [
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        $request->validate([
            'name' => ['required', 'max:150'],
            'description' => ['max:500'],
            'price' => ['required'],
        ]);

        $product->update($request->only([
            'name',
            'description',
            'price',
        ]));

        return redirect()->route('products.show', [$product])
                ->with('status', 'Producto actualizado!');
    }

    /**
     * Remove the specified product from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('status', '¡Producto eliminado!');
    }
}
