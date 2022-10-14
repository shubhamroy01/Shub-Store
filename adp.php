<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="4;url=add_product.php" />
    <title>Shub-Store</title>
</head>
<body>
<?php
$conn = mysqli_connect("localhost", "root", "", "shub-store");
if($conn === false)
{
echo "ERROR: Could not connect.";
}
$PName = $_REQUEST['PName'];
$PDetail = $_REQUEST['PDetail'];
$PImage = $_REQUEST['PImage'];
$Mrp = $_REQUEST['Mrp'];
$Price = $_REQUEST['Price'];
$Category = $_REQUEST['Category'];
$Quantity = $_REQUEST['Quantity'];
$sql = "INSERT INTO product VALUES ('','$PName','$PDetail','$PImage','$Mrp','$Price','$Category','$Quantity')";

if(mysqli_query($conn, $sql))
{
echo '<center><h2>Record Save</h2></center>';
}
else
{
echo "ERROR ";
}

mysqli_close($conn);
?>
</body>
</html>