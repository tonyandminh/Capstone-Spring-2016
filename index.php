<?php
    //require_once("db_connect.php");
 ?>

 <html>
    <head>
        <meta charset="utf-8">
		<title>Bethany Negash Foundation</title>
        <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>

        <script type= "javascript">
            $(document).ready(function (){
                $("#b_login").onclick(function(){
                    alert("")
                });
            });

            function Login(email, password){
                $.ajax({
                    method : "POST",
                    url : "db_connect.php",
                    async : false,
                    data : {"method" : "Login", "email" : email, "password" : password},
                    success : (function (returnData) {
                    //var allProductsJSON = JSON.parse(returnData);
                    alert("Login was " + returnData);
                })
              });
            }

            function SignUp(){
                $.ajax({
                    method : "POST",
                    url : "db_connect.php",
                    async : false,
                    data : {"method" : "SignUp"},
                    success : (function (returnData) {
                    //var allProductsJSON = JSON.parse(returnData);
                    alert("Login was " + returnData);
                })
              });
            }
        </script>

        <style>
            .description{
                font-weight: bold;
            }
        </style>
    </head>

    <body>
        <div style = "margin:5% 10% 1% 10%;">
            <form>
                <!-- Login Form-->
                <table>
                    <h1>Login</h1>
                    <tr>
                        <td class = "description">Email: </td>
                        <td><input type = "text" id = "t_login_email" maxlength="45"></input> </td>
                    </tr>
                    <tr>
                        <td class = "description">Password: </td>
                        <td><input type = "password" id = "t_login_password" maxlength="45"></input> </td>
                    </tr>
                    <tr>
                        <td><input type = "button" id = "b_login" class = "description" value = "Login"></input></td>
                    </tr>
                </table>

                <!-- Sign up form-->
                <table>
                    <h1>Sign Up</h1>
                    <tr>
                        <td class = "description">Email: </td>
                        <td><input type = "text" id = "t_signup_email" maxlength="45"></input> </td>
                    </tr>
                    <tr>
                        <td class = "description">Password: </td>
                        <td><input type = "password" id = "t_signup_password" maxlength="45"></input> </td>
                    </tr>
                    <tr>
                        <td class = "description">Confirm Password: </td>
                        <td><input type = "password" id = "t_login_password" maxlength="45"></input> </td>
                    </tr>
                    <tr>
                        <td><input type = "button" id = "login" class = "description" value = "Sign Up"></input></td>
                    </tr>
                </table>

                <!-- Forget Password form-->
                <table>
                    <h1>Forget Password</h1>
                    <tr>
                        <td class = "description">Email: </td>
                        <td><input type = "text" id = "t_forget_email" maxlength="45"></input> </td>
                    </tr>
                    <tr>
                        <td><input type = "button" id = "b_forget_login" class = "description" value = "Forget"></input></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
