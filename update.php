<?php
require_once 'crud/components/db_connect.php';

if($_GET["id"]) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM locations WHERE id = $id";
    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $name = $data["name"];
        $price = $data["price"];
        $description = $data["description"];
        $picture = $data["picture"];
     
    } else {
        header("location: admin.php");
    }
   
} else {
    header("location: admin.php");
}

if (isset($_POST["submit"])) {    
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $picture = $_POST['picture'];
    $id = $_POST['id'];

    $sql = "UPDATE locations SET name = '$name', price = $price, description = '$description', picture = '$picture' WHERE id = {$id}";

    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        header("refresh:2;url=admin.php");
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
        header("refresh:2;url=admin.php");
    } 
}
mysqli_close($connect);

?>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <?php require_once 'crud/components/bootstrap.php' ?>
  <link rel="icon" href="img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php require_once "crud/components/navbar_admin.php"?>

  <div class="container admin-container d-flex flex-column align-items-center">
        <div class="alert-<?= $class ?> w-50 p-3 mb-3" role="alert">
            <p><?php echo ($message) ?? ''; ?></p>
        </div>
        <div class="d-flex flex-column align-items-center w-100">
            <h1 class="p-3 text-center mb-5">Update Data</h1>
        </div>

    <fieldset class="mb-5">
        <form method="POST" enctype="multipart/form-data">
            <table class='table'>
                <tr>
                    <th>Name</th>
                    <td><input class='form-control' type="text" name="name"  placeholder="Name" value="<?=$name?>"/></td>
                </tr>    
                <tr>
                    <th>Price</th>
                    <td><input class='form-control' type="number" name= "price" placeholder="Price" value="<?=$price?>"/></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><input class='form-control' type="text" name= "description" placeholder="Description"value="<?=$description?>"/></td>
                </tr>
                <tr>
                    <th>Picture</th>
                    <td><input class='form-control' type="text" name="picture"  placeholder="Picture URL" value="<?=$picture?>"/></td>
                </tr>
                <tr>
                    <input type="hidden" name="id" value="<?=$id ?>" />
                </tr>    
                <td></td>
                    <td class="d-flex justify-content-center"><button class='btn btn-warning p-3' name="submit" type="submit">Change Data</button></td>
                </tr>
            </table>
        </form>
    </fieldset>
</div>




  </div>

  <?php require_once "crud/components/footer.php" ?>
  <?php require_once "crud/components/bootstrap_script.php" ?>
</body>
</html>

