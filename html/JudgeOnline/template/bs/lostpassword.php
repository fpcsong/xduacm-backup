<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo $view_title?></title>
        <link rel=stylesheet href='./template/<?php echo $OJ_TEMPLATE?>/<?php echo isset($OJ_CSS)?$OJ_CSS:"hoj.css" ?>' type='text/css'>
</head>
<body>
<div id="wrapper">
        <?php require_once("oj-header.php");?>
<div id=main>
        <form action=lostpassword.php method=post>
<center>
	<h3>密码找回功能暂时不可用，请在校ACM群小窗口管理员"贪心只能过样例"，并提供学号以及个人信息，外校人员如非必要重新注册即可</h3>
</center>
<!--
        <center>
        <table width=400 algin=center>
        <tr><td width=200></*?php echo $MSG_USER_ID?>:<td width=200><input name="user_id" type="text" size=20></tr>
        <tr><td></*?php echo $MSG_EMAIL?>:<td><input name="email" type="text" size=20></tr>
        
                <tr><td></*?php echo $MSG_VCODE?>:</td>
                        <td><input name="vcode" size=4 type=text><img alt="click to change" src=vcode.php onclick="this.src='vcode.php#'+Math.random()">*</td>
                </tr>
                
        <tr><td><td><input name="submit" type="submit" size=10 value="Submit">
</tr>
        </table>
        </center>
-->
</form>

<div id=foot>
        <?php require_once("oj-footer.php");?>

</div><!--end foot-->
</div><!--end main-->
</div><!--end wrapper-->
</body>
</html>
