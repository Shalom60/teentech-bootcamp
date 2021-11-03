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
    <header class="main-header">
        <h2>TeenTech.Africa</h2>
        <nav class=".nav">
            <ul class="desktop">
                <li> <a href="index.php" class="home-link">Home</a> </li>
                <li> <a href="#" class="dashboard-btn">Log Out</a> </li>
            </ul>

            <a href="#" class="hamburger">
                <img src="images/icon-hamburger.svg" alt="" srcset="">
            </a>
        </nav>
    </header>
    <nav class="mobile-menu inactive">
        <ul>
            <li> <a href="index.php" class="home-link">Home</a> </li>
            <li> <a href="#">Log out</a> </li>
        </ul>
    </nav>

    <div class="dashboard">
        <div class="num">
            <p> Registered Participants</p>
        </div>
        <table>
            <tr><th>S/N<th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
            <?php 
             $file = scandir("db/clients/");
            $counter = count($file);
            if($counter>2){
            for($i=1; $i<$counter-1; $i++){
            $clients= file_get_contents("db/clients/".$i.".json");
            $fileObject = json_decode($clients);
            ?>
            <tr><td><?php echo $i?><td>
                <td><?php echo $fileObject->name ?></td>
                <td><?php echo $fileObject->email ?></td>
                <td><?php echo $fileObject->phone ?></td>
            </tr>
            <?php
            }
        } ?>
        </table>
        
    </div>
    <script src="js/script.js"></script>
    
</body>
</html>