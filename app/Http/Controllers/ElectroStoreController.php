<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ElectroStoreController extends Controller
{
    public function index() {

        $newMobiles = Product::where('category_id', 4)
                                ->orderBy('id', 'DESC')
                                ->take(3)
                                ->get();
        $newTvs = Product::where('category_id', 6)
                                ->orderBy('id', 'DESC')
                                ->take(3)
                                ->get();
        $newLaptops = Product::where('category_id', 5)
                                ->orderBy('id', 'DESC')
                                ->take(3)
                                ->get();
        return view('front-end.home.home', [
            'newMobiles'=>$newMobiles,
            'newTvs'=>$newTvs,
            'newLaptops'=>$newLaptops,
        ]);
    }

    public function categoryProduct($id) {
        $categoryProducts = Product::where('category_id', $id)
                                    ->where('publication_status', 1)
                                    ->get();

        return view('front-end.category.category-content', [
            'categoryProducts' => $categoryProducts
        ]);
    }

    public function productDetails($id) {
        $product = Product::find($id);
        return view('front-end.product.product-details', ['product' => $product]);
    }

    public function mailUs() {
        return view('front-end.contact.mail-us');
    }
}
