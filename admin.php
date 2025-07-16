<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
         * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background-color: #1e1e2f;
      color: #fff;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    header {
      background: #2e2e4f;
      padding: 1rem 2rem;
      text-align: center;
      font-size: 1.5rem;
      letter-spacing: 1px;
    }

    .container {
      display: flex;
      flex: 1;
    }

    nav {
      background: #252542;
      width: 220px;
      min-height: calc(100vh - 60px);
      padding: 1rem;
    }

    nav ul {
      list-style: none;
    }

    nav li {
      margin: 1rem 0;
    }

    nav a {
      text-decoration: none;
      color: #ccc;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #fff;
    }

    main {
      flex: 1;
      padding: 2rem;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 1.5rem;
    }

    .card {
      background: #2d2d50;
      padding: 1.5rem;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.3);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.4);
    }

    .card h3 {
      margin-bottom: 0.5rem;
    }

    .card p {
      font-size: 0.9rem;
      color: #ccc;
    }

    @media(max-width: 768px) {
      nav {
        display: none;
      }

      main {
        padding: 1rem;
      }
    }
    </style>  
</head>
<body>
    
  <header>
    🚀 My Dashboard
  </header>

  <div class="container">
    <nav>
      <ul>
        <li><a href="admin.php">Dashboard</a></li>
        <li><a href="productupload.php">Products Upload</a></li>
        <li><a href="productshow.php">Products</a></li>
        <li><a href="#">Order</a></li>
        <li><a href="#">Settings</a></li>
      </ul>
    </nav>

      <?php
    include 'connection.php';
    $select = "SELECT COUNT(P_Name) as P_Name  from products";
    $final = mysqli_query($db_connect, $select);
    $fetch = mysqli_fetch_assoc($final); 
    ?>

    <main>
      <!-- <div class="header">Dashboard Overview</div> -->
      <div class="cards">
      <div class="card">
        <h3><?php echo $fetch['P_Name']?></h3>
        <p>Products</p> 
  </div>   
      <div class="card">
        <h3>Users</h3>
        <p>1,240 active users</p>
      </div>
      <div class="card">
        <h3>Revenue</h3>
        <p>$12,430 this month</p>
      </div>
      <div class="card">
        <h3>Orders</h3> 
        <p>340 new orders</p>
      </div>
      <div class="card">
        <h3>Feedback</h3>
        <p>85 new comments</p>
      </div>
  </div>
    </main>
  </div>



    <?php
    include 'connection.php';
    $selectquery = "SELECT * from products";
    $final = mysqli_query($db_connect, $selectquery);
       ?> 

    <!-- // while($data_store = mysqli_fetch_assoc($final))
    // { -->
    <!-- // ?>
    // <table border = '5px' class = 'table'>
    //     <tr>
    //         <th>ID</th>
    //         <th>Name</th>
    //         <th>Email</th>
    //         <th>Password</th>
    //     </tr>

    //     <tr>
    //         <td>
    //             <a href="" class = "btn btn-primary">Update</a>
    //             <a href="" class = "btn btn-danger">Delete</a>
    //         </td>
    //     </tr>
    // </table>
    
    

     -->
</body>
</html>