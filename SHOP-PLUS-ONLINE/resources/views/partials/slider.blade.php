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
