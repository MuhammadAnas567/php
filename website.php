<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #f1f4f9;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 2rem;
    }

    .product-card {
        background: #fff;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        max-width: 320px;
        width: 100%;
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.15);
    }

    .product-image img {
        width: 100%;
        display: block;
    }

    .product-content {
        padding: 1.2rem;
    }

    .product-name {
        font-size: 1.4rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 0.5rem;
    }

    .product-price {
        font-size: 1.2rem;
        color: #4e73df;
        margin-bottom: 0.8rem;
    }

    .product-desc {
        font-size: 0.95rem;
        color: #666;
        line-height: 1.5;
    }   
    </style>
</head>
<body>
    <?php
    include 'nav.php';
    ?>

    <div class="product-card">
        <?php
        include 'connection.php';
        $selectquery = "SELECT * from products";
$final = mysqli_query($db_connect, $selectquery);

        while ($data_store = mysqli_fetch_assoc($final)) {
?>
         <div class="product-image">
        <img src="<?php echo $data_store['image']?>" alt="Product">
    </div>
      <div class="product-content">
        <div class="product-name"><?php echo $data_store['P_Name']?></div>
        <div class="product-price">PKR<?php echo $data_store['P_price']?></div>
        <div class="product-desc"><?php echo $data_store['P_description']?></div>
        <button class = "btn btn-outline-dark   ">Buy Now</button>
    </div>
</div>

<?php
        }
    
?>


</body>
</html>