<?php
  include("0connection.php");
    if(isset($_POST['create'])){
      // $ctable="CREATE TABLE registration(
      //   id int(20),
      //   FirstName VARCHAR(220),
      //   MiddleName VARCHAR(220),
      //   LastName VARCHAR(220),
      //   PhNumber int(10),
      //   Email VARCHAR(220),
      //   userName VARCHAR(220),
      //   password VARCHAR(220)
      // );";
      // $texecute=mysqli_query($conn,$ctable);
      $fname=$_POST['firstName'];
      $mname=$_POST['middleName'];
      $lname=$_POST['lastName'];
      $pno=$_POST['phoneNumber'];
      $ename=$_POST['emailName'];
      $userName=$_POST['userName'];
      $myPassword=$_POST['password'];
      $myConfirmPasswod=$_POST['confirmPassword'];
      $sql_u="SELECT * FROM registration WHERE userName='$userName';";
      $res_u=mysqli_query($conn,$sql_u);
        if((mysqli_num_rows($res_u))>0){
          $user_error="Sorry User Name Already Exists !!";
        }
        else{
          if(($myPassword==$myConfirmPasswod)){
            $insertQuery="INSERT INTO registration(FirstName,MiddleName,LastName,PhNumber,Email,userName,password)  VALUES('$fname','$mname','$lname','$pno','$ename','$userName','$myPassword');";
            $data=mysqli_query($conn,$insertQuery);
            if($data){
              header("location: 1login.php");
            }
            else{
              echo "Not insert";
            }
          }
          else{
            echo "password does not match";
          }
        }
    }     
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration - Page</title>
  <style>
    body{
      background-color:darkcyan;
    }
    .myFormSignup{
      background-color:burlywood;
      width:50%;
      margin-top:2%;
      margin-left:25%;
    }
    .form-container{
      height:680px;
    }
    .signup-details-div,.popup-login-close{
      padding:20px;
    }
    .btn{
      margin-top:20px;
    }
    .login-name-form{
      height:60px;
      width:fit-content;
      margin-left:34%;
      background-color:chocolate;
    }
    .login-name-form p{
      font-size:50px;
      height:fit-content;
    }
    .font-login{
      font-size: 30px;
    }
    .font-field{
      font-size:20px;
    }
    .font-field-1{
      font-size: 15px;
    }
    .back,.register{
      margin-top: 10px;
      font-size:30px;
      background-color: orangered;
      border:none;
      border-radius: 100px;
    }
    .already-account{
      padding-left:20px;
      font-size:25px;
    }
    .already-login{
      border:none;
      background-color: transparent;
    }
    .otp-verify{
      height:30px;
    }
    .input-otp input{
      width:2%;
      background-color: transparent;
      border-color: transparent;
      border-bottom-color:red;
      font-size:20px;
    }
    .otp-name{
      font-size: 20px;
      height:30px;
    }
    .input-otp{
      display: none;
      height:40px;
      line-height: 40px;
    }
    .input-otp input:focus{
      outline: none;
    }
    .input-otp p{
      display: inline-block;
      background-color: orangered;
      border-radius:50px;
      border-color: transparent;
      cursor: pointer;
      width:70px;
      height:40px;
      line-height:40px;
      text-align: center;
      font-size: 25px;
      margin:0;
      padding: 0;
      margin-left:10px;
    }
  </style>
</head>
<body>
<div id="myFormSignup" class="myFormSignup">
                <form action="#" class="form-container" method="POST">
                  <div class="form-container-popup">
                    <div class="login-name-form">
                      <p>Register Here</p>
                    </div>
                    <div class="signup-details-div">
                          <div class="fmlname  btn">
                            <label for="name" class="font-login">Name : </label>
                            <input type="text" placeholder="First Name" required name="firstName" class="font-field-1">
                            <input type="text" placeholder="Middle Name" name="middleName" class="font-field-1">
                            <input type="text" placeholder="Last Name" required name="lastName" class="font-field-1">
                          </div>
                          <div class="signup-phno  btn">
                            <label for="phno" class="font-login">Phone Number :</label>
                            <input type="number" required name="phoneNumber" placeholder="Ph. Number" class="font-field">
                          </div>
                          <div class="signup-email  btn">
                            <label for="email" class="font-login" >Email : </label>
                            <input type="email" required name="emailName" placeholder="Drop your Email" class="font-field">
                          </div>
                          <div class="signup-userName  btn">
                            <label for="userName" class="font-login">User Name : </label>
                            <input type="text" required name="userName" placeholder="User Name" class="font-field">
                            <?php if (isset($user_error)): ?>
                            <?php echo $user_error; ?>
                            <?php endif ?>
                          </div>
                          <div class="password  btn">
                            <label for="password" class="font-login">Password : </label>
                            <input type="password" id="psw" required placeholder="Enter Password" name="password" class="font-field">
                          </div>
                          <div class="confirm-password  btn">
                            <label for="confirm_password" class="font-login">Confirm Password : </label>
                            <input type="password" id="confpsw" required placeholder="Enter Password" name="confirmPassword" class="font-field">
                          </div>
                          <div class="show-password" style="font-size:30px;margin-top:15px;" >
                            <input type="checkbox" class="" onclick="showPsw();">Show Password
                          </div>
                          <div class="otp-verify">
                            <div class="otp-name">  
                              <p><input type="checkbox" id="openVerifyOtp" required>Verify OTP :</p>
                            </div>
                            <div class="input-otp" id="openOtp"> 
                              <input type="text" maxlength="1"  class="accessOtp" id="1">
                              <input type="text" maxlength="1"  class="accessOtp" id="2">
                              <input type="text" maxlength="1"  class="accessOtp" id="3">
                              <input type="text" maxlength="1"  class="accessOtp" id="4">
                              <input type="text" maxlength="1"  class="accessOtp" id="5">
                              <input type="text" maxlength="1"  class="accessOtp" id="6"><p id="verifyOtp" onclick="verifyOtp();">Verify</p>
                            </div>
                          </div>
                    </div>
                      
    
                      
                  
                      <div class="popup-login-close">
                        <input type="submit" value="Register" class="register" name="create" id="registerBtn" disabled>
                        <a href="0index.php"><button type="button" class="back">Back</button></a>
                      </div>
                      <div class="already-account">
                      Already have an Account?<a href="1login.php">Login</a>
                      </div>
                  </div>
                </form>
              </div>

      <script>
        const registerBtn=document.getElementById("registerBtn");
        const otpIdAccess=document.getElementById("openVerifyOtp");
        const otpVerifyBtn=document.getElementById("verifyOtp");
        const x=document.getElementById("openOtp");
        function showPsw(){
          var pwd=document.getElementById("psw")
          var conf_pwd=document.getElementById("conf-psw");
          
          if(psw.type === "text"){
            psw.type = "password";
          }
          else{
            psw.type = "text";
          }
          if(confpsw.type === "text"){
            confpsw.type = "password";
          }
          else{
            confpsw.type = "text";
          }
        }

        // Verification of OTP
        var verifyReceivedOtp;
        let openVerifyOtp=()=>{
          otpIdAccess.addEventListener("change",function fun(){
            if(this.checked){
              this.disabled=true;
              x.style.display="block";
              const ReceivedOtp=sendOtp();
              verifyReceivedOtp=ReceivedOtp;
            }
            else{
              alert("Please OTP verify");
              x.style.display="none";
            }
          }) 
        }
        openVerifyOtp();
        // import * as twilio from 'twilio';
        const otpArray=new Array(6);
        const enteredOtpArray=new Array(6);
        // const enteredOtp=document.querySelectorAll(".enterOtp");
        // let otpPrint=document.getElementById(y);
        function enteredOtp(){
            let otpId=1;
            for (let i = 0; i < enteredOtpArray.length; i++) {
              let otpNumber=document.getElementById(otpId);
              enteredOtpArray[i]=otpNumber.value;
              otpId++;
            }
            return enteredOtpArray;
        }
        function verifyOtp(){
          const verifyEnteredOtp=enteredOtp();
            if(verifyReceivedOtp.toString()===verifyEnteredOtp.toString()){
              registerBtn.disabled=false;
            }
            else{
              registerBtn.disabled=true;
            }
        }
        function sendOtp(){
          for (let i = 0; i < otpArray.length; i++) {
            // let randomRdx=Math.floor(Math.random()*6);
            // otpArray[i]=randomRdx;
            // console.log(otpArray[i]);
            otpArray[i]=i;
          }
          return otpArray;
        }
        // All verification of otp is completed
      </script>
</body>
</html>
