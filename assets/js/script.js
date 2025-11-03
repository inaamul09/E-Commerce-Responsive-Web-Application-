function menuIcon() {
  document.getElementById("menuIcon").classList.add("d-none"); // Hide menu icon
  document.getElementById("menuIcon1").classList.remove("d-none"); // Show close icon
  document.getElementById("categoryDropdown").classList.remove("d-none"); // Show dropdown
}

function menuIcon1() {
  document.getElementById("menuIcon1").classList.add("d-none"); // Hide close icon
  document.getElementById("menuIcon").classList.remove("d-none"); // Show menu icon
  document.getElementById("categoryDropdown").classList.add("d-none"); // Hide dropdown
}


function showSignup() {
  document.getElementById("signinForm").style.display = "none";
  document.getElementById("signupForm").style.display = "block";
}

function showSignin() {
  document.getElementById("signupForm").style.display = "none";
  document.getElementById("signinForm").style.display = "block";
}

function signIn() {

  var email = document.getElementById("email");
  var password = document.getElementById("password");
  var rememberme = document.getElementById("rememberme");

  var form = new FormData();
  form.append("e", email.value);
  form.append("p", password.value);
  form.append("r", rememberme.checked);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.status == 200 & request.readyState == 4) {
      var response = request.responseText;

      if (response == "success") {
        document.getElementById("msg").innerHTML = response;
        document.getElementById("msgdiv").className = "d-block";

        setTimeout(function () {
          window.location = "index.php";
        }, 900);


      } else {

        document.getElementById("msg1").innerHTML = response;
        document.getElementById("msgdiv1").className = "d-block";

        setTimeout(function () {
          document.getElementById("msgdiv1").className = "d-none";
        }, 2000);

      }

    }
  }

  request.open("POST", "signInProcess.php", true);
  request.send(form);

}

function signUp() {
  var fname = document.getElementById("fname");
  var lname = document.getElementById("lname");
  var email1 = document.getElementById("email1");
  var password1 = document.getElementById("password1");

  var form = new FormData();
  form.append("f", fname.value);
   form.append("l", lname.value);
  form.append("e1", email1.value);
  form.append("p1", password1.value);


  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.status == 200 & request.readyState == 4) {
      var response = request.responseText;

      if (response == "success") {
        document.getElementById("msg3").innerHTML = response;
        document.getElementById("msgdiv3").className = "d-block";

        setTimeout(function () {
          window.location = "index.php";
        }, 900);


      } else {

        document.getElementById("msg2").innerHTML = response;
        document.getElementById("msgdiv2").className = "d-block";

        setTimeout(function () {
          document.getElementById("msgdiv2").className = "d-none";
        }, 2000);

      }

    }
  }

  request.open("POST", "signUpProcess.php", true);
  request.send(form);

}



function signOut() {
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.status == 200 & request.readyState == 4) {
      var response = request.responseText;
      if (response == "success") {
        location.reload();
      }
    }
  }

  request.open("GET", "signOutProcess.php", true);
  request.send();
}

function myAccount() {
  window.location = "user.php";
}
