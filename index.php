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
    <table>
        <tr>
            <th>CustomerID</th>
            <th>CompanyName</th>
            <th>ContactName</th>
            <th>ContactTitle</th>
            <th>Address</th>
            <th>City</th>
            <th>Region</th>
            <th>PostalCode</th>
            <th>Country</th>
            <th>Phone</th>
            <th>Fax</th>
        </tr>
        <?php
        while ($result = mysqli_fetch_assoc($query)) {
            ?>
            <tr>
                <td><?php echo $result["CustomerID"]; ?></td>
                <td><?php echo $result["CompanyName"]; ?></td>
                <td><?php echo $result["ContactName"]; ?></td>
                <td><?php echo $result["ContactTitle"]; ?></td>
                <td><?php echo $result["Address"]; ?></td>
                <td><?php echo $result["City"]; ?></td>
                <td><?php echo $result["Region"]; ?></td>
                <td><?php echo $result["PostalCode"]; ?></td>
                <td><?php echo $result["Country"]; ?></td>
                <td><?php echo $result["Phone"]; ?></td>
                <td><?php echo $result["Fax"]; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <?php
    mysqli_close($conn);
    ?>
</body>
</html>
