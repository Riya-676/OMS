
<?php
$pageTitle = "Projects";
?>
<?php 
include '../db.php'; 
session_start();

// if(!isset($_SESSION['client_id'])){
//     header("Location: login.php");
//     exit();
// }

// $client_id = $_SESSION['client_id'];
?>
<?php
include("../includes/header.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Projects</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
</head>

<body>

<div class="main">

<?php include("../includes/sidebar.php"); ?>

<div class="content">

<h2 style="Margin: 20px">Assigned Projects</h2>

<div class="card">
<table>
<tr>
    <th>Name</th>
    <th>Start</th>
    <th>End</th>
    <th>Status</th>
</tr>

<?php
$res = mysqli_query($conn,
"SELECT * FROM projects WHERE client_id = '$client_id'");

while($row=mysqli_fetch_assoc($res)){
?>
<tr>
    <td><?php echo $row['project_name']; ?></td>
    <td><?php echo $row['start_date']; ?></td>
    <td><?php echo $row['end_date']; ?></td>
    <td><?php echo $row['status']; ?></td>
</tr>
<?php } ?>

</table>
</div>

</div>
</div>

</body>
</html>
