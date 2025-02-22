<?php
    include("0connection.php");
    //
    $createRegistrationTable="CREATE TABLE registration(
        id int(20)
    );";
      $mname=$_POST['middleName'];
      $lname=$_POST['lastName'];
      $pno=$_POST['phoneNumber'];
      $ename=$_POST['emailName'];
      $userName=$_POST['userName'];
      $myPassword=$_POST['password'];
      $myConfirmPasswod=$_POST['confirmPassword'];

?>