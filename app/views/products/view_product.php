<?php require APPROOT . "/views/inc/header.php"; ?>

<div class="container d-flex justify-content-center my-5 container_0">
    <div class="d-inline container_1">
        <div class="card" style="width: 90%;">
            <img src="<?php echo URLROOT; ?>/pics/swappie-iphone-11-pro-space-gray-back.avif" class="card-img-top" alt="...">
            <div class="card-body mx-auto">
                <h5 class="card-title">Phone name</h5>
                <p class="card-text">price</p>
            </div>
        </div>
    </div>
    
    <div class="container_2">
        <div class="card-body">
            <a href="http://localhost/PFR/user/cart" class="card-link add_to_cart_btn"><i class="bi bi-cart"></i> Add to cart</a>
        </div>
        <div class="card-body">
            <a href="#" class="card-link add_to_wishlist_btn"><i class="bi bi-cart"></i> Add to Wishlist</a>
        </div>

        <div>
        <h6 class="m-3">
        Description: 
        <small class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil nemo dolores nobis expedita ab totam vel nam at quod corporis.</small>
        </h6>
        </div>
        
        <div class="m-3">
            <h5 class="d-inline"><i class="bi bi-lock"></i> We accept:</h5>

            <img class="visa" src="<?php echo URLROOT; ?>/pics/visa-512.webp" alt="">

            <img class="mc" src="<?php echo URLROOT; ?>/pics/MasterCard_Logo.svg.png" alt="">
        </div>
    </div>
</div>


<div class="container">
    <h3 class="mx-5 mb-1">Products You might be interested in</h3>
</div>
<hr>
<div id="most_sold" class="container">
    <!-- 1 --> 
    <div class="m-1">
        <div class="card" style="width: 14rem;">
        <img src="<?php echo URLROOT; ?>/pics/swappie-iphone-11-pro-space-gray-back.avif" class="card-img-top" alt="...">
        <div class="card-body mx-auto">
            <h5 class="card-title">Phone name</h5>
            <p class="card-text">price</p>
        </div>
        <div class="card-body mx-auto">
            <a href="#" class="card-link add_to_cart"><i class="bi bi-cart"></i> View product</a>
        </div>
        </div>
    </div>
<!-- 2 -->
    <div class="m-1">
        <div class="card" style="width: 14rem;">
        <img src="<?php echo URLROOT; ?>/pics/swappie-iphone-11-pro-space-gray-back.avif" class="card-img-top" alt="...">
        <div class="card-body mx-auto">
            <h5 class="card-title">Phone name</h5>
            <p class="card-text">price</p>
        </div>
        <div class="card-body mx-auto">
            <a href="#" class="card-link add_to_cart"><i class="bi bi-cart"></i> View product</a>
        </div>
        </div>
    </div>
<!-- 3 -->
    <div class="m-1">
        <div class="card" style="width: 14rem;">
        <img src="<?php echo URLROOT; ?>/pics/swappie-iphone-11-pro-space-gray-back.avif" class="card-img-top" alt="...">
        <div class="card-body mx-auto">
            <h5 class="card-title">Phone name</h5>
            <p class="card-text">price</p>
        </div>
        <div class="card-body mx-auto">
            <a href="#" class="card-link add_to_cart"><i class="bi bi-cart"></i> View product</a>
        </div>
        </div>
    </div>
    <!-- 4 -->
    <div class="m-1">
        <div class="card" style="width: 14rem;">
        <img src="<?php echo URLROOT; ?>/pics/swappie-iphone-11-pro-space-gray-back.avif" class="card-img-top" alt="...">
        <div class="card-body mx-auto">
            <h5 class="card-title">Phone name</h5>
            <p class="card-text">price</p>
        </div>
        <div class="card-body mx-auto">
            <a href="#" class="card-link add_to_cart"><i class="bi bi-cart"></i> View product</a>
        </div>
        </div>
    </div>
    
</div>


<?php require APPROOT . "/views/inc/footer.php"; ?>