<?php
require 'head.php';
?>
<link rel="stylesheet" href="css/cart.css">
<center>
    <h1 class="display-1">Cart</h1>
    <br>
<div class="container testimonial-group">
    <div class="row">
    <table cellpadding="8">
        <tr>
            <th>So No.</th>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>MRP</th>
            <th>Prise</th>
            <th>Quantity</th>
        </tr>
        <?php
            $con = mysqli_connect("localhost", "root", "", "shub-store");
            // Check connection
            if (mysqli_connect_errno())
            {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            $TotalPayble = 0;
            $TotalMrp=0;
            $TotalUnit=0;

            $result = mysqli_query($con,"SELECT * FROM cart");
            while($row = mysqli_fetch_array($result))
                {
                    $SNo=$row['SNo'];
                    $PName=$row['PName'];
                    $PImage=$row['PImage'];
                    $Mrp=preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['Mrp']);
                    $Price=preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['Price']);
                    $Unit=$row['Unit'];
                    $TotalPayble=$TotalPayble+$row['Price'];
                    $TotalMrp=$TotalMrp+$row['Mrp'];
                    $TotalUnit=$TotalUnit+$Unit;
                    echo '<tr>';
                    echo '<td>'.$SNo.'</td>';
                    echo '<td><img src="'.$PImage.'" class="img-fluid rounded-start" alt="..."></td>';
                    echo '<td>'.$PName.'</td>';
                    echo '<td><span class="card-text old-prise" style="font-size: 25px;">&#8377;'.$Mrp.'</span></td>';
                    echo '<td><span class="card-text new-prise" style="font-size: 25px;">&#8377;'.$Price.'</span></td>';
                    echo '<td>X '.$Unit.'</td>';
                    echo '</tr>';
                }
                $TotalPayble=preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,",$TotalPayble);
                $TotalMrp=preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,",$TotalMrp);
            ?>
            <tr>
                <td>#</td>
                <td colspan="2">Total</td>
                <td><span class="old-prise"><b>&#8377;<span><?php echo $TotalMrp; ?></span></b></span></td>
                <td><span class="new-prise"><b>&#8377;<span><?php echo $TotalPayble; ?></span></b></span></td>
                <td>X <?php echo $TotalUnit;?></td>
            </tr>
    </table>
    </div>
</div>
</center>
<?php
require 'footer.php'; 
?>