<?php 
	require 'database-config.php';

	session_start();

	$username = "";
	$password = "";
	
	if(isset($_POST['username'])){
		$username = $_POST['username'];
	}
	if (isset($_POST['password'])) {
		$password = $_POST['password'];

	}
	
	echo $username ." : ".$password;

	$q = 'SELECT * FROM serviceproviderlogin WHERE username=:username AND password=:password';

	$query = $dbh->prepare($q);

	$query->execute(array(':username' => $username, ':password' => $password));


	if($query->rowCount() == 0){
		header('Location: loginvendor.php?err=1');
	}else{

		$row = $query->fetch(PDO::FETCH_ASSOC);

		session_regenerate_id();
		$_SESSION['sess_user_id'] = $row['id'];
		$_SESSION['sess_username'] = $row['username'];
        $_SESSION['sess_userrole'] = $row['typeserv'];

        echo $_SESSION['sess_userrole'];
		session_write_close();

		if( $_SESSION['sess_userrole'] == "fooddelivery"){
			header('Location: vendorhome/fooddelivery/userupdate.php');
		}
		else if( $_SESSION['sess_userrole'] == "homeservice"){
			header('Location: vendorhome/homeservice/userupdate.php');
		}
		
		
		
		else{
			header('Location: vendorhome/bookdoc/userupdate.php');
		}
		
		
	}


?>

