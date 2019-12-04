@extends('front-end.master')
@section('body')
    <div class="banner-bootom-w3-agileits py-5">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                <span>S</span>ingle
                <span>P</span>age</h3>
            <!-- //tittle heading -->
            <div class="row">
                <div class="col-lg-5 col-md-8 single-right-left ">
                    <div class="grid images_3_of_2">
                        <div class="flexslider">
                            <ul class="slides">
                                <li data-thumb="{{asset('/')}}front-end/images/si1.jpg">
                                    <div class="thumb-image">
                                        <img src="{{ asset($product->product_image) }}" data-imagezoom="true" class="img-fluid" alt=""> </div>
                                </li>
                                <li data-thumb="{{asset('/')}}front-end/images/si2.jpg">
                                    <div class="thumb-image">
                                        <img src="{{ asset($product->product_image) }}" data-imagezoom="true" class="img-fluid" alt=""> </div>
                                </li>
                                <li data-thumb="{{asset('/')}}front-end/images/si3.jpg">
                                    <div class="thumb-image">
                                        <img src="{{ asset($product->product_image) }}" data-imagezoom="true" class="img-fluid" alt=""> </div>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 single-right-left simpleCart_shelfItem">
                    <h3 class="mb-3">{{$product->product_name}}</h3>
                    <p class="mb-3">
                        <span class="item_price">TK. {{$product->product_price}}</span>
                        <label>Free delivery</label>
                    </p>
                    <div class="single-infoagile">
                        <ul>
                            <li class="mb-3">
                                Cash on Delivery Eligible.
                            </li>
                            <li class="mb-3">
                                Shipping Speed to Delivery.
                            </li>
                            <li class="mb-3">
                                EMIs from $655/month.
                            </li>
                            <li class="mb-3">
                                Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C
                            </li>
                        </ul>
                    </div>
                    <div class="product-single-w3l">
                        <p class="my-3">
                            <i class="far fa-hand-point-right mr-2"></i>
                            <label>1 Year</label>Manufacturer Warranty</p>
                        <ul>
                            <li class="mb-1">
                                3 GB RAM | 16 GB ROM | Expandable Upto 256 GB
                            </li>
                            <li class="mb-1">
                                5.5 inch Full HD Display
                            </li>
                            <li class="mb-1">
                                13MP Rear Camera | 8MP Front Camera
                            </li>
                            <li class="mb-1">
                                3300 mAh Battery
                            </li>
                            <li class="mb-1">
                                Exynos 7870 Octa Core 1.6GHz Processor
                            </li>
                        </ul>
                        <p class="my-sm-4 my-3">
                            <i class="fas fa-retweet mr-3"></i>Net banking & Credit/ Debit/ ATM card
                        </p>
                    </div>
                    <div class="occasion-cart">
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                            {{ Form::open(['route'=>'add-to-cart', 'method'=>'POST']) }}
                            <div class="color-quality">
                                <h6>Quantity :</h6>
                                <div class="quantity">
                                    <input type="number" name="qty" value="1" min="1"/>
                                    <input type="hidden" name="id" value="{{ $product->id }}"/>
                                </div>
                            </div>
                            <div class="women">
                                <span class="size">XL / XXL / S </span>
                                <input type="submit" name="btn" value="Add To Cart" class="button"/>
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Single Page -->

    <!-- middle section -->
    <div class="join-w3l1 py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <div class="row">
                <div class="col-lg-6">
                    <div class="join-agile text-left p-4">
                        <div class="row">
                            <div class="col-sm-7 offer-name">
                                <h6>Smooth, Rich & Loud Audio</h6>
                                <h4 class="mt-2 mb-3">Branded Headphones</h4>
                                <p>Sale up to 25% off all in store</p>
                            </div>
                            <div class="col-sm-5 offerimg-w3l">
                                <img src="{{asset('/')}}front-end/images/off1.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <div class="join-agile text-left p-4">
                        <div class="row ">
                            <div class="col-sm-7 offer-name">
                                <h6>A Bigger Phone</h6>
                                <h4 class="mt-2 mb-3">Smart Phones 5</h4>
                                <p>Free shipping order over $100</p>
                            </div>
                            <div class="col-sm-5 offerimg-w3l">
                                <img src="{{asset('/')}}front-end/images/off2.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection