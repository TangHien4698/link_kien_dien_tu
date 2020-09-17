@foreach($listProduct as $value)
    <div class="box-product-first col-md-3-2 col-sm-6 col-xs-12">
        <a href="{{url('/products/'.$value["pro_rewrite"])}}" style="height:max-content;width:max-content;text-decoration:none">
            <div id="ProductImage" class="ProductImage">
                <img alt="{{$value["name"]}}" title="{{$value["name"]}}"
                     src="{{url('/img/'.$value["image"])}}" class="img-responsive"/>
            </div>
            <div class="ProductDetails">
                <strong>{{$value["name"]}}</strong>
            </div>
            <div class="ProductPrice">
                <div class="retail-price disable">
                    <span class="price-label"></span><span class="price"><strike class="RetailPriceValue">
					</strike>
					</span>
                </div>
                <div class="special-price">
                    <span class="price-label"></span><span class="price"><em>
					{{number_format($value["price"])}}₫</em>
					</span>
                </div>
            </div>
        </a>
    </div>
@endforeach
