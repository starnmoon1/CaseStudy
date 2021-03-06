<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
            </ul>
            <ul class="header-links pull-right">
                <li><a href="{{route('login')}}">Login</a></li>
                <li><a href="{{route('register')}}">Register</a></li>

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
                            <select class="input-select">
                                <option value="0">All Categories</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            <input class="input" placeholder="Search here" name="keyword">
                            <button class="search-btn" type="submit">Search</button>
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
                                <span>Your Wishlist</span>
                                <div class="qty">2</div>
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
                                            <img src="./img/product01.png" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">{{ $details['name'] }}</a></h3>
                                            <h4 class="product-price"><span class="qty">{{ $details['quantity'] }}x</span>
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
                                    <a href="{{route('product.cart')}}">View Cart</a>
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
