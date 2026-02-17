<?php
include '../db.php';
session_start();

// if(!isset($_SESSION['client_id'])){
//     header("Location: login.php");
//     exit();
// }

// $client_id = $_SESSION['client_id'];

// Add Task
if(isset($_POST['add_task'])){
    $name = $_POST['task_name'];
    $desc = $_POST['task_description'];

    mysqli_query($conn,
    "INSERT INTO task (client_id, task_name, task_description)
     VALUES ('$client_id','$name','$desc')");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>My Tasks</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="../style.css">

<style>
body{
    margin:0;
    font-family:Arial;
    background:#f4f6f9;
}

.main-container{
    display:flex;
}

.content{
    flex:1;
    padding:30px;
}

.card{
    background:white;
    padding:20px;
    border-radius:8px;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
    margin-bottom:20px;
}

input, textarea{
    width:100%;
    padding:10px;
    margin:8px 0;
    border:1px solid #ccc;
    border-radius:5px;
}

button{
    background:#2c3e50;
    color:white;
    padding:10px 15px;
    border:none;
    border-radius:5px;
    cursor:pointer;
}

button:hover{
    background:#1a252f;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
}

table th, table td{
    padding:10px;
    border:1px solid #ddd;
    text-align:center;
}

table th{
    background:#2c3e50;
    color:white;
}
</style>
</head>

<body>

<div class="main-container">

<?php include("../includes/sidebar.php"); ?>

<div class="content">

<h2>My Tasks</h2>

<div class="card">
<form method="post">
    <input type="text" name="task_name" placeholder="Task Name" required>
    <textarea name="task_description" placeholder="Task Description"></textarea>
    <button name="add_task">Add Task</button>
</form>
</div>

<div class="card">
<table>
<tr>
    <th>Task Name</th>
    <th>Description</th>
    <th>Status</th>
</tr>

<?php
$res = mysqli_query($conn,
"SELECT * FROM task WHERE client_id='$client_id'");

while($row=mysqli_fetch_assoc($res)){
?>
<tr>
    <td><?php echo $row['task_name']; ?></td>
    <td><?php echo $row['task_description']; ?></td>
    <td><?php echo $row['status']; ?></td>
</tr>
<?php } ?>

</table>
</div>

</div>
</div>

</body>
</html>
