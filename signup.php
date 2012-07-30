<form method="post">
<label for="txt" accesskey="E"><u>E</u>-Mail</label>
<input id="txt" type="text" name="email" />
<label for="nm" accesskey="N"><u>N</u>ame</label>
<input id="nm" type="text" name="uname" />
<input type="submit" />
</form>
<?php
//Import config.php and connect tu db
if(isset($_POST['email'])) {
include('function.php');
db(open);
$query = "INSERT INTO `users` VALUES(NULL , '".$_POST['email']."','".$_POST['uname']."','0','aaabbbccc')";
$qry = mysql_query($query);
echo mysql_error();
db(close);
}
?>