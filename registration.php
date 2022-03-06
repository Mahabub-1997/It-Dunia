<!DOCTYPE html>
<html>
    <head>
        <title>Register Form</title>
        <link rel="stylesheet" href="stylereg.css">
        <script type="text/javascript">
            function validate(){
               var username = document.getElementById("uname");
               
               var male = document.getElementById("male");
               var female = document.getElementById("female");
               var email = document.getElementById("email"); 
               var phone = document.getElementById("phone");

               if(username.value.trim() =="" || male.value.trim() =="" || female.value.trim() =="" || email.value.trim() =="" || phone.value.trim() =="")
               {
                    alert("No blank values allowed");
                    return false;
               }
               else
               {
                    return true;
               }
            }
        </script>
    </head>

    <body>
        <h1>Registration Form</h1>
        <form action="submit1.php" method="POST" class="bd">
            <table style="text-align: center; justify-content: center;">
                <tr>
                    <td >Name: </td>
                    <td><input type="text" name="username" id="uname" ></td>
                </tr>
                
                <tr>
                    <td>Gender : </td>
                    <td>
                        <input type="radio" name="gender" value="m" id="male">Male
                        <input type="radio" name="gender" value="f" id="female">Female
                    </td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><input type="email" name="email" id="email"></td>
                </tr>
                <tr>
                    <td>Phone no : </td>
                    <td>
                        <select name="phoneCode">
                            <option selected hidden >Select Code</option>
                            <option value="977">977</option>
                            <option value="978">978</option>
                            <option value="979">979</option>
                            <option value="970">970</option>
                            <option value="971">971</option>
                            <option value="972">972</option>
                        </select>
                        <input type="phone" name="phone"  id="phone">
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="submit" onclick="return validate()"></td>
                </tr>
                
            </table>
        </form>
    </body>
</html>