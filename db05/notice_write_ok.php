<?	
	session_start();
	$title=$_POST["title"];
	$content=$_POST["content"];
	$writer=$_SESSION["id"];
	$writeday=date("Y-m-d");
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="insert into notice (title, content, writer, writeday) values('$title', '$content', '$writer', '$writeday')";
	mysqli_query($conn,$sql);
?>
<meta http-equiv="refresh" content = "0;url=index.php">