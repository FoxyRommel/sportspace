<!-- Product card -->

<div class="product">
	<div class="product_image"><img src="{{ $item->thumbnail }}" alt="{{ $item->title }}"></div>
			<div class="product_content">
			<div class="product_title"><a href="{{ route('product', ['product' => $item]) }}">{{ $item->title }}</a></div>
		<div class="product_price">{{ $item->price }}</div>
    </div>

</div><!-- /.product-card -->
