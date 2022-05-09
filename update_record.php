
<?php
  $id = $_POST['id'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $marks = $_POST['marks'];
  $email = $_POST['email'];
  $numbers = $_POST['numbers'];
  $gender = $_POST['gender'];
  $comments = $_POST['comments'];
  
  $conn = mysqli_connect("localhost","root","seasia@123","ajax") or die ("connection failed");
  $sql = "UPDATE ajax_table SET firstname = '{$firstname}',lastname = '{$lastname}', marks = '$marks', 
  email = '{$email}',numbers ='{$numbers}',gender ='{$gender}',comments ='{$comments}' 
  WHERE id = {$id}";

  $result = mysqli_query($conn, $sql);
      if ($result==1) {
          echo"<script>alert('Your record has been saved Sucessfully');</script>";
      } else {
          echo"<script>alert('Record Not Saved');</script>";
      }
      header("location: http://localhost/ajax/student.php");
      mysqli_close($conn);
?>