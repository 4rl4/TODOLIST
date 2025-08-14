<?php

require 'function.php';

if (isset($_POST["add_post"])) {
  $name_task = $con->real_escape_string($_POST["name_task"]);
  $status_task = $con->real_escape_string($_POST["status_task"]);
  $priority = $con->real_escape_string($_POST["priority"]);
  $date = $con->real_escape_string($_POST["date_task"]);
  $sql = "INSERT INTO tasks (name_task, status_task, priority, date_task) VALUES ('$name_task', '$status_task', '$priority', '$date')";
  $query = $con->query($sql);
  header("Location: index.php");
}

if (isset($_POST['id_task'])) {
  $id_task = $_POST['id_task'];
  $name_task = $con->real_escape_string($_POST["name_task"]);
  $status_task = $con->real_escape_string($_POST["status_task"]);
  $priority = $con->real_escape_string($_POST["priority"]);
  $date = $con->real_escape_string($_POST["date_task"]);
  $query = mysqli_query($con, "UPDATE tasks SET name_task='$name_task', status_task='$status_task', priority='$priority', date_task='$date' WHERE id_task='$id_task'");
  header("Location: index.php");
}

if (isset($_GET['delete'])) {
  $id_task = $_GET['delete'];
  $query = mysqli_query($con, "DELETE FROM tasks WHERE id_task='$id_task'");
  header("Location: index.php");
}

?>