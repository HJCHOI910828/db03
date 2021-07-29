<? 
	session_start();
	$id=$_SESSION["id"];
	$pw=$_POST["pw"];
	$name=$_POST["name"];
	$addr=$_POST["addr"];
	$tel=$_POST["tel"];
	$job=$_POST["job"];
	$grade=$_POST["grade"];
	$gender=$_POST["gender"];

	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="update member2 set pw = '$pw', name='$name', addr='$addr', tel='$tel', job='$job', grade='$grade', gender='$gender' where id='$id'";
	mysqli_query($conn,$sql);
?>
<meta http-equiv="refresh" content="0;url=index.php">