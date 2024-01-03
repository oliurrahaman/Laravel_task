<?php

namespace App\Http\Controllers;


use App\Models\User;

use App\Models\Product;
use App\Models\Category;

use App\Mail\ProductCreated;
use Illuminate\Http\Request;
use App\Exports\ProductsExport;

use App\Imports\ProductsImport;
use App\Models\QuantityHistory;
use App\Events\ProductPurchased;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $product,$subCategories;
    public $quantity;
    public function index()
    {
        return view('admin.product.index', [
            'products' => Product::all(),

        ]);
    }


     /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import()
    {
        Excel::import(new ProductsImport,request()->file('file'));

        return back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.add',[
            'categories' => Category::all(),


        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        return $request;
        $this->product = Product::newProduct($request);
        //Mail Send Command
        $user =User::find(1);
        Mail::to($user)->send(
              new ProductCreated()
        );

        return back()->with('message','Product info save successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.product.show', [
            'product' => $product

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit',[
            'product' => $product,
            'categories' => Category::all(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {


       // Purchase Logic
      $product =  Product::updateProduct($request,$id);
      event(new ProductPurchased($product));

        return redirect('/product')->with('message','Product info update successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Product::deleteProduct($product);
        return back()->with('message', 'Delete Product Successfully');
    }
}
