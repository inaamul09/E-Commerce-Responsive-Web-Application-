<?php
session_start();
include "includes/connection.php";

$fname = $_POST["f"];
$lname = $_POST["l"];
$email = $_POST["e1"];
$password = $_POST["p1"];


if (empty($fname)) {
    echo ("Please Enter Your First Name.");
} else if (strlen($fname) > 50) {
    echo ("First Name Must Contain LOWER THAN 50 characters.");
} else if (empty($lname)) {
    echo ("Please Enter Your Last Name.");
} else if (strlen($lname) > 50) {
    echo ("Last Name Must Contain LOWER THAN 50 characters.");
} else if (empty($email)) {
    echo ("Please Enter Your Email Address.");
} else if (strlen($email) > 100) {
    echo ("Email Address Must Contain LOWER THAN 100 characters.");
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("Invalid Email Address.");
} else if (empty($password)) {
    echo ("Please Enter Your Password.");
} else if (strlen($password) < 5 || strlen($password) > 20) {
    echo ("Password Must Contain 5 to 20 Characters.");
} else {

    $rs = Database::search("SELECT * FROM `customer` WHERE `email`='" . $email . "'");
    $n = $rs->num_rows;

    if ($n > 0) {
        echo ("User with the same Email Address or same Mobile Number already exists.");
    } else {
        $rs = Database::search("SELECT * FROM `customer` WHERE `email`='" . $email . "'");
        $n = $rs->num_rows;

        if ($n > 0) {
            echo ("User with the same Email Address or same Mobile Number already exists.");
        } else {
            $d = new DateTime();
            $tz = new DateTimeZone("Asia/Colombo");
            $d->setTimezone($tz);
            $date = $d->format("Y-m-d H:i:s");

            // Execute the INSERT
            Database::iud("INSERT INTO `customer`
        (`fname`,`lname`,`email`,`password`,`joined_date`,`last_login`,`status_status_id`) VALUES 
        ('" . $fname . "','" . $lname . "','" . $email . "','" . $password . "','" . $date . "','" . $date . "','1')");

            // Get the newly inserted user data
            $newUserRs = Database::search("SELECT * FROM `customer` WHERE `email`='" . $email . "'");
            $userData = $newUserRs->fetch_assoc();

            // Set session
            $_SESSION["u"] = $userData;

            // Set cookies (optional, but if you want to remember user)
            setcookie("email1", $email, time() + (86400 * 30), "/"); // 30 days
            setcookie("password1", $password, time() + (86400 * 30), "/"); // 30 days

            echo ("success");
        }
    }
}
