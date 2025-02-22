<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" maxlength="1"  class="enterOtp" id="1">
    <input type="text" maxlength="1"  class="enterOtp" id="2">
    <input type="text" maxlength="1"  class="enterOtp" id="3">
    <input type="text" maxlength="1"  class="enterOtp" id="4">
    <input type="text" maxlength="1"  class="enterOtp" id="5">
    <input type="text" maxlength="1"  class="enterOtp" id="6"><button id="verifyOtp" onclick="verifyOtp();">Verify</button>
    <script>
      // import * as twilio from 'twilio';
        const otpArray=new Array(6);
        const enteredOtpArray=new Array(6);
        // const enteredOtp=document.querySelectorAll(".enterOtp");
        let otpVerifyBtn=document.getElementById("verifyOtp");
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
          const verifyReceivedOtp=sendOtp();
          const verifyEnteredOtp=enteredOtp();
            if(verifyReceivedOtp.toString()===verifyEnteredOtp.toString()){
                window.location.href = '1login.php';
            }
            else{
                console.log("error");
            }
        }
        function sendOtp(){
          for (let i = 0; i < otpArray.length; i++) {
            let randomRdx=Math.floor(Math.random()*6);
            otpArray[i]=randomRdx;
            // console.log(otpArray[i]);
          }
          return otpArray;
        }
       
    </script>
</body>
</html>