<?php session_start();
	  
	  $error1 = 0;

$name = $_POST['name'] != ""? $_POST['name'] : $error1++ ;
$pswrd = $_POST['pswrd'] != ""? $_POST['pswrd'] : $error1++ ;

$_SESSION['name'] = $name;

if($error1 > 0){
	$_SESSION["error"] = "Please input your username and password";
	header("Location: login.php");
} 
else{
	$allUsers = scandir("db/admin/");
  $usersCount = count($allUsers);
  
		
	//check if email is registered
     
	for($counter=0; $counter< count($allUsers); $counter++){
		  $newUser = $allUsers[$counter];
		  if($newUser == $name. ".json"){
			  // Password check

			$userString= file_get_contents("db/admin/".$newUser);
			 $userObject = json_decode($userString);
			$pswrdFromDb = $userObject->pswrd;
			$pswrdFromUser = $pswrd;
			   $$pswrdFromUser = password_verify($pswrd, $pswrdFromDb);
			if($pswrdFromUser = $pswrdFromDb) {
				//set time and redirect to dashboard  
			
				header('Location: dashboard.php');
				die();
			}
		  
		  }
	}
    $_SESSION['error'] = "Invalid email or password";
header('Location: login.php');
}
?>