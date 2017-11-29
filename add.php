<?php 
include ("conn.php");
$id = $_POST("id");
$user = $_POST("user");
$title = $_POST("title");
$content = $_POST("content");
if($_POST["submit"]){
$sql = "insert into message(id, user, title, content, lastdate)VALUES ("", "$user", "$title", "$content", now())";
mysql_query($sql);
echo"<script>alert('submit successfully');location.href="add.html";</script>"

}
?>
