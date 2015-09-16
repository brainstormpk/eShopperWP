<?php get_header(); ?>

<section id="slider">
	<!--slider-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="slider-carousel" class="carousel slide"
					data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#slider-carousel" data-slide-to="1"></li>
						<li data-target="#slider-carousel" data-slide-to="2"></li>
					</ol>

					<div class="carousel-inner">
						<div class="item active">
							<div class="col-sm-6">
								<h1>
									<span>E</span>-SHOPPER
								</h1>
								<h2>Free E-Commerce Template</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
									do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<button type="button" class="btn btn-default get">Get it now</button>
							</div>
							<div class="col-sm-6">
								<img
									src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/girl1.jpg"
									class="girl img-responsive" alt="" /> <img
									src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/pricing.png"
									class="pricing" alt="" />
							</div>
						</div>
						<div class="item">
							<div class="col-sm-6">
								<h1>
									<span>E</span>-SHOPPER
								</h1>
								<h2>100% Responsive Design</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
									do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<button type="button" class="btn btn-default get">Get it now</button>
							</div>
							<div class="col-sm-6">
								<img
									src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/girl2.jpg"
									class="girl img-responsive" alt="" /> <img
									src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/pricing.png"
									class="pricing" alt="" />
							</div>
						</div>

						<div class="item">
							<div class="col-sm-6">
								<h1>
									<span>E</span>-SHOPPER
								</h1>
								<h2>Free Ecommerce Template</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
									do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<button type="button" class="btn btn-default get">Get it now</button>
							</div>
							<div class="col-sm-6">
								<img
									src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/girl3.jpg"
									class="girl img-responsive" alt="" /> <img
									src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/pricing.png"
									class="pricing" alt="" />
							</div>
						</div>

					</div>

					<a href="#slider-carousel" class="left control-carousel hidden-xs"
						data-slide="prev"> <i class="fa fa-angle-left"></i>
					</a> <a href="#slider-carousel"
						class="right control-carousel hidden-xs" data-slide="next"> <i
						class="fa fa-angle-right"></i>
					</a>
				</div>

			</div>
		</div>
	</div>
</section>
<!--/slider-->

<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="left-sidebar">
					<h2>Category</h2>
					<div class="panel-group category-products" id="accordian">
						<!--category-productsr-->
						<?php
							$taxonomy     = 'product_cat';
							$orderby      = 'name';
							$show_count   = 0; //1 for yes, 0 for no
							$pad_counts   = 0; //1 for yes, 0 for no
							$hierarchical = 1;
							$title 		  = '';
							$empty 		  = false;
							
							$args = array(
								'taxonomy' 	   => $taxonomy,
// 								'orderby'  	   => $orderby,
								'show_count'   => $show_count,
								'pad_counts'   => $pad_counts,
								'hierarchical' => $hierarchical,
								'title_li'     => $title,
								'hide_empty'   => $empty
							);
							
							$all_categories = wp_list_categories( $args ); //get_categories( $args );
							echo '<pre>'; print_r($all_categories); exit;
// 							$all_cat_list = array();
// 							echo '<div class="panel panel-default">';
// 							foreach ($all_categories as $individual_category){
// 								if(!$individual_category->category_parent){
// 									$all_cat_list[$individual_category->term_id][] = array('id' => $individual_category->term_id, 'slug' => $individual_category->slug, 'name'=> $individual_category->name);
// 								}else{
// 									$all_cat_list[$individual_category->category_parent][] = array('id' => $individual_category->term_id, 'slug' => $individual_category->slug, 'name'=> $individual_category->name);
// 								}
// 							}
// 							foreach ($all_cat_list as $each_category_index => $each_category_value){
// 								foreach ($each_category_value as $inner_each_category_index => $inner_each_category_value){
// 									if($each_category_index == $inner_each_category_value['id']){
// 										echo '<div class="panel-heading">';
// 											echo '<h4 class="panel-title">';
// 											if(sizeof($each_category_value) > 1){
// 												echo '<a data-toggle="collapse" data-parent="#accordian" href="#'.$inner_each_category_value['slug'].'"> ';
// 													echo '<span class="badge pull-right"><i class="fa fa-plus"></i></span>'.$inner_each_category_value['name'];
// 												echo '</a>';
// 												echo '<div id="'.$inner_each_category_value['slug'].'" class="panel-collapse collapse">';
// 													echo '<div class="panel-body">';
// 														echo '<ul>';
// 											}else{
// 												echo '<a href="#">'.$inner_each_category_value['name'].'</a>';
// 											}
// 											echo '</h4>';
// 										echo '</div>';
// 									}else{
// 										echo '<li><a href="#">'.$inner_each_category_value["name"].' </a></li>';
// 									}
// 									if($each_category_index == $inner_each_category_value['id']){
// 									if(sizeof($each_category_value) > 1){
// 												echo '</ul>';
// 											echo '</div>';
// 										echo '</div>';
// 									}
// 									}
									
// 								}
// 							}
// 							echo '</div>';exit;
// 							echo '<pre>'; print_r($all_cat_list); exit;
						
						?>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordian"
										href="#sportswear"> <span class="badge pull-right"><i
											class="fa fa-plus"></i></span> Sportswear
									</a>
								</h4>
							</div>
							<div id="sportswear" class="panel-collapse collapse">
								<div class="panel-body">
									<ul>
										<li><a href="#">Nike </a></li>
										<li><a href="#">Under Armour </a></li>
										<li><a href="#">Adidas </a></li>
										<li><a href="#">Puma</a></li>
										<li><a href="#">ASICS </a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordian" href="#mens">
										<span class="badge pull-right"><i class="fa fa-plus"></i></span>
										Mens
									</a>
								</h4>
							</div>
							<div id="mens" class="panel-collapse collapse">
								<div class="panel-body">
									<ul>
										<li><a href="#">Fendi</a></li>
										<li><a href="#">Guess</a></li>
										<li><a href="#">Valentino</a></li>
										<li><a href="#">Dior</a></li>
										<li><a href="#">Versace</a></li>
										<li><a href="#">Armani</a></li>
										<li><a href="#">Prada</a></li>
										<li><a href="#">Dolce and Gabbana</a></li>
										<li><a href="#">Chanel</a></li>
										<li><a href="#">Gucci</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordian"
										href="#womens"> <span class="badge pull-right"><i
											class="fa fa-plus"></i></span> Womens
									</a>
								</h4>
							</div>
							<div id="womens" class="panel-collapse collapse">
								<div class="panel-body">
									<ul>
										<li><a href="#">Fendi</a></li>
										<li><a href="#">Guess</a></li>
										<li><a href="#">Valentino</a></li>
										<li><a href="#">Dior</a></li>
										<li><a href="#">Versace</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a href="#">Kids</a>
								</h4>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a href="#">Fashion</a>
								</h4>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a href="#">Households</a>
								</h4>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a href="#">Interiors</a>
								</h4>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a href="#">Clothing</a>
								</h4>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a href="#">Bags</a>
								</h4>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a href="#">Shoes</a>
								</h4>
							</div>
						</div>
					</div>
					<!--/category-products-->

					<div class="brands_products">
						<!--brands_products-->
						<h2>Brands</h2>
						<div class="brands-name">
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#"> <span class="pull-right">(50)</span>Acne
								</a></li>
								<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde
								</a></li>
								<li><a href="#"> <span class="pull-right">(27)</span>Albiro
								</a></li>
								<li><a href="#"> <span class="pull-right">(32)</span>Ronhill
								</a></li>
								<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly
								</a></li>
								<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn
								</a></li>
								<li><a href="#"> <span class="pull-right">(4)</span>Rösch
										creative culture
								</a></li>
							</ul>
						</div>
					</div>
					<!--/brands_products-->

					<div class="price-range">
						<!--price-range-->
						<h2>Price Range</h2>
						<div class="well text-center">
							<input type="text" class="span2" value="" data-slider-min="0"
								data-slider-max="500" data-slider-step="5"
								data-slider-value="[250,450]" id="sl2"><br /> <b
								class="pull-left">$ 0</b> <b class="pull-right">$ 500</b>
						</div>
					</div>
					<!--/price-range-->

					<div class="shipping text-center">
						<!--shipping-->
						<img
							src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/shipping.jpg"
							alt="" />
					</div>
					<!--/shipping-->

				</div>
			</div>

			<div class="col-sm-9 padding-right">
				<div class="features_items">
					<!--features_items-->
					<h2 class="title text-center">Features Items</h2>
					<div class="col-sm-4">
						<div class="product-carousel product-image-wrapper">
							<div class="single-product single-products">
								<div class="productinfo text-center">
									<div class="product-f-image">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/product1.jpg" alt="" />
										<div class="product-hover">
	                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
	                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
	                                    </div>
                                    </div>
									<h2>$56</h2>
									<p>Easy Polo Black Edition</p>
<!-- 									<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
								</div>
							</div>
							<div class="choose">
								<ul class="nav nav-pills nav-justified">
									<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
									<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="product-carousel product-image-wrapper">
							<div class="single-product single-products">
								<div class="productinfo text-center">
									<div class="product-f-image">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/product2.jpg" alt="" />
										<div class="product-hover">
	                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
	                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
		                                </div>
		                            </div>
									<h2>$56</h2>
									<p>Easy Polo Black Edition</p>
<!-- 									<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
								</div>
							</div>
							<div class="choose">
								<ul class="nav nav-pills nav-justified">
									<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
									<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="product-carousel product-image-wrapper">
							<div class="single-product single-products">
								<div class="productinfo text-center">
									<div class="product-f-image">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/product3.jpg" alt="" />
										<div class="product-hover">
	                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
	                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
			                            </div>
			                        </div>
									<h2>$56</h2>
									<p>Easy Polo Black Edition</p>
<!-- 									<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
								</div>
							</div>
							<div class="choose">
								<ul class="nav nav-pills nav-justified">
									<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
									<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="product-carousel product-image-wrapper">
							<div class="single-product single-products">
								<div class="productinfo text-center">
									<div class="product-f-image">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/product4.jpg" alt="" />
										<div class="product-hover">
	                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
	                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
			                            </div>
									</div>
									<h2>$56</h2>
									<p>Easy Polo Black Edition</p>
<!-- 									<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
								</div>
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/new.png" class="new" alt="" />
							</div>
							<div class="choose">
								<ul class="nav nav-pills nav-justified">
									<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
									<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="product-carousel product-image-wrapper">
							<div class="single-product single-products">
								<div class="productinfo text-center">
									<div class="product-f-image">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/product5.jpg" alt="" />
										<div class="product-hover">
	                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
	                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
			                            </div>
			                        </div>
									<h2>$56</h2>
									<p>Easy Polo Black Edition</p>
<!-- 									<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
								</div>
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/sale.png" class="new" alt="" />
							</div>
							<div class="choose">
								<ul class="nav nav-pills nav-justified">
									<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
									<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="product-carousel product-image-wrapper">
							<div class="single-product single-products">
								<div class="productinfo text-center">
									<div class="product-f-image">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/product6.jpg" alt="" />
										<div class="product-hover">
	                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
	                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
			                            </div>
									</div>
									<h2>$56</h2>
									<p>Easy Polo Black Edition</p>
<!-- 									<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
								</div>
							</div>
							<div class="choose">
								<ul class="nav nav-pills nav-justified">
									<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
									<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>
				<!--features_items-->

				<div class="category-tab">
					<!--category-tab-->
					<div class="col-sm-12">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>
							<li><a href="#blazers" data-toggle="tab">Blazers</a></li>
							<li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>
							<li><a href="#kids" data-toggle="tab">Kids</a></li>
							<li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane fade active in" id="tshirt">
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img
												src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/gallery1.jpg"
												alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i
												class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>

									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img
												src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/gallery2.jpg"
												alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i
												class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>

									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img
												src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/gallery3.jpg"
												alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i
												class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>

									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img
												src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/gallery4.jpg"
												alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i
												class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>

									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="blazers">
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img
												src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/gallery4.jpg"
												alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i
												class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>

									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img
												src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/gallery3.jpg"
												alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i
												class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>

									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img
												src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/gallery2.jpg"
												alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i
												class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>

									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img
												src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/gallery1.jpg"
												alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i
												class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>

									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="sunglass">
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img
												src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/gallery3.jpg"
												alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i
												class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>

									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img
												src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/gallery4.jpg"
												alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i
												class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>

									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img
												src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/gallery1.jpg"
												alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i
												class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>

									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img
												src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/gallery2.jpg"
												alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i
												class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>

									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="kids">
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img
												src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/gallery1.jpg"
												alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i
												class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>

									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img
												src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/gallery2.jpg"
												alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i
												class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>

									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img
												src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/gallery3.jpg"
												alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i
												class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>

									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img
												src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/gallery4.jpg"
												alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i
												class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>

									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="poloshirt">
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img
												src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/gallery2.jpg"
												alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i
												class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>

									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img
												src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/gallery4.jpg"
												alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i
												class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>

									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img
												src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/gallery3.jpg"
												alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i
												class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>

									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img
												src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/gallery1.jpg"
												alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i
												class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/category-tab-->

				<div class="recommended_items">
					<!--recommended_items-->
					<h2 class="title text-center">recommended items</h2>

					<div id="recommended-item-carousel" class="carousel slide"
						data-ride="carousel">
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img
													src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/recommend1.jpg"
													alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i
													class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img
													src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/recommend2.jpg"
													alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i
													class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img
													src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/recommend3.jpg"
													alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i
													class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img
													src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/recommend1.jpg"
													alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i
													class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img
													src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/recommend2.jpg"
													alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i
													class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img
													src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/recommend3.jpg"
													alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i
													class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
						<a class="left recommended-item-control"
							href="#recommended-item-carousel" data-slide="prev"> <i
							class="fa fa-angle-left"></i>
						</a> <a class="right recommended-item-control"
							href="#recommended-item-carousel" data-slide="next"> <i
							class="fa fa-angle-right"></i>
						</a>
					</div>
				</div>
				<!--/recommended_items-->

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>