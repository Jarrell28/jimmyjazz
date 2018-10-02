@extends('includes.header')


@section('content')

    <div class="container">
        <div class="row" >
            <div class="col-2 mt-3" id="product-category">
                <ul id="shop">
                    <li><a href="{{route('shop')}}/{{$currentGender ? $currentGender : ''}}/Footwear">Footwear</a>
                        <ul>
                            @foreach($subcategories->where('category_id', '1') as $sub)
                                <li><a href="{{route('shop')}}/{{$currentGender ? $currentGender : ''}}/{{$sub->category->category}}/{{$sub->subcategory}}">{{$sub->subcategory}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="mt-2"><a href="{{route('shop')}}/{{$currentGender ? $currentGender : ''}}/Clothing">Clothing</a>
                        <ul>
                            @foreach($subcategories->where('category_id', '2') as $sub)
                                <li><a href="{{route('shop')}}/{{$currentGender ? $currentGender : ''}}/{{$sub->category->category}}/{{$sub->subcategory}}">{{$sub->subcategory}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="mt-2"><a href="{{route('shop')}}/{{$currentGender ? $currentGender : ''}}/Accessories">Accessories</a>
                        <ul>
                            @foreach($subcategories->where('category_id', '3') as $sub)
                                <li><a href="{{route('shop')}}/{{$currentGender ? $currentGender : ''}}/{{$sub->category->category}}/{{$sub->subcategory}}">{{$sub->subcategory}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                        </ul>
            </div>

            <div class="col-5 mt-2" id="product-image-container">
                <p><a style="text-decoration: none; color: #999999; text-transform: uppercase; font-weight: bold" href="{{route('shop.search')}}?keyword=">Shop</a> / <a style="text-decoration: none; color: #999999; text-transform: uppercase; font-weight: bold" href="{{route('shop.gender', [$currentGender])}}">{{$currentGender}}</a> </p>

                <div id="product-image">
                <img src="{{URL::to('/')}}/img/products/{{$product->image}}" alt="">
                </div>
.
            </div>

            <div class="col-3 mt-4 ml-4" id="product-info">
                <h1>{{$product->brand->brand}}</h1>
                <h2>{{$product->title}}</h2>
                <h3 class="pt-2 pb-2">${{$product->price}}</h3>
                <h6 class="mt-4">Color: {{$product->color}}</h6>
                <h6 class="mt-4">Size: {{$product->size->size}}</h6>
                <h6 class="mt-4 mb-4">Quantity: <select name="quantity">
                        @for ($i = 1 ; $i <= $product->quantity; $i++)
                            <option value="{{$i}}">{{$i}}</option>
                            @endfor
                    </select></h6>

                <form action="{{route('shop.addCart')}}" method="post">

                    @csrf

                    <input type="hidden" name="id" value="{{$product->id}}">
                    <input type="hidden" name="brand" value="{{$product->brand->brand}}">
                    <input type="hidden" name="name" value="{{$product->title}}">
                    <input type="hidden" name="price" value="{{$product->price}}">
                    <input type="hidden" name="color" value="{{$product->color}}">
                    <input type="hidden" name="size" value="{{$product->size->size}}">
                    <input type="hidden" name="qty" value="1" id="quantity-value">

                   <button style="border: none; cursor:pointer; width: 12rem" type="submit" id="cart-button-submit">
                        <img id="add-cart" src="{{asset('img/icons/add-to-cart.gif')}}" alt="" style="width: 100%">
                    </button>
                

                </form>

                <p class="mt-3">{{$product->description}}</p>
            </div>


        </div>
    </div>

    <div class="container mt-5 recommends-container mb-3">
        <p class="text-center recommends">You Might Also Like</p>
        <div class="row mt-5 recommend-container">
            @foreach($recommend as $recommends)
        <div class="col-2">
            <a class=" pl-0 recommends-links nav-link" href="{{route('product', [$currentGender, $recommends->title, $recommends->id])}}"><img style="width: 100%; height: 8rem; object-fit: contain" src="{{URL::to('/') }}/img/products/{{$recommends->image}}" alt="">
                <h4 class="mb-0"><span class="recommends-span">{{$recommends->brand->brand}}</span></h4>
                <h6 class="mb-0">{{$recommends->title}}</h6>
                <h5 class="recommends-h5"><span class="recommends-span-2">Size {{$recommends->size->size}}</span></h5>
            </a>
            <p class="recommends-p">${{$recommends->price}}</p>
        </div>
                @endforeach

    </div>
    </div>




    @stop