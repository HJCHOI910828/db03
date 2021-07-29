<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?
		$id=$_GET["id"];
		$conn = mysqli_connect("localhost", "root", "autoset", "mydb");
		$sql="select count(*) as cnt from member2 where id = '$id'";
		$rs = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($rs);
		if($row["cnt"]==1){
			?>
			<script>
				alert("사용할 수 없는 아이디")
				opener.document.frm1.id.value="";
				opener.document.frm1.id.focus();
				this.close();
			</script>
		<? }else{ ?>
			<script>
				alert("사용할수있습니다.")
				opener.document.frm1.pw.focus();
				this.close();
			</script>
		<? } ?>
</body>
</html>