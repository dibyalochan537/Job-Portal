<?php
  session_start();
 include("0connection.php");
 error_reporting(0);
 $userprofile = $_SESSION['user_name'];
 if($userprofile == true){

 }
 else{
    header('location:1login.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PostJob</title>
    <style>
        body{
            background-color:antiquewhite;
        }
        .heading-div{
            margin-top:10px;
            height:60px;
            margin-left:35%;
            font-size:80px;
        }
        .heading-div p{
            height:fit-content;
        }
        .form-popup{
            margin-top:100px;
            margin-left:20%;
            margin-right: 20%;
            background-color:azure;
            font-size:40px;
        }
        .state-wise-job-search-button button{
            margin-left:92%;
            font-size:25px;
        }
        
    </style>
</head>
<body>
    <div class="heading-div">
        <p><u>Post Your Job</u></p>
    </div>
    <div class="form-popup" id="popup">
        <form action="#" method="POST">
            <div class="state-search-form">
                <div class="state-name-form ">
                        <label for="State Name">State Name : </label>
                        <input type="text" name="select_search" id="" class="swf" placeholder="state name" required>
                </div>
                <div class="state-wise-post">
                      <label for="Name">Post Name : </label>
                      <input type="text" class="swf" name="select_post" placeholder="post name" required>
                </div>
                <div class="state-wise-date-from">
                    <label for="date" style="font-size:25px;">Apply Start From : </label>
                    <input type="date" class="swf" name="startdate" required>
                </div>
                <div class="state-wise-date-to">
                    <label for="date" style="font-size:25px;"> Apply End To : </label>
                    <input type="date" class="swf" name="enddate" required>
                </div>
                <div class="apply-link">
                    <label for="link" style="font-size:25px;">Apply Link : </label>
                    <input type="input" class="swf" name="applyLink" required placeholder="drop your link here">
                </div>
                <div class="state-wise-job-search-button">
                    <button class="swf" style="background-color: darkgoldenrod;border-radius: 100px;" name="submit_search">Post</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        
    </script>
</body>
</html>
<?php
include("0connection.php");
  $postName="";
  $postApplyLink="";
    //   $queryTable="CREATE TABLE postJobs(
    //     id int(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     stateName VARCHAR(220),
    //     postName VARCHAR(220),
    //     searchStartDate DATE,
    //     searchEndDate DATE,
    //     applyLink VARCHAR(220));";
    //   $connObj=mysqli_query($conn,$queryTable);
      if(isset($_POST['submit_search'])){
        $postState=$_POST['select_search'];
        $postPost=$_POST['select_post'];
        $postStartDate=date('Y-m-d', strtotime($_POST["startdate"]));
        $postEndDate=date('Y-m-d', strtotime($_POST["enddate"]));
        $postLink=$_POST['applyLink'];
        $queryTableInsert="INSERT INTO postJobs(stateName,postName,searchStartDate,searchEndDate,applyLink)
         values('$postState','$postPost','$postStartDate','$postEndDate','$postLink');";
        $connObjInsert=mysqli_query($conn,$queryTableInsert);
      }
      
?>