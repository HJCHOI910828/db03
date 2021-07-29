<? session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href = "style.css">
</head>
<body>
<header>
	<div class = "topmenu">
		<? if(isset($_SESSION["id"])){ ?>
			<a href = "logout.php">Logout</a>
			 | 
			<a href = "member_edit.php">Edit </a>
			 | 
			<a href = "javascript:dcount()">Delete account</a>
			&nbsp;
		<?	}else {?>
			<a href = "login.php">Login</a>
			 | 
			<a href = "member.php">SingUp </a>
			 | 
			<a href = "idpw.php">Search Id/Pw</a>
			&nbsp;
	<? } ?>
	</div>
	<br>
	<a href="index.php">Welcome!</a>
</header>
<div id = "wrap">
	<div class="menu">
		<ul class = "menubar">
			<li><a href="notice.php">공지사항</a></li>
			<li><a href="board.php">자유게시판</a></li>
			<li><a href="qna.php">묻고답하기</a></li>
			<li><a href="inc.php">자료실</a></li>
			<li><a href="book.php">즐겨찾기</a></li>
		</ul>
	</div>
	<div class="content">
	<?
		$name=$_POST["name"];
		$tel=$_POST["tel"];
		$id=$_POST["id"];
		if($_POST["id"]){
			$sql="select pw as result from member2 where name ='$name'and tel = '$tel'and id = '$id'"; //id를 result라는 값으로 들고온다.
		}else{
			$sql="select id as result from member2 where name ='$name'and tel = '$tel'";
		}
		$conn=mysqli_connect("localhost", "root", "autoset", "mydb");
		$rs=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($rs);
	?>
		<table class = "table1">
			<tr>
				<th>
					원하는 결과 값은?
				</th>
			</tr>
			<tr>
				<td><?=$row["result"]?></td>
			</tr>
		</table>
	</div>
</div>
<footer>
</footer>
</body>
</html>
<script>
	function dcount(){
		if(confirm("회원탈퇴를 하겠냐")){
			location.href="dcount.php";
		}
	}
</script>