<?php
$pageTitle = "Tasks";
?>

<?php 
include '../db.php'; 
include("../includes/header.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Office Management</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
    <style> 
            .add-btn{
    background:#2c3e50;
    color:white;
    padding:10px 15px;
    border:none;
    border-radius:5px;
    cursor:pointer;
    margin-bottom:15px;
}

.add-btn:hover{
    background:#34495e;
}

.modal{
    display:none;
    position:fixed;
    z-index:1000;
    left:0;
    top:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.5);
}

.modal-content{
    background:white;
    width:400px;
    margin:10% auto;
    padding:20px;
    border-radius:8px;
    position:relative;
}

.close{
    position:absolute;
    right:15px;
    top:10px;
    font-size:20px;
    cursor:pointer;
}

textarea{
    width:100%;
    padding:10px;
    margin:8px 0;
    border:1px solid #ccc;
    border-radius:5px;
}

    </style>
</head>
<body>
<div class="main">

<?php include("../includes/sidebar.php"); ?>

<div class="content">

<div class="">

<form method="post" style="">
     <button class="add-btn" onclick="openModal()">+ Add Task</button>
    <div id="taskModal" class="modal">
     <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>

        <h3>Add New Task</h3>

    <form method="post">
        <input type="text" name="task_name" placeholder="Task Title" required>
        <textarea name="description" placeholder="Task Description" required></textarea>
        <input type="date" name="due_date" required>
        <button name="add">Save Task</button>
    </form>
  </div>
</div>

</form>

</div>

<?php
if(isset($_POST['add'])){

    $task_name = $_POST['task_name'];
    $description = $_POST['description'];
    $due_date = $_POST['due_date'];

    mysqli_query($conn,
    "INSERT INTO tasks(task_name,description,due_date,status)
     VALUES('$task_name','$description','$due_date','Pending')");
}

?>

<br>

<div class="card">

<table>
<tr>
<th>Task</th>
<th>Description</th>
<th>Assigned</th>
<th>Due</th>

<th>Status</th>
</tr>

<?php
$res = mysqli_query($conn,"SELECT * FROM tasks");

while($row=mysqli_fetch_assoc($res)){
?>
<tr>
<td><?php echo $row['task_name']; ?></td>
<td><?php echo $row['description']; ?></td>
<td><?php echo $row['assigned_to']; ?></td>
<td><?php echo $row['due_date']; ?></td>
<td><?php echo $row['status']; ?></td>
</tr>
<?php } ?>

</table>

</div>

</div>
</div>
<script>
function openModal(){
    document.getElementById("taskModal").style.display="block";
}

function closeModal(){
    document.getElementById("taskModal").style.display="none";
}

window.onclick = function(event){
    var modal = document.getElementById("taskModal");
    if(event.target == modal){
        modal.style.display="none";
    }
}
</script>

</body>
</html>
