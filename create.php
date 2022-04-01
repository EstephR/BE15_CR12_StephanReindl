<?php
require_once "crud/components/db_connect.php";

if (isset($_POST["submit"])) {    
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $picture = $_POST['picture'];

    $sql = "INSERT INTO locations (name, price, description, picture) VALUES ('$name', $price, '$description', '$picture')";
   
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully created";
        header("refresh:2;url=admin.php");
    } else {
        $class = "danger";
        $message = "Error while creating record : <br>" . mysqli_connect_error();
        header("refresh:2;url=admin.php");
    } 
}
mysqli_close($connect);



?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Area</title>
  <?php require_once 'crud/components/bootstrap.php' ?>
  <link rel="icon" href="img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php require_once "crud/components/navbar_admin.php"?>



  <div class="container admin-container d-flex flex-column align-items-center">
    <div class="d-flex flex-column align-items-center w-100">

    <div class="alert-<?= $class ?> w-50 p-3 mb-3" role="alert">
            <p><?php echo ($message) ?? ''; ?></p>
        </div>

    <h1 class="p-3 text-center mt-5 mb-5">New Destination</h1>
    </div>
   
    <fieldset class="mb-5">
        <form method="POST" enctype="multipart/form-data">
            <table class='table'>
                <tr>
                    <th>Name</th>
                    <td><input class='form-control' type="text" name="name"  placeholder="Name"></td>
                </tr>    
                <tr>
                    <th>Price</th>
                    <td><input class='form-control' type="number" name= "price"></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><input class='form-control' type="text" name= "description" placeholder="Description"></td>
                </tr>
                <tr>
                    <th>Picture</th>
                    <td><input class='form-control' type="text" name="picture"  placeholder="Picture URL"></td>
                </tr>
                <tr> 
                <td></td>
                    <td class="d-flex justify-content-center"><button class='btn btn-warning p-3 w-50' name="submit" type="submit">Add Destination</button></td>
                </tr>
            </table>
        </form>
    </fieldset>

  </div>


  <?php require_once "crud/components/footer.php" ?>

  <?php require_once "crud/components/bootstrap_script.php" ?>
</body>
</html>



