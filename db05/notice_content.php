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
			$no=$_GET["no"];
			$conn = mysqli_connect("localhost","root","autoset","mydb");
			$sql = "update notice set hit=hit+1 where no=$no";
			mysqli_query($conn,$sql);
			$sql = "select * from notice where no=$no"; //no를 역으로 받아들인다. 반대말 asc
			$rs = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($rs);
		?>
		<table class = "table1">
			<tr>
				<td>글번호</td>
				<td><?=$row["no"]?></td>
			</tr>
			<tr>
				<td>글제목</td>
				<td><?=$row["title"]?></td>
			</tr>
			<tr>
				<td>글내용</td>
				<td><?=nl2br($row["content"])?></td>
			</tr>
			<tr>
				<td>글쓴이</td>
				<td><?=$row["writer"]?></td>
			</tr>
			<tr>
				<td>작성일</td>
				<td><?=$row["writeday"]?></td>
			</tr>
			<tr>
				<td>조회수</td>
				<td><?=$row["hit"]?></td>
			</tr>
			<tr>
				<td colspan = "2" align = "center">
					<input type = "button" class = "bt" value = "리스트" onclick = "location.href='notice.php'">
					<input type = "button" class = "bt" value = "수정" onclick = "location.href='notice_edit.php?no=<?=$no?>'">
					<input type = "button" class = "bt" value = "삭제" onclick = "del()">
				</td>
			</tr>
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
	function del(){
		if(confirm("정말 삭제 하겠냐")){
			location.href="delnotice.php?no=<?=$no?>";
		}
	}
</script>