<?php
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="./bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Product View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Product View Details 
                            <a href="product-page.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $product_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM product WHERE id='$product_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $product = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Product Name</label>
                                        <p class="form-control">
                                            <?=$product['name'];?>
                                        </p>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label>Product Category</label>
                                        <p class="form-control">
                                            <?=$product['category'];?>
                                        </p>
                                    </div>


                                    <div class="mb-3">
                                        <label>Product Size</label>
                                        <p class="form-control">
                                            <?=$product['size'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label>Product Weight</label>
                                        <p class="form-control">
                                            <?=$product['weight'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label>Product Price</label>
                                        <p class="form-control">
                                            <?=$product['price'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label>Quantity in stock</label>
                                        <p class="form-control">
                                            <?=$product['quantity_in_stock'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label>Availability</label>
                                        <p class="form-control">
                                            <?=$product['availability'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="./bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 