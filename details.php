<?php

require_once "crud/components/db_connect.php";

//Get destination details 
if(isset($_GET["id"]) && !empty($_GET["id"])) {
    $sql ="SELECT * FROM locations WHERE id = $_GET[id]";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "crud/components/bootstrap.php"?>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <title>Mount Everest Agency - Go Beyond</title>
</head>

<body>

<?php require_once "crud/components/navbar_admin.php" ?>

    <div class="container">
        <h1 class="text-center mt-5 mb-5 p-3"><?=$row["name"]?></h1>

        <div class="row justify-content-center mb-5">

        <div class="card p-0 shadow border-0 details-card">
            <div id="map"></div>
                <img src="img/<?=$row["picture"]?>" class="card-img-top rounded-0 mt-2" alt="<?=$row["name"]?>">
                <h5 class="card-title p-3 text-center"><?=$row["price"]?> EUR</h5>
                <div class="card-body">
                    <p class="card-text"><?=$row["description"]?></p>
                    <a href="index.php" class="btn btn-primary">Go Back</a>
                </div>
            </div>
        </div>
    </div>

<?php require_once "crud/components/footer.php" ?>

<?php require_once "crud/components/bootstrap_script.php"?>    
<script src="js/script.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer></script>


<script>
    //Google Maps Script
    var map;
    function initMap() {
        var location = {
            lat: <?=$row["latitude"]?>,
            lng: <?=$row["longitude"]?>
        };
        map = new google.maps.Map(document.getElementById('map'), {
            center: location,
            zoom: 8
        });
        var pinpoint = new google.maps.Marker({
            position: location,
            map: map
        });
    }
</script>
</body>
</html>