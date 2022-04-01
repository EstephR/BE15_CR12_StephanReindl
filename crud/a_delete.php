<?php
require_once "components/db_connect.php";

if(isset($_GET["id"]) && !empty($_GET["id"])) {
    $sql = "DELETE FROM locations WHERE id = $_GET[id]";

if(mysqli_query($connect, $sql) === true) {
    $class = "success";
    $message = "Location has been deleted!";
} else {
    $class = "danger";
    $message = "Something went wrong, please try again!" . $connect->error;
}
}

mysqli_close($connect);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Delete Record</title>
        <link rel="icon" href="../img/favicon.png" type="image/x-icon">
        <?php require_once "components/bootstrap.php"?>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div class="container flex-column d-flex align-items-center">
        <div class="d-flex flex-column align-items-center">
            <h1 class="w-100 p-3 text-center mt-5 mb-5">Delete Record</h1>
        </div>
            
            <div class="w-50 d-flex flex-column align-items-center alert alert-<?=$class?>" role="alert"> 
                <p><?=$message?></p>
                <a href="../admin.php"><button class="btn btn-success" type='button'>Go Back</button></a>
            </div>
        </div>
    </body>
</html>