<?php include 'db.php'; ?>
<h2>Tasks</h2>

<form method="post">
    <input type="text" name="task_name" placeholder="Task Name" required>
    <input type="text" name="assigned_to" placeholder="Assigned To">
    <input type="date" name="due_date">
    <button name="add">Add Task</button>
</form>

<?php
if(isset($_POST['add'])){
    mysqli_query($conn,
    "INSERT INTO tasks(task_name,assigned_to,due_date,status)
     VALUES(
     '$_POST[task_name]',
     '$_POST[assigned_to]',
     '$_POST[due_date]',
     'Pending')");
}
?>

<table border="1">
<tr>
<th>Task</th><th>Assigned</th><th>Due</th><th>Status</th>
</tr>

<?php
$res=mysqli_query($conn,"SELECT * FROM tasks");
while($row=mysqli_fetch_assoc($res)){
echo "<tr>
<td>{$row['task_name']}</td>
<td>{$row['assigned_to']}</td>
<td>{$row['due_date']}</td>
<td>{$row['status']}</td>
</tr>";
}
?>
</table>
