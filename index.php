<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location:login.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Residencia</h1><br><br>
        <a href="executive.html"> <button>BOOK NOW</button></a><br><p>Click here to book a Executive room</p>
        <a href="deluxe.html"><button>BOOK NOW</button></a><br>
        <p>Click here to book a Deluxe room</p><a href="suite.html"><button>BOOK NOW</button></a><br>
        <p>Click here to book a Suite room</p><a href="family.html"><button>BOOK NOW</button></a><br>
        <p>Click here to book a Family room</p><a href="premium.html"><button>BOOK NOW</button></a><br>
        <p>Click here to book a Premium Suite room</p><a href="villa.html"><button>BOOK NOW</button></a><br>
        <p>Click here to book a Villa</p><a href="extendedstay.html"><button>BOOK NOW</button></a><br>
        <p>Click here to book a Extended Stay room</p><a href="standard.html"><button>BOOK NOW</button></a><br>
        <p>Click here to book a Standard room</p>
        <BR>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
</body>
</html>