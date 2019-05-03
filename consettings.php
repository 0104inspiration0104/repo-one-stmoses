<?php
include('dbsettings.php');
//CONNECT TO THE SERVER
$connect=mysql_connect("localhost","root","");

// TEST CONNECTION
if (!$connect){
	die("failed to connect".mysql_error());//stop running the rest of the page and display the error type
//echo"connected";
}

else {
print" connection succeful!";
}
echo "<br>";

// SELECT THE DATABASE
$mysub=mysql_select_db("saint_moses_orimolade_cs_church_no_one_ikirun");

//check if database is selected
if(!$mysub){
	die("failed to select database".mysql_error());
	}
	else {
	echo"database selected";
	}
//DECLARED VARIABLES TO STORE INPUT FROM HTML TEXTBOXES
$value=$_POST['YourName'];
$value=$_POST['YourEmail'];
$value=$_POST['YourPhone'];
$value2=$_POST['YourAddress'];
$value3=$_POST['YourMessage'];
//$value6=$_POST['state'];
//$value7=$_POST['gender'];
//$value8=$_POST['imageup'];

//THE VARIABLE '$sql'STORED THE MYSQL STATEMENT INORDER FOR IT TO BE TESTED 
$sql="INSERT INTO contact_us(YourName,YourEmail,YourPhone,YourAddress,YourMessage,) VALUES ('$value','$value2','$value3','$value4','$value5')";

//TEST THE VARIABLE 'sql' THAT CONTAINS THE MYSQL STATEMENT
if (!$sql) {
die('Error'.mysql_error());
}
else
{
echo "submitted";
}

//CLOSE THE CONNECTION
mysql_close()
?>