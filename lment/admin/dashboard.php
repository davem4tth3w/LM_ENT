<?php
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./CSS/sidebar.css">

    <!-- Bootstrap CSS -->
    <!-- <link href="./bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet"> -->
    

    <title>LM | Dashboard</title>
</head>
<body>

<div class="sidenav">

        <div class="title">
            <h4>LM ENTERPRISES</h4>
        </div>
        <a href=" ">Admin</a>
        <a href="dashboard.php ">Dashboard</a>
        <a href="staff-page.php">Staff</a>
        <a href="product-page.php">Products</a>
        <a href=" ">Logout</a>
</div>


<div class="main">
           <script src="piejs.js"></script>
</div>
  
 
    <script src="./bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>