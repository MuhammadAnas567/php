<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
           body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #f4f6f8;
        margin: 0;
        display: flex;
    }

    .sidebar {
        width: 220px;
        background: #24292e;
        color: #fff;
        min-height: 100vh;
        padding: 1.5rem 1rem;
    }

    .sidebar h2 {
        text-align: center;
        margin-bottom: 2rem;
    }

    .sidebar a {
        display: block;
        color: #bbb;
        text-decoration: none;
        padding: 0.75rem 1rem;
        margin-bottom: 0.5rem;
        border-radius: 6px;
        transition: background 0.3s;
    }

    .sidebar a:hover {
        background: #444c56;
        color: #fff;
    }

    .table-container {
        flex: 1;
        padding: 2rem;
    }

    h2 {
        text-align: center;
        margin-bottom: 1rem;
        color: #333;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background: #fff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    th, td {
        padding: 1rem;
        text-align: center;
        border-bottom: 1px solid #eee;
    }

    th {
        background: #4e73df;
        color: white;
    }

    tr:hover {
        background: #f1f4ff;
    }

    img {
        width: 80px;
        height: auto;
        border-radius: 6px;
    }

    a {
        text-decoration: none;
        color: #4e73df;
        font-weight: bold;
    }

    a:hover {
        text-decoration: underline;
    }

    @media(max-width: 768px){
        body {
            flex-direction: column;
        }
        .sidebar {
            width: 100%;
            min-height: auto;
            display: flex;
            overflow-x: auto;
        }
        .sidebar h2 {
            display: none;
        }
        .sidebar a {
            flex: 1;
            text-align: center;
            margin: 0;
            border-radius: 0;
        }
    }
    </style>
</head>
<body>
  <div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="admin.php">Dashboard</a>
    <a href="productupload.php">Products Upload</a>
    <a href="../productshow.php">Products</a>
    <a href="#">Orders</a>
    <a href="#">Settings</a>
</div>

<h2>Product Table</h2>   
<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>#ID</th>
                <th>Product Name</th>
                <th>Price ($)</th>
                <th>Description</th>
                <th>Image</th>
                <th>Correction</th>
            </tr>
        </thead>
        <tbody>

<?php
include '../connection.php';
$selectquery = "SELECT * from products";
$final = mysqli_query($db_connect, $selectquery);

while ($data_store = mysqli_fetch_assoc($final)) {
?>
            <tr>
                <td><?php echo $data_store['P_id']; ?></td>
                <td><?php echo $data_store['P_Name']; ?></td>
                <td><?php echo $data_store['P_price']; ?></td>
                <td><?php echo $data_store['P_description']; ?></td>
                <td>
                    <img src="../<?php echo $data_store['image']; ?>" alt="Product image" width="80">
                </td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Delete</a>
                </td>
            </tr>
<?php
}
?>
</body>
</html>