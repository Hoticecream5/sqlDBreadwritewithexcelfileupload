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
		$stmt = $con->prepare("select * from users where emailAddress like '%$search%' or name like '%$search%'");
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
	        <th>Gender</th>
	        <th>Address</th>
	        <th>Number of Boreholes</th>
			<th>User Registered</th>
	        <th>Applied Authority to Drill</th>
	        <th>Coodinate longitude</th>
	        <th>Coodinate latitude</th>
			<th>Phone Number</th>
	        <th>Borehole Inteded Use</th>
	        <th>Email Address</th>
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
		    	 		<td><?php echo $value['gender'];?></td>
		    	 		<td><?php echo $value['address'];?></td>
		    	 		<td><?php echo $value['numberOfBoreholes'];?></td>
		    	 		<td><?php echo $value['Registered'];?></td>
		    	 		<td><?php echo $value['appliedAuthorityToDrill'];?></td>
		    	 		<td><?php echo $value['CoodinateX'];?></td>
		    	 		<td><?php echo $value['CoodinateY'];?></td>
						 <td><?php echo $value['contactNumber'];?></td>
		    	 		<td><?php echo $value['intededUse'];?></td>
		    	 		<td><?php echo $value['emailAddress'];?></td>
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






