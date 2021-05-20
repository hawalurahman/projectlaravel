<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration Form</title>
    <link rel="stylesheet" href="LogInStyle.css">
    <script>
        function validation() {

            var a = document.forms["myform"]["Email Address"].value;
            var b = document.forms["myform"]["Password"].value;
            if (a == "") {
                alert("Email Address must be fill");
                return false;
            } else if (b == "") {
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
            <div class='title'>Log In as Contributor</div>
            <div class='subtitle'>Don't have an account? <a href="learncontributor.html" style="text-decoration:none;color: blue;">Sign Up</a> </div>
            <div class="google">
                <button type="button" style="outline:none ;background-color: #ACEF1D;border-style:none ; border-radius: 5px;">
                    <img src="google.svg">
                    <a style="color: black;">Continue with Google</a>
                </button>
            </div>
            <div class="or"><img src="or.svg" alt=""></div>

            <div class="formulir">
                <form name="myform" onsubmit="return validation()">

                    <label for="Email Address">Email Address</label><br>
                    <input type="email" id="Email Address"><br>
                    <label for="Password">Password</label><br>
                    <input type="password" id="Password" name="Password"><br>
                    <div class="SignUp">
                        <button type="submit" style="background-color:#ACEF1D;outline: none; font-weight: bold;"><a href="dashboard.html" style="color: black;">Log in</a></button>
                    </div>
                </form>

            </div>

            <div class="check">
                <input type="checkbox" id="Terms" name="Terms" value="Terms">
                <label for="vehicle1"><a style="font-size: 12px;">Remember Me </a></label><br>
                <br><a href="login.html" style="font-size: 12px;">login as member</a><br>
            </div>


        </div>
    </div>

</body>

</html>