<?php
    use App\Comment;
    $comments = Comment::all();
?>
<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                @if(Auth::user())
                <li><a href="#"><i class="fa fa-phone"></i>{{Auth::user()->phone}}</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> {{Auth::user()->email}}</a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i> {{Auth::user()->name}}</a></li>
                    @if(Auth::user()->email == 'admin@gmail.com')
                    <li><a href="{{route('user.index')}}"><i class="fas fa-users-cog"></i> Admin</a></li>
                    @endif
                @endif
            </ul>
            <ul class="header-links pull-right">
                @if(Auth::user())
                    <li><a href="{{route('register')}}">Register</a></li>
                    <li><a href="{{route('logout')}}">Logout</a></li>
                @else
                    <li><a href="{{route('register')}}">Register</a></li>
                    <li><a href="{{route('login')}}">Login</a></li>
                @endif
            </ul>

        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="{{route('home')}}" class="logo">
                            <img src="{{asset('img/logo.png')}}" width="169" height="80">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form method="get" action="{{route('product.search')}}">
                            @csrf

                            <input class="input" id="#search-product" placeholder="Search here" name="keyword">
                            <button class="search-btn">Search</button>
                        </form>

                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <!-- Wishlist -->
                        <div>
                            <a href="#">
                                <i class="fa fa-heart-o"></i>
                                <span>Comments</span>

                                <div class="qty">{{$comments->count()}}</div>
                            </a>
                        </div>
                        <!-- /Wishlist -->

                        <!-- Cart -->
                        @if(session('cart'))
                        <div class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <?php $total = 0; $quantity = 0 ?>
                                @foreach((array) session('cart') as $id => $details)
                                    <?php $total += $details['price'] * $details['quantity'];
                                            $quantity += $details['quantity']                                    ?>
                                @endforeach
                                <i class="fa fa-shopping-cart"></i>
                                <span>Your Cart</span>
                                <div class="qty">{{$quantity }}</div>
                            </a>
                            <div class="cart-dropdown">
                                <div class="cart-list">
                                    @if(session('cart'))
                                        @foreach(session('cart') as $id => $details)
                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="{{ $details['image'] }}" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">{{ $details['name'] }}</a></h3>
                                            <h4 class="product-price"><span class="qty">{{ $details['quantity'] }} x</span>
                                                ${{ number_format($details['price']) }}</h4>
                                        </div>
                                        <button class="delete"><i class="fa fa-close"></i></button>
                                    </div>
                                        @endforeach
                                    @endif

                                </div>
                                <div class="cart-summary">
                                    <small>{{$quantity}} Item(s) selected</small>
                                    <h5>SUBTOTAL: ${{number_format($total)}}</h5>
                                </div>
                                <div class="cart-btns">
                                    <a href="{{route('cart')}}">View Cart</a>
                                    <a href="{{route('product.checkout')}}">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endif
                        <!-- /Cart -->

                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
Pa$sw0rd101096
Pa$sw0rd101096
