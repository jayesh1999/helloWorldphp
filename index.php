<html>
<head>
<title>My First Php</title>
</head>
<body >


<?php
if(isset($_POST['submit'])) {
       $name = $_POST['name'];
       $password=$_POST['password'];
       echo $name ."and password is" .$password;
  }
?>
</body>
</html>