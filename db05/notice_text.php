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
		<table class = "table1">
			<tr>
				<th>번호</th>
				<th>제목</th>
				<th>글쓴이</th>
				<th>날짜</th>
				<th>조회수</th>
			</tr>
<?
	if(isset($_GET["page"])){
		$page=$_GET["page"];
	}else{
		$page = 1;
	}

	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql2 = "select count(*) as cnt from notice";
	$rs2 = mysqli_query($conn,$sql2);
	$row2 = mysqli_fetch_array($rs2);
	$cnt = $row2["cnt"];
	$pagecount = ceil($cnt/10);

	$startRow=($page-1)*10;

	$sql="select * from notice order by no desc limit $startRow, 10";
	$rs=mysqli_query($conn,$sql);

			while($row=mysqli_fetch_array($rs)){
?>
			<tr>
				<td><?=$row["no"]?></td>
				<td><a href = "notice_content.php?no=<?=$row["no"]?>"><?=$row["title"]?></a></td>
				<td><?=$row["writer"]?></td>
				<td><?=$row["writeday"]?></td>
				<td><?=$row["hit"]?></td>
			</tr>
			<? }
			if(isset($_SESSION["id"])){ 
				if($_SESSION["id"]=="admin"){
			?>
			<tr>
				<td colspan = "5" align = "center">
					<input type = "button" value = "공지사항 추가" class = "bt" onclick = "location.href='notice_write.php'">
				</td>
			</tr>
			<tr><td colspan = "5" align = "center">
			<?
			
				for($i=1;$i<=$pagecount;$i++){
					echo "<a href = 'notice_text.php?page=$i'>[$i]</a>";
			}}} 
			?>
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