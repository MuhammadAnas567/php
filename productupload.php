<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #3a3d40, #181719);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            margin: 0;
        }

        .form-container {
            background: rgba(255,255,255,0.05);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
            width: 100%;
            max-width: 400px;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
        }

        .form-group {
            margin-bottom: 1.2rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem;
            border: none;
            border-radius: 8px;
            background: rgba(255,255,255,0.1);
            color: #fff;
            font-size: 1rem;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: 2px solid #4ecca3;
            background: rgba(255,255,255,0.2);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 80px;
        }

        button {
            width: 100%;
            padding: 0.9rem;
            border: none;
            border-radius: 8px;
            background: #4ecca3;
            color: #000;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #38b28f;
        }
    </style>
</head>
<body>
    <div class="form-container">
    <h2>Add New Product</h2>

    <?php
     include("connection.php");
    if(isset($_POST['submit'])){
        $name = $_POST['P_Name'];
        $P_price = $_POST['P_price'];
        $P_description = $_POST['P_description'];

        //image upload  
        $filename = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $imageuploadprocess = 'uploadimages/' . $filename;

        move_uploaded_file($tmp_name,$imageuploadprocess);
    //     if (move_uploaded_file($tmp_name, $imageuploadprocess)) {
    //     echo "File uploaded successfully!";
    // } else {
    //     echo "File upload failed!";
    // }
 
  

        $insert = "INSERT into products(P_Name ,P_price,P_description,image) values('$name', '$P_price','$P_description', 
        '$imageuploadprocess')";

        $finalwork = mysqli_query($db_connect, $insert);
        
            if ($finalwork) {
                echo "<p style='color:lime;'>Product added successfully!</p>";
            } else {
                echo "<p style='color:red;'>Failed to insert product into database.</p>";
            }     
    } 
    ?>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="productName">Product Name</label>
            <input type="text" id="productName"  name = "P_Name" placeholder="Enter product name" required>
        </div>

        <div class="form-group">
            <label for="price">Price ($)</label>
            <input type="number" id="price"  name = "P_price" placeholder="Enter price" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description"  name = "P_description" placeholder="Write short description" required></textarea>
        </div>

        <div class="form-group">
            <label for="image">Product Image</label>
            <input type="file" id="images" name ="image" placeholder="Enter Product image ">
        </div>

        <button type="submit" name = "submit">Add Product</button>
    </form>
</div>      
</body>
</html>