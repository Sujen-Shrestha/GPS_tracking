<!DOCTYPE html>
<html>
<?php session_start(); ?>
<?php
if (isset($_GET['error'])) {
      if ($_GET['error'] == "invaliduid") {
            echo "<font color='red'><p align='center'>Incorrect ID or Password or not Approved</p></font>";
      } elseif ($_GET['error'] == "sucess") {
            echo "<font color='red'><p align='center'>Registeration sucessful</p></font>";
      }
}
?>
<head>
      <style>
            body {
                  background-color: #e8edf7;
            }

            html {
                  font-family: Arial, Helvetica, sans-serif;
                  ;
            }

            form {
                  width: 40%;
                  padding: 35px;
                  height: fit-content;
                  margin: 0 auto;
                  margin-top: fit-content;
                  background-color: #f9f9f9
            }

            .reg {
                  width: 100%;
                  padding: 10px;
                  margin: 8px 0;
                  display: inline-block;
                  border: 1px solid #ccc;
                  box-sizing: border-box;

            }


            .form-control {
                  width: 100%;
                  padding: 10px;
                  margin: 8px 0;
                  display: inline-block;
                  border: 1px solid #ccc;
                  box-sizing: border-box;
            }

            button {
                  background-color: #a2b9bc;
                  color: black;
                  border: none;
                  cursor: pointer;
                  width: 30%;
                  margin: 5px auto;
                  padding: 7px;
                  box-shadow: 0px 5px 5px #ccc;
                  border-radius: 5px;
                  border-top: 1px solid #e9e9e9;
                  display: block;
                  text-align: center;
            }

            .signup {
                  background-color: blue;
                  margin-bottom: 20px;
            }

            .login-box {
                  align: left;
                  position: left;
                  top: 50%;
                  transform: translateY(-50%);
                  padding: 5px;
                  background-color: #fff;
                  box-shadow: 0px 5px 5px #ccc;
                  border-radius: 5px;
                  border-top: 1px solid #e9e9e9;
            }

            h2,
            p {
                  text-align: center;
                  margin-top: 1%;
            }

            h4 {
                  text-align: center;
                  margin-top: 5px;
            }

            a {
                  align: left;
                  text-decoration: none;
            }

            .admin {
                  font-size: 85%;
                  text-decoration: none;
                  color: black;
            }

            .new {
                  margin-top: 2%;
                  right: 10px;
                  padding: 15px;
                  width: auto;
                  position: absolute;
                  transform: translateY(-50%);
            }
      </style>
</head>

<body>
      <button class="new"><a class="admin" href="admin.php">Admin Login</a></button>
      <form action="login.php" method="post">
            <h2>WELCOME</h2>
            <p>Sign in</p>
            <div class="container">
                  <label for="id"><b>Mobile Number</b></label>
                  <input type="number" class="form-control" id="number" name="number" placeholder="Enter your Mobile Number " required>


                  <label for="name"><b>Password</b< /label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                              <input type="checkbox" onclick="myFunction()">Show Password <br>

                              <button type="submit">Login</button><br>
                              <h4>REGISTER HERE</h4>
                              <a href="registerpage.php" target="_self"><button type="button" name="button"> Register</button></a>
            </div>
      </form>
</body>
<script>
      function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                  x.type = "text";
            } else {
                  x.type = "password";
            }
      }
</script>

</html>