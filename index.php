
<?php
 include 'connection.php';

 if(isset($_POST['add'])){
    $task = $_POST['task'];

    $sql = "insert into `task` (task) VALUES ('$task')";
    $sql_result = mysqli_query($connection, $sql);
    
    if(!$sql_result){
       die (mysqli_error($connection));
    }
 }





?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO || APP </title>
    <!---Miligram Css--->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
    
    <h1 style="display: flex; align-items: center; justify-content: center; margin-top: 100px; font-size: 7rem; font-weight: bold;"> TODO APP </h1>
    <form method="post" style="display: flex; align-items: center; justify-content: center; margin-top: 50px;">
    <fieldset style="display: flex; gap:10px">
        <input style="padding: 10px 20px;" type="text" placeholder="Write Your Task" name="task">
        <input class="button-primary" type="submit" value="add" name="add">
    </fieldset>
</form>




<table style=" margin-top: 200px; padding-left: 200px; padding-right: 200px;">
  <thead>
    <tr>
      <th>Roll</th>
      <th>Task</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
       <?php 
       $sql = "SELECT * FROM `task`";
       $sql_result = mysqli_query($connection, $sql);

       while($row = mysqli_fetch_assoc($sql_result)){
        $roll = $row['roll'];
        $task = $row['task'];


        echo "<tr>";
        echo "<td>".$roll."</td>";
        echo "<td>".$task."</td>";
        echo "<td><a class = 'button' href='delete.php?delete=". $roll ."'>Delete</a></td>";
        echo "</tr>";


       }

       ?>
  
  </tbody>
  
</table>


    
</body>
</html>
