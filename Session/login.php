<?php
include('control/logincheck.php');

if(isset($_SESSION['username'])){
header("location: pageone.php");
}
?>
<!DOCTYPE html>
<html>
<body>

<center>

<h2>Login</h2>

<form action="" method="post">
    <input type="text" name="username" placeholder="Enter your username" required>
    <input type="password" name="password" placeholder="Enter your password" required>
    <input name="submit" type="submit" value="LOGIN">
</form>

</center>
<br>
<?php echo $error; ?>

</body>
</html>