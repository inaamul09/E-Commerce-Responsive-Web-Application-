<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <!-- Header -->
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center mt-3">

                <!-- Contact Info (Always on Left, center on mobile) -->
                <div class="col-12 col-md-6 d-flex align-items-center justify-content-md-start justify-content-center mb-2 mb-md-0">
                    <img src="assets/icons/customer-service-fill.svg" alt="Support" class="header-icon me-2">
                    <span class="me-3">011 000 8585</span>
                    <div class="vr me-2 d-none d-md-block"></div>
                    <img src="assets/icons/mail-line.svg" alt="Mail" class="header-icon me-2">
                    <span>support@sparkshift.lk</span>
                </div>

                <!-- Right Side: Links (Hidden on small devices) -->
                <div class="col-md-6 d-none d-md-flex align-items-center justify-content-end">
                    <img src="assets/icons/Location.svg" alt="Location" class="header-icon me-2">
                    <span class="me-3">Store Location</span>
                    <div class="vr me-2"></div>

                    <img src="assets/icons/truck-line.svg" alt="Track Order" class="header-icon me-2">
                    <div class="track-order-container dropdown-center d-inline-block mx-2">
                        <span class="me-2 dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Track Order</span>
                        <div class="dropdown-menu p-3" style="width: 300px;">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Enter Tracking or Order Number">
                            </div>
                            <button class="btn btn-primary w-100">Track</button>
                        </div>
                    </div>
                    <div class="vr me-2"></div>
                    <?php if (isset($_SESSION["u"])) {
                        $data = $_SESSION["u"];
                    ?>
                        <img src="assets/icons/Profile.svg" alt="My Account" class="header-icon me-2">
                        <span class="me-3" onclick="myAccount();">My Account</span>
                        <div class="vr me-2"></div>

                        <span class="me-2">Hi, <?php echo $data["cus_lname"]; ?></span>
                        <img src="assets/icons/SignIn.svg" alt="SignOut" class="header-icon me-2">
                        <span class="me-2" onclick="signOut();">SignOut</span>
                    <?php } else { ?>
                        <img src="assets/icons/SignIn.svg" alt="Sign In" class="header-icon me-2">
                        <span class="me-2" data-bs-toggle="modal" data-bs-target="#loginModal">SignIn |</span>
                        <span class="me-3" data-bs-toggle="modal" data-bs-target="#loginModal">SignUp</span>
                    <?php } ?>
                </div>
            </div>

            <!-- Sign In/Up for small devices only -->
            <div class="row d-flex d-md-none justify-content-center mt-2 text-center">
                <?php if (isset($_SESSION["u"])) {
                    $data = $_SESSION["u"]; ?>
                    <div class="d-flex align-items-center justify-content-center">
                        <span class="me-2">Hi, <?php echo $data["cus_lname"]; ?></span>
                        <img src="assets/icons/SignIn.svg" alt="SignOut" class="header-icon me-2">
                        <span onclick="signOut();">SignOut</span>
                    </div>
                <?php } else { ?>
                    <div class="d-flex align-items-center justify-content-center mb-2">

                        <img src="assets/icons/SignIn.svg" alt="Sign In" class="header-icon me-2">
                        <span data-bs-toggle="modal" data-bs-target="#loginModal">SignIn |</span>
                        <span class="ms-1" data-bs-toggle="modal" data-bs-target="#loginModal">SignUp</span>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>

    <hr />
</body>

</html>