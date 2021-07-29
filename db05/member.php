<? session_start()?>
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
			<a href = "dcount.php">Delete account</a>
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
	<form name = "frm1" method = "post" action = "member_ok.php">
		<table class = "table1">
			<tr>
				<th colspan = "2" align = "center">회원가입 양식</th>
			</tr>
			<tr>
				<td>아이디</td>
				<td><input type = "text" name = "id">&nbsp;<a href = "javascript:idcheck()">중복확인</a></td>
			</tr>
			<tr>
				<td>패스워드</td>
				<td><input type = "text" name = "pw"></td>
			</tr>
			<tr>
				<td>이름</td>
				<td><input type = "text" name = "name"></td>
			</tr>
			<tr>
				<td>주소</td>
				<td><input type = "text" name = "addr"></td>
			</tr>
			<tr>
				<td>전화번호</td>
				<td><input type = "text" name = "tel"></td>
			</tr>
			<tr>
				<td>직업</td>
				<td><input type = "text" name = "job"></td>
			</tr>
			<tr>
				<td>최종학력</td>
				<td><input type = "text" name = "grade"></td>
			</tr>
			<tr>
				<td>성별</td>
				<td>
					<input type = "radio" name = "gender" value = "m" checked>남성
					<input type = "radio" name = "gender" value = "f">여성
				</td>
			</tr>
			<tr>
				<td colspan = "2" align = "center">
					<input type = "button" value = "회원가입완료" onclick = "send()">
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
	function send(){
		document.frm1.submit();
	}
	function idcheck(){
		if(frm1.id.value==""){
			alert("id를 입력하시오");
			frm1.id.focus();
			return false;
		}
		window.open("popup.php?id="+frm1.id.value,"pop01","width=600,height=200");
	}
</script>