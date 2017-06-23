<?php
session_start();
$username = "testuser";
$password = "test";
if ((isset($action)) and ($_GET[$action] == "check"))
{
if (($_GET[$user] == $username) and ($_GET[$passwd] == $password))
{
$logged_in = TRUE;

session_register("logged_in");
header("Location: ".$PHP_SELF);
}
else
{
$logged_in = FALSE;
session_register("logged_in");
header("Location: ".$PHP_SELF);
}
}
elseif ((isset($action)) and ($action == "logout"))
{
$logged_in = FALSE;
session_register("logged_in");
session_destroy();
header("Location: http://www.dathe-oberschule.de/index1.php"); // oder wo auch immer der User nach dem Logout hin soll...
}
else
{
?>
<html>
<head>
<title>Safe Site</title>
</head>
<body>
<?php
if ((session_is_registered("logged_in")) and ($logged_in))
{
?>
Sie sind eingeloggt!<br>
Inhalt der Seite nach erfrolgreichem Login, HTML!<br>
<a href="<?php echo $PHP_SELF; ?>?action=logout">Logout</a><br>
<?php
}
elseif((isset($action)) and ($action == "check")){

?>
login failed
<?php}
else
{
?>
<div align="left">
Bitte einloggen:<br>
<form action="<?php echo $PHP_SELF; ?>?action=check" method="post">
<input type="text" name="user"><br>
<input type="password" name="passwd"><br>
<input type="submit" value="login"><br>
</form>
<?php
}echo $user;
?>
</body>
</html>
<?php
}
?>