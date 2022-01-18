
<?php

if (isset($_POST['name'])) {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "product";

	$con = mysqli_connect($servername, $username, $password, $dbname);



	$name = $_POST['name'];
	$description = $_POST['description'];
	$category = $_POST['category'];



	$sql = "insert into addproduct('id','name','description','category') values('0','{$name}','{$description}','{$category}')";
	$rs = mysqli_query($con, $sql);
	if ($rs) {
		echo "Hurray! User created";
	}
} else {
	echo "Are you a genuine visitor?";
}
?>
