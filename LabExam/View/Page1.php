<?php
session_start(); 

include('Control/Page1Check');

?>
<!DOCTYPE html>
<html>
    <body>
        <h2>Personal Details</h2>
        <hr>
        <br>
        <form action='' method='post'>
            User Name: <input type='text' name='uname'><br>
            <br>
            Password: <input type='password' name='pass'><br>
            <br>
            Full Name: <input type='text' name='fname'><br>
            <br>
            Mobile No: <input type='text' name='mobileno'><br>
            <br>
            Date of Birth:<input type='date' id="birthday" name="birthday"><br><br>
            <input type='submit' name='Next' value='Next'>
            



        </form>
    </body>
</html>