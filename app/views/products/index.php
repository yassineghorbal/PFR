<?php require APPROOT . "/views/inc/header.php"; ?>




<!-- carousel -->
<div id="carouselExampleControls" class="carousel slide bg-dark" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div id="carousel_1" class="carousel-item active">
        <div id="first_carousel">
            <h4 class="text-white">Samsung Galaxy S22 Ultra</h4>
            <button type="button" class="btn btn-outline-secondary">Buy now!</button>
        </div>
        <img class="d-inline w-25"  src="<?php echo URLROOT; ?>/pics/samsung-galaxy-s22-ultra-frandroid-2022-officiel.webp" alt="first slide">
        
    </div>

    <!-- <div class="carousel-item">
      <img class="d-block w-100"  src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div> -->

    

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> 

<!-- most sold -->
<div class="container">
    <h3 class="mx-5 mt-5">Best Sellers</h3>
</div>
<div id="most_sold" class="container">
    <!-- 1 --> 

    <!-- <i class="bi bi-bookmark-x-fill"></i> remove from wishlist to use later 
    with php [if add_to_wishlist isset()]    -->

    <div class="m-1">
        <div class="card">
        <img src="<?php echo URLROOT; ?>/pics/swappie-iphone-11-pro-space-gray-back.avif" class="card-img-top" alt="...">
        <div class="card-body mx-auto">
            <h5 class="card-title">Product name</h5>
            <p class="card-text">price</p>
        </div>
            <div class="card-body mx-auto">
                <a href="http://localhost/MobiShop/products/view_product" class="card-link add_to_cart"><i class="bi bi-cart"></i> View product</a>
                <a href="http://localhost/MobiShop/user/wishlist"><i class="bi bi-bookmark-check-fill h4"></i></a>
            </div>
        </div>
    </div>
<!-- 2 -->
    <div class="m-1">
        <div class="card">
        <img src="<?php echo URLROOT; ?>/pics/swappie-iphone-11-pro-space-gray-back.avif" class="card-img-top" alt="...">
        <div class="card-body mx-auto">
            <h5 class="card-title">Product name</h5>
            <p class="card-text">price</p>
        </div>
        <div class="card-body mx-auto">
            <a href="#" class="card-link add_to_cart"><i class="bi bi-cart"></i> View product</a> <i class="bi bi-bookmark-check-fill h4"></i>
        </div>
        </div>
    </div>
<!-- 3 -->
    <div class="m-1">
        <div class="card">
        <img src="<?php echo URLROOT; ?>/pics/swappie-iphone-11-pro-space-gray-back.avif" class="card-img-top" alt="...">
        <div class="card-body mx-auto">
            <h5 class="card-title">Product name</h5>
            <p class="card-text">price</p>
        </div>
        <div class="card-body mx-auto">
            <a href="#" class="card-link add_to_cart"><i class="bi bi-cart"></i> View product</a> <i class="bi bi-bookmark-check-fill h4"></i>
        </div>
        </div>
    </div>
    <!-- 4 -->
    <div class="m-1">
        <div class="card">
        <img src="<?php echo URLROOT; ?>/pics/swappie-iphone-11-pro-space-gray-back.avif" class="card-img-top" alt="...">
        <div class="card-body mx-auto">
            <h5 class="card-title">Product name</h5>
            <p class="card-text">price</p>
        </div>
        <div class="card-body mx-auto">
            <a href="#" class="card-link add_to_cart"><i class="bi bi-cart"></i> View product</a> <i class="bi bi-bookmark-check-fill h4"></i>
        </div>
        </div>
    </div>
    <!-- 5 -->
    <div class="m-1">
        <div class="card">
        <img src="<?php echo URLROOT; ?>/pics/swappie-iphone-11-pro-space-gray-back.avif" class="card-img-top" alt="...">
        <div class="card-body mx-auto">
            <h5 class="card-title">Product name</h5>
            <p class="card-text">price</p>
        </div>
        <div class="card-body mx-auto">
            <a href="#" class="card-link add_to_cart"><i class="bi bi-cart"></i> View product</a> <i class="bi bi-bookmark-check-fill h4"></i>
        </div>
        </div>
    </div>
</div>

<!-- all products -->
<div class="container d-flex">
    <h3 class="mx-5 mt-5">All products</h3>
    <div id="search_bar" class="input-group m-5">
        <span class="input-group-text" id="basic-addon1">
            <i class="bi bi-search"></i>
        </span>
        <input type="text" class="form-control" placeholder="what are you looking for?" aria-label="search" aria-describedby="basic-addon1">
        <button type="button" class="btn btn-primary">Search</button>
    </div>
    
    <!-- price filter -->
    <div id="search_bar" class="input-group m-5 w-25">
        <input type="number" class="form-control" placeholder="Minimum" aria-label="Minimum Price" aria-describedby="button-addon2">
        <input type="number" class="form-control" placeholder="Maximum" aria-label="Maximum Price" aria-describedby="button-addon2">
        <button class="btn btn-outline-primary" type="button">Filter</button>
    </div>
</div>

<div>
<div id="all_products" class="container mb-5">
<!-- 1 --> 
    <div class="m-1">
        <div class="card">
        <img src="<?php echo URLROOT; ?>/pics/swappie-iphone-11-pro-space-gray-back.avif" class="card-img-top" alt="...">
        <div class="card-body mx-auto">
            <h5 class="card-title">Product name</h5>
            <p class="card-text">price</p>
        </div>
        <div class="card-body mx-auto">
            <a href="http://localhost/MobiShop/products/view_product" class="card-link add_to_cart"><i class="bi bi-cart"></i> View product</a> <i class="bi bi-bookmark-check-fill h4"></i>
        </div>
        </div>
    </div>
<!-- 2 -->
    <div class="m-1">
        <div class="card">
        <img src="<?php echo URLROOT; ?>/pics/swappie-iphone-11-pro-space-gray-back.avif" class="card-img-top" alt="...">
        <div class="card-body mx-auto">
            <h5 class="card-title">Product name</h5>
            <p class="card-text">price</p>
        </div>
        <div class="card-body mx-auto">
            <a href="#" class="card-link add_to_cart"><i class="bi bi-cart"></i> View product</a> <i class="bi bi-bookmark-check-fill h4"></i>
        </div>
        </div>
    </div>
<!-- 3 -->
    <div class="m-1">
        <div class="card">
        <img src="<?php echo URLROOT; ?>/pics/swappie-iphone-11-pro-space-gray-back.avif" class="card-img-top" alt="...">
        <div class="card-body mx-auto">
            <h5 class="card-title">Product name</h5>
            <p class="card-text">price</p>
        </div>
        <div class="card-body mx-auto">
            <a href="#" class="card-link add_to_cart"><i class="bi bi-cart"></i> View product</a> <i class="bi bi-bookmark-check-fill h4"></i>
        </div>
        </div>
    </div>
    <!-- 4 -->
    <div class="m-1">
        <div class="card">
        <img src="<?php echo URLROOT; ?>/pics/swappie-iphone-11-pro-space-gray-back.avif" class="card-img-top" alt="...">
        <div class="card-body mx-auto">
            <h5 class="card-title">Product name</h5>
            <p class="card-text">price</p>
        </div>
        <div class="card-body mx-auto">
            <a href="#" class="card-link add_to_cart"><i class="bi bi-cart"></i> View product</a> <i class="bi bi-bookmark-check-fill h4"></i>
        </div>
        </div>
    </div>
    <!-- 5 -->
    <div class="m-1">
        <div class="card">
        <img src="<?php echo URLROOT; ?>/pics/swappie-iphone-11-pro-space-gray-back.avif" class="card-img-top" alt="...">
        <div class="card-body mx-auto">
            <h5 class="card-title">Product name</h5>
            <p class="card-text">price</p>
        </div>
        <div class="card-body mx-auto">
            <a href="#" class="card-link add_to_cart"><i class="bi bi-cart"></i> View product</a> <i class="bi bi-bookmark-check-fill h4"></i>
        </div>
        </div>
    </div>
</div>
</div>

<!-- features -->
<div id="features" class="container">
    <div class="border d-flex p-2">
    <div class="m-3">
        <i class="bi bi-truck h4"></i>
    </div>
    <h5 class="my-2">
        Free delivery<br>
        <small class="text-muted">For orders over 500$</small>
    </h5>
    </div>

    <div class="border d-flex p-2">
    <div class="m-3">
        <i class="bi bi-arrow-clockwise h4"></i>
    </div>

    <h5 class="my-2">
        Money back guarantee<br>
        <small class="text-muted">For orders over 500$</small>
    </h5>
    </div>

    <div class="border d-flex p-2">
    <div class="m-3">
        <i class="bi bi-question h4"></i>
    </div>

    <h5 class="my-2">
        Help and Support<br>
        <small class="text-muted">24/7</small>
    </h5>
    </div>
</div>



<?php require APPROOT . "/views/inc/footer.php"; ?>