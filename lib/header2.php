<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeenTech Africa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php session_start();

?> 
    
   <header class="main-header">
        <h2>TeenTech.Africa</h2>
        <nav class="nav">
            <ul class="desktop">
                <li> <a href="index.php" class="home-link">Home</a> </li>
                <li> <a href="logout.php" class="btn">Log-out</a> </li>
            </ul>

            <a href="#" class="hamburger">
                <img src="images/icon-hamburger.svg" alt="" srcset="">
            </a>
        </nav>
    </header>
    <nav class="mobile-menu inactive">
        <ul>
            <li> <a href="index.php" class="home-link">Home</a> </li>
            <li> <a href="logout.php">Log-out</a> </li>
        </ul>
    </nav>