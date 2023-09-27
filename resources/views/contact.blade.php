@extends('layouts.catalog')

@section('title', env('APP_NAME'))

<!-- Home -->

<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(../images/contact.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="breadcrumbs">
									<ul>
										<li><a href="{{ route('home') }}">Главная</a></li>
										<li>Контакты</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@section('content')

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Get in touch -->
				<div class="col-lg-8 contact_col">
					<div class="get_in_touch">
						<div class="section_title">Напишите нам</div>
						<div class="section_subtitle">Есть вопросы? Свяжитесь с нами</div>
						<div class="contact_form_container">
							<form action="#" id="contact_form" class="contact_form">
								<div class="row">
									<div class="col-xl-6">
										<!-- Name -->
										<label for="contact_name">Имя*</label>
										<input type="text" id="contact_name" class="contact_input" required="required">
									</div>
									<div class="col-xl-6 last_name_col">
										<!-- Last Name -->
										<label for="contact_last_name">Фамилия*</label>
										<input type="text" id="contact_last_name" class="contact_input" required="required">
									</div>
								</div>
								<div>
									<!-- Subject -->
									<label for="contact_company">Заголовок</label>
									<input type="text" id="contact_company" class="contact_input">
								</div>
								<div>
									<label for="contact_textarea">Сообщение*</label>
									<textarea id="contact_textarea" class="contact_input contact_textarea" required="required"></textarea>
								</div>
								<button class="button contact_button"><span>Отправить сообщение</span></button>
							</form>
						</div>
					</div>
				</div>

				<!-- Contact Info -->
				<div class="col-lg-3 offset-xl-1 contact_col">
					<div class="contact_info">
						<div class="contact_info_section">
							<div class="contact_info_title">Центр продаж</div>
							<ul>
                                <li>Адрес: <span>г. Минск, ул. Чкалова, 26</span></li>
								<li>Телефон: <span>+375 29 7953 324   </span></li>
								<li>Email: <span>sportspace@gmail.com</span></li>
							</ul>
						</div>
						<div class="contact_info_section">
							<div class="contact_info_title">Доставка и возврат</div>
							<ul>
								<li>Телефон: <span>+375 29 7849 324   </span></li>
								<li>Email: <span>sportspace@gmail.com</span></li>
							</ul>
						</div>
						<div class="contact_info_section">
							<div class="contact_info_title">Инфоцентр</div>
							<ul>
								<li>Телефон: <span>+375 29 7953 0000   </span></li>
								<li>Email: <span>sportspace@gmail.com</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row map_row">
				<div class="col">

					<!-- Google Map -->
					<div class="map">
						<div id="google_map" class="google_map">
							<div class="map_container">
								<div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2352.153165285444!2d27.531615675611356!3d53.875704934985286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbd03cd8166ae5%3A0x64663ef3be384133!2z0YPQu9C40YbQsCDQp9C60LDQu9C-0LLQsCAyNiwg0JzQuNC90YHQug!5e0!3m2!1sru!2sby!4v1695634314269!5m2!1sru!2sby" width="1140" height="800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

@endsection
