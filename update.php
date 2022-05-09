
<html>
    <head>
      <style>
          .h-300{
    height: 700px;
}
.w-40{
    width: 60%;
}
.b-color{
    background-color: aqua;
}
.text-align{
    text-align: center;
}
.m-top{
    margin-top: -600px;
}
.m-left{
    margin-left: 240px;
}
.b-radius-2{
    border-radius: 33px;
    /* background-color: blueviolet; */
}
.container{
    max-width: 1520px;
    margin: 0 auto;
}
.f-left{
    margin-left: -105px;
}
.f-left-1{
    margin-left: -140px;
}
.m-215{
    margin:auto;
}
.p-top{
    padding-top: 20px;
}
.ba-img{
   background-image: url(1.jpg);
}
tr,td{
    padding: 13px;
}
.s-width{
    width: 67px;
}
.s-height{
    height: 30px;
}
.s-color{
    background-color: skyblue;
}
.bt-left{
    margin-left: 30px;
}
.px-40{
    padding-left: 30px;
    padding-right: 30px;
}
.py-10{
    padding-top: 10px;
    padding-bottom: 10px;
}
.bt-top{
    margin-top: 10px;
}


/* fonts  */
.f-40{
    font-size: 40px;
}
.f-600{
    font-weight: 600;
}

/* button  */
.login-btn-1{
    background: transparent;
        font-weight: 600;
}
.border-2{
    border-radius: 10px;
    background-color: white;
    border-width: 1px;
    border: 2px solid;
}
.text{
    color: cyan;
}
.error{
    color: #FF0000;
}
      </style>
    </head>
    <body>
        <section class="ba-img container">
            <div class="text-align h-300 p-top f-40 f-600">
                <span class="text">STUDENT REGISTRATION</span>
  
                <?php
        $conn = mysqli_connect("localhost","root","seasia@123","ajax") or die ("connection failed");
        $id = $_GET['id'];
        $sql = "SELECT * FROM ajax_table WHERE id = '$id'";
        $result =mysqli_query($conn,$sql) or die (mysqli_error($conn));

        if (mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_array($result)){      
 ?>

            </div>
            <div class="h-300 w-40 b-color text-align m-top m-left b-radius-2">
                <div class="p-top">
                    <form action="update_record.php" method="POST">
                       <table class="m-215">
                           <tr>
                           <td><input type="hidden" name="id" value="<?php echo $row['id']; ?>"  maxlength="30"/> </td>
            </tr>
                        <tr>
                            <td>FIRST NAME</td>

                            <td><input type="text" name="firstname" value="<?php echo $row['firstname']; ?>" id="firstname" maxlength="30"/>
                                <span class="error">* <?php echo $firstnameErr;?></span>
                            </td>
                            </tr>
                             <br>
                            <!----- Last Name ---------------------------------------------------------->
                            <tr>
                            <td>LAST NAME</td>
                            <td><input type="text"  name="lastname" value="<?php echo $row['lastname']; ?>" id="lastname" maxlength="30"/>
                            <span class="error">* <?php echo $lastnameErr;?></span>
                            </td>
                            </tr>
                             <br>

                            <!-- marks  -->
                            <tr>
                                <td>Marks:</td>
                                <td>
                                    <input type="text" name="marks" value="<?php echo $row['marks']; ?>" id="marks" maxlength="4">
                                    <span class="error">* <?php echo $marksErr;?></span>
                                </td>
                                
                            </tr>
                                         <!-- email  -->
                            <tr>
                                <td>EMAIL ID</td>
                                <td><input type="text" name="email" id="email" value="<?php echo $row['email']; ?>" maxlength="100" />
                                    <span class="error">* <?php echo $emailErr;?></span>
                                </td>
                                
                                </tr>
                                <!-- mobile number  -->
                                <tr>
                                    <td>Mobile Number</td>
                                    <td>
                                        <input type="text" name="numbers" value="<?php echo $row['numbers']; ?>" id="numbers" maxlength="10" />
                                        <span class="error">* <?php echo $numbersErr;?></span>
                                    </td>
                                  
                                </tr>
                                <!-- gender  -->
                                <tr>
                                    <td>Gender:</td>
                                        <td>
                                            Male <input type="radio" name="gender" id="gender" value="Male" />
                                            Female <input type="radio" name="gender" id="gender" value="Female" />
                                            <span class="error">* <?php echo $genderErr;?></span>
                                            </td>
                                           
                                    </td>
                                </tr>
                               
                                <!-- review  -->
                                <tr>
                                    <td>Comment:</td>
                                    <td>
                                        <textarea name="comments" id="comments">


                                        </textarea>
                                    </td>
                                </tr>
                                <tr>
                                
                                </tr>
                                <td>
                                    <input type="submit" name="submit" value="update" class="login-btn bt-top bt-text px-40 py-10 border-2 text-decoration f-36 f-600 bt-color bt-text">
                                </td>
                       </table>
                    </form>
                    <?php } 
        }
                    ?>
                    </div>
            </div>
        </section>
    </body>
</html>
