<?php session_start();


// collecting, verifying and validating data
$errorCount = 0;

$name = $_POST['fullname'] != ""? $_POST['fullname'] : $errorCount++ ;
$email = $_POST['email'] != ""? $_POST['email'] : $errorCount++ ;
$phone = $_POST['phone'] != ""? $_POST['phone'] : $errorCount++ ;
$dob = $_POST['dob'] != ""? $_POST['dob'] : $errorCount++ ;

$_SESSION['fullname'] = $name;
$_SESSION['email'] = $email;
$_SESSION['phone'] = $phone;
$_SESSION['dob'] = $dob;


// data, name, phone and email validation

function validate_phone_number($phone)
{
     // Allow +, - and . in phone number
     $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
     // Remove "-" from number
     $phone_to_check = str_replace("-", "", $filtered_phone_number);

     // Check the lenght of number
     // This can be customized if you want phone number from a specific country
     if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
        return false;
     } else {
       return true;
     }
}
if($errorCount > 0){
	$_SESSION["error"]= "Please fill up all space!";
	header("Location: register.php");
} else{

	if (!preg_match("/^[a-zA-Z]/", $name)){
		$_SESSION["error"]= "Invalid name, use letters only!" ;
		header("Location: register.php");
		die();
	}
	if (validate_phone_number($phone) != true) {
$_SESSION["error"]= "Invalid phone number" ;
		header("Location: register.php");
		die();
    }
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$_SESSION["error"]= "Invalid email address!";
		header("Location: register.php");
		die();
	}

	//Id auto increment
	$allUsers = scandir("db/clients/");
  $usersCount = count($allUsers);
  $userId = ($usersCount-1);
 
//   //adding time of registration
//   date_default_timezone_set("Africa/Lagos");
// $reg_date = date('d-m-y, g:ia' );

	$userObject = [
		'id' =>$userId,
		'name' =>$name,
		
		'email' =>$email,
		'phone' =>$phone,
		'dob' =>$dob,
	
	];
	// $_SESSION["reg_date"] = $reg_date;
	//check if user already exist

	// $userExists = findUser($email);
	// if($userExists){
	// 		set_alert("error", "Registration failed, email already registered!");
	// 		  header('Location: reg.php');
	// 		  die();
	// 	  }
	

	//saving the data into the database(folder) and redirecting to login page.
	file_put_contents("db/clients/".$userObject['email'].".json", json_encode($userObject ));
    
	 $_SESSION["message"]= "Registration successful!";

     header("Location: success.php");
}





?>
