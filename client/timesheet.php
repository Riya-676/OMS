<?php include 'db.php'; ?>
<h2>Timesheet</h2>

<form method="post">
    <input type="date" name="work_date">
    <input type="number" name="hours" placeholder="Hours Worked">
    <textarea name="work_desc" placeholder="Work Description"></textarea>
    <button name="add">Submit</button>
</form>

<?php
if(isset($_POST['add'])){
    mysqli_query($conn,
    "INSERT INTO timesheet(employee_name,work_date,hours_worked,work_description)
     VALUES(
     'Riya',
     '$_POST[work_date]',
     '$_POST[hours]',
     '$_POST[work_desc]')");
}
?>

<table border="1">
<tr>
<th>Date</th><th>Hours</th><th>Description</th>
</tr>

<?php
$res=mysqli_query($conn,"SELECT * FROM timesheet");
while($row=mysqli_fetch_assoc($res)){
echo "<tr>
<td>{$row['work_date']}</td>
<td>{$row['hours_worked']}</td>
<td>{$row['work_description']}</td>
</tr>";
}
?>
</table>
