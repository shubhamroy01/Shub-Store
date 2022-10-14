<?php
require 'head.php';
$PId = $_REQUEST['PId'];
?>
<?php
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
    $Category=$row['Category'];
    $Mrp=preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['Mrp']);
    $Price=preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['Price']);
    echo '<div class="card mb-3" style="margin-top: 0.5%;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="'.$PImage.'" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title" style="font-size: 35px;">'.$PName.'</h5>
          <br>
          <p class="card-text" style="font-size: 25px;">'.$PDetail.'</p>
          <p class="card-text"><small class="text-muted">Units Left : '.$Quantity.'</small></p>
          <span class="card-text old-prise" style="font-size: 25px;">&#8377;'.$Mrp.'</span>&nbsp;
          <span class="card-text new-prise" style="font-size: 25px;">&#8377;'.$Price.'</span>
          <p></p>
          <form action="addcart.php" method="get" style="float: left;">
              <input type="text" name="PId" id="PId" value="'.$PId.'" style="display:none;">
              <input type="submit" value="Buy Now" class="btn btn-outline-primary btn-sm">
          </form>
          <form action="addcart.php" method="get" style="float: left;">
              <input type="text" name="PId" id="PId" value="'.$PId.'" style="display:none;">
              <input type="submit" value="Add to Cart" class="btn btn-outline-secondary btn-sm">
          </form>
          <br>
        </div>
      </div>
    </div>
  </div>';
}
echo '<center><p class="fs-1" id="Laptop">You My also like</p></center>';
require ''.$Category.'.php';
require 'footer.php'; 
?>