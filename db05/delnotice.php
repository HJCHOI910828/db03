<? 	
	session_start();
	$conn = mysqli_connect("localhost", "root", "autoset", "mydb");
	$no=$_GET["no"];
	$sql="delete from notice where no='$no'";
	mysqli_query($conn,$sql);
?>
<meta http-equiv = "refresh" content="0;url=notice.php">