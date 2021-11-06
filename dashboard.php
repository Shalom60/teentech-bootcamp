<?php 
include_once("lib/header2.php");	
            if(isset($_SESSION['loggedIn']) && !empty($_SESSION['loggedIn'])){
    
?>
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
     <?php 
            }
            else{
                 
header('Location: login.php');
            }
include_once("lib/footer.php");
?>