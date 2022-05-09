<?php
$Id = $_GET['id'];
$conn = mysqli_connect("localhost", "root", "seasia@123", "ajax") or die ("connection failed");
$sql = "DELETE FROM ajax_table WHERE Id = {$Id}";
$result = mysqli_query($conn, $sql) or die ("query unsucessful");
header("location: http://localhost/file/ajax/table.php");
mysqli_close($conn);
?>