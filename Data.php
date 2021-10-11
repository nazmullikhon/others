<!DOCTYPE html>
<html>
<body>
<h1>Registration form </h1>
<form action="Task2.php" method="POST">
First name: <input type="text" name="first name"> 
<br>
Last name: <input type="text" name="last name"> 
<br>
Age: <input type="number" name="last name">
<br>
<p>Designation
  <input type="radio" id="opt1" name="designation" value="Junior Programmer">
  <label for="opt1">Junior Programmer</label>
  <input type="radio" id="opt2" name="designation" value="Senior Programmer">
  <label for="opt2">Senior Programmer</label>
  <input type="radio" id="opt3" name="designation" value="Project Lead">
  <label for="opt3">Project Lead</label>
</p>
<br>
Preferred language
<input type="checkbox" id="language" name="language" value="JAVA">Java
 
<input type="checkbox" id="language" name="language" value="PHP">PHP

<input type="checkbox" id="language" name="language" value="C++">C++
 
<br>
<br>
E-mail: <input type="text" name="email">
<br>
Password: <input type="password" name="password"> 
<br>
Please choose a file  <input type="file" name ="file" value="Choose File"> 
<br>
<input type="submit" value="SUBMIT">
<input type="reset" value="RESET">
</form>
</body>