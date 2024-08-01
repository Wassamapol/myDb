<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color : gray;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }


    </style>
</head>
<body>
    <h2>Customer List</h2>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $my_db = "northwind";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $my_db);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

    $sql = "SELECT * FROM customers";
    $query = mysqli_query($conn, $sql);
    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        
        CustomerID<input type="text" name"CustomerID"><br>
        CompanyName :<input type="text" name"CompanyName"> <br>
        ContactName : <input type="text" name"ContactName"> <br>
        ContactTitle :   <input type="text" name"ContactTitle"> <br>
        Address:    <input type="text" name"Address"> <br>
        City:    <input type="text" name"City"> <br>
        Region:    <input type="text" name"Region"> <br>
        PostalCode:    <input type="text" name"PostalCode"> <br>
        Country:    <input type="text" name"Country"> <br>
        Phone:    <input type="text" name"Phone"> <br>
        Fax:    <input type="text" name"Fax"> <br>
           
        <input type="submit" value="ส่งข้อมูล" >
     
    </form>
    <?php
    mysqli_close($conn);
    ?>
    <? php 
    if ($ $_SERVER["REQUEST_METHOD"]="POST") {
        $customerID = mysqli_real_escape_string($conn, $_POST["CustomerID"]);
        $CompanyName = mysqli_real_escape_string($conn, $_POST["CompanyName"]);
        $ContactName = mysqli_real_escape_string($conn, $_POST["ContactName"]);
        $ContactTitle = mysqli_real_escape_string($conn, $_POST["ContactTitle"]);
        $Address = mysqli_real_escape_string($conn, $_POST["Address"]);
        $City = mysqli_real_escape_string($conn, $_POST["City"]);
        $Region = mysqli_real_escape_string($conn, $_POST["Region"]);
        $PostalCode = mysqli_real_escape_string($conn, $_POST["PostalCode"]);
        $Country = mysqli_real_escape_string($conn, $_POST["Country"]);
        $Phone = mysqli_real_escape_string($conn, $_POST["Phone"]);
        $Fax = mysqli_real_escape_string($conn, $_POST["Fax"]);
         
        $msql = "INSERT INTO customers (CustomerID ,CompanyName, ContactName,ContactTitle ,Address, City,Region ,Postalcode,PostalCode, COuntry, Phone, Fax) VALUES ('$customerID' , '$CompanyName', '$ContactTitle','$Address','$City','$Region', '$PostalCode','$Country','$Phone','$Fax') ";
    }
    if (mysqli_query($conn, $msql)) {
        echo "Created successfully" ;
    } else {
        echo "Error : " . $msql ." <br>"  mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
</body>
</html>
