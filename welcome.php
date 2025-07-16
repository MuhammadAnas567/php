<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'connection.php';
    $select = "SELECT COUNT(name) as name from user";
    $final = mysqli_query($db_connect, $select);
    $fetch = mysqli_fetch_assoc($final); 
    ?>
    <h1>Client <?php echo $fetch['name']?></h1>
</body> 
</html>