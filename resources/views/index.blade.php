@extends('includes.header')


@section('content')

<div class="fluid-container image-slider">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img class="d-block w-100" src="http://www.jimmyjazz.com/sites/default/files/slideshow/03_16_18_Nike_Airmax270-1903x500_date_0.jpg" alt="Second slide">
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="http://www.jimmyjazz.com/sites/default/files/slideshow/03_13_18_1903x500-Fila_v33.jpg" alt="Second slide">
            </div>
            <div class="carousel-item active">
                <img class="d-block w-100" src="http://www.jimmyjazz.com/sites/default/files/slideshow/03_08_18_1903x500-15OFF_v4.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="http://www.jimmyjazz.com/sites/default/files/slideshow/03_06_18_1903x500-UNK_v2.jpg" alt="Third slide">
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
                    <img class="d-block w-100" src="http://www.jimmyjazz.com/sites/default/files/slideshow/11_14_17_homepagescroll_page1_0.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://www.jimmyjazz.com/sites/default/files/slideshow/11_14_17_homepagescroll_page2_0.jpg" alt="Second slide">
                </div>
            </div>
            <a class="carousel-control-prev " href="#carouselExampleControls1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon prev-button" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next " href="#carouselExampleControls1" role="button" data-slide="next">
                <span class="carousel-control-next-icon next-button" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
    <div class="container slide-section">
    <div class="row">
        <div class="col-5 ml-5">
            <a href="{{route('shop.search')}}?keyword=clothing"><img src="{{asset('img/icons/nocodenecessary.jpg')}}" alt=""></a>
            <p>No Code Necessary</p>
        </div>
        <div class="col-5">
            <a href="{{route('shop.search')}}?keyword=footwear"><img src="http://www.jimmyjazz.com/sites/default/files/slideshow/02_15_18_484x286-AI2998.jpg" alt=""></a>
            <p>New Arrivals</p>
        </div>
    </div>

        <div class="row">
            <div class="col-5 ml-5">
                <a href="{{route('shop.search')}}?keyword=cap"><img src="http://www.jimmyjazz.com/sites/default/files/slideshow/03_02_18_484x286-HPBL.jpg" alt=""></a>
                <p>Shop Snapbacks</p>
            </div>
            <div class="col-5">
                <a href="{{route('shop.search')}}?keyword=nike"><img src="http://www.jimmyjazz.com/sites/default/files/slideshow/3_14_18_484X286.jpg" alt=""></a>
                <p>New Nike for Spring</p>
            </div>
        </div>

        <div id="carouselExampleControls3" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="http://www.jimmyjazz.com/sites/default/files/slideshow/4_6_18_AF1_FOAMPOSITE_PRO_CUP_980x500.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://www.jimmyjazz.com/sites/default/files/slideshow/3_17_18_NIKE_AIR_MORE_UPTEMPO_980x500-date.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://www.jimmyjazz.com/sites/default/files/slideshow/4_5_18_AIR_HUARACHE_RUN_91_QS_980x500.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://www.jimmyjazz.com/sites/default/files/slideshow/3_16_18_NIKE_LITTLE_POSITE_ONE_980x500_date.jpg" alt="Fourth slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://www.jimmyjazz.com/sites/default/files/slideshow/3_15_18_NIKE_PG2_TS-980x500_date.jpg" alt="Fifth slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://www.jimmyjazz.com/sites/default/files/slideshow/4_6_18_NIKE_AIR_VAPORMAX_PLUS_980x500.jpg" alt="Sixth slide">
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

        <div class="row mt-2">
            <div class="col-5 ml-5 text-center" >
                <a  id="footwear-link" class="links" href="{{route('shop.search')}}?keyword=footwear"><span  class="align-middle d-inline-block" style="margin-top: 130px">Shop Footwear</span></a>
            </div>
            <div class="col-5 text-center" >
                <a id="clothing-link" class="links" href="{{route('shop.search')}}?keyword=clothing"><span class=" d-inline-block" style="margin-top: 130px">Shop Clothing</span></a>
            </div>
        </div>

        <div class="row mt-2 mb-5">
            <div class="col-5 ml-5 text-center" >
                <a id="accessory-link" class="links" href="{{route('shop.search')}}?keyword=accessories"><span class=" d-inline-block" style="margin-top: 130px">Shop Accessories</span></a>
            </div>
            <div class="col-5 text-center" >
                <a  id="all-link" class="links" href="{{route('shop.search')}}?keyword="><span class=" d-inline-block" style="margin-top: 130px">New Arrivals</span></a>
            </div>
        </div>
    </div>

    @stop