<!DOCTYPE html>
<html>
<body>
<h1>Registration form </h1>
<form action="Task1.php" method="POST">
First name: <input type="text" name="fname"> 
<br>
Last name: <input type="text" name="lname"> 
<br>
Age: <input type="number" name="age"> 
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
<br>
<p>Preffered Language
  <input type="radio" id="lan1" name="language" value="JAVA">
  <label for="lan1">JAVA</label>
  <input type="radio" id="lan2" name="language" value="PHP">
  <label for="lan2">PHP</label>
  <input type="radio" id="lan3" name="language" value="C++">
  <label for="lan3">C++</label>
</p>
 
<br>

E-mail: <input type="text" name="email"> 
<br>
Password: <input type="password" name="password"> 
<br>
Please choose a file  <input type="file" value="Choose File"> 

<br>




<input type="submit" value="SUBMIT">
<input type="reset" value="RESET">
</form>
</body>
</html>