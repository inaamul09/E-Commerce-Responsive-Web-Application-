<?php
session_start();
include 'includes/connection.php';

$email = $_POST["e"];
$password = $_POST["p"];
$rememberme = $_POST["r"];

if(empty($email)){
    echo ("Please Enter Your Email Address.");
}else if(empty($password)){
    echo ("Please Enter Your Password.");
}else{

    $rs = Database::search("SELECT * FROM `customer` WHERE `cus_email`='".$email."' AND `cus_password`='".$password."'");
    $n = $rs->num_rows;

    if($n == 1){

         $d = new DateTime();
        $tz = new DateTimeZone("Asia/Colombo");
        $d->setTimezone($tz);
        $date = $d->format("Y-m-d H:i:s");

       Database::iud("UPDATE `customer` SET `cus_last_login`='".$date."' WHERE `cus_email`='".$email."'");

        echo ("success");
        $d = $rs->fetch_assoc();
        $_SESSION["u"] = $d;

        if($rememberme == "true"){

            setcookie("email",$email,time()+(60*60*24*365));
            setcookie("password",$password,time()+(60*60*24*365));

        }else{

            setcookie("email","",-1);
            setcookie("password","",-1);

        }

    }else{
        echo ("Invalid Email or Password.");
    }

}

?>