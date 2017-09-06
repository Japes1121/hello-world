<?php
session_start();
include "connection/connect.php"; 
$taskName = $_POST['taskName'];
$taskDesc = $_POST['taskDesc'];
$assignedTo = $_POST['assignedTo'];
$startDate = $_POST['startDate'];
$endDate = $_POST['targetDate'];

//echo $taskName . "   " . $assignedTo;

 	$insertNewTaskQuery = "insert into task(task_name,task_desc,assigned_to,assigned_date,target_date)
							values('$taskName','$taskDesc',$assignedTo,'$startDate','$endDate')";
    $insertNewTaskQueryResult = mysqli_query($conn, $insertNewTaskQuery);
    if($insertNewTaskQueryResult)
	{
		$_SESSION['update'] = 'Task added successfully!';
		header("Location:http://localhost:8080/infyInnovation/pages/task-dashboard.php");
	}
	else
	{
		$_SESSION['update'] = 'Error Occured';
	}

	 
?>