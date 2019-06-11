<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>資傳商場</title>
	<style>
		h3{
			color:blue;
		}
		table{
			border-collapse:collapse;width:40%;
		}
		th{
			background-color:#00F5BB;
		}
		td{
			background-color:#f2f2f2;
		}
		th,td{
			border:1px solid #ddd;text-align:center;
		}

	</style>

</head>

<body bgcolor="#D0F7F0">
<h3>資傳商場 留言板專區</h3>
	<hr>
	<form method="post">
		<table width="200" border="3" cellspacing="5" cellpadding="2">
  <tbody>
    <tr>
      <th scope="row">輸入資料
	  <td><tb>name: </tb><input type="text" name="a1"></td>
      <td><tb>email: </tb><input type="text" name="a2"></td>
      <td><tb>message: </tb><input type="text" name="a3"></td>
      <td><input type="submit" name="a4" value="確認"></td>
    </tr>
  </tbody>
</table>
<hr>
    <table width="200" border="3" cellspacing="5" cellpadding="2">
  <tbody>
    <tr>
      <th scope="row">修改資料</th>
	  <td><tb>name: </tb><input type="text" name="aa"></td>
      <td><tb>email: </tb><input type="text" name="bb"></td>
      <td><tb>message: </tb><input type="text" name="cc"></td>
      <td><input type="submit" name="dd" value="確認"></td>
    </tr>
  </tbody>
</table>
<hr>
	 <table width="200" border="3" cellspacing="5" cellpadding="5">
       <tbody>
         <tr>
           <th scope="row">查詢關鍵字</th>
           <td><input type="text" name="a8"></td>
           <td><input type="submit" name="a9" value="確認"></td>
         </tr>
         <tr>
           <th scope="row">刪除留言</th>
           <td><input type="text" name="a10"></td>
           <td><input type="submit" name="a11" value="確認"></td>
         </tr>
       </tbody>
     </table>
	</form>
	<hr>
	<input type="submit" name="ee" value="顯示全部"></td>
<?php
	$hw=mysqli_connect("localhost","root","1234","a6216512");
	mysqli_query($hw,"set names utf8");
	if($_POST[a4]){
		mysqli_query($hw,"insert into tba6216512 (name,email,message)values('$_POST[a1]','$_POST[a2]','$_POST[a3]');");
	}
	$t=mysqli_query($hw,"select * from tba6216512;");
	
	echo"<table>";
	if($_POST[a9]){
		mysqli_query($hw,"select*from tba6216512 where name LIKE '%$_POST[a8]%' or email LIKE '%$_POST[a8]%' or message LIKE '%$_POST[a8]%';");
	}
	else if($_POST[ee]){
		mysqli_query($hw,"select * from tba6216512;");
	}
	    $t=mysqli_query($hw,"select * from tba6216512 where name LIKE '%$_POST[a8]%' or email LIKE '%$_POST[a8]%' or message LIKE '%$_POST[a8]%';");
	if($_POST[dd]){
		mysqli_query($hw,"update tba6216512 set 'name'='$_POST[a1]','email'='$_POST[a2]','message'='$_POST[a3]' where 'number'='$number';");
	}
					 
	else if($_POST[a11]){
		mysqli_query($hw,"delete from tba6216512 where name='$_POST[a1]'and email='$_POST[a2]'and message='$_POST[a3]'where 'number'='$number';)");
	}
	$t=mysqli_query($hw,"select*from tba6216512;");
	echo "<table>";
	echo"<tr><th>編號</th><th>姓名</th><th>信箱</th><th>訊息</th>";
    
	while($d=mysqli_fetch_array($t))
	{
	echo"<tr>";
	echo"<td>$d[0]</td>";
	echo"<td>$d[1]</td>";
	echo"<td>$d[2]</td>";
	echo"<td>$d[3]</td>";
	echo"</tr>";
	}
	
	echo"</table>";
	?>

</body>
</html>