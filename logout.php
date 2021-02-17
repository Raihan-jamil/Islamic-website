<?php
	//24 2 2015
	if(!isset($_COOKIE["login"]))
	{	
		session_start();
		setcookie("login","",time()-1);
		session_unset();
		session_destroy();
		 header("location:home.php");
	}
    else{
    	session_start();
    	setcookie("login","",time()-1);
    	header("location:home.php");
    }

?>