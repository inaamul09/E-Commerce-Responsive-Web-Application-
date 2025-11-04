<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile | SparkShift | Your Shopping Destination</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="icon" type="image/svg+xml" href="assets/images/Logos/icon.svg">

</head>

<body>
    <?php include 'includes\header.php' ?>

    <div class="container-fluid ">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 d-md-block sidebar p-0">
                <div class="p-3">
                    <h5 class="mb-4">ACCOUNT MAIN</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-home me-2"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><i class="fas fa-shopping-cart me-2"></i> New Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-history me-2"></i> Orders History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-heart me-2"></i> My Wishlist</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-exchange-alt me-2"></i> Transactions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-user-cog me-2"></i> Profile Setting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-sign-out-alt me-2"></i> Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 ms-sm-auto px-md-4 py-4">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="user.php">Profile</a></li>
                  
                    </ol>
                </nav>

                <!-- User Info -->
                <div class="user-info mb-4">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets\images\userPhotos\500x500-dummy-image.jpg" class="img-thumbnail mb-2" style="max-width: 200px;">
                            <h4>Mr. Jackson Mike</h4>
                            <p class="mb-1">Email: mysername@gmail.com</p>
                            <p>Phone: +1234567890988</p>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <p class="mb-1">United States, 3601 Old Capitol Trail, Unit A-7, Suite</p>
                            <button class="btn btn-sm btn-primary">+ ADD NEW ADDRESS</button>
                        </div>
                    </div>
                </div>

                <!-- Order Card -->
                <div class="order-card">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0">Order ID: 8924 <span class="badge bg-success">Shipped</span></h5>
                        <p class="mb-0">Date: 16 December 2022</p>
                    </div>

                    <div class="row">
                        <!-- Contact Info -->
                        <div class="col-md-4">
                            <h6>Contact</h6>
                            <p class="mb-1">Mike Johnston</p>
                            <p class="mb-1">Phone: 371-295-9131</p>
                            <p>Email: info@mywebsite.com</p>
                        </div>

                        <!-- Shipping Address -->
                        <div class="col-md-4">
                            <h6>Shipping address</h6>
                            <p class="mb-1">United States</p>
                            <p class="mb-1">3601 Old Capitol Trail, Unit A-7,</p>
                            <p>Suite 170777, Wilmington, DE 19808</p>
                        </div>

                        <!-- Payment Info -->
                        <div class="col-md-4">
                            <h6>Payment</h6>
                            <p class="mb-1">Visa *** 4216</p>
                            <p class="mb-1">Shipping fee: $56</p>
                            <p>Total paid: $456</p>
                        </div>
                    </div>

                    <hr>

                    <!-- Order Items -->
                    <div class="order-items">
                        <div class="product-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="mb-1 fw-bold">T-shirts with multiple colors</p>
                                    <p class="mb-0 text-muted">2x = $25.98</p>
                                </div>
                            </div>
                        </div>

                        <div class="product-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="mb-1 fw-bold">Gaming Headset</p>
                                    <p class="mb-0 text-muted">320b Black</p>
                                    <p class="mb-0 text-muted">2x = $339.90</p>
                                </div>
                            </div>
                        </div>

                        <div class="product-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="mb-1 fw-bold">Apple Watch Series</p>
                                    <p class="mb-0 text-muted">4 Space Gray</p>
                                    <p class="mb-0 text-muted">2x = $339.90</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include 'includes/footer.php' ?>



    <script src="assets\js\bootstrap.bundle.min.js"></script>
    <script src="assets\js\script.js"></script>
</body>

</html>