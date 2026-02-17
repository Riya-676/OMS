<?php
$pageTitle = "Tasks";
?>

<?php 
include '../db.php'; 
include("../includes/header.php");

?>
<?php
// Status Change


if(isset($_GET['status']) && isset($_GET['id'])){
    $id = $_GET['id'];
    $status = $_GET['status'];

    mysqli_query($conn,"UPDATE tasks SET status='$status' WHERE id=$id");
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

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
.action-btn{
    padding:5px 8px;
    border-radius:4px;
    text-decoration:none;
    font-size:12px;
    color:white;
}

.pending{ background:#f39c12; }
.overdue{ background:#e74c3c; }
.complete{ background:#27ae60; }
/* 3 dots button */
.dots-btn{
   
    border:none;
    font-size:18px;
    padding:8px 12px;
    border-radius:8px;
    cursor:pointer;
}

/* Dropdown container */
.dropdown{
    position:relative;
    display:inline-block;
}

/* Dropdown menu */
.dropdown-content{
    display:none;
    position:absolute;
    right:0;
    top:40px;
    background:white;
    min-width:140px;
    box-shadow:0 5px 15px rgba(0,0,0,0.15);
    border-radius:8px;
    z-index:999;
    overflow:hidden;
}

/* Dropdown links */
.dropdown-content a{
    display:block;
    padding:10px 12px;
    text-decoration:none;
    color:#333;
    font-size:14px;
}

.dropdown-content a:hover{
    background:#f2f2f2;
}

/* Show dropdown on click */
.dropdown.active .dropdown-content{
    display:block;
}


    </style>
</head>
<body>
<div class="main">

<?php include("../includes/sidebar.php"); ?>

<div class="content">

<div class="">

<form method="post" style="background:none; margin-left: auto ; margin-right:0">
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
<th>Action</th>
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
<td>
<?php
if($row['status'] == 'Complete'){
    echo "<span style='color:green;'>Complete</span>";
}
else if($row['status'] == 'Overdue'){
    echo "<span style='color:red;'>Overdue</span>";
}
else if($row['due_date'] < date("Y-m-d")){
    echo "<span style='color:red;'>Overdue</span>";
}
else{
    echo "<span style='color:orange;'>Pending</span>";
}

?>
</td>

<td style="position:relative;">

    <div class="dropdown">
        <button class="dots-btn">&#8942;</button>

        <div class="dropdown-content">
            <a href="?id=<?php echo $row['id']; ?>&status=Pending">Pending</a>
            <a href="?id=<?php echo $row['id']; ?>&status=Overdue">Overdue</a>
            <a href="?id=<?php echo $row['id']; ?>&status=Complete">Complete</a>
        </div>
    </div>

</td>
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
document.querySelectorAll(".dots-btn").forEach(button => {
    button.addEventListener("click", function(e){
        e.stopPropagation();
        document.querySelectorAll(".dropdown").forEach(d => d.classList.remove("active"));
        this.parentElement.classList.toggle("active");
    });
});

window.addEventListener("click", function(){
    document.querySelectorAll(".dropdown").forEach(d => d.classList.remove("active"));
});

</script>

</body>
</html>
