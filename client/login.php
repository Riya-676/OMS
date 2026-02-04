<?php
include("../db.php");
if(isset($_POST['login'])){
 $email=$_POST['email'];
 $pass=$_POST['password'];

 $q=mysqli_query($conn,"SELECT * FROM client WHERE email='$email' AND password='$pass'");
 if(mysqli_num_rows($q)>0){
   header("location:dashboard.php");
 }
 else{
   echo "Invalid Login";
 }
}
?>

<form method="post">
 Email: <input type="email" name="email"><br>
 Password: <input type="password" name="password"><br>
 <button name="login">Login</button>
</form>
