<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .form-control{
            width: 300px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row gy-5 mt-1  py-5 pt-1">
            <form method="post">
                <input type="text" placeholder ="Searching Area...." class = "form-control" name = "search">
                <button class = "btn btn-dark mt-2" border = "5px" name = "btn" >Click</button>
            </form>
        </div>
    </div>

        <?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = trim($_POST['search']);

    if ($search != "") {
        $selectquery = "SELECT * FROM user WHERE name LIKE '%$search%'";
        $final = mysqli_query($db_connect, $selectquery);

        while ($data_store = mysqli_fetch_assoc($final)) {
?>
            <table border='5px' class='table'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
                <tr>
                    <td><?php echo $data_store['id'] ?></td>
                    <td><?php echo $data_store['name'] ?></td>
                    <td><?php echo $data_store['email'] ?></td>
                    <td><?php echo $data_store['password'] ?></td>
                </tr>
            </table>
<?php
        }
    }
}
?>
</body>
</html>