<?
	session_start();
	$id=$_SESSION["id"];
	$conn=mysqli_connect("localhost", "root", "autoset", "mydb");
	$sql="select * from member2 where id='$id'";
	$rs=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($rs);
?>
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
		<form name = "frm1" method = "post" action = "member_edit_ok.php">
			<table border = "1" cellspacing="5" cellpadding = "10">
				<tr>
					<th colspan = "2" align = "center">인적사항 수정</th>
				</tr>
				<tr>
					<td>ID</td>
					<td><input type = "text" name = "id" value = "<?=$row["id"]?>"readonly></td>
				</tr>
				<tr>
					<td>패스워드</td>
					<td><input type = "text" name = "pw" value = "<?=$row["pw"]?>"></td>
				</tr>
				<tr>
					<td>이름</td>
					<td><input type = "text" name = "name" value = "<?=$row["name"]?>"></td>
				</tr>
				<tr>
					<td>주소</td>
						<td><input type = "text" name = "addr" value = "<?=$row["addr"]?>"></td>
				</tr>
				<tr>
					<td>전화번호</td>
						<td><input type = "text" name = "tel" value = "<?=$row["tel"]?>"></td>
				</tr>
				<tr>
					<td>직업</td>
					<td><input type = "text" name = "job" value = "<?=$row["job"]?>"></td>
				</tr>
				<tr>
					<td>최종학력</td>
						<td><input type = "text" name = "grade" value = "<?=$row["grade"]?>"></td>
				</tr>
				<tr>
					<td>성별</td>
					<td>
						<input type = "radio" name = "gender" value = "m" checked>남성
						<input type = "radio" name = "gender" value = "f" <? if($row["gender"]=="f"){?>checked <? } ?> >여성
					</td>
				</tr>
				<tr>
					<td colspan = "2" align = "center">
						<input type = "button" value = "수정 완료" onclick = "send()">
					</td>
				</tr>
			</table>
		</form>
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
	function send(){
		document.frm1.submit()
	}
</script>