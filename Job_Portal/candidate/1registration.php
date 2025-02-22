<?php
  session_start();
 include("../0connection.php");
 error_reporting(0);
 $userprofile = $_SESSION['user_name'];
 if($userprofile == true){
    
 }
 else{
    header('location:../1login.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        body{
            border:0px;
            margin:0px;
            background-color:darkcyan;
        }
        .nav-name{
            margin-top:5px;
            border:0px;
            background-color:chocolate;
            width:70%;
            margin-left:15%;
            font-size:50px;
            text-align: center;
        }
        
        .form-div{
            margin-top:5px;
            height:750px;
            background-color: burlywood;
            width:70%;
            margin-left:15%;
        }
        .resume-name{
            font-size:40px;
            text-align: center;
        }
        .personal-details-image{
            height:350px;
            display:flex;
            
        }
        .personal-details-qualification{
            height:100px;
            margin-top:50px;
        }
        .personal-details{
            height:150px;
            width:83%;
            margin-left:2%;
        }
        .personal-details h2{
            height:fit-content;
            margin-top:0px;                         
        }
        .input{
            display:flex;
            align-items: center;
            padding:0px;
        }
        .input p{
            font-size:20px;
        }
        .details-iamge{      
            width:10%;
            height:138px;
            background-color:white;
            margin-left:2.3%;
        }
        .add-image{
            margin-top:5%;
            margin-left:5%;
            margin-right:5%;
            margin-bottom:0px;
            width:89%;
            height:74%;
            border-radius:100px;

        }
        .first{
            width:15%;
        }
        .personal-details-image{
 
        }
        .update-photo{
            height:20%;
            background-color: red;
            width:80%;
            margin-left:10%;
            border-radius:100px;
        }
        .update-photo label{
            font-size:22px;   
            margin-left:10px;
        }
        .update-photo input{
            display:none;
        }
        .submit-div{
            margin-top:15px;
            margin-left:90.5%;
        }
        .submit-div input{
            font-size:25px;
            background-color: chocolate;
            border:none;
            border-radius:100px;
        }
    </style>
</head>
<body>
    <header>
        <div class="nav-name">
            Registration Your Resume
        </div>
        <div class="form-div">
            <div class="resume-name">
                <u>Resume</u>
            </div>
           <form action="" method="POST">
            <div class="personal-details-image">
                <div class="personal-details">
                    <h2><u>Personal Details:-</u></h2>
                    <div class="details-about">
                                <div class="fdiv input">
                                  <div class="first"><p>Name</p></div>
                                  <div class="second">: <input type="text" name="myname"></div>
                                </div>
                                <div class="sdiv input">
                                  <div class="first"><p>Father Name</p></div>
                                  <div class="second">: <input type="text" name="fathername"></div>
                                </div>
                                <div class="tdiv input">
                                  <div  class="first"><p>Mother Name</p></div>
                                  <div class="second">: <input type="text" name="mothername"></div>
                                </div>
                                <div class="fdiv input">
                                  <div class="first"><p>Phone No.</p></div>
                                  <div class="second">: <input type="text" name="phonenumber"></div>
                                </div>
                                <div class="fdiv input">
                                  <div class="first"><p>Address</p></div>
                                  <div class="second">: <input type="text" name="address"></div>
                                </div>
                                <div class="fdiv input">
                                  <div class="first"><p>Age</p></div>
                                  <div class="second">: <input type="text" name="age"></div>
                                </div>
                    </div>
                </div>
                <div class="details-iamge">
                    <div class="add-image">
                            <img src="../Pictures/addprofiledemo.png" alt="" class="add-image" id="profile-pic" name="profileimage">
                    </div>
                    <div class="update-photo">
                        <label for="add-image-name">Update</label>
                        <input type="file" id="add-image-name" accept="image/png, image/jpg, image/jpeg"> 
                    </div>
                </div>
            </div>
            <div class="personal-details-qualification">
                <div class="personal-details">
                    <h2><u>Qualification Details:-</u></h2>
                    <div class="details-about">
                                <div class="fdiv input">
                                  <div class="first"><p>Highest</p></div>
                                  <div class="second">: <input type="text" name="highestqualification"></div>
                                </div>
                    </div>
                </div>
            </div>
            <div class="personal-details-project">
                <div class="personal-details">
                    <h2><u>Projects :-</u></h2>
                    <div class="details-about">
                                <div class="fdiv input">
                                  <div class="first"><p>No. of Project</p></div>
                                  <div class="second">: <input type="number" name="numberofproject"></div>
                                </div>
                                <div class="sdiv input">
                                  <div class="first"><p>No. Internship</p></div>
                                  <div class="second">: <input type="number" name="numberofinternship"></div>
                                </div>
                    </div>
                </div>
            </div>
            <div class="submit-div">
                <input type="submit" name="submit" value="Submit">
            </div>
          </form>
        </div>
    </header>
    <script>
        let profilePic = document.getElementById("profile-pic");
        let inputFile = document.getElementById("add-image-name");
        inputFile.onchange = function(){
            profilePic.src =URL.createObjectURL(inputFile.files[0]);
        }
    </script>
</body>
</html>
<?php
session_start();
include("0connection.php");
  if(isset($_POST['submit'])){
    // $ctable="CREATE TABLE resume(
    //     id int(20),
    //     userName VARCHAR(220),
    //     myname VARCHAR(220),
    //     fathername VARCHAR(220),
    //     mothername VARCHAR(220),
    //     phnumber int(220),
    //     address VARCHAR(220),
    //     age int(20),
    //     profileimage LONGBLOB not null,
    //     highestqualification VARCHAR(220),
    //     numberofproject int(50),
    //     numberofinternship int(50));";
    // $execute=mysqli_query($conn,$ctable);
    $userprofile = $_SESSION['user_name'];
    $query="SELECT userName FROM resume WHERE userName='$userprofile';";
    $executeNew=mysqli_query($conn,$query);
    if(mysqli_num_rows($executeNew)==0){
        $userName=$_POST['myname'];
        $fatherName=$_POST['fathername'];
        $motherName=$_POST['mothername'];
        $phNumber=$_POST['phonenumber'];
        $address=$_POST['address'];
        $ageOfPeople=$_POST['age'];
        $profileImage=$_POST['profileimage'];
        $highestQualification=$_POST['highestqualification'];
        $numberOfProject=$_POST['numberofproject'];
        $numberOfInternship=$_POST['numberofinternship'];
        $queryInsert="INSERT INTO resume(myname,userName,fathername,mothername,phnumber,address,age,profileimage,highestqualification,numberofproject,numberofinternship)
         VALUES('$userName','$userprofile','$fatherName','$motherName','$phNumber','$address','$ageOfPeople','$profileImage',    '$highestQualification','$numberOfProject','$numberOfInternship');";
        $execute=mysqli_query($conn,$queryInsert);
        // $_SESSION['age_cal']=$
    }
    else{
        header('location: 1alreadyResume.php');
    }
  }
?>