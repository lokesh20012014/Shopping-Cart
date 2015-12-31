


<?php
session_start();
if(isset($_SESSION['SESS_CHANGEID']) == TRUE) // a check is made for a session variable called SESS_CHANGEID. If it exists, the session is unset (deleted) and the session id is regenerated.
{
session_unset();
session_regenerate_id();
}
require("connect.php");

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<head>
<title><?php echo $config_sitename; ?></title>

<link href="stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="header">
<h1><?php echo $config_sitename; ?></h1>
</div>
<div id="menu">
<a href="<?php echo $config_basedir; ?>">Home</a> -
<a href="<?php echo $config_basedir;?>showcart.php">View Basket/Checkout</a>
</div>
<div id="container">
<div id="bar">
<?php
require("bar.php");
echo "<hr>";
if(isset($_SESSION['SESS_LOGGEDIN']))  //  A check is made to see if the SESS_LOGGEDIN variable exists. If it does, it indicates the user is currently logged in, and his username and a Logout link are displayed.
{
echo "Logged in as <strong>" . $_SESSION['SESS_USERNAME']. "</strong>[<a href='" . $config_basedir. "logout.php'>logout</a>]";  // The username is stored in SESS_USERNAME; this variable is created in login.php
}
else
{
echo "<a href='". $config_basedir . "login.php'>Login</a>";
}
?>
</div>
<div id="main">
