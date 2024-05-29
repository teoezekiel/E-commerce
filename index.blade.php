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

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>