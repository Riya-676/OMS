<?php
include("../db.php");
session_start();

if(isset($_POST['login'])){
 $email=$_POST['email'];
 $pass=$_POST['password'];

 $q=mysqli_query($conn,"SELECT * FROM client WHERE email='$email' AND password='$pass'");
 if(mysqli_num_rows($q)>0){
   $_SESSION['user']=$email;
   header("location:dashboard.php");
   exit();
 }
 else{
   $error = "Invalid Login Credentials!";
 }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="../style.css">

<style>

body{
  margin:0;
  font-family:Segoe UI, Arial;
  background:#f4f6fb;
  display:flex;
  justify-content:center;
  align-items:center;
  height:100vh;
}

.container{
  width:900px;
  background:white;
  display:flex;
  border-radius:15px;
  box-shadow:0 15px 40px rgba(0,0,0,0.15);
  overflow:hidden;
}

.left{
    background: #eef1f8;
    display: flex;
    justify-content: center;
    align-items: center;
        padding-left: 25px;
    background: white;
}

.left img{
  width:100%;
  max-width:350px;
}

.right{
  flex:1;
  padding:60px;
}

.right h2{
  margin-bottom:15px;
  font-weight:600;
    color: black;
  text-align: center;
}

.input-group{
  margin-bottom:20px;
}

.input-group input{
  width:100%;
  padding:12px;
  border:none;
  background:#f1f3f7;
  border-radius:6px;
  font-size:14px;
}

button{
  width:100%;
  padding:12px;
  border:none;
  border-radius:25px;
  background:linear-gradient(to right,#6fb1fc,#4364f7);
  color:white;
  font-size:16px;
  cursor:pointer;
  transition:0.3s;
}

button:hover{
  opacity:0.9;
}

.error{
  color:red;
  margin-bottom:10px;
}

</style>
</head>

<body>

<div class="container">

  <!-- LEFT SIDE IMAGE -->
  <div class="left">
    <img src="loginpage.png" alt="Login Image">
  </div>

  <!-- RIGHT SIDE FORM -->
  <div class="right">
    <h2>Login</h2>

    <?php if(isset($error)) echo "<div class='error'>$error</div>"; ?>

    <form method="post">
      <div class="input-group">
        <input type="email" name="email" placeholder="Email" required>
      </div>

      <div class="input-group">
        <input type="password" name="password" placeholder="Password" required>
      </div>

      <button name="login">Login</button>
    </form>

  </div>

</div>

</body>
</html>
