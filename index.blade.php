@extends('layout.app')
@section('content')
@include('layouts.menubar')
@include('layouts.slider')
@php
$featured = DB::table('products')->where('status',1)->orderBy('id','desc')->limit(12)->get();
$trend = DB::table('products')->where('status',1)->where('trend',1)->orderBy('id','desc')->limit(8)->get();
$best = DB::table('products')->where('status',1)->where('best_rated',1)->orderBy('id','desc')->limit(8)->get();
$hot = DB::table('products')
->join('brands','products.brand_id','brands.id')
->select('products.*','brands.brand_name')
->where('products.status',1)->where('hot_deal',1)->orderBy('id','desc')->limit(3)
->get();
@endphp
<div class="best_seller">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="tabbed_container">
                    <div class="tabs clearfix tab-right">
                        <div class="new_arrivals_title">Hot Best Seller</div>
                            <ul class="clearfix">
                                <li class="active"></li>
                                <li>Audio & video</li>
                                <li>Laptop & Computers</li>
                            </ul>
                        <div class="tabs_line"><span></span></div>    
                    </div>
                        <div class="bestsellers_panel panel active">
                            <!--Best Seller Slider -->
                            <div class="bestsellers_slider slider">
                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div class="bestsellers_item_container d-flex flex-row align-item-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{ asset('public/frontend/images/best_1.png')}}" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Hoodie</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Addias</a></div>
                                            <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>    

                </div>

            </div>

        </div>

    </div>

</div>