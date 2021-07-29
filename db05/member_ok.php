<?
	$id=$_POST["id"];
	$pw=$_POST["pw"];
	$name=$_POST["name"];
	$addr=$_POST["addr"];
	$tel=$_POST["tel"];
	$job=$_POST["job"];
	$grade=$_POST["grade"];
	$gender=$_POST["gender"];
	$conn=mysqli_connect("localhost", "root", "autoset", "mydb");
	$sql="insert into member2 values ('$id', '$pw','$name','$addr','$tel','$job','$grade','$gender')";
	mysqli_query($conn,$sql)
?>
<meta http-equiv="refresh" content="0;url=index.php">