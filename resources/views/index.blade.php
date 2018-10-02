@extends('includes.header')


@section('content')

<div class="fluid-container image-slider">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
            <a href="{{route('shop.search')}}?keyword=">
                <img class="d-block w-100" src="{{asset('img/icons/hero1.jpg')}}" alt="Second slide">
            </a>
            </div>

            <div class="carousel-item">
                <a href="{{route('shop.search')}}?keyword=">
                    <img class="d-block w-100" src="{{asset('img/icons/hero2.jpg')}}" alt="Second slide">
                </a>
            </div>
            <div class="carousel-item active">
            <a href="{{route('shop.search')}}?keyword=">
                <img class="d-block w-100" src="{{asset('img/icons/hero3.jpg')}}" alt="First slide">
</a>
            </div>
            <div class="carousel-item">
            <a href="{{route('shop.search')}}?keyword=">
                <img class="d-block w-100" src="{{asset('img/icons/hero4.jpg')}}" alt="Third slide">
</a>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon prev-button" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon next-button" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
    <div class="container">
        <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel" data-interval="0">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="{{route('shop.search')}}?keyword=">
                    <img class="d-block w-100" src="{{asset('img/icons/brands.jpg')}}" alt="First slide">
                    </a>
                    
                </div>
                <div class="carousel-item">
                <a href="{{route('shop.search')}}?keyword=">
                    <img class="d-block w-100" src="{{asset('img/icons/brands1.jpg')}}" alt="Second slide">
                    </a>
                </div>
            </div>
            <a class="carousel-control-prev " href="#carouselExampleControls1" role="button" data-slide="prev" style="left:-5%">
            <span class="prev-button" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next " href="#carouselExampleControls1" role="button" data-slide="next" style="right:-5%">
            <span class="next-button" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
    <div class="container slide-section">
    <div class="row">
        <div class="col-5">
            <a href="{{route('shop.search')}}?keyword=clothing"><img src="{{asset('img/icons/nocodenecessary.jpg')}}" alt=""></a>
            <p>No Code Necessary</p>
        </div>
        <div class="col-5">
            <a href="{{route('shop.search')}}?keyword=footwear"><img src="{{asset('img/icons/shopnewarrivals.jpg')}}" alt=""></a>
            <p>New Arrivals</p>
        </div>
    </div>

        <div class="row">
            <div class="col-5">
                <a href="{{route('shop.search')}}?keyword=cap"><img src="{{asset('img/icons/shopsnapbacks.jpg')}}" alt=""></a>
                <p>Shop Snapbacks</p>
            </div>
            <div class="col-5">
                <a href="{{route('shop.search')}}?keyword=nike"><img src="{{asset('img/icons/newnike.jpg')}}" alt=""></a>
                <p>New Nike for Spring</p>
            </div>
        </div>

        <div id="carouselExampleControls3" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <a href="{{route('shop.search')}}?keyword=">
                    <img class="d-block w-100" src="{{asset('img/icons/shoe1.jpg')}}" alt="First slide">
</a>
                </div>
                <div class="carousel-item">
                <a href="{{route('shop.search')}}?keyword=">
                    <img class="d-block w-100" src="{{asset('img/icons/shoe2.jpg')}}" alt="Second slide">
</a>
                </div>
                <div class="carousel-item">
                <a href="{{route('shop.search')}}?keyword=">
                    <img class="d-block w-100" src="{{asset('img/icons/shoe3.jpg')}}" alt="Third slide">
</a>
                </div>
                <div class="carousel-item">
                <a href="{{route('shop.search')}}?keyword=">
                    <img class="d-block w-100" src="{{asset('img/icons/shoe4.jpg')}}" alt="Fourth slide">
</a>
                </div>
                <div class="carousel-item">
                <a href="{{route('shop.search')}}?keyword=">
                    <img class="d-block w-100" src="{{asset('img/icons/shoe5.jpg')}}" alt="Fifth slide">
</a>
                </div>
                <div class="carousel-item">
                <a href="{{route('shop.search')}}?keyword=">
                    <img class="d-block w-100" src="{{asset('img/icons/shoe6.jpg')}}" alt="Sixth slide">
</a>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls3" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls3" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="row my-4">
            <div class="col-5 text-center" >
                <a  id="footwear-link" class="links" href="{{route('shop.search')}}?keyword=footwear"><span class="align-middle d-inline-block">Shop Footwear</span></a>
            </div>
            <div class="col-5 text-center" >
                <a id="clothing-link" class="links" href="{{route('shop.search')}}?keyword=clothing"><span class=" d-inline-block">Shop Clothing</span></a>
            </div>
        </div>

        <div class="row mt-2 mb-5">
            <div class="col-5 text-center" >
                <a id="accessory-link" class="links" href="{{route('shop.search')}}?keyword=accessories"><span class=" d-inline-block" >Shop Accessories</span></a>
            </div>
            <div class="col-5 text-center" >
                <a  id="all-link" class="links" href="{{route('shop.search')}}?keyword="><span class=" d-inline-block" >New Arrivals</span></a>
            </div>
        </div>
    </div>

    @stop