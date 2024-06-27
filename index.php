<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$bb_db = "bb_db" ;

// Create connection
$conn = new mysqli($servername, $username, $password ,$bb_db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$msql ="SELECT * FROM customers";
$query = mysqli_query($conn,$msql);
?>
<table  border="1">
<tr>
    <th><div>UsidID</div></th>
    <th><div>companyName</div></th>
    <th><div>ContactName</div></th>
    <th><div>ContactTitle</div></th>
    <th><div>Address</div></th>
    <th><div>City</div></th>
    <th><div>Region</div></th>
    <th><div>PostsalCode</div></th>
    <th><div>Contry</div></th>
    <th><div>Phone</div></th>
    <th><div>Fax</div></th>
</tr>
 <?php
 while($result=mysqli_fetch_array ($query))
 {
    ?>
    <tr>
    <td><?php echo $result["CustomerID"];?> </td>
    <td><?php echo $result["CompanyName"];?></td>
    <td><?php echo $result["ContactName"];?></td>
    <td><?php echo $result["ContactTitle"];?></td>
    <td><?php echo $result["Address	"];?></td>
    <td><?php echo $result["City"];?></td>
    <td><?php echo $result["Region"];?></td>
    <td><?php echo $result["PostalCode	"];?></td>
    <td><?php echo $result["Country"];?></td>
    <td><?php echo $result["Phone"];?></td>
    <td><?php echo $result["Fax"];?></td> 
    </tr>
<?php 
}
?>
</table>
<?php
mysqli_close($conn) ;
?>
</body>
</html>

