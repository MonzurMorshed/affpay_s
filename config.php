<?php 
	session_start();

 	if(isset($_POST['lang']) AND $_POST['lang']=='russian'){
 		$_SESSION['lang'] = 'russian';
 	}else{
 		$_SESSION['lang'] = 'english';
 	}


	if($_SESSION['lang'] == 'russian'){
		include('lang/russian.php');
	}else{
		include('lang/english.php');
	}

?>