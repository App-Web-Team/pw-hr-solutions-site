<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- inter font css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome css -->
    <script src="https://kit.fontawesome.com/0345135d49.js" crossorigin="anonymous"></script>
    <!-- external css -->
    <link rel="stylesheet" href="style.css">
    <title>HR Solutions Home</title>
</head>

<body>
    <?php
    // navigation bar
    include "templates/hr-navigation-bar.php";
    // header-section
    include "sections/header-section.php";
    // achievements section
    include "sections/achievement-section.php";
    // clients section
    include "sections/client-section.php";
    // recruitment section
    include "sections/recruitment-section.php";
    // learning section
    include "sections/learning-section.php";
    // optimising section
    include "sections/optimising-section.php";
    // touch section
    include "sections/touch-section.php";
    // footer section
    include "templates/footer-section.php";
    ?>

    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>