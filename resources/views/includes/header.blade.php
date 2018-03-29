<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JimmyClone</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Coda+Caption:800" rel="stylesheet">
</head>
<body>
<div class="fluid-container topNav-full-container">
<div class="container topNav-container">
    <nav class="navbar navbar-expand-lg navbar-light pt-0">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNav">
            <ul class="navbar-nav social-links">
                <li class="nav-item">
                    <a class="nav-link pt-0 pr-0" href="#"><img src="{{asset('img/icons/instagram.png')}}" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pt-0 pr-0" href="#"><img src="{{asset('img/icons/twitter.png')}}" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pt-0 pr-0" href="#"><img src="{{asset('img/icons/facebook.png')}}" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pt-0 pr-0" href="#"><img src="{{asset('img/icons/gmail.png')}}" alt=""></a>
                </li>
            </ul>
            <ul class="navbar-nav topNav-links mr-auto ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Store Locator <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Customer Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
            </ul>
            <div id="checkout-link" class="dropdown show">
                <a  class="nav-link cart-link pb-0" href="{{route('shop.cart')}}">
                    <img id="cart-img" class="mr-1 mb-3" src="{{URL::to('/')}}img/icons/cart.png" alt=""><span>Checkout</span><span class="ml-1">({{Cart::count()}})</span>
                </a>

                <div  class="dropdown-menu shopping-bag pt-0 pb-0" id="checkout-dropdown" aria-labelledby="dropdownMen
                        </div>uLink">
                        <div class="shopping-bag-items">

                            @if(Cart::count() != 0)

                            @foreach(Cart::content() as $item)

                                <div class="row mt-3 checkout-cart-container pb-3">
                                    <div class="col-3">
                                        <img class="img-fluid" src="{{asset('img/products')}}/{{$item->model->image}}" alt="">
                                    </div>
                                    <div class="col checkout-cart">
                                        <div>{{$item->model->brand->brand}}</div>
                                        <div>{{$item->name}}</div>
                                        <div>Item#: <span class="font-weight-normal">{{$item->id}}</span></div>
                                        <div>Color: <span class="font-weight-normal">{{$item->model->color}}</span></div>
                                        <div>Size: <span class="font-weight-normal">{{$item->model->size->size}}</span></div>
                                        <div class="mt-2">Unit Price: <span class="font-weight-normal">${{$item->price}}</span> <span class="checkout-cart-subtotal">${{$item->subtotal()}}</span></div>
                                        <div>Qty: <span class="font-weight-normal">{{$item->qty}}</span></div>
                                    </div>

                                </div>
                            @endforeach

                                @else
                            <p class="empty-cart text-left">No items found in your cart</p>

                                @endif
                        </div>
                        <div class="text-uppercase font-weight-bold sub-total pl-3 pt-2 pb-2"><p class="mb-0">Items in shopping cart: {{Cart::count()}} <span id="sub-total-span">sub total: <span class="sub-total-price">${{Cart::subtotal()}}</span></span></p></div>
                        <div class="shopping-bag-checkout row">
                            <div class="shopping-bag-checkout-left col position-relative pr-0">
                                <a id="close-button-link" role="button" class="pl-2 position-relative" data-dismiss="dropdown" aria-label="Close"><img id="close-button" src="{{URL::to('/')}}img/icons/close.png" alt=""></a>
                            </div>
                        <div class="shopping-bag-checkout-right col pl-0">
<p class="mb-0 text-uppercase text-right"><a href="{{route('shop.cart')}}">Go to shopping cart &raquo;</a></p>
                        </div>
                </div>
            </div>
        </div>
        </div>
    </nav>


    <nav class="navbar navbar-expand-lg navbar-light pt-0 pb-0 position-relative">
        <a class="navbar-brand mr-auto brand-name" href="{{URL::to('/')}}">Jimmy Clone</a>
            <form class="form-inline search-form" method="get" action="{{route('shop.search')}}">
                <div class="input-group w-100 search-bar">
                    <input id="search-bar" type="text" class="form-control search-bar-input p-0" aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="search-button" type="submit">Search &#128269;</button>
                    </div>
                </div>
            </form>
        <div  class="row search-results">
            <div class="col table-container">
            <table class="table table-hover table-results">
                <thead>
                  <tr>
                    <th>Popular Searches</th>
                  </tr>
                </thead>
                <tbody id="table-1-results">
                </tbody>
              </table>
            </div>

            <div class="col table-container">
                <table class="table table-hover table-results">
                    <thead>
                      <tr>
                        <th>Product Matches</th>
                      </tr>
                    </thead>
                    <tbody id="table-2-results">
                    </tbody>
                  </table>
            </div>
        </div>
    </nav>



    <nav class="navbar navbar-expand-lg navbar-light pt-0 pb-0 text-uppercase mainNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown" id="mainNav-link1">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mens
                    </a>

                    <div  id="mainNav-dropdown1" class="dropdown-menu pt-0 first-dropdown" aria-labelledby="navbarDropdown">
                        <div class="container mainNav-links mb-4">
                            <div class="mainNav-links-container row">
                                <div class="col mainNav-links-border-right">
                        <a class="dropdown-item" href="{{route('shop')}}/Mens">Shop Mens</a>
                                    @foreach($categories as $category)

                        <a class="dropdown-item" href="{{route('shop')}}/Mens/{{$category->category}}">{{$category->category}}</a>

                                    @endforeach

                                <div>
                                    <a class="dropdown-item mt-2" href="{{route('shop')}}/Mens">Top Categories</a>
                                    @foreach($subcategories as $subcategory)
                                    <a class="dropdown-item" href="{{route('shop')}}/Mens/{{$subcategory->category->category}}/{{$subcategory->subcategory}}">{{$subcategory->subcategory}}</a>

                                        @endforeach
                                </div>
                            </div>

                                <div class="col mainNav-links-border-right">
                                    <a class="dropdown-item" href="#">Top Brands</a>
                                    @foreach($brand as $brands)
                                        <a class="dropdown-item" href="{{route('shop')}}/Mens?brand={{$brands->id}}">{{$brands->brand}}</a>
                                    @endforeach
                                </div>

                                <div class="col pr-0">
                                    <img src="http://www.jimmyjazz.com/customfiles/08_22_17_317x317_mens_dropdown_1.jpg" alt="">
                                </div>
                                <div class="col">
                                    <img src="http://www.jimmyjazz.com/customfiles/08_22_17_317x317_mens_dropdown_2.jpg" alt="">
                                </div>
                            </div>
                    </div>
                    </div>
                </li>
                <li class="nav-item" id="mainNav-link2">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Womens
                    </a>
                    <div id="mainNav-dropdown2" class="dropdown-menu pt-0" aria-labelledby="navbarDropdown">
                        <div class="container mainNav-links mb-4">
                            <div class="mainNav-links-container row">
                                <div class="col-2 mainNav-links-border-right">
                                    <a class="dropdown-item" href="{{route('shop')}}/Womens">Shop Womens</a>
                                    @foreach($categories as $category)

                                        <a class="dropdown-item" href="{{route('shop')}}/Womens/{{$category->category}}">{{$category->category}}</a>

                                    @endforeach

                                    <div>
                                        <a class="dropdown-item mt-2" href="{{route('shop')}}/Womens">Top Categories</a>
                                        @foreach($subcategories as $subcategory)
                                            <a class="dropdown-item" href="{{route('shop')}}/Womens/{{$subcategory->category->category}}/{{$subcategory->subcategory}}">{{$subcategory->subcategory}}</a>

                                        @endforeach
                                    </div>
                                </div>

                                <div class="col mainNav-links-border-right">
                                    <a class="dropdown-item" href="{{route('shop')}}/Womens">Top Brands</a>
                                    @foreach($brand as $brands)
                                        <a class="dropdown-item" href="{{route('shop')}}/Womens?brand={{$brands->id}}">{{$brands->brand}}</a>
                                    @endforeach
                                </div>

                                <div class="col-5 pr-0">
                                    <img src="http://www.jimmyjazz.com/sites/default/files/02_16_18_484x286-Nike-for-her.jpg" alt="">
                                </div>
                            </div>
                    </div>
                    </div>
                </li>
                <li class="nav-item" id="mainNav-link3">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Kids
                    </a>
                    <div id="mainNav-dropdown3" class="dropdown-menu pt-0" aria-labelledby="navbarDropdown">
                        <div class="container mainNav-links mb-4">
                            <div class="mainNav-links-container row">
                                <div class="col-2 mainNav-links-border-right">
                                    <a class="dropdown-item" href="{{route('shop')}}/Boys">Shop Boys</a>
                                    @foreach($categories as $category)

                                        <a class="dropdown-item" href="{{route('shop')}}/Boys/{{$category->category}}">{{$category->category}}</a>

                                    @endforeach

                                    <div>
                                        <a class="dropdown-item mt-2" href="{{route('shop')}}/Boys">Top Brands</a>
                                        @foreach($brand as $brands)
                                            <a class="dropdown-item" href="{{route('shop')}}/Boys?brand={{$brands->id}}">{{$brands->brand}}</a>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="col-2 mainNav-links-border-right">
                                    <a class="dropdown-item" href="{{route('shop')}}/Girls">Shop Girls</a>
                                    @foreach($categories as $category)

                                        <a class="dropdown-item" href="{{route('shop')}}/Girls/{{$category->category}}">{{$category->category}}</a>

                                    @endforeach

                                    <div>
                                        <a class="dropdown-item mt-2" href="{{route('shop')}}/Girls">Top Brands</a>
                                        @foreach($brand as $brands)
                                            <a class="dropdown-item" href="{{route('shop')}}/Girls?brand={{$brands->id}}">{{$brands->brand}}</a>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="col-5 pr-0">
                                    <img src="http://www.jimmyjazz.com/sites/default/files/kids-landing484x286.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item" id="mainNav-link4">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Nike
                    </a>
                    <div id="mainNav-dropdown4" class="dropdown-menu pt-0" aria-labelledby="navbarDropdown">
                        <div class="container mainNav-links mb-4">
                            <div class="mainNav-links-container row">
                                <div class="col-2 mainNav-links-border-right pr-4">
                                    <a class="dropdown-item" href="#">Nike Mens</a>
                                    <a class="dropdown-item" href="#">Footwear</a>
                                    <a class="dropdown-item" href="#">Clothing</a>
                                    <a class="dropdown-item" href="#">Accessories</a>
                                    <a class="dropdown-item" href="#">New Arrivals</a>
                                    <a class="dropdown-item" href="#">Sale</a>

                                    <div>
                                        <a class="dropdown-item mt-2" href="#">Nike Womens</a>
                                        <a class="dropdown-item" href="#">Footwear</a>
                                        <a class="dropdown-item" href="#">Clothing</a>
                                        <a class="dropdown-item" href="#">New Arrivals</a>
                                        <a class="dropdown-item" href="#">Sale</a>
                                    </div>

                                    <div>
                                        <a class="dropdown-item mt-2" href="#">Nike Sportswear <br>Mens</a>
                                        <a class="dropdown-item" href="#">Footwear</a>
                                        <a class="dropdown-item" href="#">Clothing</a>
                                        <a class="dropdown-item" href="#">Accessories</a>
                                        <a class="dropdown-item" href="#">New Arrivals</a>
                                        <a class="dropdown-item" href="#">Sale</a>
                                    </div>

                                    <div>
                                        <a class="dropdown-item mt-2" href="#">Nike Styles</a>
                                        <a class="dropdown-item" href="#">Air Force 1</a>
                                        <a class="dropdown-item" href="#">Air Max</a>
                                        <a class="dropdown-item" href="#">Foamposite</a>
                                        <a class="dropdown-item" href="#">Kevin Durant</a>
                                        <a class="dropdown-item" href="#">Kobe Bryant</a>
                                        <a class="dropdown-item" href="#">Kyrie Irving</a>
                                        <a class="dropdown-item" href="#">Lebron James</a>
                                        <a class="dropdown-item" href="#">Roshe Run</a>
                                    </div>
                                </div>

                                <div class="col-2 mainNav-links-border-right pr-4">
                                    <a class="dropdown-item" href="#">Nike Sportswear <br>WoMens</a>
                                    <a class="dropdown-item" href="#">Footwear</a>
                                    <a class="dropdown-item" href="#">Clothing</a>
                                    <a class="dropdown-item" href="#">New Arrivals</a>
                                    <a class="dropdown-item" href="#">Sale</a>

                                    <div>
                                        <a class="dropdown-item mt-2" href="#">Nike Boys</a>
                                        <a class="dropdown-item" href="#">Footwear</a>
                                        <a class="dropdown-item" href="#">Clothing</a>
                                        <a class="dropdown-item" href="#">Accessories</a>
                                        <a class="dropdown-item" href="#">New Arrivals</a>
                                        <a class="dropdown-item" href="#">Sale</a>
                                    </div>

                                    <div>
                                        <a class="dropdown-item mt-2" href="#">Nike Girls</a>
                                        <a class="dropdown-item" href="#">Footwear</a>
                                        <a class="dropdown-item" href="#">Clothing</a>
                                        <a class="dropdown-item" href="#">Accessories</a>
                                        <a class="dropdown-item" href="#">New Arrivals</a>
                                        <a class="dropdown-item" href="#">Sale</a>
                                    </div>
                                </div>

                                <div class="col-5 pr-0">
                                    <img src="http://www.jimmyjazz.com/customfiles/01_19_17_317x317_nike.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item" id="mainNav-link5">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Jordan
                    </a>
                    <div id="mainNav-dropdown5" class="dropdown-menu pt-0" aria-labelledby="navbarDropdown">
                        <div class="container mainNav-links mb-4">
                            <div class="mainNav-links-container row">
                                <div class="col-2 mainNav-links-border-right">
                                    <a class="dropdown-item" href="#">Jordan Mens</a>
                                    <a class="dropdown-item" href="#">Footwear</a>
                                    <a class="dropdown-item" href="#">Clothing</a>
                                    <a class="dropdown-item" href="#">Accessories</a>
                                    <a class="dropdown-item" href="#">New Arrivals</a>
                                    <a class="dropdown-item" href="#">Sale</a>
                                </div>

                                <div class="col-2 mainNav-links-border-right">
                                    <a class="dropdown-item" href="#">Jordan Boys</a>
                                    <a class="dropdown-item" href="#">Footwear</a>
                                    <a class="dropdown-item" href="#">Clothing</a>
                                    <a class="dropdown-item" href="#">Accessories</a>
                                    <a class="dropdown-item" href="#">New Arrivals</a>
                                    <a class="dropdown-item" href="#">Sale</a>

                                    <div>
                                        <a class="dropdown-item mt-2" href="#">Jordan Girls</a>
                                        <a class="dropdown-item" href="#">Footwear</a>
                                        <a class="dropdown-item" href="#">New Arrivals</a>
                                        <a class="dropdown-item" href="#">Sale</a>
                                    </div>
                                </div>

                                <div class="col-5 pr-0">
                                    <img src="http://www.jimmyjazz.com/customfiles/01_19_317x317_dropdown_jordan.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item" id="mainNav-link6">
                    <a class="nav-link text-lowercase" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        adidas
                    </a>
                    <div id="mainNav-dropdown6" class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="container mainNav-links mb-4">
                            <div class="mainNav-links-container row">
                                <div class="col-2 mainNav-links-border-right">
                                    <a class="dropdown-item" href="#">Shop Mens</a>
                                    <a class="dropdown-item" href="#">Sneakers</a>
                                    <a class="dropdown-item" href="#">Casual</a>
                                    <a class="dropdown-item" href="#">BasketBall</a>
                                    <a class="dropdown-item" href="#">Running</a>
                                    <a class="dropdown-item" href="#">Sandals</a>
                                    <a class="dropdown-item" href="#">Clothing</a>
                                </div>

                                <div class="col-2 mainNav-links-border-right">
                                    <a class="dropdown-item" href="#">Shop WoMens</a>
                                    <a class="dropdown-item" href="#">Sneakers</a>
                                    <a class="dropdown-item" href="#">Basketball</a>
                                    <a class="dropdown-item" href="#">Running</a>
                                    <a class="dropdown-item" href="#">Clothing</a>
                                </div>

                                <div class="col-2 mainNav-links-border-right">
                                    <a class="dropdown-item" href="#">Shop Boys</a>
                                    <a class="dropdown-item" href="#">Sneakers</a>
                                    <a class="dropdown-item" href="#">Basketball</a>
                                    <a class="dropdown-item" href="#">Running</a>
                                    <a class="dropdown-item" href="#">Training</a>

                                    <div>
                                        <a class="dropdown-item mt-2" href="#">Shop Girls</a>
                                        <a class="dropdown-item" href="#">Sneakers</a>
                                        <a class="dropdown-item" href="#">Basketball</a>
                                        <a class="dropdown-item" href="#">Running</a>
                                        <a class="dropdown-item" href="#">Training</a>
                                    </div>
                                </div>

                                <div class="col-2 pr-0">
                                    <img src="http://www.jimmyjazz.com/customfiles/06_12_17_317x317_dropdown_adidas.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item" id="mainNav-link7">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Footwear
                    </a>
                    <div id="mainNav-dropdown7" class="dropdown-menu pt-0" aria-labelledby="navbarDropdown">
                        <div class="container mainNav-links mb-4">
                            <div class="mainNav-links-container row">
                                <div class="col mainNav-links-border-right">
                                    <a class="dropdown-item" href="#">Shop Mens</a>
                                    <a class="dropdown-item" href="#">Boots</a>
                                    <a class="dropdown-item" href="#">Casual</a>
                                    <a class="dropdown-item" href="#">Sandals</a>
                                    <a class="dropdown-item" href="#">Sneakers</a>
                                    <a class="dropdown-item" href="#">  BasketBall</a>
                                    <a class="dropdown-item" href="#">  Running</a>
                                    <a class="dropdown-item" href="#">  Training</a>
                                    <a class="dropdown-item" href="#">New Arrivals</a>
                                    <a class="dropdown-item" href="#">Sale</a>
                                    <a class="dropdown-item" href="#">Clearance</a>
                                </div>

                                <div class="col mainNav-links-border-right">
                                    <a class="dropdown-item" href="#">Top Mens Brands</a>
                                    <a class="dropdown-item" href="#">Nike</a>
                                    <a class="dropdown-item" href="#">Jordan</a>
                                    <a class="dropdown-item" href="#">adidas</a>
                                    <a class="dropdown-item" href="#">Saucony</a>
                                    <a class="dropdown-item" href="#">New Balance</a>
                                    <a class="dropdown-item" href="#">Timberland</a>
                                    <a class="dropdown-item" href="#">Puma</a>
                                    <a class="dropdown-item" href="#">Reebok</a>
                                    <a class="dropdown-item" href="#">Under Armour</a>
                                </div>

                                <div class="col mainNav-links-border-right">
                                    <a class="dropdown-item" href="#">Shop Womens</a>
                                    <a class="dropdown-item" href="#">Boots</a>
                                    <a class="dropdown-item" href="#">Casual</a>
                                    <a class="dropdown-item" href="#">Sandals</a>
                                    <a class="dropdown-item" href="#">Sneakers</a>
                                    <a class="dropdown-item" href="#">  BasketBall</a>
                                    <a class="dropdown-item" href="#">  Running</a>
                                    <a class="dropdown-item" href="#">  Training</a>
                                    <a class="dropdown-item" href="#">New Arrivals</a>
                                    <a class="dropdown-item" href="#">Sale</a>
                                    <a class="dropdown-item" href="#">Clearance</a>
                                </div>

                                <div class="col mainNav-links-border-right">
                                    <a class="dropdown-item" href="#">Top Womens Brands</a>
                                    <a class="dropdown-item" href="#">Nike</a>
                                    <a class="dropdown-item" href="#">Reebok</a>
                                    <a class="dropdown-item" href="#">adidas</a>
                                    <a class="dropdown-item" href="#">New Balance</a>
                                    <a class="dropdown-item" href="#">Puma</a>
                                </div>

                                <div class="col mainNav-links-border-right">
                                    <a class="dropdown-item" href="#">Shop Boys</a>
                                    <a class="dropdown-item" href="#">Boots</a>
                                    <a class="dropdown-item" href="#">Casual</a>
                                    <a class="dropdown-item" href="#">Sandals</a>
                                    <a class="dropdown-item" href="#">Sneakers</a>
                                    <a class="dropdown-item" href="#">  BasketBall</a>
                                    <a class="dropdown-item" href="#">  Running</a>
                                    <a class="dropdown-item" href="#">  Training</a>
                                    <a class="dropdown-item" href="#">New Arrivals</a>
                                    <a class="dropdown-item" href="#">Sale</a>
                                    <a class="dropdown-item" href="#">Clearance</a>

                                    <div>
                                        <a class="dropdown-item mt-2" href="#">Top  Brands</a>
                                        <a class="dropdown-item" href="#">Nike</a>
                                        <a class="dropdown-item" href="#">Jordan</a>
                                        <a class="dropdown-item" href="#">Puma</a>
                                        <a class="dropdown-item" href="#">New Balance</a>
                                        <a class="dropdown-item" href="#">adidas</a>
                                        <a class="dropdown-item" href="#">Timberland</a>
                                        <a class="dropdown-item" href="#">Under Armour</a>
                                    </div>
                                </div>

                                <div class="col mainNav-links-border-right">
                                    <a class="dropdown-item" href="#">Shop Girls</a>
                                    <a class="dropdown-item" href="#">Boots</a>
                                    <a class="dropdown-item" href="#">Casual</a>
                                    <a class="dropdown-item" href="#">Sandals</a>
                                    <a class="dropdown-item" href="#">Sneakers</a>
                                    <a class="dropdown-item" href="#">  BasketBall</a>
                                    <a class="dropdown-item" href="#">  Running</a>
                                    <a class="dropdown-item" href="#">  Training</a>
                                    <a class="dropdown-item" href="#">New Arrivals</a>
                                    <a class="dropdown-item" href="#">Sale</a>
                                    <a class="dropdown-item" href="#">Clearance</a>

                                    <div>
                                        <a class="dropdown-item mt-2" href="#">Top  Brands</a>
                                        <a class="dropdown-item" href="#">Nike</a>
                                        <a class="dropdown-item" href="#">Jordan</a>
                                        <a class="dropdown-item" href="#">adidas</a>
                                        <a class="dropdown-item" href="#">Puma</a>
                                        <a class="dropdown-item" href="#">New Balance</a>
                                        <a class="dropdown-item" href="#">Converse</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item" id="mainNav-link8">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Clothing
                    </a>
                    <div id="mainNav-dropdown8" class="dropdown-menu pt-0" aria-labelledby="navbarDropdown">
                        <div class="container mainNav-links mb-4">
                            <div class="mainNav-links-container row">
                                <div class="col mainNav-links-border-right pr-0">
                                    <a class="dropdown-item" href="#">Shop Mens</a>
                                    <a class="dropdown-item" href="#">Sweatshirts</a>
                                    <a class="dropdown-item" href="#">Sweatpants/Joggers</a>
                                    <a class="dropdown-item" href="#">Jeans</a>
                                    <a class="dropdown-item" href="#">Short Sleeve Tees</a>
                                    <a class="dropdown-item" href="#"> Shorts</a>
                                    <a class="dropdown-item" href="#">Light Jackets</a>
                                </div>

                                <div class="col mainNav-links-border-right pr-0">
                                    <a class="dropdown-item" href="#">Top Mens Brands</a>
                                    <a class="dropdown-item" href="#">Nike</a>
                                    <a class="dropdown-item" href="#">Jordan</a>
                                    <a class="dropdown-item" href="#">adidas</a>
                                    <a class="dropdown-item" href="#">Levis</a>
                                    <a class="dropdown-item" href="#">Diamond Supply Co.</a>
                                    <a class="dropdown-item" href="#">Embellish</a>
                                    <a class="dropdown-item" href="#">G-Star</a>
                                    <a class="dropdown-item" href="#">Dope</a>
                                    <a class="dropdown-item" href="#">Heritage</a>
                                    <a class="dropdown-item" href="#">A.K.O.O</a>
                                    <a class="dropdown-item" href="#">Hustle Gang</a>
                                    <a class="dropdown-item" href="#">Hudson Outerwear</a>
                                    <a class="dropdown-item" href="#">American Stitch</a>
                                    <a class="dropdown-item" href="#">Starter</a>
                                    <a class="dropdown-item" href="#">Decibel</a>
                                </div>

                                <div class="col mainNav-links-border-right pr-0">
                                    <a class="dropdown-item" href="#">Shop Womens</a>
                                    <a class="dropdown-item" href="#">Jeans</a>
                                    <a class="dropdown-item" href="#">Athletic Pants</a>
                                    <a class="dropdown-item" href="#">Casual Pants</a>
                                    <a class="dropdown-item" href="#">Short Sleeve TOps</a>
                                    <a class="dropdown-item" href="#">Denim Shorts</a>
                                    <a class="dropdown-item" href="#">Casual Shorts</a>
                                    <a class="dropdown-item" href="#">Tank tops</a>
                                    <a class="dropdown-item" href="#">Dresses</a>
                                </div>

                                <div class="col mainNav-links-border-right pr-0">
                                    <a class="dropdown-item" href="#">Top Womens Brands</a>
                                    <a class="dropdown-item" href="#">Nike</a>
                                    <a class="dropdown-item" href="#">Nike Sportswear</a>
                                    <a class="dropdown-item" href="#">adidas</a>
                                    <a class="dropdown-item" href="#">Levis</a>
                                    <a class="dropdown-item" href="#">Puma</a>
                                </div>

                                <div class="col mainNav-links-border-right pr-0">
                                    <a class="dropdown-item" href="#">Shop Boys</a>
                                    <a class="dropdown-item" href="#">Tops</a>
                                    <a class="dropdown-item" href="#">Sweatshirts</a>
                                    <a class="dropdown-item" href="#">Bottoms</a>
                                    <a class="dropdown-item" href="#">Outerwear</a>
                                    <div>
                                        <a class="dropdown-item mt-2" href="#">Top Brands</a>
                                        <a class="dropdown-item" href="#">Nike</a>
                                        <a class="dropdown-item" href="#">Jordan</a>
                                        <a class="dropdown-item" href="#">Levi</a>
                                    </div>
                                </div>

                                <div class="col mainNav-links-border-right pr-0">
                                    <a class="dropdown-item" href="#">Shop Girls</a>
                                    <a class="dropdown-item" href="#">Tops</a>
                                    <a class="dropdown-item" href="#">Bottoms</a>
                                    <a class="dropdown-item" href="#">Outerwear</a>

                                    <div>
                                        <a class="dropdown-item mt-2" href="#">Top  Brands</a>
                                        <a class="dropdown-item" href="#">Nike</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item" id="mainNav-link9">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Accessories
                    </a>
                    <div id="mainNav-dropdown9" class="dropdown-menu pt-0" aria-labelledby="navbarDropdown">
                        <div class="container mainNav-links mb-4">
                            <div class="mainNav-links-container row">
                                <div class="col-2 mainNav-links-border-right">
                                    <a class="dropdown-item" href="#">Shop Mens</a>
                                    <a class="dropdown-item" href="#">Backpacks and Bags</a>
                                    <a class="dropdown-item" href="#">Beanies</a>
                                    <a class="dropdown-item" href="#">Caps Fitted</a>
                                    <a class="dropdown-item" href="#">Caps Snapback</a>
                                    <a class="dropdown-item" href="#">Hats</a>
                                    <a class="dropdown-item" href="#">Miscellaneous</a>
                                    <a class="dropdown-item" href="#">Seasonal</a>
                                    <a class="dropdown-item" href="#">Socks</a>
                                    <a class="dropdown-item" href="#">Underwear</a>
                                    <a class="dropdown-item" href="#">Watches</a>
                                </div>

                                <div class="col-2 mainNav-links-border-right">
                                    <a class="dropdown-item" href="#">Top Mens Brands</a>
                                    <a class="dropdown-item" href="#">New Era</a>
                                    <a class="dropdown-item" href="#">Mitchell And Ness</a>
                                    <a class="dropdown-item" href="#">Nike</a>
                                    <a class="dropdown-item" href="#">Jordan</a>
                                    <a class="dropdown-item" href="#">Field Grade</a>
                                    <a class="dropdown-item" href="#">Crep Protect</a>
                                    <a class="dropdown-item" href="#">Stance</a>
                                </div>

                                <div class="col-2 mainNav-links-border-right">
                                    <a class="dropdown-item" href="#">Shop Womens</a>
                                    <a class="dropdown-item" href="#">Bags And Backpacks</a>
                                    <a class="dropdown-item" href="#">Belts</a>
                                    <a class="dropdown-item" href="#">Jewelry</a>
                                    <a class="dropdown-item" href="#">Miscellaneous</a>
                                    <a class="dropdown-item" href="#">Seasonal</a>
                                </div>


                                <div class="col-2 mainNav-links-border-right">
                                    <a class="dropdown-item" href="#">Shop Boys</a>
                                    <a class="dropdown-item" href="#">Hats</a>
                                </div>


                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item" id="mainNav-link10">
                    <a class="nav-link new-arrivals" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        New Arrivals
                    </a>
                    <div id="mainNav-dropdown10" class="dropdown-menu pt-0" aria-labelledby="navbarDropdown">
                        <div class="container mainNav-links mb-4">
                            <div class="mainNav-links-container row">
                                <div class="col-2 mainNav-links-border-right">
                                    <a class="dropdown-item" href="#">New Mens</a>
                                    <a class="dropdown-item" href="#">New Footwear</a>
                                    <a class="dropdown-item" href="#">New Clothing</a>
                                    <a class="dropdown-item" href="#">New Accessories</a>


                                <div>
                                    <a class="dropdown-item mt-2" href="#">New Womens</a>
                                    <a class="dropdown-item" href="#">New Footwear</a>
                                    <a class="dropdown-item" href="#">New Clothing</a>
                                    <a class="dropdown-item" href="#">New Accessories</a>
                                </div>
                                </div>

                                <div class="col-2 mainNav-links-border-right">
                                    <a class="dropdown-item" href="#">New Boys</a>
                                    <a class="dropdown-item" href="#">New Footwear</a>
                                    <a class="dropdown-item" href="#">New Clothing</a>
                                    <a class="dropdown-item" href="#">New Accessories</a>

                                    <div>
                                        <a class="dropdown-item mt-2" href="#">New Girls</a>
                                        <a class="dropdown-item" href="#">New Footwear</a>
                                        <a class="dropdown-item" href="#">New Clothing</a>
                                    </div>
                                </div>

                                <div class="col-5">
                                    <img src="http://www.jimmyjazz.com/customfiles/10_24_17_new_arrivals_dropdown_634x317.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item" id="mainNav-link11">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sale
                    </a>
                    <div id="mainNav-dropdown11" class="dropdown-menu pt-0" aria-labelledby="navbarDropdown">
                        <div class="container mainNav-links mb-4">
                            <div class="mainNav-links-container row">
                                <div class="col-2 mainNav-links-border-right">
                                    <a class="dropdown-item" href="#">Sale Mens</a>
                                    <a class="dropdown-item" href="#">Sale Footwear</a>
                                    <a class="dropdown-item" href="#">Sale Clothing</a>
                                    <a class="dropdown-item" href="#">Sale Accessories</a>


                                    <div>
                                        <a class="dropdown-item mt-2" href="#">Sale Womens</a>
                                        <a class="dropdown-item" href="#">Sale Footwear</a>
                                        <a class="dropdown-item" href="#">Sale Clothing</a>
                                        <a class="dropdown-item" href="#">Sale Accessories</a>
                                    </div>
                                </div>

                                <div class="col-2 mainNav-links-border-right">
                                    <a class="dropdown-item" href="#">Sale Boys</a>
                                    <a class="dropdown-item" href="#">Sale Footwear</a>
                                    <a class="dropdown-item" href="#">Sale Clothing</a>
                                    <a class="dropdown-item" href="#">Sale Accessories</a>

                                    <div>
                                        <a class="dropdown-item mt-2" href="#">Sale Girls</a>
                                        <a class="dropdown-item" href="#">Sale Footwear</a>
                                        <a class="dropdown-item" href="#">Sale Clothing</a>
                                    </div>
                                </div>

                                <div class="col-5">
                                    <img src="http://www.jimmyjazz.com/customfiles/4_6_17_634x317_sale_nav.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                <li class="nav-item" id="mainNav-link12">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Clearance
                    </a>
                    <div id="mainNav-dropdown12" class="dropdown-menu pt-0" aria-labelledby="navbarDropdown">
                        <div class="container mainNav-links mb-4">
                            <div class="mainNav-links-container row">
                                <div class="col-2 mainNav-links-border-right">
                                    <a class="dropdown-item" href="#">Mens Clearance</a>
                                    <a class="dropdown-item" href="#">Footwear</a>
                                    <a class="dropdown-item" href="#">Clothing</a>
                                    <a class="dropdown-item" href="#">Accessories</a>

                                    <div>
                                        <a class="dropdown-item mt-2" href="#">Womens Clearance</a>
                                        <a class="dropdown-item" href="#">Footwear</a>
                                        <a class="dropdown-item" href="#">Clothing</a>
                                        <a class="dropdown-item" href="#">Accessories</a>
                                    </div>
                                </div>

                                <div class="col-2 mainNav-links-border-right">
                                    <a class="dropdown-item" href="#">Boys Clearance</a>
                                    <a class="dropdown-item" href="#">Footwear</a>
                                    <a class="dropdown-item" href="#">Clothing</a>

                                    <div>
                                        <a class="dropdown-item mt-2" href="#">Girls Clearance</a>
                                        <a class="dropdown-item" href="#">Footwear</a>
                                    </div>
                                </div>

                                <div class="col-5">
                                    <img src="http://www.jimmyjazz.com/customfiles/05_09_17_634x317_Clearance_dropdown.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
    </nav>
</div>
</div>

@yield('content')


<div class="fluid-container footer-container">
    <div class="container footer">
        <nav class="navbar navbar-expand-lg navbar-light text-uppercase">
            <div class="collapse navbar-collapse" id="footer-nav-container">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Faq</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Careers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Store Locator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Models</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gift Certs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sitemap</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Search Map</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div>
            <p class="pl-3 pt-3">Payment Methods <img src="http://www.jimmyjazz.com/customfiles/sprite-footer-payment-methods.png" height="19" width="187"></p>
        </div>
        <div>
            <p></p>
        </div>
    </div>
</div>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{asset('js/script.js')}}"></script>
<script>$("#search-bar").on('keyup', function(){
        $('.search-results').css('display', 'flex');
        $search = $(this).val();
        $.ajax({
            type: 'get',
            url: '{{ route("shop.searching") }}',
            data: {'search': $search},
            success: function(data){
                $('#table-1-results').html(data);
            }

        });

        $.ajax({
            type: 'get',
            url: '{{ route("shop.searching1") }}',
            data: {'search': $search},
            success: function(data){
                $('#table-2-results').html(data);
            }

        });
    });</script>
</body>
</html>