<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> login-page</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class='box'>
            <div class='wave -one'></div>
            <div class='wave -two'></div>
            <div class='wave -three'></div>
          </div>
          
    <div class="center">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()">Log In</button>
            <button type="button" class="toggle-btn" onclick="register()">Register</button>
        </div>
        <div class="social-icon">
            <img src="https://i.pinimg.com/originals/5f/0c/25/5f0c255d69fa5c24701c547d35ceb5ae.png">
            <img src="data:image/png;base64,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">
            <img src="data:image/png;base64,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">
        </div>
        <form id="login" action="server.php" method="post" class="name">
            <div class="name">
                <input type="text" required="required" name="email_username">
                <span>Username/E-Mail</span>
                <i></i>
            </div>
            <div class="name">
                <input type="password" required="required" id="myInput" name="password">
                <span>Password</span>                
                <i></i>
            </div>
            <div class="pass">
            <input type="checkbox" onclick="myFunction()">Show Password
            </div>
            <button type="submit" class="submit-btn" name="login">Log In</button>
        </form>
        <form id="register" action="server.php" method="post" class="name">
                <div class="name">
                    <input type="text" required="required" name="username">
                    <span>Username</span>
                    <i></i>
                </div>
                <div class="name">
                    <input type="text" required="required" name="email">
                    <span>Email-id</span>
                    <i></i>
                </div>
                <div class="name">
                    <input type="password" required="required" id="myInput1" name="password">
                    <span>Password</span>
                    <i></i>
                </div>
                <div class="name" id="abcd">
                <input type="checkbox" onclick="myFunction1()">Show Password
                </div>
                    <button type="submit" class="name" id="abc" name="register">
                        Register
                    </button>
            </div>
        </form>
    </div>
    <div id = "message">
        <h3>Password must conatin the Followings:</h3>
        <p id = "lowercase" class="invalid">A <b>Lowercase</b>letter</p>
        <p id = "uppercase" class="invalid">A <b>Uppercase</b>letter</p>
        <p id = "numbercase" class="invalid">A <b>Number</b></p>
        <p id = "spcl" class="invalid">A <b>Special</b>Character</p>
        <p id = "lengthcase" class="invalid">Minimum<b>8 Character</b></p>
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "100px";
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        } 
        function me(){
            var emp = document.forms["users"]["paas"].value
            if (emp == ""){
                alert("Please enter a Log in detail")
            return false;
            }
            else{
            return true;
        }
        }
        function myFunction1() {
            var x = document.getElementById("myInput1");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        } 
        var myInput2 = document.getElementById("myInput1");
        var low = document.getElementById("lowercase");
        var upp = document.getElementById("uppercase");
        var num = document.getElementById("numbercase");
        var spl = document.getElementById("spcl");
        var len = document.getElementById("lengthcase");

        const lower = new RageExp('(?=.*[a-z])');
        const upper = new RageExp('(?=.*[A-Z])');
        const number = new RageExp('(?=.*[0-9])');
        const special = new RageExp('(?=.*[!@#$%^&*])');
        const length = new RageExp('(?=.{8,})');

        myInput2.onfocus = function(){
            document.getElementById("message").style.display = "block";
        }
        myInput2.onblur = function(){
            document.getElementById("message").style.display = "none";
        }
    </script>
    </body>
</html>