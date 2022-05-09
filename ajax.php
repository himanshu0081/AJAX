<html>
    <head>
    <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="js/jquery.dataTables.min.js">
  <script src="js/jquery-3.6.0.min.js"></script>
  
  <script src="js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js">
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
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
.errors{
    color: red;
}
#first,#last,#mark,#message,#mobile,#gender{
    color:red;
}
      </style>

    </head>
    <body>
        <section class="ba-img container">
            <div class="text-align h-300 p-top f-40 f-600">
                <span class="text">STUDENT REGISTRATION</span>
            </div>
            <div class="h-300 w-40 b-color text-align m-top m-left b-radius-2">
                <div class="p-top">
                    <form id="first_form" name="myform" action="" method="POST" onsubmit="return validation()">
                       <table class="m-215">
                        <tr>
                            <td>FIRST NAME</td>

                            <td><input  type="text" name="firstname" id="first_name" value="" maxlength="30"/><span id="First"></span>
                                <span class="error">* <?php echo $firstnameErr;?></span>
                            </td>
                            </tr>   
                            <p class="errors"></p> 
                             <br>
                            <!----- Last Name ---------------------------------------------------------->
                            <tr>
                            <td>LAST NAME</td>
                            <td><input  type="text"  name="lastname" id="last_name" value="" maxlength="30" /><span id="last"></span>
                            <span class="errors">* <?php echo $lastnameErr;?></span>
                            </td>
                            </tr>
                            <p class="error"></p>
                             <br>
    
                            <!-- marks  -->
                            <tr>
                                <td>Marks:</td>
                                <td>
                                    <input  type="text" name="marks" id="marks_ss" value="" maxlength="4" ><span id="mark"></span>
                                    <span class="error">* <?php echo $marksErr;?></span>
                                </td>
                                
                            </tr>
                                         <!-- email  -->
                            <tr>
                                <td>EMAIL ID</td>
                                <td><input  type="text" name="email" id="email" value="" maxlength="100" /><span id="Message"></span>
                                    <span class="error">* <?php echo $emailErr;?></span>
                                </td>
                                
                                </tr>
                                <!-- mobile number  -->
                                <tr>
                                    <td>Mobile Number</td>
                                    <td>
                                        <input  type="text" name="numbers" id="numbers" maxlength="10" /><span id="mobile"></span>
                                        <span class="error">* <?php echo $numbersErr;?></span>
                                    </td>
                                  
                                </tr>
                                <!-- gender  -->
                                <tr>
                                    <td>Gender:</td>
                                        <td>
                                            Male <input type="radio" name="gender" id="gender" value="Male" />
                                            Female <input  type="radio" name="gender" id="gender" value="Female" /><span id="Gender"></span>
                                            <span class="error">* <?php echo $genderErr;?></span>
                                            </td>
                                           
                                           
                                    </td>
                                </tr>

                              
                               
                                <!-- review  -->
                                <tr>
                                    <td>Comment:</td>
                                    <td>
                                        <textarea name="comments" id="comments" required>


                                        </textarea>
                                    </td>
                                </tr>
                                <tr>
                                
                                </tr>
                                <td>
                                    <input type="submit" name="submit" value="submit" id="Submit"  class="login-btn bt-top bt-text px-40 py-10 border-2 text-decoration f-36 f-600 bt-color bt-text">
                                </td>
                       </table>
                    </form>
                    <script type="text/javascript">



$(document).ready(function () {


$('#First').hide();

$('#first_name').keyup(function () {

validateUsername();

});



function validateUsername() {

let usernameError;





let rfname = /^[A-Za-z]+[a-zA-Z]+$/;

let usernameValue = $('#first_name').val();

if (usernameValue.length == "") {

$('#First').show();
$('#First').html("*Please Enter First Name*");

usernameError = false;

return false;

} else if ((usernameValue.length < 3) ||

(usernameValue.length > 10)) {

$('#First').show();

$('#First').html("Length of username must be between 3 and 10");

usernameError = false;

return false;

} else if (!rfname.test(usernameValue)) {

$('#First').show();

$('#First').html("*First name only contain character*");

usernameError = false;

return false;



} else {

$('#First').hide();

return true;

}

}



// Validate last name


$('#last').hide();

$('#last_name').keyup(function () {

validatelatsname();

});



function validatelatsname() {

let lastnameError;



let rlname = /^[A-Za-z]+[a-zA-Z]+$/;

let lastnameValue = $('#last_name').val();

if (lastnameValue.length == "") {

$('#last').show();
$('#last').html("*Please Enter Last Name*");

lastnameError = false;

return false;

} else if ((lastnameValue.length < 3) ||

(lastnameValue.length > 10)) {

$('#last').show();

$('#last').html("Length of last name must be between 3 and 10");

lastnameError = false;

return false;

} else if (!rlname.test(lastnameValue)) {

$('#last').show();

$('#last').html("*last name only contain character*");

lastnameError = false;

return false;



} else {

$('#last').hide();

return true;



}

}


// // validate marks

$('#mark').hide();

let markError = true;

$('#marks_ss').keyup(function () {

validatemark();

});



function validatemark() {

let markValue = $('#marks_ss').val();

if (markValue.length == "") {

$('#mark').show();
$('#mark').html("*Please Enter Marks*");

markError = false;

return false;

} else if (markValue.length < 2 || markValue.length > 2) {

$('#mark').show();
$('#mark').html("*Invalid Marks*");

markError = false;

return false;

} else if (isNaN(markValue)) {

$('#mark').show();



markError = false;

return false;



} else {

$('#mark').hide();

return true;



}

}



// Validate Email



$('#Message').hide();

$('#email').keyup(function () {

validateeamil();

});



function validateeamil() {

let emailError;



let regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;



const email = $('#email').val();

if (email.length == "") {

$('#Message').show();
$('#Message').html("*Please Enter Email*");



emailError = false;

return false;

} else if (!regex.test(email)) {

$('#Message').show();
$('#Message').html("*Invalid Email*");

emailError = false;

return false;



} else {

$('#Message').hide();

return true;



}



}



// vlaidate number

$('#mobile').hide();

$('#numbers').keyup(function () {

validatephone();

});



function validatephone() {

let phoneError;



const phone = $('#numbers').val();

let regex = /^(\+\d{1,3}[-]?)?\d{10}$/;

if (phone.length == "") {

$('#mobile').show();
$('#mobile').html("*Please Enter Mobile No*");

phoneError = false;

return false;



} else if (!regex.test(phone)) {

$('#mobile').show();
$('#mobile').html("*Enter 10 Digits Mobile No*");

phoneError = false;

return false;

} else {

$('#mobile').hide();

return true;



}

}

// VALIDATE GENDER

$('#Gender').hide();

$('#gender').change(function () {



gendervalidate();

});



function gendervalidate() {

let genderError;



if ($('input[name="gender"]:checked').length == 0) {

$('#Gender').show();
$('#Gender').html("*Please Select Gender*");

genderError = false;

return false;

} else {

    $('#Gender').hide();

// $('#gen').hide();

return true;



}

}






// Submit button

$('#first_form').submit(function (e) {

e.preventDefault();



let name = validateUsername();

let lname = validatelatsname();

let marksel = validatemark();

let emailadd = validateeamil();

let phoneno = validatephone();

let gendersel = gendervalidate();




if (name == true &&

lname == true &&

marksel == true &&

emailadd == true &&

phoneno == true &&

gendersel == true) {



$.ajax({



type: "POST",



url: 'action.php',



data: $(this).serialize(),

success: function (dataresult) {

$("#Submit").html(dataresult);


}





});

} else {

alert("Please Enter All Fields");

}





});



});

                 
                    </script>
                    </div>
            </div>
        </section>

    </body>
</html>