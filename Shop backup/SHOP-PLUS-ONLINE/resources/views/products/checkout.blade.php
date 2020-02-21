@extends('master')
@section('content')
    <?php $total = 0; $quatity=0 ?>
    @foreach((array) session('cart') as $id => $details)
        <?php $total += $details['price'] * $details['quantity'];
        $quatity += $details['quantity']
        ?>
    @endforeach
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <div class="col-md-7">
                    <!-- Billing Details -->
                    <div class="billing-details">
                        <div class="section-title">
                            <h3 class="title">Thông tin khách h</h3>
                        </div>
                        <form action="{{url('/checkout/'.$total.'/'.$quatity)}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input class="input" type="text" name="name" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input class="input" type="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="address" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="phone" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <div class="input-checkbox">
                                    <input type="checkbox" id="create-account">
                                    <label for="create-account">
                                        <span></span>
                                        Create Account?
                                    </label>
                                    <div class="caption">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                        <input class="input" type="password" name="password"
                                               placeholder="Enter Your Password">
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- Order notes -->
                    <div class="order-notes">
                        <textarea class="input" name="note" placeholder="Order Notes"></textarea>
                    </div>


                </div>

                <!-- Order Details -->
                <div class="col-md-5 order-details">
                    <div class="section-title text-center">
                        <h3 class="title">Your Order</h3>
                    </div>
                    <div class="order-summary">
                        <div class="order-col">
                            <div><strong>PRODUCT</strong></div>
                            <div><strong>TOTAL</strong></div>
                        </div>
                        <div class="order-products">


                            @foreach(session('cart') as $id => $details)

                                <div class="order-col">
                                    <div>{{ $details['name'] }}</div>
                                    <div>${{ number_format($details['price'])}} * {{$details['quantity']}}</div>
                                </div>
                            @endforeach
                        </div>
                        <div class="order-col">
                            <div>Shiping</div>
                            <div><strong>FREE</strong></div>
                        </div>
                        <div class="order-col">
                            <div><strong>TOTAL</strong></div>
                            <div><strong class="order-total">${{number_format($total)}}</strong></div>
                        </div>
                    </div>
                    <div class="payment-method">
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-1">
                            <label for="payment-1">
                                <span></span>
                                Direct Bank Transfer
                            </label>
                            <div class="caption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-2">
                            <label for="payment-2">
                                <span></span>
                                Cheque Payment
                            </label>
                            <div class="caption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-3">
                            <label for="payment-3">
                                <span></span>
                                Paypal System
                            </label>
                            <div class="caption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="input-checkbox">
                        <input type="checkbox" id="terms">
                        <label for="terms">
                            <span></span>
                            I've read and accept the <a href="#">terms &amp; conditions</a>
                        </label>
                    </div>
                    <button class="primary-btn order-submit" type="submit">Place order</button>
                    @csrf
                </div>
                </form>
                <!-- /Order Details -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
@endsection
