<?php 
include_once("lib/header.php");
?>

    <div class="register">
        <div class="register-image">
            <img src="images/register.svg" alt="" srcset="">
        </div>
        <div class="register-form">
            <p>Register to Join This Cohort.</p>
            <span>Registration ends __,November 2021.</span>
            <form action="processReg.php" method="POST" id="form">
               <?php
	if(isset($_SESSION["error"]) && !empty($_SESSION["error"])){
		echo "<span style='color:red', 'size:bold'>" . $_SESSION["error"]. " </span>";
		session_destroy();
	} ?>
                <div class="input_">
                     <label  for="fullname">Name</label> 
                    <input <?php
	if(isset($_SESSION['fullname']) && !empty($_SESSION['fullname'])){
		echo "value=" .$_SESSION['fullname'];
		$_SESSION['fullname']. "";
	} ?>
    type="text" name="fullname" placeholder="Enter full name">
                </div>
                <div class="input_">
                    <label for="email">Email</label>
                    <input <?php
	if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
		echo "value=" .$_SESSION['email'];
		$_SESSION['email']. "";
	} ?>
                    type="email" name="email" placeholder="Email">
                </div>
                <div class="input_">
                    <label for="phone">Phone</label>
                    <input <?php
	if(isset($_SESSION['phone']) && !empty($_SESSION['phone'])){
		echo "value=" .$_SESSION['phone'];
		$_SESSION['phone']. "";
	} ?>
                     type="number" name="phone" placeholder="Phone">
                </div>
                <div class="input_">
                    <label for="date">DOB</label>
                    <input <?php
	if(isset($_SESSION['dob']) && !empty($_SESSION['dob'])){
		echo "value=" .$_SESSION['dob'];
		$_SESSION['dob']. "";
	} ?>
                     type="date" name="dob" placeholder="Date of Birth" value="">
                </div>
                <input type="submit" value="REGISTER" class="btn">
            </form>
        </div>
    </div>


    <?php 
include_once("lib/footer.php");
?>