<?php

require_once "crud/components/db_connect.php";

//Get Data for Bookings already made by user
$sql = "SELECT * FROM locations";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0 ) {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    $rows = "no results";
}

mysqli_close($connect);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "crud/components/bootstrap.php"?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <title>Mount Everest Agency - Go Beyond</title>
</head>

<body id="top">

<?php require_once "crud/components/navbar.php" ?>

<div class="hero text-center">
        <img class="hero-img" src="img/hero.png">
    <div class="hero-text-container d-flex justify-content-center">
        <div class="hero-text text-center p-5 shadow animate__animated animate__flipInX animate__slow">
            <h2>Mount Everest</h2>
            <h2>Travel Agency</h2>
            <p class="mt-5 animate__animated animate__zoomIn animate__delay-2s animate__slow" >Go Beyond</p>
        </div>
    </div>

</div>
    <div class="container">
        <h1 class="text-center mb-5 p-3" id="offers">Travel Offers</h1>

      
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1 
        justify-content-center mb-5 gap-5">

          <!-- Loop Data -->
          <?php 
                   if(is_array($rows)) {
                       foreach($rows as $row) {
                ?>
            <div class="card p-0 shadow border-0" data-aos="fade-up" data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                <h5 class="card-title m-0 p-3 text-center"><?=$row["name"]?></h5>
                <img src="img/<?=$row["picture"]?>" class="card-img-top rounded-0" alt="<?=$row["name"]?>">
                <div class="card-body">
                    <p class="card-text"><?=$row["description"]?></p>
                    <a href="details.php?id=<?=$row["id"]?>" class="btn btn-primary">Show More</a>
                </div>
            </div>

                <?php 
                       }
                    } else {
                        echo $rows;
                    }
                ?>

        </div>
    </div>

    

    <?php require_once "crud/components/footer.php" ?>

    <?php require_once "crud/components/bootstrap_script.php"?>  
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>            
    <script src="js/script.js"></script>
</body>
</html>