<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">home</a></li>
					<li class="item-link"><span>Product Category</span></li>
				</ul>
			</div>
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

					<div class="banner-shop">
						<a href="#" class="banner-link">
							<figure><img src="<?php echo e(asset('assets/images/shop-banner.jpg')); ?>" alt=""></figure>
						</a>
					</div>

					<div class="wrap-shop-control">

						<h1 class="shop-title">All Category Product</h1>

						<div class="wrap-right">

							<div class="sort-item orderby ">
								<select name="orderby" class="use-chosen" wire:model="sorting" >
									<option value="default" selected="selected">Default sorting</option>
									<option value="price">Sort by price: low to high</option>
									<option value="price-desc">Sort by price: high to low</option>
								</select>
							</div>

						
						
						</div>

					</div><!--end wrap shop control-->

					<style>
						.product-wish{
							position: absolute;
							top: 10%;
							left: 0;
							z-index: 99;
							right: 30px;
							text-align: right;
							padding-top: 0;
						}

						.product-wish .fa {
							color: #cbcbcb;
							font-size: 32px;
						}

						.product-wish .fa:hover{
							color: #ff7007;
						}

						.fill-heart {
							color: #ff7007 !important;
						}


					</style>

					<div class="row">
						<ul class="product-list grid-products equal-container">

						<?php 
                              $witems = Cart::instance('wishlist')->content()->pluck('id');

					    ?>


						<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail">
										<a href="<?php echo e(route('product.details', ['slug'=>$product->slug])); ?>" title="<?php echo e($product->name); ?>">
											<figure><img src="<?php echo e(asset('assets/images/products')); ?>/<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>" alt="<?php echo e($product->name); ?>"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="<?php echo e(route('product.details', ['slug'=>$product->slug])); ?>" class="product-name"><span><?php echo e($product->name); ?></span></a>
										<div class="wrap-price"><span class="product-price"><?php echo e($product->regular_price); ?> Taka</span></div>
										<a href="#" class="btn add-to-cart" wire:click.prevent="store(<?php echo e($product->id); ?>, '<?php echo e($product->name); ?>',<?php echo e($product->regular_price); ?>)">Add To Cart</a>
										<div class="product-wish">
											  <?php if($witems->contains($product->id)): ?>
                                                  <a href ="#" wire:click.prevent="removeFromWishlist(<?php echo e($product->id); ?>)"><i class="fa fa-heart fill-heart"></i></a>
											  <?php else: ?>
											      <a href ="#" wire:click.prevent = "addTwoWishlist(<?php echo e($product->id); ?>, '<?php echo e($product->name); ?>',<?php echo e($product->regular_price); ?>)"><i class="fa fa-heart"></i></a>
											  <?php endif; ?>
										</div>
									</div>
								</div>
							</li>

							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
				    </div>

				
				</div><!--end main products area-->

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget mercado-widget categories-widget">
						<h2 class="widget-title">All Categories</h2>
						<div class="widget-content">
							<ul class="list-category">
							    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						    	<li class="category-item">
							     	<a href="<?php echo e(route('product.category',['category_slug'=>$category->slug])); ?>" class="cate-link"><?php echo e($category->name); ?></a>
								</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
						</div>
					</div>




			

				</div>

			</div><!--end row-->

		</div><!--end container-->

	</main><?php /**PATH C:\xampp\htdocs\Online_Grocery_Shop\resources\views/livewire/shop-component.blade.php ENDPATH**/ ?>