<?php
if(isset($_GET['id'])): $id_curr = $_GET['id'];
else:
    //$id_curr = 1;
endif;
?>
<script>var currId = <?php echo $id_curr ?></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Front test</title>

    <link rel="stylesheet" href="css/style.css">

    
</head>
<body>
<section class="blog-wrapper pt-5">
    <div class="container">

        <div id="spinner-load">
            <p class="text-center">
                <img src="img/1475.gif" alt="">
            </p>
        </div>

        <div id="blog-single" class="row"></div>
    </div>
</section>

    <script src="js/script.js"></script>
</body>
</html>