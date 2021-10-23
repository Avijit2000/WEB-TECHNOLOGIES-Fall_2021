<?php
session_start(); 
include('Model/db.php');
$error="";
if (isset($_POST['submit']))
{
    if (empty($_POST['uname']) || empty($_POST['pass'])|| empty($_POST['fname'])|| empty($_POST['mobileno'])|| empty($_POST['birthday'])|| empty($_POST['varsityname'])|| empty($_POST['degree'])|| empty($_POST['major'])|| empty($_POST['pyear']) )
    {
        $error="FillUp All Data";
    }
    else
    {
        $uname=$_POST['uname'];
        $pass=$_POST['pass'];
        $fname=$_POST['fanme'];
        $mobileno=$_POST['mobileno'];
        $birthday=$_POST['birthday'];
     
        
         
    }
}

?>