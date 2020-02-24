@extends('default')
@section('content')
    @foreach($products as $product)
    <div class="col-md-3 col-xs-3">
        <div class="product">
            <div class="product-img">
                <a href="{{route('product.detail', $product->id)}}">
                <img src="{{$product->image}}" width="263px" height="263px">
                </a>
                <div class="product-label">
                    <span class="sale">-20%</span>
                    <span class="new">NEW</span>
                </div>
            </div>
            <div class="product-body">
                <h3 class="product-name"><a href="">{{$product->name}}</a></h3>
                <h4 class="product-price">${{$product->price}} <del class="product-old-price">${{$product->price * 2}}</del></h4>
                <div class="product-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <div class="product-btns">
                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                </div>
            </div>
            <div class="add-to-cart">
                <a href="{{route('addToCart',$product->id)}}">
                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart">

                    </i> add to cart</button> </a>
            </div>
        </div>
    </div>
    @endforeach

@endsection
<script src="https://kit.fontawesome.com/92c99bd371.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{asset('js/ajax.js')}}"></script>
