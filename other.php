
<?php 

if(empty($_POST)===false){
	
	$errors=array();
	
	$name=$_POST['uname'];
	$email=$_POST['uemail'];
	$message=$_POST['message'];
	
	
	
	
	if(empty($name)=== true || empty($email) === true || empty($message) ===true)
	{
		$errors[]= 'Name,email and message are required';
	}else{
		if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){
			$errors[]= 'That s not a valid email address';
		}
		if(ctype_alpha($name)===false){
			$errors[]='Name must only contains letters';
		}
	}
	if(empty($errors)===true){
		mail('arianhazrolli@gmail.com','Contact form',$message,'From:'.$email);
		header('Location:aboutus.php?sent');
		exit();
	}
}

?>