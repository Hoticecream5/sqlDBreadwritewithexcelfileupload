<?php
include 'search_connecttodb.php';
@include 'navigationForRegister.html';
$searchErr = '';
$user_details='';
if(isset($_POST['save']))
{
	if(!empty($_POST['search']))
	{
		$search = $_POST['search'];
		$stmt = $con->prepare("select * from excelregistration where email like '%$search%' or name like '%$search%'");
		$stmt->execute();
		$user_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//print_r($employee_details);
		
	}
	else
	{
		$searchErr = "Please enter the information";
	}
   
}

?>
<html>
<head>
<title>ajax example</title>
<link rel="stylesheet" a href="css/bootstrap.css"/>
</head>

<body>
	<div class="container">
	<h3><u>PHP MySQL search database and display results</u></h3>
	<br/><br/>
	<form class="form-horizontal" action="#" method="post">
	<div class="row">
		<div class="form-group">
		    <label class="control-label col-sm-4" for="email"><b>Search Employee Information:</b>:</label>
		    <div class="col-sm-4">
		      <input type="text" class="form-control" name="search" placeholder="search here">
		    </div>
		    <div class="col-sm-2">
		      <button type="submit" name="save" class="btn btn-success btn-sm">Submit</button>
		    </div>
		</div>
		<div class="form-group">
			<span class="error" style="color:red;">* <?php echo $searchErr;?></span>
		</div>
		
	</div>
    </form>
	<br/><br/>
	<h3><u>Search Result</u></h3><br/>
	<div class="table-responsive">          
	  <table class="table">
	    <thead>
	      <tr>
	        <th>#</th>
	        <th>User Name</th>
	        <th>Physica Address 1</th>
	        <th>Physica Address 2</th>
	        <th>Group Description</th>
			<th>Email Address</th>
	        <th>Telephone Number</th>
	        <th>Telephone 1</th>
	        <th>Telephone 2</th>
			<th>Cellular Number</th>
	        <th>Foreign Balance</th>
	        <th>Balance</th>
	      </tr>
	    </thead>
	    <tbody>
	    		<?php
		    	 if(!$user_details)
		    	 {
		    		echo '<tr>No data found</tr>';
		    	 }
		    	 else{
		    	 	foreach($user_details as $key=>$value)
		    	 	{
		    	 		?>
		    	 	<tr>
		    	 		<td><?php echo $key+1;?></td>
		    	 		<td><?php echo $value['name'];?></td>
		    	 		<td><?php echo $value['physicalAddress1'];?></td>
		    	 		<td><?php echo $value['physicalAddress2'];?></td>
		    	 		<td><?php echo $value['groupDescription'];?></td>
		    	 		<td><?php echo $value['email'];?></td>
		    	 		<td><?php echo $value['telephoneNumber'];?></td>
		    	 		<td><?php echo $value['telephone1'];?></td>
		    	 		<td><?php echo $value['telephone2'];?></td>
						 <td><?php echo $value['cellularPhone'];?></td>
		    	 		<td><?php echo $value['foreignBalance'];?></td>
		    	 		<td><?php echo $value['balance'];?></td>
		    	 	</tr>
		    	 		
		    	 		<?php
		    	 	}
		    	 	
		    	 }
		    	?>
	    	
	     </tbody>
	  </table>
	</div>
</div>
<script src="jquery-3.2.1.min.js"></script>
<script src="bootstrap.min.js"></script>
</body>
</html>






