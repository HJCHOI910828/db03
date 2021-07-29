<?	
	session_start();
	$no=$_POST["no"];
	$title=$_POST["title"];
	$content=$_POST["content"];
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="update notice set title = '$title',content = '$content' where no = $no";
	mysqli_query($conn,$sql);
?>
<meta http-equiv="refresh" content = "0;url=index.php">