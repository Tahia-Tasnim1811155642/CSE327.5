<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span>Detail</span></li>
				</ul>
			</div>
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
					<div class="wrap-product-detail">
						<div class="detail-media">
							<div class="product-gallery">
							  <ul>
							    <li>
							    	<img src="<?php echo e(asset( 'assets/images/products')); ?>/<?php echo e(($product->image)); ?>" alt="<?php echo e(($product->name)); ?>">
							    </li>
							  </ul>
							</div>
						</div>
						<div class="detail-info">
                            <h2 class="product-name">Product Name: <b><?php echo e(($product->name)); ?></b></h2>
                            <div class="short-desc">
							       <?php echo e(($product->short_description)); ?>

                            </div>
                            <div class="wrap-price"><span class="product-price">Priec:<?php echo e(($product->regular_price)); ?> Taka</span></div>

                            <div class="quantity">
                            	<span>Quantity:</span>
								<div class="quantity-input">
									<input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" >
									
									<a class="btn btn-reduce" href="#"></a>
									<a class="btn btn-increase" href="#"></a>
								</div>
							</div>
							<div class="wrap-butons">
								<a href="#" class="btn add-to-cart"  style="background-color: orange;"  wire:click.prevent="store(<?php echo e($product->id); ?>, '<?php echo e($product->name); ?>',<?php echo e($product->regular_price); ?>)">Add to Cart</a>
                                <div>
                                    <a href="#"  style="margin-top: 15px;" class="btn btn-success btn-wishlist">Add Wishlist</a>
                                </div>
							</div>
						</div>
						<div class="advance-info">
							<div class="tab-control normal">
								<a href="#description" class="tab-control-item active">description</a>
							</div>
							<div class="tab-contents">
								<div class="tab-content-item active" id="description">
								<?php echo e(($product->description)); ?>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</main><?php /**PATH C:\xampp\htdocs\Online_Grocery_Shop\resources\views/livewire/details-component.blade.php ENDPATH**/ ?>