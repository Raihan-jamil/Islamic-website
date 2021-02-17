<?php

include 'dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

mysqli_select_db($conn,"mydataBASE");

$sql ="SELECT * FROM Person WHERE uid='$uid' AND pwd='$pwd'";

$result = mysqli_query($conn,$sql);

if($row = mysqli_fetch_assoc($result))
{
	if(isset($_REQUEST["remember"]) && $_REQUEST["remember"]==1){
            setcookie("login",$row['uid'],time()+24*60*60);
        	$_COOKIE["login"]=$row['uid'];
           // session_start();
            $_SESSION["uid"]=time();
            $_SESSION["uid"]=$row['uid'];
        }
        else{
            //setcookie("uid",$row['uid']);
            //$_COOKIE["login"]=$row['uid'];
              session_start();
             $_SESSION["uid1"]=time()+60;
             $_SESSION["uid"]=$row['uid'];
              }
    header("location:index.php");
}
else {
echo "Wrong userid or password";
}

?>

