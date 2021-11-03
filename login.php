<?php 
include_once("lib/header.php");
?>

    <div class="login">
        <form action="processLog.php" method="POST" class="login-form">
            <p>Admin Login</p>
<?php
	if(isset($_SESSION["error"]) && !empty($_SESSION["error"])){
		echo "<span style='color:red', 'size:bold'>" . $_SESSION["error"]. " </span>";
		session_destroy();
	} ?>

            <div class="input_">
                <input <?php	
            if(isset($_SESSION['name']) && !empty($_SESSION['name'])){
				echo "value=" .$_SESSION['name'];
				$_SESSION['name']. "";
    
	} ?>
    type="text" placeholder="Username" name="name">
            </div>

            <div class="input_">
                <input type="password" name="pswrd" id="" placeholder="Password">
            </div>
           <button type="submit" class="btn">Login</button>
        </form>
    </div>
<?php 
include_once("lib/footer.php");
?>