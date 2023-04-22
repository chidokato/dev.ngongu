@extends('layout.index')
@section('content')
<div id="page_wrapper" class="bg-light">
@include('layout.header_page')

<div class="full-row py-5" style="margin-top: 70px;">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-secondary">Single Blog</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="blog-grid-v1.html">Blog</a></li>
                        <li class="breadcrumb-item active text-primary" aria-current="page">Single Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="full-row pt-0">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 order-xl-2">
                <div class="blog-sidebar widget-box-model">
                    <!-- Search Field -->
                    <div class="widget widget_search">
                        <form role="search" method="get" class="search_form" action="http://localhost/axeman-wp/">
                            <label>
                            <span class="screen-reader-text">Search for:</span>
                            <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                        </label>
                            <input type="submit" class="search-submit" value="Search">
                        </form>
                    </div>
                    <!-- Category Field -->
                    <div class="widget widget_categories">
                        <h5 class="widget-title mb-3">Categories</h5>
                        <ul>
                            <li class="cat-item cat-item-3"><a href="#">Apartment</a> (23)</li>
                            <li class="cat-item cat-item-2"><a href="#">Condo</a> (10)</li>
                            <li class="cat-item cat-item-2"><a href="#">Family House</a> (09)</li>
                            <li class="cat-item cat-item-2"><a href="#">Modern Villa</a> (35)</li>
                            <li class="cat-item cat-item-2"><a href="#">Town House</a> (05)</li>
                        </ul>
                    </div>
                    

                    <!--============== Recent Property Widget Start ==============-->
                    <div class="widget widget_recent_property">
                        <h5 class="text-secondary mb-4">{{$post->name}}</h5>
                        <ul>
                            <li>
                                <img src="assets/images/thumbnaillist/01.jpg" alt="">
                                <div class="thumb-body">
                                    <h6 class="listing-title"><a href="property-single-1.html">Nirala Appartment</a></h6>
                                    <span class="listing-price">$3200<small>( Monthly )</small></span>
                                    <ul class="d-flex quantity font-fifteen">
                                        <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>6500 Sqft</li>

                                    </ul>
                                </div>
                            </li>
                            <li>
                                <img src="assets/images/thumbnaillist/02.jpg" alt="">
                                <div class="thumb-body">
                                    <h6 class="listing-title"><a href="property-single-1.html">Condo House</a></h6>
                                    <span class="listing-price">$11500<small>( Monthly )</small></span>
                                    <ul class="d-flex quantity font-fifteen">
                                        <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>2200 Sqft</li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <img src="assets/images/thumbnaillist/03.jpg" alt="">
                                <div class="thumb-body">
                                    <h6 class="listing-title"><a href="property-single-1.html">Luxury Condos</a></h6>
                                    <span class="listing-price">$17000<small>( Monthly )</small></span>
                                    <ul class="d-flex quantity font-fifteen">
                                        <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>3500 Sqft</li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <img src="assets/images/thumbnaillist/04.jpg" alt="">
                                <div class="thumb-body">
                                    <h6 class="listing-title"><a href="property-single-1.html">Small Appartment</a></h6>
                                    <span class="listing-price">$5200<small>( Monthly )</small></span>
                                    <ul class="d-flex quantity font-fifteen">
                                        <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            <div class="col-xl-8 order-xl-1 sm-mb-30">
                <div class="single-post border summary bg-white p-30 mb-30">
                    <div class="single-post-title">
                        <span class="d-inline-block text-primary">Apartment</span>
                        <h4 class="mb-3 text-secondary">{{$post->name}}</h4>
                        <div class="post-meta list-color-general mb-4">
                            <a href="#"><i class="flaticon-user-silhouette flat-mini"></i> <span>By Admin</span></a>
                            <a href="#"><i class="flaticon-calendar flat-mini"></i> <span>Sep 1, 2019</span></a>
                            <a href="#"><i class="flaticon-comments flat-mini"></i> <span>02</span></a>
                            <a href="#"><i class="flaticon-like flat-mini"></i> <span>30</span></a>
                            <a href="#"><i class="flaticon-eye-1 flat-mini"></i> <span>731</span></a>
                            <span><i class="flaticon-document flat-mini"></i> <a href="#"><span>General</span></a>,<a href="#"><span>Media</span></a></span>
                        </div>
                    </div>
                    <div class="post-image">
                        <img src="data/news/{{$post->post->img}}" alt="Image not found!">
                    </div>
                    <div class="post-content pt-4 mb-5">
                        {!! $post->content !!}
                    </div>
                    <!-- <div class="tagcloud">
                        <h6 class="mb-3">Tags:</h6>
                        <ul>
                            <li><a href="#">general</a></li>
                            <li><a href="#">videos</a></li>
                            <li><a href="#">media</a></li>
                            <li><a href="#">web</a></li>
                            <li><a href="#">parallax</a></li>
                            <li><a href="#">ecommerce</a></li>
                            <li><a href="#">t-shirt</a></li>
                            <li><a href="#">women</a></li>
                            <li><a href="#">trade</a></li>
                            <li><a href="#">animation</a></li>
                            <li><a href="#">theme</a></li>
                        </ul>
                    </div> -->
                    <div class="share-post border-0 px-0 d-flex mt-5">
                        <span class="py-10"><b>Share:</b></span>
                        <div class="media-widget-round-white-primary-shadow">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>

                

                
            </div>
        </div>
    </div>
</div>




@include('layout.footer')
</div>
@endsection
@section('script')

@endsection