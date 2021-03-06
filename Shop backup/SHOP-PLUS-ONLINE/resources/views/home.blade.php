@extends('default')
@section('content')
    <div id="aside" class="col-md-9">

        <div class="col-md-4 col-xs-6">
            <div class="shop">
                <div class="shop-img">
                    <img src="./img/shop01.png" alt="">
                </div>
                <div class="shop-body">
                    <h3>Laptop<br>Collection</h3>
                    <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-xs-6">
            <div class="shop">
                <div class="shop-img">
                    <img src="./img/shop01.png" alt="">
                </div>
                <div class="shop-body">
                    <h3>Laptop<br>Collection</h3>
                    <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-xs-6">
            <div class="shop">
                <div class="shop-img">
                    <img src="./img/shop01.png" alt="">
                </div>
                <div class="shop-body">
                    <h3>Laptop<br>Collection</h3>
                    <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="section-title">
            <h3 class="title">New Products</h3>
            <div class="section-nav">
                <ul class="section-tab-nav tab-nav">
                    <li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
                    <li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
                    <li><a data-toggle="tab" href="#tab1">Cameras</a></li>
                    <li><a data-toggle="tab" href="#tab1">Accessories</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="row">
            <div class="products-tabs">
                <!-- tab -->
                <div id="tab1" class="tab-pane active">
                    <div class="products-slick slick-initialized slick-slider" data-nav="#slick-nav-1">
                        <!-- product -->
                        <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4102px; transform: translate3d(-2344px, 0px, 0px); transition: transform 300ms ease 0s;"><div class="product slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1" style="width: 263px;">
                                    <div class="product-img">
                                        <img src="./img/product02.png" alt="">
                                        <div class="product-label">
                                            <span class="new">NEW</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="" tabindex="-1">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                            <button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                    </div>
                                </div><div class="product slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1" style="width: 263px;">
                                    <div class="product-img">
                                        <img src="./img/product03.png" alt="">
                                        <div class="product-label">
                                            <span class="sale">-30%</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#" tabindex="-1">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                        <div class="product-rating">
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                            <button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                    </div>
                                </div><div class="product slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1" style="width: 263px;">
                                    <div class="product-img">
                                        <img src="./img/product04.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#" tabindex="-1">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                            <button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                    </div>
                                </div><div class="product slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 263px;">
                                    <div class="product-img">
                                        <img src="./img/product05.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#" tabindex="-1">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                            <button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                    </div>
                                </div><div class="product slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 263px;">
                                    <div class="product-img">
                                        <img src="./img/product01.png" alt="">
                                        <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#" tabindex="-1">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                            <button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                    </div>
                                </div><div class="product slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 263px;">
                                    <div class="product-img">
                                        <img src="./img/product02.png" alt="">
                                        <div class="product-label">
                                            <span class="new">NEW</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#" tabindex="-1">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                            <button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                    </div>
                                </div><div class="product slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" style="width: 263px;">
                                    <div class="product-img">
                                        <img src="./img/product03.png" alt="">
                                        <div class="product-label">
                                            <span class="sale">-30%</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#" tabindex="-1">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                        <div class="product-rating">
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                            <button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                    </div>
                                </div><div class="product slick-slide" data-slick-index="3" aria-hidden="true" tabindex="0" style="width: 263px;">
                                    <div class="product-img">
                                        <img src="./img/product04.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#" tabindex="0">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist" tabindex="0"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare" tabindex="0"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                            <button class="quick-view" tabindex="0"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn" tabindex="0"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                    </div>
                                </div>





                                @foreach($products as $product)
                                <div class="product slick-slide slick-current slick-active" data-slick-index="4" aria-hidden="false" tabindex="0" style="width: 263px;">
                                    <div class="product-img">
                                        <img src="{{asset('storage/images/'.$product->image)}}" alt="">
                                    </div>
                                    <div class="product-body">

                                        <h3 class="product-name"><a href="#" tabindex="0">{{$product->name}}</a></h3>
                                        <p class="product-category">{{$product->description}}</p>
                                        <h4 class="product-price">{{$product->price}}</h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist" tabindex="0"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare" tabindex="0"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                            <button class="quick-view" tabindex="0"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <a class="add-to-cart-btn" tabindex="0" href="{{route('addToCart',$product->id)}}"><i class="fa fa-shopping-cart"></i> add to cart</a>
                                    </div>
                                </div>
                                @endforeach

                                {{--end san pham--}}
                            </div>
                        </div>
                    </div>
                    <div id="slick-nav-1" class="products-slick-nav"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: inline-block;">Previous</button><button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: inline-block;">Next</button></div>
                </div>
                <!-- /tab -->
            </div>
        </div>
    </div>
@endsection
