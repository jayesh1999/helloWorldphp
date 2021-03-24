<html>
<head>
<title>My First Php</title>
</head>
<body >


<?php
if(isset($_POST['submit'])) {
       $name = $_POST['name'];
	$password=$_POST['password'];
	echo $password;
       echo $name;
  }
?>
</body>
</html>
