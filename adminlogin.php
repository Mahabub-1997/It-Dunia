<?php
    if (isset($_COOKIE['email'])) {
        $email = $_COOKIE['email'];

        echo "<script>
            document.getElementById('email').value = '$email';
        </script>";
    }
    

?>




<!DOCTYPE html>
<html>
<style>
h1{
text-align: center;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h1>Admin Registration Form</h1>

<div>
  <form action="validate.php" method="post">
    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email..">

    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="password">

    <label for="lname">Remember Me</label>
    <input type="checkbox"  name="remember">
  
    <input type="submit" value="Login" name="login">
  </form>
</div>

</body>
</html>