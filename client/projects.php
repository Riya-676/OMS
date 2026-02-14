<?php include '../db.php'; ?>
<?php $pageTitle = "Projects"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Projects</title>
    <meta charset="UTF-8">
<link rel="stylesheet" href="../style.css">

    <style>

        body{
            margin:0;
            font-family: Arial, Helvetica, sans-serif;
            background:#f4f6f9;
        }

        .main-container{
            display:flex;
        }

        .content{
            flex:1;
            padding:30px;
        }

        h2{
            margin-bottom:20px;
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
            background:#4CAF50;
            color:white;
            padding:10px 15px;
            border:none;
            border-radius:5px;
            cursor:pointer;
        }

        button:hover{
            background:#45a049;
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

        <h2>Projects</h2>

        <div class="card">
            <form method="post">
                <input type="text" name="project_name" placeholder="Project Name" required>
                <textarea name="description" placeholder="Description"></textarea>
                <input type="date" name="start_date">
                <input type="date" name="end_date">
                <button name="add">Add Project</button>
            </form>
        </div>

        <?php
        if(isset($_POST['add'])){
            $name = $_POST['project_name'];
            $desc = $_POST['description'];
            $start = $_POST['start_date'];
            $end = $_POST['end_date'];

            mysqli_query($conn,
            "INSERT INTO projects(project_name,description,start_date,end_date,status)
             VALUES('$name','$desc','$start','$end','Active')");
        }
        ?>

        <div class="card">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Status</th>
                </tr>

                <?php
                $res = mysqli_query($conn,"SELECT * FROM projects");
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
