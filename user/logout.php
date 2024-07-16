<p>Logout is successful</P>
<a href='../index.php'><button>Click to go main page</button></a>

<!-- 

<?php
session_start();
include("include/config.php");
$_SESSION['login']=="";
date_default_timezone_set('Asia/Kolkata');
$ldate=date( 'd-m-Y h:i:s A', time () );
mysqli_query($con,"UPDATE userlog  SET logout = '$ldate' WHERE username = '".$_SESSION['login']."' ORDER BY id DESC LIMIT 1");
session_unset();


?>

<script language="javascript">
document.location="index.php";
</script>

-->