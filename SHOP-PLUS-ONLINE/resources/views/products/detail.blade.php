@extends('master')
@section('content')
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Product main img -->
                <div class="col-md-5 col-md-push-2">
                    <div id="product-main-img" class="slick-initialized slick-slider">
                        <button class="slick-prev slick-arrow" aria-label="Previous" type="button"
                                style="display: block;">Previous
                        </button>
                        <div class="slick-list draggable">
                            <div class="slick-track" style="opacity: 1; width: 1832px;">
                                <div class="product-preview slick-slide slick-current slick-active" data-slick-index="0"
                                     aria-hidden="false" tabindex="0"
                                     style="width: 458px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1; overflow: hidden;">
                                    <img src="{{$product->image}}" width="458" height="458">
                                    <img role="presentation"
                                         src="{{$product->image}}" class="zoomImg" width="600" height="600"
                                         style="position: absolute; top: -76.5808px; left: -68.6747px; opacity: 0; width: 600px; height: 600px; border: none; max-width: none; max-height: none;">
                                </div>
                                <div class="product-preview slick-slide" data-slick-index="1" aria-hidden="true"
                                     tabindex="-1"
                                     style="width: 458px; position: relative; left: -458px; top: 0px; z-index: 998; opacity: 0; overflow: hidden;">
                                    <img src="{{asset('img/product03.png')}}" alt="">
                                    <img role="presentation"
                                         src="file:///var/www/html/template/electro/img/product03.png" class="zoomImg"
                                         style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 600px; height: 600px; border: none; max-width: none; max-height: none;">
                                </div>
                                <div class="product-preview slick-slide" data-slick-index="2" aria-hidden="true"
                                     tabindex="-1"
                                     style="width: 458px; position: relative; left: -916px; top: 0px; z-index: 998; opacity: 0; overflow: hidden;">
                                    <img src="{{asset('img/product06.png')}}" alt="">
                                    <img role="presentation"
                                         src="file:///var/www/html/template/electro/img/product06.png" class="zoomImg"
                                         style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 600px; height: 600px; border: none; max-width: none; max-height: none;">
                                </div>
                                <div class="product-preview slick-slide" data-slick-index="3" aria-hidden="true"
                                     tabindex="-1"
                                     style="width: 458px; position: relative; left: -1374px; top: 0px; z-index: 998; opacity: 0; overflow: hidden;">
                                    <img src="{{asset('img/product08.png')}}" alt="">
                                    <img role="presentation"
                                         src="file:///var/www/html/template/electro/img/product08.png" class="zoomImg"
                                         style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 600px; height: 600px; border: none; max-width: none; max-height: none;">
                                </div>
                            </div>
                        </div>


                        <button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: block;">
                            Next
                        </button>
                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs" class="slick-initialized slick-slider slick-vertical">
                        <button class="slick-prev slick-arrow" aria-label="Previous" type="button"
                                style="display: block;">Previous
                        </button>
                        <div class="slick-list draggable" style="height: 465px; padding: 0px;">
                            <div class="slick-track"
                                 style="opacity: 1; height: 1860px; transform: translate3d(0px, -465px, 0px);">
                                <div class="product-preview slick-slide slick-cloned" data-slick-index="-4"
                                     aria-hidden="true" tabindex="-1" style="width: 155px;">
                                    <img src="{{asset('img/product01.png')}}" alt="">
                                </div>
                                <div class="product-preview slick-slide slick-cloned" data-slick-index="-3"
                                     aria-hidden="true" tabindex="-1" style="width: 155px;">
                                    <img src="{{asset('img/product03.png')}}" alt="">
                                </div>
                                <div class="product-preview slick-slide slick-cloned" data-slick-index="-2"
                                     aria-hidden="true" tabindex="-1" style="width: 155px;">
                                    <img src="{{asset('img/product06.png')}}" alt="">
                                </div>
                                <div class="product-preview slick-slide slick-cloned slick-active" data-slick-index="-1"
                                     aria-hidden="false" tabindex="-1" style="width: 155px;">
                                    <img src="{{asset('img/product08.png')}}" alt="">
                                </div>
                                <div class="product-preview slick-slide slick-current slick-active slick-center"
                                     data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 155px;">
                                    <img src="{{asset('img/product01.png')}}" alt="">
                                </div>
                                <div class="product-preview slick-slide slick-active" data-slick-index="1"
                                     aria-hidden="false" tabindex="0" style="width: 155px;">
                                    <img src="{{asset('img/product03.png')}}" alt="">
                                </div>
                                <div class="product-preview slick-slide" data-slick-index="2" aria-hidden="true"
                                     tabindex="0" style="width: 155px;">
                                    <img src="{{asset('img/product06.png')}}" alt="">
                                </div>
                                <div class="product-preview slick-slide" data-slick-index="3" aria-hidden="true"
                                     tabindex="-1" style="width: 155px;">
                                    <img src="{{asset('img/product08.png')}}" alt="">
                                </div>
                                <div class="product-preview slick-slide slick-cloned slick-center" data-slick-index="4"
                                     aria-hidden="true" tabindex="-1" style="width: 155px;">
                                    <img src="{{asset('img/product01.png')}}" alt="">
                                </div>
                                <div class="product-preview slick-slide slick-cloned" data-slick-index="5"
                                     aria-hidden="true" tabindex="-1" style="width: 155px;">
                                    <img src="{{asset('img/product03.png')}}" alt="">
                                </div>
                                <div class="product-preview slick-slide slick-cloned" data-slick-index="6"
                                     aria-hidden="true" tabindex="-1" style="width: 155px;">
                                    <img src="{{asset('img/product06.png')}}" alt="">
                                </div>
                                <div class="product-preview slick-slide slick-cloned" data-slick-index="7"
                                     aria-hidden="true" tabindex="-1" style="width: 155px;">
                                    <img src="{{asset('img/product08.png')}}" alt="">
                                </div>
                            </div>
                        </div>

                        <button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: block;">
                            Next
                        </button>
                    </div>
                </div>
                <!-- /Product thumb imgs -->
                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name">{{$product->name}}</h2>
                        <div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a class="review-link" href="#">{{$comments->count()}} Comments | Add your review</a>
                        </div>
                        <div>
                            <h3 class="product-price">${{$product->price}}
                                <del class="product-old-price">{{$product->price * 2}}</del>
                            </h3>
                            <span class="product-available">In Stock</span>
                        </div>
                        <p>Content: {{$product->content}}</p>


                        <div class="add-to-cart">
                            <a href="{{route('addToCart', $product->id)}}">
                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                            </a>
                        </div>

                        <ul class="product-btns">
                            <li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
                            <li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
                        </ul>

                        <ul class="product-links">
                            <li>Category:</li>
                            <li><a href="#">Headphones</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>

                        <ul class="product-links">
                            <li>Share:</li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>

                    </div>
                </div>
                <!-- /Product details -->

                <!-- Product tab -->
                <div class="col-md-12">
                    <div id="product-tab">
                        <!-- product tab nav -->
                        <ul class="tab-nav">
                            <li><a data-toggle="tab" href="#tab1">Description</a></li>
                            <li><a data-toggle="tab" href="#tab2">Details </a></li>
                            <li><a data-toggle="tab" href="#tab3">Comment ({{$comments->count()}})</a></li>
                        </ul>
                        <!-- product tab content -->
                        <div class="tab-content">
                            <!-- tab1  -->
                            <div id="tab1" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>{{$product->description}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /tab1  -->

                            <!-- tab2  -->
                            <div id="tab2" class="tab-pane fade in">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>{{$product->content}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /tab2  -->

                            <!-- tab3  -->
                            <div id="tab3" class="tab-pane fade in">
                                <div class="row">
                                    <!-- Rating -->
                                    <div class="col-md-3">
                                        <div id="rating">
                                            <div class="rating-avg">
                                                <span>4.5</span>
                                                <div class="rating-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <ul class="rating">
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div style="width: 80%;"></div>
                                                    </div>
                                                    <span class="sum">3</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div style="width: 60%;"></div>
                                                    </div>
                                                    <span class="sum">2</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div></div>
                                                    </div>
                                                    <span class="sum">0</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div></div>
                                                    </div>
                                                    <span class="sum">0</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div></div>
                                                    </div>
                                                    <span class="sum">0</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-9">
                                        @if(Auth::user())
                                        <form method="post" action="{{route('comment', $product->id)}}">
                                            @csrf
                                        <div id="reviews">
                                            <ul class="reviews">
                                                <li>
                                                    <div class="review-heading">
                                                        <h5 class="name">{{Auth::user()->name}}</h5>
                                                        <p class="date">27 DEC 2018, 8:0 PM</p>
                                                        <div class="review-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o empty"></i>
                                                        </div>
                                                    </div>

                                                <li>
                                                    <div class="review-body">
                                                        <div>

                                                                <textarea id="subject" name="comment_user" placeholder="Write something.."></textarea>
                                                                <button type="submit" class="btn btn-success">Comment</button>
                                                                <button type="reset" class="btn btn-secondary">Cancel</button>

                                                        </div>
                                                    </div>
                                                </li>
                                                </li>
                                            </ul>

                                            <ul class="reviews">
                                                @foreach($comments as $comment)
{{--                                                <li>--}}
{{--                                                    <div class="review-heading">--}}
{{--                                                        <i class="name">{{Auth::user()->name}}</i>--}}
{{--                                                    </div>--}}
{{--                                                </li>--}}

                                                <li>{{$comment->comment_user}}</li>
                                                @endforeach
                                            </ul>

                                            <ul class="reviews-pagination">
                                                <li class="active">1</li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                            </ul>
                                        </div>
                                        </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- /tab3  -->
                        </div>
                        <!-- /product tab content  -->
                    </div>
                </div>
                <!-- /product tab -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3 class="title">Related Products</h3>
                    </div>
                </div>

                @foreach($products as $product)
                <div class="col-md-3 col-xs-3">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{$product->image}}" width="263" height="263">
                            <div class="product-label">
                                <span class="sale">-30%</span>
                            </div>
                        </div>
                        <div class="product-body">
                            <p class="product-category">Category</p>
                            <h3 class="product-name"><a href="#">{{$product->name}}</a></h3>
                            <h4 class="product-price">${{$product->price}} <del class="product-old-price"></del></h4>
                            <div class="product-rating">
                            </div>
                            <div class="product-btns">
                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                            </div>
                        </div>
                        <div class="add-to-cart">
                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
@endsection
