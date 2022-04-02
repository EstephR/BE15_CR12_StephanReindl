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

<?php require_once "crud/components/navbar_admin.php" ?>

    <div class="container">
        <h1 class="text-center mt-5 mb-5 p-3" id="offers">Show API</h1>
        <div class="d-flex justify-content-center">
               <button class='btn btn-outline-danger mb-4 add-btn' type='button' id="btn-retrieve">Get API Details</button>
        </div>
      
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1 
        justify-content-center mb-5 gap-5" id="result">


        </div>
    </div>

    

    <?php require_once "crud/components/footer.php" ?>

    <?php require_once "crud/components/bootstrap_script.php"?>  
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>            
    <script src="js/script.js"></script>
</body>
</html>
