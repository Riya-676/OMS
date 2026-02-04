<?php include 'db.php'; ?>
<h2>Projects</h2>

<form method="post">
    <input type="text" name="project_name" placeholder="Project Name" required>
    <textarea name="description" placeholder="Description"></textarea>
    <input type="date" name="start_date">
    <input type="date" name="end_date">
    <button name="add">Add Project</button>
</form>

<?php
if(isset($_POST['add'])){
    mysqli_query($conn,
    "INSERT INTO projects(project_name,description,start_date,end_date,status)
     VALUES(
     '$_POST[project_name]',
     '$_POST[description]',
     '$_POST[start_date]',
     '$_POST[end_date]',
     'Active')");
}
?>

<table border="1">
<tr>
<th>Name</th><th>Start</th><th>End</th><th>Status</th>
</tr>

<?php
$res = mysqli_query($conn,"SELECT * FROM projects");
while($row=mysqli_fetch_assoc($res)){
echo "<tr>
<td>{$row['project_name']}</td>
<td>{$row['start_date']}</td>
<td>{$row['end_date']}</td>
<td>{$row['status']}</td>
</tr>";
}
?>
</table>
