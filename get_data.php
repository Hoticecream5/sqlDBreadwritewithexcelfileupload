
<?php 
   $servername = "localhost"; 
   $username = "root"; 
   $password = ""; 
   $dbname = "test"; 
     
   // connect the database with the server 
   $conn = new mysqli($servername,$username,$password,$dbname); 
     
    // if error occurs  
    if ($conn -> connect_errno) 
    { 
       echo "Failed to connect to MySQL: " . $conn -> connect_error; 
       exit(); 
    } 
  
    $sql = "select * from registration"; 
    $result = ($conn->query($sql)); 
    //declare array to store the data of database 
    $row = [];  
  
    if ($result->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row = $result->fetch_all(MYSQLI_ASSOC);   
    }    
?> 
  
<!DOCTYPE html> 
<html> 
<style> 
    td,th { 
        border: 1px solid black; 
        padding: 10px; 
        margin: 5px; 
        text-align: center; 
    } 
</style> 
  
<body> 
    <table> 
        <thead> 
            <tr> 
                <th>FirstName</th> 
                <th>LastName</th> 
                <th>Gender</th> 
                <th>Email</th> 
                <th>Password</th> 
                <th>Number</th> 
            </tr> 
        </thead> 
        <tbody> 
            <?php 
               if(!empty($row)) 
               foreach($row as $rows) 
              {  
            ?> 
            <tr> 
  
                <td><?php echo $rows['firstName']; ?></td> 
                <td><?php echo $rows['lastName']; ?></td> 
                <td><?php echo $rows['gender']; ?></td>
                <td><?php echo $rows['email']; ?></td>
                <td><?php echo $rows['password']; ?></td>
                <td><?php echo $rows['number']; ?></td> 
  
            </tr> 
            <?php } ?> 
        </tbody> 
    </table> 
</body> 
</html> 
  
<?php    
    mysqli_close($conn); 
?>
