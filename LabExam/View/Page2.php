<?php
session_start(); 

include('Control/Page2Check');


?>

<!DOCTYPE html>
<html>
    <body>
        <h2>Education</h2>
        <hr>
        <br>
        <form action='' method='post'>
            Univarsity: <input type='text' name='varsityname'><br>
            <br>
            Degree: <input type='text' name='degree'><br>
            <br>
            Major: <input type='text' name='major'><br>
            <br>
            Result: <input type='text' name='result'><br>
            <br>
            Passing Year:<input type='date' id="pyear" name="pyear"><br><br>
            <input type='submit' name='submit' value='Submit'>
            



        </form>
    </body>
</html>