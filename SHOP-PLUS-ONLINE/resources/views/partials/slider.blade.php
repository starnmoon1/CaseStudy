<div id="aside" class="col-md-3">
    <!-- aside Widget -->
    <div class="aside">
        <h3 class="aside-title">Categories</h3>
        <div class="checkbox-filter">
            @foreach($categories as $category)
            <div class="input-checkbox">
                <input type="checkbox" id="category-1">
                <label for="category-1">
                    <span></span>
                    {{$category->name}}
                    <small>({{$category->products->count()}})</small>
                </label>
            </div>
            @endforeach

        </div>
    </div>
    <!-- /aside Widget -->

    <!-- aside Widget -->
    <div class="aside">
        <h3 class="aside-title">Price</h3>
        <div class="price-filter">
            <div id="price-slider" class="noUi-target noUi-ltr noUi-horizontal"><div class="noUi-base"><div class="noUi-origin" style="left: 0%;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="0.0" aria-valuetext="1.00" style="z-index: 5;"></div></div><div class="noUi-connect" style="left: 0%; right: 0%;"></div><div class="noUi-origin" style="left: 100%;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="100.0" aria-valuetext="999.00" style="z-index: 4;"></div></div></div></div>
            <div class="input-number price-min">
                <input id="price-min" type="number">
                <span class="qty-up">+</span>
                <span class="qty-down">-</span>
            </div>
            <span>-</span>
            <div class="input-number price-max">
                <input id="price-max" type="number">
                <span class="qty-up">+</span>
                <span class="qty-down">-</span>
            </div>
        </div>
    </div>
    <!-- /aside Widget -->

    <!-- aside Widget -->
    <div class="aside">
        <h3 class="aside-title">Brand</h3>
        <div class="checkbox-filter">
            <div class="input-checkbox">
                <input type="checkbox" id="brand-1">
                <label for="brand-1">
                    <span></span>
                    SAMSUNG
                    <small>(578)</small>
                </label>
            </div>
            <div class="input-checkbox">
                <input type="checkbox" id="brand-2">
                <label for="brand-2">
                    <span></span>
                    LG
                    <small>(125)</small>
                </label>
            </div>
            <div class="input-checkbox">
                <input type="checkbox" id="brand-3">
                <label for="brand-3">
                    <span></span>
                    SONY
                    <small>(755)</small>
                </label>
            </div>
            <div class="input-checkbox">
                <input type="checkbox" id="brand-4">
                <label for="brand-4">
                    <span></span>
                    SAMSUNG
                    <small>(578)</small>
                </label>
            </div>
            <div class="input-checkbox">
                <input type="checkbox" id="brand-5">
                <label for="brand-5">
                    <span></span>
                    LG
                    <small>(125)</small>
                </label>
            </div>
            <div class="input-checkbox">
                <input type="checkbox" id="brand-6">
                <label for="brand-6">
                    <span></span>
                    SONY
                    <small>(755)</small>
                </label>
            </div>
        </div>
    </div>
    <!-- /aside Widget -->

    <!-- aside Widget -->
    <div class="aside">
        <h3 class="aside-title">Top selling</h3>
        @foreach($products as $product)
        <div class="product-widget">
            <div class="product-img">
                <img src="{{$product->image}}" width="60" height="60">
            </div>
            <div class="product-body">
                <p class="product-category">Category</p>
                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                <h4 class="product-price">${{$product->price}} <del class="product-old-price">${{$product->price * 2}}</del></h4>
            </div>
        </div>
        @endforeach
    </div>
</div>
