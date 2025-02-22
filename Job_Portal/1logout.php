<?php
  include("0connection.php");
  session_start();

  if(session_unset()==true){
    header('location:0index.php');
  }
  else{
    
  }
?>