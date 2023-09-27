<!-- Site footer -->
<div class="footer_overlay"></div>
<footer class="footer">
	<div class="footer_background" style="background-image:url(../images/istockphoto-1361904037-612x612.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
						<div class="footer_logo"><a href="{{ route('home') }}">@yield('title', env('APP_NAME'))</a></div>
						<div class="copyright ml-auto mr-auto">
                        SportSpace, {{ now()->year }} © Все права защещены.</div>
						<div class="footer_social ml-lg-auto">
							<ul>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
</footer>
