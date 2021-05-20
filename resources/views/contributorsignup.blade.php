<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up Form</title>
    <link rel="stylesheet" href="SignUpStyle.css">
    <script>
        function validation() {
            var a = document.forms["myform"]["name lengkap"].value;
            var b = document.forms["myform"]["username"].value;
            var c = document.forms["myform"]["Email Address"].value;
            var d = document.forms["myform"]["Password"].value;
            if (a == "") {
                alert("fullname must be fill");
                return false;
            } else if (b == "") {
                alert("username must be fill");
                return false;
            } else if (c == "") {
                alert("Email Address must be fill");
                return false;
            } else if (d == "") {
                alert("Password must be fill");
                return false;
            }
        }
    </script>
</head>

<body>
    <nav>
        <div class="Logo">
            <a href="index.html"><img src="logo.png"></a>
        </div>

    </nav>
    <div class="inner">
        <div class="photo">
            <img src="shape1.svg">
        </div>
        <div class="form">
            <div class='title'>Sign Up as Contributor</div>
            <div class='subtitle'>Already have an account? <a href="logincontributor.html" style="text-decoration:none;color: blue;">Log in</a> </div>
            <div class="google">
                <button type="button" style="outline:none ;background-color: #ACEF1D;;border-style:none ; border-radius: 5px;">
                    <img src="google.svg">
                    <a style="color: black;">Continue with Google</a>
                </button>
            </div>
            <div class="or"><img src="or.svg" alt=""></div>

            <div>
                <form name="myform" onsubmit="return validation()">
                    <label for="name lengkap">Full Name</label><br>
                    <input type="text" id="name lengkap"><br>
                    <label for="username">Username</label><br>
                    <input type="text" id="username" name="username"><br>
                    <label for="Email Address">Email Address</label><br>
                    <input type="email" id="Email Address"><br>
                    <label for="Password">Password</label><br>
                    <input type="password" id="Password" name="Password"><br>
                    <div class="SignUp">
                        <button type="submit" style="background-color:#ACEF1D;outline: none; font-weight: bold;"><a style="color: black;">Sign Up</a></button>

                    </div>

                </form>

            </div>

            <div class="check">
                <input type="checkbox" id="Terms" name="Terms" value="Terms">
                <label for="vehicle1"><a style="font-size: 12px;">Remember Me </a></label><br>
                <br><a href="SignUp.html" style="font-size: 12px;">Signup as Member</a><br>
            </div>


        </div>
    </div>

</body>

</html>