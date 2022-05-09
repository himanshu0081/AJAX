<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/jquery.dataTables.min.css">
 <link rel="stylesheet" href="js/jquery.dataTables.min.css">
 <link rel="stylesheet" href="js/jquery.dataTables.min.js">
 <!-- <script src="js/jquery-3.6.0.min.js"></script>
 
 <script src="js/jquery.dataTables.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
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
<?php
	 $conn = mysqli_connect("localhost","root","seasia@123","ajax");
	$sql = "SELECT * FROM ajax_table";
	$result =mysqli_query($conn,$sql) or die ("query uncessfull");
	if (mysqli_num_rows($result) > 0) {
        {
?>	
 <table class="table table-bordered display" id="tables">
     
            <thead>
               
                    <th>id</th>
                    <th>firstname</th>
                    <th>lastname</th>
                    <th>marks</th>
                    <th>email</th>
                    <th>numbers</th>
                    <th>gender</th>
                    <th>comments</th>
                    <th>operation</th>
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
        
        <?php } ?>
                
                
        </tbody>
    
        </table>
        
       
<?php	
	}
	}
	
?> 
        
    </div>
  
    <!-- </form> -->
        <!-- <script>
      $(document).ready( function () {
    $('#tables').DataTable();
} );
</script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
			integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
			<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
            <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js">
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.5.1.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js">
    <link rel="stylesheet" href="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js">
            <script type="text/javascript">
				var dataTable;
				$(document).ready(function() {
                    $('#tables').DataTable();
					dataTable = $('#table').DataTable( {
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
				} );
                

				$('#tables').submit(function(e){
					e.preventDefault();
					dataTable.ajax.reload();
				});
                
			 </script>
</body>
</html>