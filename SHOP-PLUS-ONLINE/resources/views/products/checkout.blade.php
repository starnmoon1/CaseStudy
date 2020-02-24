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
                            <h3 class="title">Customer Infomation</h3>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br />
                        @endif
                        <form action="{{url('/checkout/'.$total.'/'.$quatity)}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input class="input" type="text" name="name" placeholder="Name" value="{{old('name')}}">
                            </div>
                            <div class="form-group">
                                <input class="input" type="email" name="email" placeholder="Email" value="{{old('email')}}">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="address" placeholder="Address" value="{{old('address')}}">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="phone" placeholder="Phone" value="{{old('phone')}}">
                            </div>
                            <div class="form-group">
                            </div>
                    </div>
                    <!-- Order notes -->
                    <div class="order-notes">
                        <textarea class="input" name="note" placeholder="Order Notes" value="{{old('note')}}"></textarea>
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
                    <button class="primary-btn order-submit" type="submit">Check Out</button>
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
