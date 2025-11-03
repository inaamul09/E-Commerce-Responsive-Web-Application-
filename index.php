<?php
session_start();
?>









<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SparkShift | Your Shopping Destination</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="icon" type="image/svg+xml" href="assets/images/Logos/icon.svg">


</head>

<body>
    <?php include 'includes\header.php' ?>

    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="row g-0">
                        <!-- Image Side -->
                        <div class="col-md-6 d-none d-md-block">
                            <img src="assets/images/Logos/bg1.svg" alt="login image" class="img-fluid h-100 w-100" style="object-fit: cover;">
                        </div>

                        <!-- Form Side -->
                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <div class="p-4 w-100">

                                <!-- Sign In Form -->
                                <div id="signinForm" >
                                    <h3 class="mb-4 text-center">Sign In</h3>
                                    <div class="col-12 d-none" id="msgdiv1">
                                        <div class="alert alert-danger" role="alert" id="msg1">
                                        </div>
                                    </div>
                                    <div class="col-12 d-none" id="msgdiv">
                                        <div class="alert alert-success" role="alert" id="msg">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input id="email" type="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Password</label>
                                        <input id="password" type="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <div class="d-grid mb-3">
                                        <button type="submit" class="btn btn-dark " onclick="signIn();">Sign In</button>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <input type="checkbox" id="rememberme">
                                            <label for="remember">Remember Me</label>
                                        </div>
                                        <a href="#">Forgot Password?</a>
                                    </div>
                                    <p class="text-center">
                                        Not a member?
                                        <a href="#" onclick="showSignup()">Sign Up</a>
                                    </p>

                                </div>

                                <!-- Sign Up Form -->
                                <div id="signupForm"  style="display: none;">
                                    <h3 class="mb-4 text-center">Sign Up</h3>
                                   <div class="col-12 d-none" id="msgdiv2">
                                        <div class="alert alert-danger" role="alert" id="msg2">
                                        </div>
                                    </div>
                                    <div class="col-12 d-none" id="msgdiv3">
                                        <div class="alert alert-success" role="alert" id="msg3">
                                        </div>
                                    </div>
                                        <div class="mb-3">
                                            <label>First Name</label>
                                            <input type="text" id="fname" class="form-control"  placeholder="First Name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label>Last Name</label>
                                            <input type="text" id="lname" class="form-control" placeholder="Last Name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label>Email</label>
                                            <input type="email" id="email1" class="form-control" placeholder="Email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label>Password</label>
                                            <input type="password" id="password1" class="form-control" placeholder="Password" required>
                                        </div>
                                        <div class="d-grid mb-3">
                                            <button type="submit" class="btn btn-dark" onclick="signUp()">Sign Up</button>
                                        </div>
                                        <p class="text-center">
                                            Already have an account?
                                            <a href="#" onclick="showSignin()">Sign In</a>
                                        </p>
                                   
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Section -->
    <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo -->
                <div class="col-md-3 col-6">
                    <a href="index.php">
                        <img src="assets\images\Logos\SparkShift.svg" alt="SparkShift_Logo" class="logo m-3">
                    </a>
                </div>

                <!-- Search Bar -->
                <div class="col-md-5 d-none d-md-flex">
                    <div class="search-bar">
                        <!-- <select class="category-dropdown">
                            <option>All Category</option>
                            <option>Electronics</option>
                            <option>Fashion</option>
                            <option>Home & Kitchen</option>
                        </select> -->
                        <div class="vr me-2"></div>
                        <input type="text" placeholder="Search Products Here....." class="search-input">
                        <button class="search-btn"><img src="assets/icons/search-line.svg" alt="search"></button>
                    </div>
                </div>

                <!-- Icons (Wishlist, Profile, Cart) -->
                <div class="col-md-3 col-6 d-flex justify-content-end">
                    <a href="#" class="icon wishlist"><img src="assets/icons/favorite_black.svg" alt="Mail Icon" class="me-2"></a>
                    
                    <a href="#" class="icon cart">
                        <img src="assets/icons/shopping_cart_black.svg" alt="Mail Icon" class="me-2">
                        <span class="cart-badge">2</span>
                    </a>
                </div>
            </div>
        </div>
    </header>


    <div class="cat-nav-head">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-5 col-7 header-inner-left">

                <div class="all-category">
                    <img src="assets\icons\menu_White.svg" alt="menu" class="header-menu" id="menuIcon" onclick="menuIcon();">

                    <img src="assets\icons\Open_menu.svg" alt="menu1" class="header-menu1 d-none" id="menuIcon1" onclick="menuIcon1();">

                    <h4 class="cat-heading">CATEGORIES</h4>
                    <div class="category-head d-none" id="categoryDropdown">
                        <ul class="category-list">
                            <li>New Arrivals</li>
                            <li>Best Selling</li>
                            <li>Men's Wearing</li>
                            <li>Women's Wearing</li>
                            <li>Home Electronics</li>
                            <li>Sports Equipment</li>
                            <li>Kiddo & Mom</li>
                            <li>Office Equipments</li>
                            <li>Office Equipments</li>
                            <li>Office Equipments</li>
                            <li>Office Equipments</li>
                            <li>Office Equipments</li>
                        </ul>
                    </div>
                </div>



            </div>
            <div class="col-lg-9 col-md-8 col-sm-7 col-5 header-inner-right d-lg-block d-xl-block">
                <div class="menu-area">
                    <div class="navbar navbar-expand-lg">
                        <div class="navbar-collapse">
                            <div class="row">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="carouselExampleSlidesOnly" class="carousel slide hero-banner" data-bs-ride="carousel" data-bs-interval="2500">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="assets\images\hero\1.webp" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets\images\hero\2.webp" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets\images\hero\3.webp" alt="Third slide">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Flash Sale starts -->
    <div class="container">
        <div class="row mt-5">
            <h3>Flash Sale</h3>
            <div class="border rounded-top bg-light col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="d-flex">
                    <div class="p-2 align-self-center">
                        <h5 class="text-yellow">On Sale Now</h5>
                    </div>

                    <div class="ms-auto">
                        <div class="border border-warning flash-box m-2">
                            <div class="p-2">SHOP ALL PRODUCTS</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Flash Sale Products -->
    <div class="container bg-light border">
        <div class="row">
            <!-- Each product takes 2 columns on large screens (6 per row), 4 columns on medium screens (3 per row), and 6 columns on small screens (2 per row) -->
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="cursor-pointer">
                    <img src="assets/images/products/electronics/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="primary-font">5000M New G6 Professional Foldable Quadcopter</span>
                        <h6 class="primary-font fs-5 mt-2 text-yellow">Rs 5,000/-</h6>
                        <span class="fs-6 text-decoration-line-through text-muted">Rs 8,700/-</span>
                        <span class="fs-6 text-muted">-36%</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="cursor-pointer">
                    <img src="assets/images/products/toys/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="primary-font">4WD RC Car 1:12 Off Road 4x4 Remote Control Cars</span>
                        <h6 class="primary-font fs-5 mt-2 text-yellow">Rs 3,994/-</h6>
                        <span class="fs-6 text-decoration-line-through text-muted">Rs 9,172/-</span>
                        <span class="fs-6 text-muted">-56%</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="cursor-pointer">
                    <img src="assets/images/products/home_appliances/2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="primary-font">106/318 LED Solar Light Outdoor 328 LED Spotlights IP65</span>
                        <h6 class="primary-font fs-5 mt-2 text-yellow">Rs 5,052/-</h6>
                        <span class="fs-6 text-decoration-line-through text-muted">Rs 16,129/-</span>
                        <span class="fs-6 text-muted">-68%</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="cursor-pointer">
                    <img src="assets/images/products/clothing/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="primary-font">ECG+PPG Bluetooth Call Smart Watch Men Laser Health</span>
                        <h6 class="primary-font fs-5 mt-2 text-yellow">Rs 4,583/-</h6>
                        <span class="fs-6 text-decoration-line-through text-muted">Rs 9,549/-</span>
                        <span class="fs-6 text-muted">-52%</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="cursor-pointer">
                    <img src="assets/images/products/home_appliances/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="primary-font">Lazy Couch Sofas Inflatable Foldable Recliner Outdoor Sofa</span>
                        <h6 class="primary-font fs-5 mt-2 text-yellow">Rs 4,227/-</h6>
                        <span class="fs-6 text-decoration-line-through text-muted">Rs 7,416/-</span>
                        <span class="fs-6 text-muted">-43%</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="cursor-pointer">
                    <img src="assets/images/products/clothing/004.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="primary-font">Steel Toe Safety Shoes Men Women Security Protection Work Shoes</span>
                        <h6 class="primary-font fs-5 mt-2 text-yellow">Rs 7,690/-</h6>
                        <span class="fs-6 text-decoration-line-through text-muted">Rs 12,700/-</span>
                        <span class="fs-6 text-muted">-41%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row g-3">
            <!-- First Collection -->
            <div class="col-lg-4">
                <!-- Title for First Collection -->
                <h5 class="fw-bold">Get Aurudu-Ready</h5>
                <div class="bg-light cursor-pointer p-3">
                    <div class="row">
                        <div class="col-6 text-center">
                            <img src="assets/images/banners/TSNewYear/1.svg" class="card-img-top p-3" alt="aurudhu_couple">
                            <p>Customer-loved</p>
                        </div>
                        <div class="col-6 text-center">
                            <img src="assets/images/banners/TSNewYear/2.svg" class="card-img-top p-3" alt="aurudhu_deals">
                            <p>House Hold</p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6 text-center">
                            <img src="assets/images/banners/TSNewYear/3.svg" class="card-img-top p-3" alt="aurudhu_decor">
                            <p>Our Top 100+ gifts</p>
                        </div>
                        <div class="col-6 text-center">
                            <img src="assets/images/banners/TSNewYear/4.svg" class="card-img-top p-3" alt="aurudhu_gifts">
                            <p>Foods Collection</p>
                        </div>
                    </div>
                    <div class="mt-3 text-end">
                        <a href="#" class="fw-bold text-decoration-none">Shop now</a>
                    </div>
                </div>
            </div>

            <!-- Second Collection -->
            <div class="col-lg-4">
                <!-- Title for Second Collection -->
                <h5 class="fw-bold">Celebrate Eid Al Adha</h5>
                <div class="bg-light cursor-pointer p-3">
                    <div class="row">
                        <div class="col-6 text-center">
                            <img src="assets\images\products\clothing\Untitled design.svg" class="category-img card-img-top p-3" alt="aurudhu_couple">
                            <p>Celebrate in Style</p>
                        </div>
                        <div class="col-6 text-center">
                            <img src="assets/images/banners/TSNewYear/2.svg" class="card-img-top p-3" alt="aurudhu_deals">
                            <p>Everything You Need</p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6 text-center">
                            <img src="assets/images/banners/TSNewYear/3.svg" class="card-img-top p-3" alt="aurudhu_decor">
                            <p>Sweet Surprises</p>
                        </div>
                        <div class="col-6 text-center">
                            <img src="assets/images/banners/TSNewYear/4.svg" class="card-img-top p-3" alt="aurudhu_gifts">
                            <p>Gifts for Every Heart</p>
                        </div>
                    </div>
                    <div class="mt-3 text-end">
                        <a href="#" class="fw-bold text-decoration-none">Shop now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Title for Second Collection -->
                <h5 class="fw-bold">Celebrate Vesak with Style</h5>
                <div class="bg-light cursor-pointer p-3">
                    <div class="row">
                        <div class="col-6 text-center">
                            <img src="assets/images/banners/TSNewYear/1.svg" class="card-img-top p-3" alt="aurudhu_couple">
                            <p>Shine Bright This Vesak</p>
                        </div>
                        <div class="col-6 text-center">
                            <img src="assets/images/banners/TSNewYear/2.svg" class="card-img-top p-3" alt="aurudhu_deals">
                            <p>Traditional Light Decor</p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6 text-center">
                            <img src="assets/images/banners/TSNewYear/3.svg" class="card-img-top p-3" alt="aurudhu_decor">
                            <p>Mindful Living</p>
                        </div>
                        <div class="col-6 text-center">
                            <img src="assets/images/banners/TSNewYear/4.svg" class="card-img-top p-3" alt="aurudhu_gifts">
                            <p>Deals That Enlighten</p>
                        </div>
                    </div>
                    <div class="mt-3 text-end">
                        <a href="#" class="fw-bold text-decoration-none">Shop now</a>
                    </div>

                    <html>

                    </html>
                </div>
            </div>
        </div>
    </div>










    <div class="container">
        <div class="row mt-5">
            <h5>Categories</h5>
        </div>

        <div class="col-12">
            <div class="bg-light cursor-pointer p-3">
                <div class="row">

                    <div class="col-lg-2 col-md-3 col-sm-6 text-center">
                        <img src="assets\images\products\electronics\0001095_warn-industries-97565-winch-rigging-kit.webp" class="category-img card-img-top p-3" alt="aurudhu_couple">
                        <p>Accessory Kits</p>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 text-center">
                        <img src="assets\images\products\clothing\mb-ganni-accessories-11_1708000682.webp" class="category-img card-img-top p-3" alt="aurudhu_deals">
                        <p>Bags & Accessories</p>
                    </div>


                    <div class="col-lg-2 col-md-3 col-sm-6 text-center">
                        <img src="assets\images\products\mobile_phones\accessories\phone_covers.webp" class="category-img card-img-top p-3" alt="aurudhu_decor">
                        <p>Phone Covers</p>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 text-center">
                        <img src="assets\images\products\books\el-ingenioso-hidalgo-don-quixote-de-la-mancha-miguel-de-cervantes-saavedra-first-edition.webp" class="category-img card-img-top p-3" alt="aurudhu_gifts">
                        <p>Books & Literature </p>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6 text-center">
                        <img src="assets\images\products\clothing\mens_wear\homepage-banner-1-featured-categories-mens-wear-17418362617829.webp" class="category-img card-img-top p-3" alt="aurudhu_decor">
                        <p>Mens Wear</p>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 text-center">
                        <img src="assets\images\products\mobile_phones\VVPHY034128GBSBLK 3.png" class="category-img card-img-top p-3" alt="aurudhu_gifts">
                        <p>Mobile Phones</p>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6 text-center">
                        <img src="assets\images\products\desktops_laptops\accessories\Lenovo-IdeaPad-Slim-3-15IRU8- E2 80 93-i3-300x300.webp" class="category-img card-img-top p-3" alt="aurudhu_decor">
                        <p>Desktop & Laptops</p>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 text-center">
                        <img src="assets\images\products\home_appliances\product-jpeg-500x500.webp" class="category-img card-img-top p-3" alt="aurudhu_gifts">
                        <p>HouseHold Electronics</p>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6 text-center">
                        <img src="assets\images\products\foods_beverages\Food-and-Beverages-Awards14.webp" class="category-img card-img-top p-3" alt="aurudhu_decor">
                        <p>Food & Beverages</p>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 text-center">
                        <img src="assets\images\products\digital_goods\avast-mobile-security-premium.webp" class="category-img card-img-top p-3" alt="aurudhu_gifts">
                        <p>Digital Goods</p>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6 text-center">
                        <img src="assets\images\products\kids_mom\1 (1).webp" class="category-img card-img-top p-3" alt="aurudhu_decor">
                        <p>Kids & Mom</p>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 text-center">
                        <img src="assets\images\products\medics_pharma\medical-first-aid-kit-500x500.webp" class="category-img card-img-top p-3" alt="aurudhu_gifts">
                        <p>Medical & First Aid</p>
                    </div>




                </div>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row mt-5">
            <h3>Picked For You</h3>
            <div class="border rounded-top bg-light col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="d-flex">
                    <div class="p-2 align-self-center">
                        <h5 class="text-yellow"></h5>
                    </div>

                    <div class="ms-auto">
                        <div class="border border-warning flash-box m-2">
                            <div class="p-2">FREE DELIVERY</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Flash Sale Products -->
    <div class="container bg-light border">
        <div class="row">
            <!-- Each product takes 2 columns on large screens (6 per row), 4 columns on medium screens (3 per row), and 6 columns on small screens (2 per row) -->


            <!-- Electronics Item -->
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="cursor-pointer">
                    <img src="https://c.media-amazon.com/images/I/61UjBLFlH2L._AC_UY218_.jpg" class="card-img-top" alt="Samsung Galaxy A05">
                    <div class="card-body">
                        <span class="primary-font">Samsung Galaxy A05 4GB RAM 128GB</span>
                        <h6 class="primary-font fs-5 mt-2 text-yellow">Rs 49,999/-</h6>
                        <span class="fs-6 text-decoration-line-through text-muted">Rs 55,000/-</span>
                        <span class="fs-6 text-muted">-9%</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="cursor-pointer">
                    <img src="assets/images/products/toys/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="primary-font">4WD RC Car 1:12 Off Road 4x4 Remote Control Cars...</span>
                        <h6 class="primary-font fs-5 mt-2 text-yellow">Rs 3,994/-</h6>
                        <span class="fs-6 text-decoration-line-through text-muted">Rs 9,172/-</span>
                        <span class="fs-6 text-muted">-56%</span>
                    </div>
                </div>
            </div>
            <!-- Grocery Item -->
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="cursor-pointer">
                    <img src="https://c.media-amazon.com/images/I/81w0ed-MFXL._AC_UL320_.jpg" class="card-img-top" alt="Red Onions">
                    <div class="card-body">
                        <span class="primary-font">Fresh Red Onions 1kg - Local</span>
                        <h6 class="primary-font fs-5 mt-2 text-yellow">Rs 780/-</h6>
                        <span class="fs-6 text-decoration-line-through text-muted">Rs 950/-</span>
                        <span class="fs-6 text-muted">-18%</span>
                    </div>
                </div>
            </div>

            <!-- Fashion Item -->
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="cursor-pointer">
                    <img src="https://c.media-amazon.com/images/I/B1pppR4gVKL._CLa%7C2140%2C2000%7C71Y%2BTtBgucL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_SX425_.png" class="card-img-top" alt="Giordano T-shirt">
                    <div class="card-body">
                        <span class="primary-font">Giordano Men’s Cotton T-Shirt</span>
                        <h6 class="primary-font fs-5 mt-2 text-yellow">Rs 3,290/-</h6>
                        <span class="fs-6 text-decoration-line-through text-muted">Rs 4,500/-</span>
                        <span class="fs-6 text-muted">-27%</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="cursor-pointer">
                    <img src="assets/images/products/home_appliances/2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="primary-font">106/318 LED Solar Light Outdoor 328 LED Spotlights IP65...</span>
                        <h6 class="primary-font fs-5 mt-2 text-yellow">Rs 5,052/-</h6>
                        <span class="fs-6 text-decoration-line-through text-muted">Rs 16,129/-</span>
                        <span class="fs-6 text-muted">-68%</span>
                    </div>
                </div>
            </div>
            <!-- Household Item -->
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="cursor-pointer">
                    <img src="https://c.media-amazon.com/images/I/71DFozhbzzL.__AC_SX300_SY300_QL70_FMwebp_.jpg" class="card-img-top" alt="Nonstick Frying Pan">
                    <div class="card-body">
                        <span class="primary-font">Non-Stick Frying Pan 24cm - Easy Clean</span>
                        <h6 class="primary-font fs-5 mt-2 text-yellow">Rs 3,590/-</h6>
                        <span class="fs-6 text-decoration-line-through text-muted">Rs 4,600/-</span>
                        <span class="fs-6 text-muted">-22%</span>
                    </div>
                </div>
            </div>

            <!-- Beauty Product -->
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="cursor-pointer">
                    <img src="https://c.media-amazon.com/images/I/71b9lgAkTYL._AC_UL320_.jpg" class="card-img-top" alt="Vaseline Lotion">
                    <div class="card-body">
                        <span class="primary-font">Vaseline Body Lotion 400ml</span>
                        <h6 class="primary-font fs-5 mt-2 text-yellow">Rs 1,290/-</h6>
                        <span class="fs-6 text-decoration-line-through text-muted">Rs 1,550/-</span>
                        <span class="fs-6 text-muted">-17%</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="cursor-pointer">
                    <img src="assets/images/products/clothing/004.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="primary-font">Steel Toe Safety Shoes Men Women Security Protection Work Shoes...</span>
                        <h6 class="primary-font fs-5 mt-2 text-yellow">Rs 7,690/-</h6>
                        <span class="fs-6 text-decoration-line-through text-muted">Rs 12,700/-</span>
                        <span class="fs-6 text-muted">-41%</span>
                    </div>
                </div>
            </div>

            <!-- Kitchen Appliance -->
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="cursor-pointer">
                    <img src="https://c.media-amazon.com/images/I/61m6eAej0ML._AC_UY218_.jpg" class="card-img-top" alt="Electric Rice Cooker">
                    <div class="card-body">
                        <span class="primary-font">Electric Rice Cooker 1.8L - White</span>
                        <h6 class="primary-font fs-5 mt-2 text-yellow">Rs 8,450/-</h6>
                        <span class="fs-6 text-decoration-line-through text-muted">Rs 10,900/-</span>
                        <span class="fs-6 text-muted">-22%</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="cursor-pointer">
                    <img src="assets/images/products/electronics/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="primary-font">5000M New G6 Professional Foldable Quadcopter...</span>
                        <h6 class="primary-font fs-5 mt-2 text-yellow">Rs 5,000/-</h6>
                        <span class="fs-6 text-decoration-line-through text-muted">Rs 8,700/-</span>
                        <span class="fs-6 text-muted">-36%</span>
                    </div>
                </div>
            </div>


            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="cursor-pointer">
                    <img src="assets/images/products/clothing/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="primary-font">ECG+PPG Bluetooth Call Smart Watch Men Laser Health ...</span>
                        <h6 class="primary-font fs-5 mt-2 text-yellow">Rs 4,583/-</h6>
                        <span class="fs-6 text-decoration-line-through text-muted">Rs 9,549/-</span>
                        <span class="fs-6 text-muted">-52%</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="cursor-pointer">
                    <img src="assets/images/products/home_appliances/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="primary-font">Lazy Couch Sofas Inflatable Foldable Recliner Outdoor Sofa...</span>
                        <h6 class="primary-font fs-5 mt-2 text-yellow">Rs 4,227/-</h6>
                        <span class="fs-6 text-decoration-line-through text-muted">Rs 7,416/-</span>
                        <span class="fs-6 text-muted">-43%</span>
                    </div>
                </div>
            </div>




        </div>
        <div class="mx-auto" style="width: 200px;">
            <div class="border border-warning flash-box m-2">
                <div class="p-2 d-flex justify-content-center">LOAD MORE</div>
            </div>
        </div>

    </div>


    <!-- Footer -->

    <div class="row">
        <div class="col-lg-6">
            <div class="p-5">
                <h4>Payment Methods</h4>
                <img src="assets/images/banners/Payment gateways without BG.webp" width="100%">
            </div>
        </div>

        <div class="col-lg-3 d-none d-lg-block">
            <div class="p-5">
                <h4>Partnered With</h4>
                <img src="assets\images\banners\Technology & Consultancy Parner (1).webp" width="100%">
            </div>
        </div>
        <div class="col-lg-3 d-none d-lg-block">
            <div class="p-5">
                <h4>Verified By </h4>
                <img src="assets\images\banners\Technology & Consultancy Parner (3).webp" width="100%">
            </div>
        </div>
    </div>


    <?php include 'includes/footer.php' ?>



    <script src="assets\js\bootstrap.bundle.min.js"></script>
    <script src="assets\js\script.js"></script>
</body>

</html>