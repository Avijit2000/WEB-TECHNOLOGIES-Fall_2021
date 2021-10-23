<?php
class db
{
    function OpenCon()
    {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "CV";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    
    return $conn;
    }
    function insertuser($conn,$table,$uname,$pass,$fname,$mobileno,$dob,$varsity,$degree,$major,$resuly,$passyear)
    {
        $result = $conn->query("INSERT INTO $table(UserName,Pass,FullName,MobileNo,Dob,University,Degree,Major,Passing year) VALUES('$uname','$pass','$fname',$mobileno,'$dob','$varsity','$degree','$major',$resuly,$passyear)  ");
        return $result;
    }
    
}
?>