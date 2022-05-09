<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$marks = $_POST['marks'];
$email = $_POST['email'];
$numbers = $_POST['numbers'];
$gender = $_POST['gender'];
$comments = $_POST['comments'];


$conn = mysqli_connect("localhost","root","seasia@123","ajax") or die ("connection failed");
$sql = " INSERT INTO ajax_table (firstname, lastname, marks, email, numbers, gender, comments )
        VALUES ('$firstname', '$lastname', '$marks', '$email', '$numbers', '$gender', '$comments')";
$result = mysqli_query($conn, $sql);
    if ($result==1) {
        echo"<script>alert('Your record has been saved Sucessfully');</script>";
    } else {
        echo"<script>alert('Record Not Saved');</script>";
    }
// header("location: http://localhost/ajax/record2.php");
    mysqli_close($conn);
?>