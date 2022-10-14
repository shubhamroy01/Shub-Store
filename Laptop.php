<center>
    <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php
    $con = mysqli_connect("localhost", "root", "", "shub-store");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con,"SELECT * FROM product WHERE Category='Laptop'");

    //start
    while($row = mysqli_fetch_array($result)){
        $PId=$row['PId'];
        $PImage=$row['PImage'];
        $PName=$row['PName'];
        $PDetail=$row['PDetail'];
        $Mrp=preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['Mrp']);
        $Price=preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['Price']);
        $Category=$row['Category'];
        $Quantity=$row['Quantity'];
            echo '
                <div class="col">
                    <div class="card p-card">
                        <center>
                        <img class="card-img-top laptop" src="'.$PImage.'" alt="">
                        </center>
                        <div class="card-body">
                            <h5 class="card-title">'.$PName.'</h5>
                            <p class="card-text">
                                '.$PDetail.'
                            </p>
                            <p>
                            <span class="new-prise"><b>&#8377;<span>'.$Price.'</span></b></span>
                            <span class="old-prise">&#8377;<span>'.$Mrp.'</span></span>
                            </p>
                            <form action="product.php" method="get" style="float: left;">
                                <input type="text" name="PId" id="PId" value="'.$PId.'" style="display:none;">
                                <input type="submit" value="Buy Now" class="btn btn-outline-primary btn-sm">
                            </form>
                            <form action="addcart.php" method="get" style="float: left;">
                                <input type="text" name="PId" id="PId" value="'.$PId.'" style="display:none;">
                                <input type="submit" value="Add to Cart" class="btn btn-outline-secondary btn-sm">
                            </form>
                        </div>
                    </div>
                </div>
            ';
        }
    ?>
    </div>
    </div>
    </center>