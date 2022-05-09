<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/jquery.dataTables.min.css">
 <link rel="stylesheet" href="js/jquery.dataTables.min.js">
 <script src="js/jquery-3.6.0.min.js"></script>
 
 <script src="js/jquery.dataTables.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
</head>

<!-- <script>
      $(document).ready( function () { 
    $('#exam').DataTable();
} ); -->
</script>
<style>
     .txt{
    text-align: center;
   }
    #wrapper{
    width: 100%;
    max: width 1221px;
    margin: 50px auto 0;
    background-color: #fff;

}

table,td {
        border: 1px solid black;
        margin: 1px auto;
        padding: 8px 25px;
       background: silver;
}
</style>
    <body>
        <div>
            <h1 class="txt">RECORDS</h1>
            <?php
        $conn = mysqli_connect("localhost","root","seasia@123","ajax") or die ("connection failed");
        $sql = "Select id, firstname, lastname, marks, email, numbers, gender, comments From ajax_table
        Order By id Desc";
        $result =mysqli_query($conn,$sql) or die ("query unsuccessfull.");
        if (mysqli_num_rows($result) > 0) {
        {
    ?>
            <table id="tables" class="table table-bordered">
            <thead>
               
               <th>id</th>
               <th>firstname</th>
               <th>lastname</th>
               <th>marks</th>
               <th>email</th>
               <th>numbers</th>
               <th>gender</th>
               <th>comments</th>
                
   </thead>
        
   <tbody>
       <?php  while($row = mysqli_fetch_assoc($result)){
           ?>
   <tr>
       <td><?php echo $row['id'];?></td>
       <td><?php echo $row['firstname'];?></td>
       <td><?php echo $row['lastname'];?></td>
       <td><?php echo $row['marks'];?></td>
       <td><?php echo $row['email'];?></td>
       <td><?php echo $row['numbers'];?></td>
       <td><?php echo $row['gender'];?></td>
       <td><?php echo $row['comments'];?></td>
       <td><a href='update.php?id=<?php echo $row['id'];?>'>Edit</a>
            <a href='edit.php?id=<?php echo $row['id'];?>'>Delete</a>
                            </td>
                        </tr>
                        <?php 
                    } 
                    ?>
                </tbody>
            </table>
            <?php	
	}
	}
	
?> 
<form>
    
</form>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.js"
			integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
			<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript">
				var dataTable;
				$(document).ready(function() {
                    $('#tables').DataTable();
                    // retrieve: true,
                     //paging: false,
                    // paging: false,
                    searching: true
					dataTable = $('#tables').DataTable( {
						"ajax": {
							url: "action.php",
							type : "POST",
							data : {filter_data : function(){ return $('#tables').serialize();}
						}
						},
						"columns" : [
						{ data : "id"},
						{ data : "firstname"},
						{ data : "lastname"},
						{ data : "marks"},
                        { data : "email"},
                        { data : "numbers"},
                        { data : "gender"},
                        { data : "comments"},
                        
                        
						]
					} );
				
                

				$('#tables').submit(function(e){
					e.preventDefault();
					dataTable.ajax.reload();
				});
            } );
			 </script>
    </body>
</html>