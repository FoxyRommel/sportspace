@extends('layouts.app')

@section('content')

    @if($products)
        <div class="products">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="product_grid">

                            <!-- Products list -->

                            @each('catalog.shared.product', $products, 'item')

                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- Ad -->
    <div class="avds_xl">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="avds_xl_container clearfix">
						<div class="avds_xl_background" style="background-image:url(images/istockphoto-1188462138-612x612.jpg)"></div>
						<div class="avds_xl_content">
							<div class="avds_title">Новые поступления</div>
							<div class="avds_text">Большой выбор мячей для всех активных видов спорта</div>
							<div class="avds_link avds_xl_link"><a href="{{ route('catalog') }}">Смотреть сейчас</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
   	<!-- Icon Boxes -->

	<div class="icon_boxes">
		<div class="container">
			<div class="row icon_box_row">

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_1.svg" alt=""></div>
						<div class="icon_box_title">Бесплатная доставка</div>
						<div class="icon_box_text">
							<p>Бесплатная доставка при покупке от 200 рублей.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_2.svg" alt=""></div>
						<div class="icon_box_title">Безопасный шопинг</div>
						<div class="icon_box_text">
							<p>100% гарантия безопасности покупок</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_3.svg" alt=""></div>
						<div class="icon_box_title">Поддержка</div>
						<div class="icon_box_text">
							<p>Онлайн чат для покупателей 24/7</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_border"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="newsletter_content text-center">
						<div class="newsletter_title">Подписывайтесь на нашу новостную рассылку</div>
						<div class="newsletter_text"><p>Оставьте свой Email и мы будем сообщать о новинках и акциях нашего магазина.</p></div>
						<div class="newsletter_form_container">
							<form action="#" id="newsletter_form" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required">
								<button class="newsletter_button trans_200"><span>Подписаться</span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
