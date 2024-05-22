<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductImage;
use App\Models\ProductSize;
use App\Models\ShippingArea;
use App\Models\SubCategory;
use App\Models\Wishlist;
use Cart;

class WebsiteController extends Controller
{

    private $product, $wishlist;
    public function index()
    {
        return view('website.home.index',[
//            'products'=>Product::where('status',1)->orderby('id','desc')->take(3)->get()
            'products'=>Product::where('status',1)->latest()->take(6)->get(),
            'subcategories' =>SubCategory::where('status',1)->get(),
        ]);
    }

    public function product()
    {
        return view('website.product.index',[
            'products'=>Product::where('status',1)->latest()->get(),
            'cartsProduct'=>Cart::content(),
            'categories'=>Category::where('status',1)->get(),
        ]);
    }


    public function productDetails($id)
    {

        $this->product = Product::find($id);
        return view('website.product.product-details',[
            'product' => $this->product,
            'productColors' => ProductColor::where('product_id',$this->product->id)->get(),
            'productSizes' => ProductSize::where('product_id',$this->product->id)->get(),
            'productImages' => ProductImage::where('product_id',$this->product->id)->get(),
            'ShippingAreas'=>ShippingArea::all(),
            'cartsProduct'=>Cart::content(),
            'categories'=>Category::where('status',1)->get(),
        ]);

//        return view('website.product.product-details');
    }

    public function cart()
    {
        return view('website.cart.index');
    }

}
