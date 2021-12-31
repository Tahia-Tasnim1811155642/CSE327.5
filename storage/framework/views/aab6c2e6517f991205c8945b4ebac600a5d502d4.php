
	<main id="main" class="main-site">

<div class="container">

	<div class="wrap-breadcrumb">
		<ul>
			<li class="item-link"><a href="/" class="link">home</a></li>
			<li class="item-link"><span>Cart</span></li>
		</ul>
	</div>
	<div class=" main-content-area">

		<div class="wrap-iten-in-cart">
			<?php if(Session::has('success_message')): ?>

			   <div class="alert alert-success" role="alert">
					 <strong>Success</strong><?php echo e(Session::get('success_message')); ?>

			   </div>
			<?php endif; ?>

			<?php if(Cart::count() >0): ?>
			<h3 class="box-title">Products Name</h3>
			<ul class="products-cart">
				<?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li class="pr-cart-item">
					<div class="product-image">
						<figure><img src="<?php echo e(asset ('assets/images/products')); ?>/<?php echo e($item->model->image); ?>" alt="<?php echo e($item->model->name); ?>"></figure>
					</div>
					<div class="product-name">
						<a class="link-to-product" href="<?php echo e(route('product.details', ['slug'=>$item->model->slug])); ?>"><?php echo e($item->model->name); ?></a>
					</div>
					<div class="price-field produtc-price"><p class="price">$<?php echo e($item->model->regular_price); ?></p></div>
					<div class="quantity">
						<div class="quantity-input">
							<input type="text" name="product-quatity" value="<?php echo e($item->qty); ?>" data-max="120" pattern="[0-9]*" >									
							<a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity('<?php echo e($item->rowId); ?>')"></a>
							<a class="btn btn-reduce" href="#"   wire:click.prevent="decreaseQuantity('<?php echo e($item->rowId); ?>')"></a>
						</div>
					</div>
					<div class="price-field sub-total"><p class="price">$<?php echo e($item->subtotal); ?></p></div>
					<div class="delete">
						<a href="#"  wire:click.prevent="destroy('<?php echo e($item->rowId); ?>')" class="btn btn-delete" title="">
							<span>Delete from your cart</span>
							<i class="fa fa-times-circle" aria-hidden="true"></i>
						</a>
					</div>
				</li>	
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>											
			</ul>
			<?php else: ?>
				<p>No item in the cart</p>
			<?php endif; ?>
		</div>

		<div class="summary">
			<div class="order-summary">
				<h4 class="title-box">Order Summary</h4>
				<p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>	
			    <p class="summary-info total-info "><span class="title">Total</span><b class="index">$<?php echo e(Cart::subtotal()); ?></b></p>
						
			</div>
			<div class="checkout-info">
				<a class="btn btn-checkout" href="checkout.html">Check out</a>
			</div>
		</div>

		
	</div>
</div>

</main><?php /**PATH C:\xampp\htdocs\Online_Grocery_Shop\resources\views/livewire/cart-component.blade.php ENDPATH**/ ?>