<!DOCTYPE html>
<html>
    <head>
        <title>Amazon Shopping</title>
        <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="../Fonts/css/all.css">

        <script>
            var categories = ["Select a Category", "Electronics", "Footwear", "Fashion"];
            var electronics = ["Select Electronics", "JBL Speaker", "Earpods"];
            var footwear = ["Select Footwear", "Nike Casuals", "Lee Cooper Boots"];
            var fashion = ["Select Fashion", "Shirt", "Jeans"];
            var products = [];
            var cartItems = [];

            var data = [
                {Name : "JBL Speaker", Price : "4500", photo : "../assets/images/speaker.jpg"},
                {Name : "Earpods", Price : "3500", photo : "../assets/images/earpods.jpg"},
                {Name : "Nike Casuals", Price : "2000", photo : "../assets/images/nike.jpg"},
                {Name : "Lee Cooper Boots", Price : "3600", photo : "../assets/images/boots.jpg"},
                {Name : "Shirt", Price : "1500", photo : "../assets/images/shirt.jpg"},
                {Name : "Jeans", Price : "3000", photo : "../assets/images/jeans.jpg"},
            ];

            function LoadProducts(){
                var lstProducts = document.getElementById("lstProducts");
                lstProducts.innerHTML = "";
                for(var item of products){
                    var option = document.createElement("option");
                    option.text = item;
                    option.value = item;
                    lstProducts.appendChild(option);
                }
            }

            function LoadCategories(){
                var lstCategories = document.getElementById("lstCategories");
                for(var item of categories){
                    var option = document.createElement("option");
                    option.text = item;
                    option.value = item;
                    lstCategories.appendChild(option);
                }
            }
            function bodyload(){
                LoadCategories();
                getCount();
            }

            function CategoryChanged(){
                var selectedCategory = document.getElementById("lstCategories").value;
                switch(selectedCategory)
                {
                    case "Electronics" :
                    products = electronics;
                    LoadProducts();
                    break;
                    case "Footwear" :
                    products = footwear;
                    LoadProducts();
                    break;
                    case "Fashion" :
                    products = fashion;
                    LoadProducts();
                    break;
                    default :
                    products = ["Select a Category"];
                    LoadProducts();
                    break;
                }
            }
            var searchedProduct;
            function ProductChanged(){
                var selectedProduct = document.getElementById("lstProducts").value;
                searchedProduct = data.find(function(products){
                    return products.Name == selectedProduct;
                });
                document.getElementById("lblName").innerHTML = searchedProduct.Name;
                document.getElementById("lblPrice").innerHTML = "&#8377;" + searchedProduct.Price;
                document.getElementById("imgProduct").src = searchedProduct.photo;
            }
            function getCount(){
                document.getElementById("lblCount").innerHTML = cartItems.length;
            }
            function addToCartClick(){
                cartItems.push(searchedProduct);
                getCount();
                alert("Item added to your Cart");
            }
            function showCartItem(){
                var tbody = document.getElementById("tbody");
                tbody.innerHTML = "";
                for(var item of cartItems){
                    var tr = document.createElement("tr");
                    
                    var tdName = document.createElement("td");
                    var tdPrice = document.createElement("td");
                    var tdPhoto = document.createElement("td");

                    tdName.innerHTML = item.Name;
                    tdPrice.innerHTML = item.Price;

                    var pic = document.createElement("img");
                    pic.src = item.photo;
                    pic.width = "50";
                    pic.height = "50";

                    tdPhoto.appendChild(pic);
                    tr.appendChild(tdName);
                    tr.appendChild(tdPrice);
                    tr.appendChild(tdPhoto);
                    tbody.appendChild(tr); 
                }
            }

        </script>

    </head>
    <body class="container-fluid" onload="bodyload()">
        <header class="bg-danger text-center text-white pt-1 pb-1">
            <h2><span class="fa fa-shopping-bag"> Amazon Shopping</span></h2>
        </header>
        <div class="row mt-3">
            <div class="col-3">
                <div >
                    <label class="form-label">Select Category</label>
                    <div>
                        <select onchange="CategoryChanged()" id="lstCategories" class="form-select">

                        </select>
                    </div>
                </div>
                <div class="mt-2">
                    <label>Select Product</label>
                    <div>
                        <select onchange="ProductChanged()" id="lstProducts" class="form-select">

                        </select>
                    </div>
                </div>
                <div class="mt-2">
                    <label class="form-label">Preview</label>
                    <div class="card">
                        <div class="card-header text-center">
                            <h3 id="lblName"> </h3>
                        </div>
                        <div class="card-body text-center">
                            <img id="imgProduct" width="200" height="170">
                            <p id="lblPrice"></p>
                        </div>
                        <div class="card-footer text-center">
                            <div class="d-grid">
                                <button class="btn btn-danger" onclick="addToCartClick()"> 
                                    <span class="fa fa-shopping-cart"></span>
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <h2>Shopping Festival</h2> <br>
                <h3>Huge Discount upto 70%</h3>
            </div>
            <div class="col-2">
                <div class="d-grid">
                    <button onclick="showCartItem()" data-bs-toggle="modal" data-bs-target="#cartitems" class="btn btn-warning">
                        <span class="fa fa-shopping-cart"></span>
                        [<span id="lblCount"></span>] Your Cart Items
                    </button> 
                </div>
                <div class="modal fade" id="cartitems">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3> Your Cart Items </h3>
                            </div>
                            <div class="modal-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Privew</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">

                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    OK
                                </button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script src="../node_modules/jquery/dist/jquery.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    </body>
</html>