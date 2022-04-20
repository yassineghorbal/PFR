<?php require APPROOT . "/views/inc/header.php"; ?>

 

<!-- carousel
<div id="carouselExampleControls" class="carousel slide bg-dark" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div id="carousel" class="carousel-item active">
        <div class="w-25" id="first_carousel">
            <h4 class="text-white">Samsung Galaxy S22 Ultra</h4>
            <button type="button" class="btn btn-outline-secondary">Buy now!</button>
        </div>
        <img id="carousel_img" src="<?php echo URLROOT; ?>/pics/samsung-galaxy-s22-ultra-frandroid-2022-officiel.webp" alt="...">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100"  src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>

    

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->

<!-- most sold -->
<div class="container">
    <h3 class="mx-5 mt-5">Most Sold</h3>
</div>
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
            <a href="#" id="add_to_cart" class="card-link">Add to cart</a>
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
            <a href="#" id="add_to_cart" class="card-link">Add to cart</a>
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
            <a href="#" id="add_to_cart" class="card-link">Add to cart</a>
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
            <a href="#" id="add_to_cart" class="card-link">Add to cart</a>
        </div>
        </div>
    </div>
    <!-- 5 -->
    <div class="m-1">
        <div class="card" style="width: 14rem;">
        <img src="<?php echo URLROOT; ?>/pics/swappie-iphone-11-pro-space-gray-back.avif" class="card-img-top" alt="...">
        <div class="card-body mx-auto">
            <h5 class="card-title">Phone name</h5>
            <p class="card-text">price</p>
        </div>
        <div class="card-body mx-auto">
            <a href="#" id="add_to_cart" class="card-link">Add to cart</a>
        </div>
        </div>
    </div>
</div>

<!-- all products -->
<div class="container d-flex">
    <h3 class="mx-5 mt-5">All products</h3>
    <div id="search_bar" class="input-group m-5 w-50">
        
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg> -->
        
        <span class="input-group-text" id="basic-addon1">
            <i class="bi bi-search"></i>
        </span>
        <input type="text" class="form-control" placeholder="what are you looking for?" aria-label="search" aria-describedby="basic-addon1">
        <button type="button" class="btn btn-primary">Search</button>
    </div>
</div>

<div>
<div id="all_products" class="container mb-5">
<!-- 1 --> 
    <div class="m-1">
        <div class="card" style="width: 14rem;">
        <img src="<?php echo URLROOT; ?>/pics/swappie-iphone-11-pro-space-gray-back.avif" class="card-img-top" alt="...">
        <div class="card-body mx-auto">
            <h5 class="card-title">Phone name</h5>
            <p class="card-text">price</p>
        </div>
        <div class="card-body mx-auto">
            <a href="#" id="add_to_cart" class="card-link">Add to cart</a>
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
            <a href="#" id="add_to_cart" class="card-link">Add to cart</a>
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
            <a href="#" id="add_to_cart" class="card-link">Add to cart</a>
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
            <a href="#" id="add_to_cart" class="card-link">Add to cart</a>
        </div>
        </div>
    </div>
    <!-- 5 -->
    <div class="m-1">
        <div class="card" style="width: 14rem;">
        <img src="<?php echo URLROOT; ?>/pics/swappie-iphone-11-pro-space-gray-back.avif" class="card-img-top" alt="...">
        <div class="card-body mx-auto">
            <h5 class="card-title">Phone name</h5>
            <p class="card-text">price</p>
        </div>
        <div class="card-body mx-auto">
            <a href="#" id="add_to_cart" class="card-link">Add to cart</a>
        </div>
        </div>
    </div>
</div>
</div>

<!-- features -->
<div id="features" class="container">
    <div class="border d-flex p-2">
    <div class="m-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
    <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/></svg>
    </div>

    <h5 class="my-2">
        Free delivery<br>
        <small class="text-muted">For orders over 500$</small>
    </h5>
    </div>

    <div class="border d-flex p-2">
    <div class="m-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
            <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
        </svg>
    </div>

    <h5 class="my-2">
        Money back guarantee<br>
        <small class="text-muted">For orders over 500$</small>
    </h5>
    </div>

    <div class="border d-flex p-2">
    <div class="m-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
        </svg>
    </div>

    <h5 class="my-2">
        Help and Support<br>
        <small class="text-muted">24/7</small>
    </h5>
    </div>
</div>



<?php require APPROOT . "/views/inc/footer.php"; ?>