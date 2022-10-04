<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>



<footer id="footer">
	<div class="footer__wave">
	</div>

	<!-- <svg class="footer-wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
		<path fill="#FFE069" fill-opacity="1" d="M0,0L80,10.7C160,21,320,43,480,90.7C640,139,800,213,960,224C1120,235,1280,181,1360,154.7L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
		<use id="use" xlink:href="#shape2" />
	</svg> -->

	<div class="row w-100 ms-0 footer-content">

		<div class="col-3 bottom-block-1 m-0">
			<div class="logo-bottom">
				Logo Bottom Left
			</div>
		</div>
		<div class="col-6 bottom-block-2 row m-0">
			<div class="bottom-block-2-1 col-12 row m-0">
				<div class="address col-6 col-md-7 col-lg-6 ps-0">
					<div class="address__info">
						<p class="m-0 bottom-block-2-zipcode">〒370-0031</p>
						<p class="m-0 address">群馬県高崎市上大類町42</p>
					</div>
					<div class="address__location">
						<a href="#" class="btn link-location"><i class="fa-solid fa-location-dot location-icon me-2"></i>MAP</a>
					</div>
				</div>
				<div class="contact col-6 col-md-5 col-lg-6">
					<p class="m-0">
						TEL: <span class="phone-number">06-6747-9400</span>
					</p>
				</div>
			</div>

			<div class="bottom-block-2-2 col-12 row m-0">
				<div class="menu-bottom col-12 p-0">
					<ul class="bottom-nav nav m-0">
						<li class="bottom-nav-item m-0">
							<p class="m-0 --jp">ITEM-1</p>
							<p class="m-0 --en">
								HOME
							</p>
						</li>
						<li class="bottom-nav-item m-0">
							<p class="m-0 --jp">ITEM-2</p>
							<p class="m-0 --en">
								CONCEPT
							</p>
						</li>
						<li class="bottom-nav-item m-0">
							<p class="m-0 --jp">ITEM-3</p>
							<p class="m-0 --en">
								FARMER
							</p>
						</li>
						<li class="bottom-nav-item m-0">
							<p class="m-0 --jp">ITEM-4</p>
							<p class="m-0 --en">
								COMPANY
							</p>
						</li>
						<li class="bottom-nav-item m-0">
							<p class="m-0 --jp">ITEM-5</p>
							<p class="m-0 --en">
								ORDER
							</p>
						</li>
					</ul>
				</div>

			</div>


		</div>

		<div class="footer-block-3 col-3 row">
			<div class="about col-12 p-0">
				<p class="m-0">
					R2 群馬県高崎市宿大類町 宿-1
				</p>
				<p class="m-0">
					群馬県高崎市宿大類町群馬県高崎市宿大類町
				</p>
			</div>
			<div class="copy-right col-12 p-0">
				<p class="m-0">@2022 FLOG&FROG</p>
			</div>
		</div>
	</div><!-- .section-inner -->

</footer><!-- #site-footer -->

<?php wp_footer(); ?>

</body>

</html>