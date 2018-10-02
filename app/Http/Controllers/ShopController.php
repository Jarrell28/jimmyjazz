<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\gender;
use App\Product;
use App\size;
use App\SubCategory;
use function foo\func;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Srmklive\PayPal\Facades\PayPal;
use Srmklive\PayPal\Services\ExpressCheckout;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $color = $request->input('color');
        $minprice = $request->input('min-price');
        $maxprice = $request->input('max-price');
        $size = $request->input('size');
        $brandFilter = $request->input('brand');

        $brand = Brand::all();
        $categories = Category::all();
        $subcategories = SubCategory::all();


        $product = Product::when($color, function($query) use ($color){
            return $query->where('color', 'like',  '%' .  $color . '%');
        })->when($minprice, function($query) use ($minprice){
            return $query->where('price', '>=', $minprice);
        })->when($maxprice, function($query) use ($maxprice){
            return $query->where('price', '<=', $maxprice);
        })->when($size, function($query) use($size){
            return $query->where('size_id', $size);
        })->when($brandFilter, function($query) use ($brandFilter){
            return $query->where('brand_id', $brandFilter);
        })->get();


        return view('shop', compact('brand', 'product', 'categories', 'subcategories'));
    }

    public function gender(Request $request, $gender){

        $color = $request->input('color');
        $minprice = $request->input('min-price');
        $maxprice = $request->input('max-price');
        $size = $request->input('size');
        $brandFilter = $request->input('brand');
        $currentGender = $gender;
        $sort = $request->input('sort', '');
        $perPage = $request->input('perPage','10');

        $sizes = Size::all();
        $brand = Brand::all();
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $genders = Gender::where('gender', $gender)->first();


        $product = Product::whereHas('gender' , function($query) use($gender){
            $query->where('gender', $gender);
        })->when($color, function($query) use ($color){
            return $query->where('color', 'like',  '%' .  $color . '%');
        })->when($minprice, function($query) use ($minprice){
            return $query->where('price', '>=', $minprice);
        })->when($maxprice, function($query) use ($maxprice){
            return $query->where('price', '<=', $maxprice);
        })->when($size, function($query) use($size){
            return $query->whereHas('size', function($query) use($size){
                return $query->where('size', $size);
            });
        })->when($brandFilter, function($query) use ($brandFilter){
            return $query->where('brand_id', $brandFilter);
        })->orderBy('price', $sort)->paginate($perPage);



        return view('shop', compact('brand', 'product', 'categories', 'subcategories', 'currentGender', 'genders', 'sizes'));

    }

    public function genderCategory(Request $request, $gender, $category){

        $color = $request->input('color');
        $minprice = $request->input('min-price');
        $maxprice = $request->input('max-price');
        $size = $request->input('size');
        $brandFilter = $request->input('brand');
        $currentGender = $gender;
        $currentCategory = $category;

        $sizes = Size::all();
        $brand = Brand::all();
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $genders = Gender::where('gender', $gender)->first();
        $currentCategories = Category::find($category);

        $product = Product::whereHas('gender', function($query) use($gender){
            $query->where('gender', $gender);
        })->whereHas('category' , function($query) use($category){
            $query->where('category', $category);
        })->when($color, function($query) use ($color){
            return $query->where('color', 'like',  '%' .  $color . '%');
        })->when($minprice, function($query) use ($minprice){
            return $query->where('price', '>=', $minprice);
        })->when($maxprice, function($query) use ($maxprice){
            return $query->where('price', '<=', $maxprice);
        })->when($size, function($query) use($size){
            return $query->whereHas('size', function($query) use($size){
                return $query->where('size', $size);
            });
        })->when($brandFilter, function($query) use ($brandFilter){
            return $query->where('brand_id', $brandFilter);
        })->paginate(5);



        return view('shop', compact('brand', 'product', 'categories', 'subcategories', 'currentGender', 'genders', 'currentCategory', 'currentCategories', 'sizes'));

    }

    public function genderCategorySubcategory(Request $request, $gender, $category, $subcategory){

            $color = $request->input('color');
            $minprice = $request->input('min-price');
            $maxprice = $request->input('max-price');
            $size = $request->input('size');
            $brandFilter = $request->input('brand');
        $currentGender = $gender;
        $currentCategory = $category;
        $currentCategories = Category::find($category);

        $sizes = Size::all();
        $brand = Brand::all();
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $genders = Gender::where('gender', $gender)->first();

        $product = Product::whereHas('gender', function($query) use($gender){
            $query->where('gender', $gender);
        })->whereHas('category' , function($query) use($category){
            $query->where('category', $category);
        })->whereHas('subcategory' , function($query) use($subcategory){
            $query->where('subcategory', $subcategory);
        })->when($color, function($query) use ($color){
                return $query->where('color', 'like',  '%' .  $color . '%');
            })->when($minprice, function($query) use ($minprice){
                return $query->where('price', '>=', $minprice);
            })->when($maxprice, function($query) use ($maxprice){
                return $query->where('price', '<=', $maxprice);
            })->when($size, function($query) use($size){
            return $query->whereHas('size', function($query) use($size){
                return $query->where('size', $size);
            });
            })->when($brandFilter, function($query) use ($brandFilter){
                return $query->where('brand_id', $brandFilter);
            })->paginate(5);


        return view('shop', compact('brand', 'product', 'categories', 'subcategories', 'currentGender', 'genders', 'currentCategory', 'currentCategories', 'sizes'));

    }

    public function main()
    {
        //
        $product = Product::all();
        $brand = Brand::all();
        $categories = Category::all();
        $subcategories = SubCategory::all();

        return view('index', compact('brand', 'product', 'categories', 'subcategories'));
    }

    public function item($gender, $item, $id){

        $currentGender = $gender;

        $brand = Brand::all();
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $genders = Gender::where('gender' , $gender)->first();

        $product = Product::where('title', $item)->where('id', $id)->first();

        $recommend = Product::whereHas('gender', function($query) use($gender){
            $query->where('gender', $gender);})->where('title', '!=' , $item)->inRandomOrder()->take(4)->get();

        return view('product', compact('brand', 'product', 'categories', 'subcategories', 'currentGender', 'genders', 'currentCategory', 'currentCategories', 'currentSubCategories', 'currentSubCategory', 'recommend'));




    }

    public function store(Request $request){


        Cart::add($request->id, $request->name, $request->qty,  $request->price)->associate('App\Product');

        return redirect()->route('shop.cart')->with('success_message', 'Item has been added to Cart!');
    }

    public function cart(){

        $categories = Category::all();
        $subcategories = SubCategory::all();
        $brand = Brand::all();

        return view('cart', compact('categories', 'subcategories', 'brand'));
    }

    public function remove($id){
        Cart::remove($id);

        return redirect()->route('shop.cart')->with('success_message', 'Item has been removed');
    }

    public function update(Request $request){
        Cart::update($request->rowId, $request->quantity);

        return redirect()->route('shop.cart')->with('success_message', 'Item Updated');
    }


    public function search(Request $request){

        $color = $request->input('color');
        $minprice = $request->input('min-price');
        $maxprice = $request->input('max-price');
        $size = $request->input('size');
        $brandFilter = $request->input('brand');
        $gender = $request->input('gender');
        $gender2 = $request->input('kids');
        $search = $request->input('keyword', '');
        $category = $request->input('category');
        $subcategory = $request->input('subcategory');
        $sort = $request->input('sort', '');
        $perPage = $request->input('perPage','10');

        $sizes = Size::all();
        $brand = Brand::all();
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $genders = Gender::all();

        $product = Product::where(function($query) use($search){
            return $query->whereHas('category', function($query) use($search){
                return $query->where('category', 'like', '%' . $search . '%');
        })->orWhereHas('brand', function($query) use ($search){
            return $query->where('brand' , 'like', '%' . $search . '%');
            })->orWhere('title', 'like', '%'. $search . '%')->orWhere('color', 'like', '%' . $search .'%');
        })->when($color, function($query) use ($color){
            return $query->where('color', 'like',  '%' .  $color . '%');
        })->when($minprice, function($query) use ($minprice){
            return $query->where('price', '>=', $minprice);
        })->when($maxprice, function($query) use ($maxprice){
            return $query->where('price', '<=', $maxprice);
        })->when($size, function($query) use($size){
            return $query->whereHas('size', function($query) use($size){
                return $query->where('size', $size);
            });
        })->when($brandFilter, function($query) use ($brandFilter){
            return $query->where('brand_id', $brandFilter);
        })->when($gender, function($query) use($gender){
            return $query->whereHas('gender', function($query) use($gender){
                return $query->where('gender', $gender);
            });
        })->when($gender2, function($query) use($gender2){
            return $query->whereHas('gender', function($query) use($gender2){
                return $query->where('gender', 'Boys')->orWhere('gender', 'girls');
            });
        })->when($category, function($query) use($category){
            return $query->whereHas('category', function($query) use($category){
                return $query->where('category', $category);
            });
        })->when($subcategory, function($query) use($subcategory){
            return $query->whereHas('subcategory', function($query) use($subcategory){
                return $query->where('subcategory', $subcategory);
            });
        })->when($sort, function($query) use($sort){
            return $query->orderBy('price', $sort);
        })->paginate($perPage);


        return view('search', compact('brand', 'product', 'categories', 'subcategories', 'genders', 'sizes', 'search', 'color'));
    }

    public function searching(Request $request)

    {

        if($request->ajax())

        {

            $output="";

            $products=Product::where('title','LIKE','%'.$request->search."%")->take(10)->get();

            if($products)

            {

                foreach ($products as $key => $product) {

                    $output.='<tr>'.

                        '<td><a href="'.route("shop.search") .'?keyword=' .$product->title . '">'.$product->title.'</a></td>'.

                        '</tr>';

                }

                return Response($output);

            }


        }

    }

    public function searching1(Request $request){

        if($request->ajax()){
            $output1="";

            $products1=Product::where('title','LIKE','%'.$request->search."%")->take(6)->get();

            if($products1)

            {

                foreach ($products1 as $key => $product) {

                    $output1.='<tr>'.

                        "<td><a  href='" . route('product', [$product->gender->gender, $product->title, $product->id]) .  "'><img src='" . asset('img/products') ."/" . $product->image . "' style='width: 50px; height: 50px;'" . ">" . '</a></td>'.
                        '<td style="vertical-align: middle"><a  href="'. route('product', [$product->gender->gender, $product->title, $product->id]) . '">' . $product->title . '</a></td>' . '</tr>';


                }

                return Response($output1);

            }
        }

    }

    public function paypal(){

        $provider = PayPal::setProvider('express_checkout');
        $data = [];

        foreach(Cart::content() as $item) {
            $data['items'][] =
                [
                    'name' => $item->name,
                    'price' => $item->price,
                    'qty' => $item->qty
                ];
        }
        $data['invoice_id'] = rand(2,100000);
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = url('/success');
        $data['cancel_url'] = url('/cart');

        $data['total'] = Cart::subtotal();


        $response = $provider->setExpressCheckout($data);


//

        return redirect($response['paypal_link']);

    }

    public function success(Request $request){
        $provider = PayPal::setProvider('express_checkout');

        $token = $request->input('token');
        $PayerID = $request->input('PayerID');

        $data = [];

        foreach(Cart::content() as $item) {
            $data['items'][] =
                [
                    'name' => $item->name,
                    'price' => $item->price,
                    'qty' => $item->qty
                ];
        }
        $data['invoice_id'] = rand(3,100000);
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = url('/cart');
        $data['cancel_url'] = url('/cart');

        $data['total'] = Cart::subtotal();

        $provider->doExpressCheckoutPayment($data, $token, $PayerID);

        Cart::destroy();

        return redirect()->route('shop.cart')->with('success_message', 'Thank you for your purchase!');
    }

}


