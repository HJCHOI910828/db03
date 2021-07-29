<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href = "style.css">
</head>
<body>
<header>
	<div class = "topmenu">
		<a href = "login.php">Login</a>
		 | 
		<a href = "member.php">SingUp </a>
		 | 
		<a href = "idpw.php">Search Id/Pw</a>
		&nbsp;
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
	<form name = "frm1" method = "post" action = "idpw_ok.php">
	<div class="content">
		<table class="table1">
			<tr>
				<th colspan = "2" align = "center">
					아이디/패스워드 찾기
				</th>
			</tr>
			<tr>
				<td>이름</td>
				<td><input type = "text" name = "name"></td>
			</tr>
			<tr>
				<td>전화번호</td>
				<td><input type = "text" name = "tel"></td>
			</tr>
			<tr>
				<td>아이디</td>
				<td><input type = "text" name = "id"></td>
			</tr>
			<tr>
				<td colspan = "2" align = "center">
					<input type = "button" value = "아이디 찾기" onclick="searchid()">
					<input type = "button" value = "비밀번호 찾기" onclick="searchpw()">
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
	function searchid(){
		if(frm1.name.value==""){
			alert("이름을 입력하시오");
			frm1.name.focus();return false;
		}
		if(frm1.tel.value==""){
			alert("전화번호을 입력하시오");
			frm1.tel.focus();return false;
		}
		document.frm1.submit();
	}
	function searchpw(){
		if(frm1.name.value==""){
			alert("이름을 입력하시오");
			frm1.name.focus();return false;
		}
		if(frm1.tel.value==""){
			alert("전화번호을 입력하시오");
			frm1.tel.focus();return false;
		}
		if(frm1.id.value==""){
			alert("아이디를 입력하시오");
			frm1.id.focus();return false;
		}
		document.frm1.submit();
	}
</script>