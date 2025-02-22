<?php
session_start();
  include("0connection.php");
  $userNotFound="";
      if(isset($_POST['login'])){
        $uName=$_POST['userName'];
        $pwd=$_POST['password'];
        $query="SELECT * FROM registration WHERE userName='$uName' && password='$pwd' ;";
        $data=mysqli_query($conn,$query);
        $total= mysqli_num_rows($data);
        // echo $total;
        if($total == 1){
          $_SESSION['user_name']=$uName;
          $sql="SELECT FirstName,MiddleName,LastName FROM registration WHERE userName='$uName';"  ;
          $sqlconn=mysqli_query($conn,$sql);
          $sqltotal=mysqli_num_rows($sqlconn);
          if($sqltotal==1){
            $row = mysqli_fetch_assoc($sqlconn);
           $_SESSION['first_name']=$row["FirstName"];
           $_SESSION['middle_name']=$row["MiddleName"];
           $_SESSION['last_name']=$row["LastName"];
          }
          header('location:1home_page.php');
        }
        else{
          $userNotFound="User not Found";
        }
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body{
      background-color:darkcyan;
    }
    .login-name{
      width:fit-content;
      background-color: chocolate;
      height:60px;
      margin-left:25%;
    }
    .login-name p{
      font-size:50px;
      height:fit-content;
    }
    .formLogin{
      background-color:burlywood;
      width:50%;
      margin-left:25%;
      height:500px;
    }
    .form-container{
      padding:20px;
    }
    .form-popup-size{
      font-size:40px;
    }
    .top{
      margin-top:40px;
    }
    .form-input{
      font-size:30px;
    }
    .btn{
      font-size:30px;
      background-color: orangered;
      border:none;
      border-radius: 100px;
    }
    .already-account{
      margin-top:10px;
      font-size:25px;
    }
    .already-login{
      border:none;
      background-color: transparent;
    }
    .error-div{
      height:20px;
    }
  </style>
</head>
<body>
  
<div class="formLogin">
  <div class="login-name">
    <p>Login to your Profile</p>
  </div>
                <form action="" class="form-container" method="POST">
                  <div class="form-container-popup">
                      <div class="form-user-details top">
                        <label for="username" class="form-popup-size"><b>User Name : </b></label>
                        <input type="text" placeholder="Enter User Name" name="userName" required class="form-input"> <br><br>
                      </div>
    
                      <div class="form-user-details top">
                        <label for="psw" class="form-popup-size"><b>Password : </b></label>
                        <input type="password" placeholder="Enter Password" name="password" required class="form-input"><br><br>
                      </div>
                      <div class="error-div">
                      <?php
                          include("0connection.php");
                         echo $userNotFound;
                      ?>
                      </div>
                  </div>
                  <div class="login-close top">
                        <input type="submit" value="Login" class="btn" name="login">
                        <button type="button" class="btn">Close</button>
                  </div>
                  <div class="already-account">
                      I have no Account?<a href="1register.php">Register</a>
                  </div>
                </form>
  </div>
</body>
</html>
