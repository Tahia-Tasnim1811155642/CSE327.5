<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>	
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/animate.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/flexslider.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/chosen.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/color-01.css')); ?>">
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="Hotline: (+123) 456 789" href="#" ><span class="icon label-before fa fa-mobile"></span>Call: 0131133XXXX</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
						<ul>
						         <?php if(Route::has('login')): ?>
								 
								 <?php if(auth()->guard()->check()): ?>
									     <?php if(Auth::user()->utype === 'ADM'): ?>
										 <li class="menu-item menu-item-has-children parent" >
								           	<a title="My Account" href="#"> My Account (<?php echo e(Auth::user()->name); ?>)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									           <ul class="submenu curency" >
									     	<li class="menu-item" >
										     	<a title="Dashboard" href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a>
									    	</li>
									     	<li class="menu-item" >
										     	<a title="Products" href="<?php echo e(route('admin.products')); ?>">All Products</a>
									    	</li>
											
										    <li class="menu-item">
                                                  <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
											</li>

											<form id="logout-form" method="POST" action="<?php echo e(route('logout')); ?>">
                                                 <?php echo csrf_field(); ?>
											</form> 
									    </ul>
							        	</li>
										 <?php else: ?>
										   <li class="menu-item menu-item-has-children parent" >
								           	<a title="My Account" href="#"> My Account (<?php echo e(Auth::user()->name); ?>)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									           <ul class="submenu curency" >
									     	<li class="menu-item" >
										     	<a title="Dashboard" href="<?php echo e(route('user.dashboard')); ?>">Dashboard</a>
									    	</li>

											<li class="menu-item">
                                                  <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
											</li>

											<form id="logout-form" method="POST" action="<?php echo e(route('logout')); ?>">
                                                 <?php echo csrf_field(); ?>
											</form> 
									    </ul>
							        	</li>
										 <?php endif; ?>

								    <?php else: ?>
									      <li class="menu-item" ><a title="Login" href="<?php echo e(route('login')); ?>">Login</a></li>
								          <li class="menu-item" ><a title="Register" href="<?php echo e(route('register')); ?>">Register</a></li>
								    <?php endif; ?>

                                <?php endif; ?>

							</ul>
						</div>
					</div>
				</div>

				<div class="container">

					<div class="mid-section main-info-area">

					    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('head-search-component')->html();
} elseif ($_instance->childHasBeenRendered('2QWK6zo')) {
    $componentId = $_instance->getRenderedChildComponentId('2QWK6zo');
    $componentTag = $_instance->getRenderedChildComponentTagName('2QWK6zo');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('2QWK6zo');
} else {
    $response = \Livewire\Livewire::mount('head-search-component');
    $html = $response->html();
    $_instance->logRenderedChild('2QWK6zo', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

						<div class="wrap-icon right-section">
							<div class="wrap-icon-section wishlist">
								<a href="#" class="link-direction">
									<i class="fa fa-heart" aria-hidden="true"></i>
									<div class="left-info">
										<?php if(Cart::instance('wishlist')->count() > 0): ?>
										     <span class="index"><?php echo e(Cart::instance('wishlist')->count()); ?> item</span>
                                        <?php endif; ?>
										<span class="title">Wishlist</span>
									</div>
								</a>
							</div>
						
							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="nav-section header-sticky">
					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
							
								<li class="menu-item">
									<a href="/shop" class="link-term mercado-item-title">Shop</a>
								</li>
								<li class="menu-item">
									<a href="/cart" class="link-term mercado-item-title">Cart</a>
								</li>
								<li class="menu-item">
									<a href="/checkout" class="link-term mercado-item-title">Checkout</a>
								</li>																	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

    <?php echo e($slot); ?>

	
	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">
			<div class="main-footer-content">

				<div class="container">

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Contact Details</h3>
								<div class="item-content">
									<div class="wrap-contact-detail">
										<ul>
											<li>
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<p class="contact-txt">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
											</li>
											<li>
												<i class="fa fa-phone" aria-hidden="true"></i>
												<p class="contact-txt">0131133XXXX</p>
											</li>
											<li>
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<p class="contact-txt">lorem.lorem@gmail.com</p>
											</li>											
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

							<div class="wrap-footer-item footer-item-second">
								<h3 class="item-header">Sign up for Information</h3>
								<div class="item-content">
									<div class="wrap-newletter-footer">
										<form action="#" class="frm-newletter" id="frm-newletter">
											<input type="email" class="input-email" name="email" value="" placeholder="Enter your email address">
											<button class="btn-submit">Subscribe</button>
										</form>
									</div>
								</div>
							</div>

						</div>
					</div>		
				</div>

			</div>
		</div>
	</footer>
	
	<script src="<?php echo e(asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/jquery.flexslider.js')); ?>"></script>
	<!-- <script src="<?php echo e(asset('assets/js/chosen.jquery.min.js')); ?>"></script> -->
	<script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/jquery.countdown.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/jquery.sticky.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/functions.js')); ?>"></script>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html><?php /**PATH C:\xampp\htdocs\Online_Grocery_Shop\resources\views/layouts/base.blade.php ENDPATH**/ ?>