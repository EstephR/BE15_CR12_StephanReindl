<?php 
require_once "crud/components/db_connect.php";

$sql = "SELECT * FROM locations";
$result = mysqli_query($connect, $sql);

$tbody = '';
if ($result->num_rows > 0) {
  while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
      $tbody .= "<tr>
          <td><img class='img-thumbnail rounded-circle adm-picture' src='img/" . $row['picture'] . "' alt=" . $row['name'] . "></td>
          <td>" . $row['name'] . "</td>
          <td><a href='update.php?id=" . $row['id'] . "'><button class='btn btn-warning btn-sm' type='button'>Edit</button></a>
          <a href='crud/a_delete.php?id=" . $row['id'] . "'><button class='btn btn-outline-danger btn-sm' type='button'>Delete</button></a></td>
       </tr>";
  }
} else {
  $tbody = "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
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


<div class="container">
<h1 class="text-center mb-5 mt-5 p-3">Admin Area</h1>
        <div class="d-flex justify-content-center">
               <a href="create.php"><button class='btn btn-outline-danger mb-4 add-btn' type='button'>Add Destination</button></a>
        </div>
        <div class="row justify-content-center mb-5">
            <table class='table table-striped w-50 admin-table'>
               <thead class='table-headline'>
                   <tr>
                        <th>Picture</th>
                       <th>Name</th>
                       <th>Actions</th>
                   </tr>
               </thead>
               <tbody>
                  <?=$tbody?>
                </tbody>
           </table>
        </div>
  </div>

  <?php require_once "crud/components/footer.php" ?>

  <?php require_once "crud/components/bootstrap_script.php" ?>
  <script src="js/script.js"></script>
</body>
</html>