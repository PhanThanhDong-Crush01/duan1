	<section id="home-section" class="hero">
		<div class="home-slider owl-carousel">
			<div class="slider-item js-fullheight">
				<div class="overlay"></div>
				<div class="container-fluid p-0">
					<div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
						<img class="one-third order-md-last img-fluid" src="../view/images/bg_1.png" alt="">
						<div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading">#New Arrival</span>
								<div class="horizontal">
									<h1 class="mb-4 mt-3">Shoes Collection 2019</h1>
									<p class="mb-4">A small river named Duden flows by their place and supplies it with
										the necessary regelialia. It is a paradisematic country.</p>

									<p><a href="#" class="btn-custom">Discover Now</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item js-fullheight">
				<div class="overlay"></div>
				<div class="container-fluid p-0">
					<div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
						<img class="one-third order-md-last img-fluid" src="../view/images/bg_2.png" alt="">
						<div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading">#New Arrival</span>
								<div class="horizontal">
									<h1 class="mb-4 mt-3">New Shoes Winter Collection</h1>
									<p class="mb-4">A small river named Duden flows by their place and supplies it with
										the necessary regelialia. It is a paradisematic country.</p>

									<p><a href="#" class="btn-custom">Discover Now</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container">
			<div class="row no-gutters ftco-services">
				<div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services p-4 py-md-5">
						<div class="icon d-flex justify-content-center align-items-center mb-4">
							<span class="flaticon-bag"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Free Shipping</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
								there live the blind texts.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services p-4 py-md-5">
						<div class="icon d-flex justify-content-center align-items-center mb-4">
							<span class="flaticon-customer-service"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Support Customer</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
								there live the blind texts.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services p-4 py-md-5">
						<div class="icon d-flex justify-content-center align-items-center mb-4">
							<span class="flaticon-payment-security"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Secure Payments</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
								there live the blind texts.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h2 class="mb-4">New Shoes Arrival</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
			</div>
		</div>
		<!-- <div class="boxsp ' . $mr . '">
	        <div class="row img"><a href="' . $linksp . '"><img src="' . $ha . '" alt=""></a></div>
	        <p id="dongia">$' . $don_gia . '</p>
	        <h3 id="tensp"><a href="' . $linksp . '">' . $ten_sp . '</a></h3>
	        <div class="btnaddtocart">
	            <form action="index.php?act=addtocart" method="post">
	                <input type="hidden" name="ma_sp" value="' . $ma_sp . '">
	                <input type="hidden" name="ten_sp" value="' . $ten_sp . '">
	                <input type="hidden" name="hinh" value="' . $hinh . '">
	                <input type="hidden" name="don_gia" value="' . $don_gia . '">
	                <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
	            </form>
	        </div>
	    </div> -->

		<div class="container">
			<div class="row">
				<?php
				$i = 0;
				foreach ($spnew as $sp) {
					extract($sp);
					$linksp = "index.php?act=sanphamct&idsp=" . $ma_sp;
					$ha = $img_path . $hinh;
					//<!-- 1 item -->
					echo '<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex" >
	                <div class="product d-flex flex-column">
	                    <a href="' . $linksp . '" class="img-prod"><img class="img-fluid" src="' . $ha . '" alt="Colorlib Template">
	                        <div class="overlay"></div>
	                    </a>
	                    <div class="text py-3 pb-4 px-3">
	                        <div class="d-flex">
	                            <div class="cat">
	                                <span>Lifestyle</span>
	                            </div>
	                            <div class="rating">
	                                <p class="text-right mb-0">
	                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
	                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
	                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
	                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
	                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
	                                </p>
	                            </div>
	                        </div>
	                        <h3 style="word-wrap: break-word; white-space: normal; overflow: hidden; display: -webkit-box; text-overflow: ellipsis; -webkit-box-orient: vertical; -webki-line-clamp: 2;"><a href="' . $linksp . '">' . $ten_sp . '</a></h3>
	                        <div class="pricing" >
	                            <p class="price"><span style="color: red;">$' . $don_gia . '</span></p>
	                        </div>
	                        <p class="bottom-area d-flex px-3">
	                            <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i>
                                </span></a>
	                            <a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
	                        </p>
	                    </div>
	                </div> 
	            </div>';
					$i += 1;
				}
				?>
			</div>
		</div>
	</section>


	<section class="ftco-section testimony-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="services-flow">
						<div class="services-2 p-4 d-flex ftco-animate">
							<div class="icon">
								<span class="flaticon-bag"></span>
							</div>
							<div class="text">
								<h3>Free Shipping</h3>
								<p class="mb-0">Separated they live in. A small river named Duden flows</p>
							</div>
						</div>
						<div class="services-2 p-4 d-flex ftco-animate">
							<div class="icon">
								<span class="flaticon-heart-box"></span>
							</div>
							<div class="text">
								<h3>Valuable Gifts</h3>
								<p class="mb-0">Separated they live in. A small river named Duden flows</p>
							</div>
						</div>
						<div class="services-2 p-4 d-flex ftco-animate">
							<div class="icon">
								<span class="flaticon-payment-security"></span>
							</div>
							<div class="text">
								<h3>All Day Support</h3>
								<p class="mb-0">Separated they live in. A small river named Duden flows</p>
							</div>
						</div>
						<div class="services-2 p-4 d-flex ftco-animate">
							<div class="icon">
								<span class="flaticon-customer-service"></span>
							</div>
							<div class="text">
								<h3>All Day Support</h3>
								<p class="mb-0">Separated they live in. A small river named Duden flows</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="heading-section ftco-animate mb-5">
						<h2 class="mb-4">Our satisfied customer says</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
							there live the blind texts. Separated they live in</p>
					</div>
					<div class="carousel-testimony owl-carousel">
						<div class="item">
							<div class="testimony-wrap">
								<div class="user-img mb-4" style="background-image: url(../view/images/person_1.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text">
									<p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the
										countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Garreth Smith</p>
									<span class="position">Marketing Manager</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap">
								<div class="user-img mb-4" style="background-image: url(../view/images/person_2.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text">
									<p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the
										countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Garreth Smith</p>
									<span class="position">Interface Designer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap">
								<div class="user-img mb-4" style="background-image: url(../view/images/person_3.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text">
									<p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the
										countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Garreth Smith</p>
									<span class="position">UI Designer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap">
								<div class="user-img mb-4" style="background-image: url(../view/images/person_1.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text">
									<p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the
										countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Garreth Smith</p>
									<span class="position">Web Developer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap">
								<div class="user-img mb-4" style="background-image: url(../view/images/person_1.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text">
									<p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the
										countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Garreth Smith</p>
									<span class="position">System Analyst</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-gallery">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 heading-section text-center mb-4 ftco-animate">
					<h2 class="mb-4">Follow Us On Instagram</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
						live the blind texts. Separated they live in</p>
				</div>
			</div>
		</div>
		<div class="container-fluid px-0">
			<div class="row no-gutters">
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(../view/images/gallery-1.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(../view/images/gallery-2.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(../view/images/gallery-3.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(../view/images/gallery-4.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/gallery-5.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(../view/images/gallery-5.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/gallery-6.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(../view/images/gallery-6.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>