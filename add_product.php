<?php
require 'head.php';
?>
<link rel="stylesheet" href="css/adp.css">
<center>
<h1 class="display-1">Add Product</h1>
<div class="container testimonial-group">
    <div class="row">
    <form action="adp.php" method="post">
    <table>
        <tr>
            <th>Product Details</th>
            <th>Velues</th>
        </tr>
        <tr>
            <td>
                Product Name<sup class="required">*</sup>
            </td>
            <td>
                <input type="text" name="PName" id="PName" required="required">
            </td>
        </tr>
        <tr>
            <td>
                Product Details<sup class="required">*</sup>
            </td>
            <td>
                <textarea name="PDetail" id="PDetail" required="required"></textarea>
            </td>
        </tr>
        <tr>
            <td>Product Image Url<sup class="required">*</sup>
            </td>
            <td><input type="text" name="PImage" id="PImage" required="required"></td>
        </tr>
        <tr>
            <td>
                MRP<sup class="required">*</sup>
            </td>
            <td>
                <input type="number" name="Mrp" id="Mrp" required="required">
            </td>
        </tr>
        <tr>
            <td>
                Price<sup class="required">*</sup>
            </td>
            <td>
                <input type="number" name="Price" id="Price" required="required">
            </td>
        </tr>
        <tr>
            <td>
                Category<sup class="required">*</sup>
            </td>
            <td>
                <select name="Category" id="Category" required="required">
                    <option value="Mobile" default="default">Mobile</option>
                    <option value="Laptop">Laptop</option>
                    <option value="Fashion">Fashion</option>
                    <option value="HomeHome-Appliances">Home-Appliances</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                Quantity<sup class="required">*</sup>
            </td>
            <td>
                <input type="number" name="Quantity" id="Quantity" required="required">
            </td>
        </tr>
    </table>
        <input type="submit" value="Add"  id="add-p" class="btn btn-outline-success">
    </form>
    </div>
</div>
<br>
</center>
<?php
require 'footer.php'; 
?>