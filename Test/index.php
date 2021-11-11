<?php include("connect.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Cemetery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/Map-Clean.css">
</head>

<body>
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" id="count"></button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#" >data</a>
        </div>
    </div>


   
</body>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</html>

<script>
    $(function(){
        $.ajax({
            url: 'fetch.php',
            success:function(){
                var count = JSON.parse($count);
                console.log($count);

            }
        })
    })
</script>