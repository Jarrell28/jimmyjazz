@extends('includes.header')




@section('content')

    <div class="container">
        <div class="row" >
        <div class="col-2 mt-3">
            <ul id="shop">
                <li><a href="{{route('shop')}}/{{$currentGender ? $genders->gender: ''}}/Footwear">Footwear</a>
                <ul>
                    @foreach($subcategories->where('category_id', '2') as $sub)
                        <li><a href="{{route('shop')}}/{{$currentGender ? $genders->gender : ''}}/Footwear/{{$sub->subcategory}}">{{$sub->subcategory}}</a></li>
                    @endforeach
                </ul>
                </li>
                <li class="mt-2"><a href="{{route('shop')}}/{{$currentGender ? $genders->gender : ''}}/Clothing">Clothing</a>
                <ul>
                    @foreach($subcategories->where('category_id', '1') as $sub)
                        <li><a href="{{route('shop')}}/{{$currentGender ? $genders->gender : ''}}/Clothing/{{$sub->subcategory}}">{{$sub->subcategory}}</a></li>
                    @endforeach
                </ul>
                </li>
                <li class="mt-2"><a href="{{route('shop')}}/{{$currentGender ? $genders->gender : ''}}/Accessories">Accessories</a>
                    <ul>
                        @foreach($subcategories->where('category_id', '3') as $sub)
                            <li><a href="{{route('shop')}}/{{$currentGender ? $genders->gender : ''}}/Accessories/{{$sub->subcategory}}">{{$sub->subcategory}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="mt-2">Filter</li>
                <li class="mt-2">By Brand:
                <ul>
                    @foreach($brand as $brands)
                <li><a href="{{URL::current()}}?brand={{$brands->id}}">{{$brands->brand}}</a></li>
                        @endforeach
                </ul>
                </li>
                <li class="mt-2">By Size:
                    <select name="" id="" onchange="location = this.value;">
                        <option value="">All Sizes</option>
                        @if(!isset($currentCategory))
                            @foreach($sizes as $size)
                        <option value="{{URL::current()}}?size={{$size->size}}">{{$size->size}}</option>
                            @endforeach

                            @elseif($currentCategory === 'Footwear')
                                @foreach($sizes->where('id' , '>', '3') as $size)
                                    <option value="{{URL::current()}}?size={{$size->size}}">{{$size->size}}</option>
                            @endforeach

                            @else
                            @foreach($sizes->where('id' , '<', '4') as $size)
                                <option value="{{URL::current()}}?size={{$size->size}}">{{$size->size}}</option>
                            @endforeach
                            @endif
                    </select>
                </li>
                <li class="mt-2">By Color:
                <ul>
                    <li><a href="{{URL::current()}}?color=black">Black</a></li>
                    <li><a href="{{URL::current()}}?color=blue">Blue</a></li>
                    <li><a href="{{URL::current()}}?color=red">Red</a></li>
                </ul>
                </li>
                <li class="mt-2">By Price:
                <ul>
                    <li><a href="{{URL::current()}}?max-price=20">Under $20</a></li>
                    <li><a href="{{URL::current()}}?min-price=20&max-price=40">$20 to $40</a></li>
                    <li><a href="{{URL::current()}}?min-price=40&max-price=60">$40 to $60</a></li>
                    <li><a href="{{URL::current()}}?min-price=60&max-price=80">$60 to $80</a></li>
                    <li>
                        <form action="{{URL::current()}}" method="get"><span class="font-weight-normal">$</span><input type="text" name="min-price"> <span class="text-lowercase font-weight-normal">to</span> <span class="font-weight-normal">$</span><input type="text" name="max-price">
                            <button type="submit">Go</button>
                        </form>
                    </li>
                </ul>
                </li>
            </ul>
        </div>
        <div class="col mt-2" id="shop-items">
            <p>Shop  {{$currentGender ? '/ ' . $genders->gender  : ''}} {{isset($currentCategory) ? '/ ' . $currentCategory : ''}} </p>
            <p><span style="color: #000; font-size: 20px;" class="font-italic">{{isset($currentCategory) ? $currentCategory : ''}}</span> <span class="font-italic">{{$currentGender ?  $genders->gender  : ''}}</span></p>
            <hr>
            <span class="mr-1 text-capitalize" style="color: #000;">Sort By:</span><select onchange="location = this.value;" class="mr-2" name="" id="">
                <option value="">Choose Option</option>
                <option value="{{URL::current()}}?sort=desc">Price High - Low</option>
                <option value="{{URL::current()}}?sort=asc">Price Low - High</option>
            </select>
            <span class="mr-1 text-capitalize" style="color: #000;">Per Page:</span> <select onchange="location = this.value;" class="mr-2" name="" id="">
                <option value="">Choose Option</option>
                <option value="{{URL::current()}}?perPage=10">10</option>
                <option value="{{URL::current()}}?perPage=20">20</option>
            </select>
            <div class="d-inline text-capitalize">{{$product->links()}}</div>
            <div class="row mt-2" id="shop-products">
                @foreach($product as $products)
                <div class="col-4 mb-4">
                    <a href="{{route('product', [$currentGender, $products->title, $products->id])}}"><img src="{{URL::to('/') }}/img/products/{{$products->image}}" alt="">
                        <h4>{{$products->brand->brand}}</h4>
                        <h6>{{$products->title}}</h6>
                        <h5>Size: {{$products->size->size}}</h5>
                    </a>
                    <p>${{$products->price}}</p>
                </div>

                @endforeach
            </div>
        </div>
    </div>
    </div>




    @stop