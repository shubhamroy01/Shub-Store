<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="0.5;url=cart.php" />
    <title>Shub-Store</title>
</head>
<body>
<?php
$PId = $_REQUEST['PId'];
$con = mysqli_connect("localhost", "root", "", "shub-store");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,'SELECT * FROM product WHERE PId="'.$PId.'"');

//start
while($row = mysqli_fetch_array($result)){
    $PImage=$row['PImage'];
    $PName=$row['PName'];
    $PDetail=$row['PDetail'];
    $Quantity=$row['Quantity'];
    $Unit=1;
    $Category=$row['Category'];
    $Mrp=$row['Mrp'];
    $Price=$row['Price'];
    $sql = "INSERT INTO cart VALUES ('','$PName','$PDetail','$PImage','$Mrp','$Price','$Category','$Unit')";
    if(mysqli_query($con, $sql))
    {
    }
    else
    {
    echo "ERROR ";
    }
}
?>
</body>
</html>