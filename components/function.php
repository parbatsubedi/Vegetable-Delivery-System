<?php 
session_start();
include '../database/connection.php';

// variable declaration
$username = "";
$email    = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $conn, $errors, $username, $email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username    =  e($_POST['Username']);	
	$password_1  =  e($_POST['Password_1']);
	$password_2  =  e($_POST['Password_2']);

	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors, "Username is required"); 
	}
	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database

		if (isset($_POST['register_btn'])) {
			
			$query = "INSERT INTO tb_customer (Username,user_type, Password) 
					  VALUES('$username', 'user', '$password')";
			mysqli_query($conn, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: home.php');
		}	
	}
}
// escape string
function e($val){
	global $conn;
	return mysqli_real_escape_string($conn, trim($val));
	// if(!mysqli_real_escape_string)
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}

// 	// attempt login if no errors on form
	// if (count($errors) == 0) {
	// 	$password = md5($password);

	// 	$query = "SELECT * FROM tb_customer WHERE Username='$username' AND Password='$password' LIMIT 1";
	// 	$results = mysqli_query($conn, $query);

	// 	function getAll($table){
	// 		global $conn;
	// 		$query ="select * from $table";
	// 		return $query_run= mysqli_query($conn, $query);
			
	// 	}
}