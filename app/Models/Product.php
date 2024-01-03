<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $product ,$category;




    public static function newProduct($request)
    {


        self::$product = new Product();

        self::$product->name = $request->name;
        self::$product->category_id = $request->category_id;
        self::$product->price = $request->price;
        self::$product->quantity = $request->quantity;
        self::$product->save();

        return self::$product;
    }

    public static  function deleteProduct($product)
    {
       $product->delete();
    }







    public static function updateProduct( $request, $id )
    {

        self::$product =  Product::find($id);
        self::$product->category_id = $request->category_id;
        self::$product->name = $request->name;
        self::$product->price = $request->price;
        self::$product->quantity = $request->quantity;

        self::$product->save();
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
