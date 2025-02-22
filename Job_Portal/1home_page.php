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
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="0index_style.css">
    <link rel="stylesheet" href="/_1css/_1main_apna.css">
</head>
<body id="blur" class="body">
    <header>
        <div class="nav-bar">
            <div class="logo-nav-bar bar">
                <div class="logo-first">
                    <img src="./Pictures/logo.png" alt="error" onclick="profile_logo_popup()">
                </div>
                <div class="profile-logo-popup-form" id="plpf">
                    <div class="image-logo-popup">
                        <img src="./Pictures/logo.png" alt="errror">
                        <i class="fa-solid fa-circle-arrow-left" onclick="close_profile_form();"></i>
                    </div>
                    <div class="details-form-popup">
                        <p class="a   c-hover">About WB</p>
                        <p class="a   c-hover">Vission & Mission</p>
                        <p class="a   c-hover">Wikipedia</p>
                        <p class="a   c-hover">Data & Reports</p>
                        <p class="a   c-hover">WB Services</p>
                        <p class="a   c-hover">Our Workspace</p>
                        <p class="a   c-hover">Notice</p>
                        <p class="a   c-hover">Gallery</p>
                    </div>
                    <div class="foot-profile-popup">
                        <p class="b   c-hover">. Help & FAqs</p>
                        <p class="b   c-hover">. Contact Us</p>
                    </div>
                </div>
                <!--Style for profile logo pop up form-->
                <style>
                    .profile-logo-popup-form{
                        background-color: aqua;
                        display: none;
                        width:15%;
                        height:auto;
                        position:absolute;
                        top:70px;
                        left:7px;
                        border:2 solid transparent;
                        z-index: im;
                    }
                    .image-logo-popup{
                        display: flex;
                    }
                    .image-logo-popup img{
                        width:50%;
                        margin-left:25%;
                    }
                    .image-logo-popup i{
                        font-size: 35px;
                        margin-left:10%;
                    }
                    .a{
                        font-size:20px;
                        margin-left:10px;
                    }
                    .details-form-popup{
                        border:2px solid black;
                        margin-top: 10px;
                        margin-left:20px;
                        margin-right:20px;
                        background-color: burlywood;
                        border-radius:10px;
                    }
                    .b{
                        font-size:20px;
                        margin-left:50px;
                        margin-top:20px;
                    }
                    .c-hover:hover{
                        width:fit-content;
                        border-bottom:2px solid red;
                        background-color: bisque;
                        border-top-left-radius:5px;
                        border-top-right-radius:5px;
                    }

                </style>
                <!--form finished-->
            </div>


            <div class="search-nav-bar bar">
                <form action="2navsearch.php" method="POST" style="display:flex;justify-content:center;align-items:center;">
                <div class="search-all">
                    <select name="navSelectState">
                        <option>All</option>
                        <option>Andhra Pradesh</option>
                        <option>Arunachal Pradesh</option>
                        <option>Assam</option>
                        <option>Bihar</option>
                        <option>Chhattisgarh</option>
                        <option>Delhi</option>
                        <option>Goa</option>
                        <option>Gujarat</option>
                        <option>Haryana</option>
                        <option>Himachal Pradesh</option>
                        <option>Jammu & Kasmir</option>
                        <option>Jharkhand</option>
                        <option>Karnatak</option>
                        <option>Kerala</option>
                        <option>Maharastra</option>
                        <option>Madhya Pradesh</option>
                        <option>Manipur</option>
                        <option>Meghalaya</option>
                        <option>Mizoram</option>
                        <option>Nagaland</option>
                        <option>Odisha</option>
                        <option>Punjab</option>
                        <option>Rajastan</option>
                        <option>Sikkim</option>
                        <option>Tamil Nadu</option>
                        <option>Utter Pradesh</option>
                        <option>Uttarakhand</option>
                        <option>West Bengal</option>
                    </select>
                </div>
                <div class="search-input">
                    <input type="search" placeholder="Search your Post" name="navSearchPost" >
                </div>
                <div class="search-icon">
                    <button name="navSearchIcon" style="background-color:transparent;border:none;"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                </form>
            </div>


            <div class="detail-nav">
                <div class="home-buttom-nav-bar bnb">
                    <form action="1home_page.php">
                        <button id="bh">Home</button>
                    </form>
                </div>
                
                <div class="jobs-show-nav-bar bnb">
                    <button id="bh" class="button-style" onclick="jobShow();">Jobs</button>
                </div>



                <!-- job form popup -->
                <div class="job-formup" id="jobFormUp">
                    <div class="header-icon">
                    <i class="fa-solid fa-circle-chevron-down icon-font-job-popup"></i>Jobs Here
                    </div>
                    <div class="details-about-job">
                        <div class="job-for-you" style="font-size:40px;">
                            Job Suggested For You :
                        </div>
                        <hr>
                        <div class="1st-job     flex-jobs">
                            <div class="image-details-job">
                                <div class="image-company">
                                    <img src="./Pictures/microsoft-image.png" alt="error">
                                </div>
                                <div class="employee-required">
                                    <p>Required-Freshers</p>
                                </div>
                            </div>
                            <div class="job-description">

                            </div>
                            <div class="contact-company"></div>
                        </div>
                        <hr>
                        <div class="2nd-job     flex-jobs">
                            <div class="image-details-job"></div>
                            <div class="job-description"></div>
                            <div class="contact-company"></div>
                        </div>
                        <hr>
                        <div class="3rd-job     flex-jobs">
                            <div class="image-details-job"></div>
                            <div class="job-description"></div>
                            <div class="contact-company"></div>
                        </div>
                        <hr>
                        <div class="4th-job     flex-jobs">
                            <div class="image-details-job"></div>
                            <div class="job-description"></div>
                            <div class="contact-company"></div>
                        </div>
                        <hr>
                        <div class="load-more-div" style="height:30px;">
                            <button>More</button>
                        </div>
                    </div>
                </div>
                <style>
                    .job-formup{
                        display: none;
                        width:90%;
                        height:fit-content;
                        position: fixed;
                        top:10%;
                        right:5%;
                    }
                    .icon-font-job-popup{
                        font-size:30px;
                        margin-top:0px;
                        margin-left:61.5%;
                    }
                    .details-about-job{
                        background-color: burlywood;
                        height: 100%;
                    }
                    .job-for-you{
                        height:80px;
                    }
                    
                    .flex-jobs{
                        display: flex;
                        height:100px;
                    }
                    .image-details-job p{
                        margin-top: 0px;
                    }
                    .image-details-job{
                        border-right:2px solid black;
                        width:150px;
                    }
                    .image-company img{
                        height:80px;
                    }
                </style>
                <script>
                    function jobShow(){
                        var x=document.getElementById("jobFormUp");
                        if (x.style.display === "none") {
                          x.style.display = "block";
                          document.getElementById("messageFormUp").style.display="none";
                        document.getElementById("notificationFormUp").style.display="none";
                        document.getElementById("profileInformation").style.display="none";
                        $('.overlay').show();
                        } else {
                          x.style.display = "none";
                        }
                        
                        
                    }
                </script>
                <!--job form up finished-->
                <div class="message-nav-bar bnb">
                    <button id="bh" class="button-style" onclick="messageShow();">Messages</button>
                </div>
                <!-- message form popup -->
                <div class="message-formup" id="messageFormUp">
                    <div class="header-icon">
                    <i class="fa-solid fa-circle-chevron-down icon-font-message-popup"></i> Messages Here
                    </div>
                    <div class="details-about-message">

                    </div>
                </div>
                <style>
                    .message-formup{
                        display: none;
                        width:30%;
                        height:80%;
                        position: fixed;
                        top:10%;
                        right:11.5%;
                    }
                    .icon-font-message-popup{
                        font-size:30px;
                        margin-top:0px;
                        margin-left:45%;
                    }
                    .details-about-message{
                        background-color: burlywood;
                        height: 100%;
                    }
                </style>
                <script>
                    function messageShow(){
                        var x=document.getElementById("messageFormUp");
                        if (x.style.display === "none") {
                          x.style.display = "block";
                          document.getElementById("jobFormUp").style.display="none";
                         document.getElementById("notificationFormUp").style.display="none";
                         document.getElementById("profileInformation").style.display="none";
                         } else {
                          x.style.display = "none";
                         }
                         
                    }
                </script>
                <!--message form up finished-->
                <div class="notification-nav-bar bnb">
                    <i id="bh" class="fa-solid fa-bell" onclick="notificationShow();"></i>
                </div>
                <!-- notification form popup -->
                <div class="notification-formup" id="notificationFormUp">
                    <div class="header-icon">
                    <i class="fa-solid fa-circle-chevron-down icon-font-notification-popup"></i>
                    </div>
                    <div class="details-about-notification">

                    </div>
                </div>
                <style>
                    .notification-formup{
                        display: none;
                        width:25%;
                        height:80%;
                        position: fixed;
                        top:10%;
                        right:5%;
                    }
                    .icon-font-notification-popup{
                        font-size:30px;
                        margin-top:0px;
                        margin-left:50.5%;
                    }
                    .details-about-notification{
                        background-color: burlywood;
                        height: 100%;
                    }
                </style>
                <script>
                    function notificationShow(){
                       var x= document.getElementById("notificationFormUp");
                        if (x.style.display === "none") {
                           x.style.display = "block";
                           document.getElementById("jobFormUp").style.display="none";
                        document.getElementById("messageFormUp").style.display="none";
                        document.getElementById("profileInformation").style.display="none";
                        } else {
                            x.style.display = "none";
                        }
                        
                    }
                </script>
                <!--notification form up finished-->
            </div>

            <div class="profile-nav-bar">
                <div class="logo">
                    <img src="./Pictures/vijay2.jpg" alt="error" onclick="profile_info_popup()">  
                </div>
                <!-- profile information div start-->
                <div class="profile-info" id="profileInformation">
                    <div class="profile-name">
                        <h1>Your Profile</h1>
                    </div>
                    <div class="profile-image-div">
                        <div class="image-div">
                        <img src="./Pictures/vijay2.jpg" alt="error">
                        <span>
                            <p>
                                <?php
                                   session_start();
                                   include("0connection.php");
                                   echo $_SESSION['first_name']," ",$_SESSION['middle_name']," ",$_SESSION['last_name'];
                                ?>
                            </p>
                        </span>
                        </div>
                        <div class="personal-details">
                            <h3>Age : </h3>
                            <h3>Qualification : </h3>
                            <h3>No. of Project : </h3>
                            <h3>No. of Intern : </h3>
                            <h3>MCA CGPA :</h2>
                        </div>
                    </div>
                    <div class="about-profile-details">

                    </div>
                    <div class="close-logout">
                        <button class="btn-font-info">Close</button>
                        <a href="1logout.php"><button class="btn-font-info">Logout</button></a>
                    </div>
                </div>
                <style>
                    .profile-info{
                        display: none;
                        width:30%;
                        height:fit-content;
                        position: absolute;
                        top:6.8%;
                        right:.5%;
                        
                    }
                    .profile-name{
                        background-color: darksalmon;
                    }
                   
                    .profile-image-div{
                        background-color: bisque;
                        display: flex;
                        justify-content: space-evenly;
                    }
                    .profile-image-div img{
                        margin-left:10px;
                        height:120px;
                        border-radius: 100px;
                    }
                    .profile-image-div p{
                        margin-left:20px;
                        margin-top:1px;
                        font-size:30px;
                    }
                    .about-profile-details{
                        height:400px;
                        background-color: burlywood;
                    }
                    .close-logout{
                        background-color: bisque;
                        display: flex;
                        justify-content: space-evenly;
                    }
                    .btn-font-info{
                        font-size: 30px;
                        background-color: darksalmon;
                        border: none;
                        border-radius:100px;
                    }
                    .image-div{
                        margin-top:5px;
                        width:45%;
                        border-right:2px solid black;
                    }
                    .personal-details{
                        width:55%;
                    }

                    
                </style>
                <script>
                    function profile_info_popup(){
                        var x=document.getElementById("profileInformation");
                        if (x.style.display === "none") {
                          x.style.display = "block";
                          document.getElementById("messageFormUp").style.display="none";
                        document.getElementById("notificationFormUp").style.display="none";
                        document.getElementById("jobFormUp").style.display="none";
                        } else {
                          x.style.display = "none";
                        }
                    }
                </script>
            </div>

        </div>
    </header>

    <main>
        <div class="login-logout-register">
            <div class="choose-user">
                <form action="3postJob.php" method="POST">
                    <button>Post Jobs</button>
                </form>
            </div>
            <style>
                .choose-user{
                    width:fit-content;
                    margin-left:0px;
                }
                .choose-user button{
                    font-size:30px;
                    margin-top:10px;
                    border:none;
                    background-color: burlywood;
                    border-radius: 50px;
                }
            </style>
        </div>

        <div class="related-job-information">
            <div class="find-your-job">
                <div class="find-sentence">
                    <p>Find your dream job now on this platform !</p>
                </div>
            </div>




            <div class="govt-job-div">
                <div class="state-wise-job">
                    <div class="state-wise-job-text">
                        <div class="state-text">
                            <p style="font-size:50px; text-align:center;width:fit-content;" class="swf">Search you job state wise</p>
                        </div>
                    </div>
                    <div class="state-wise-job-form">
                      <form action="2search.php" method="POST">
                        <div class="state-search-form">
                            <div class="state-name-form ">
                                    <select name="select_search" id="" class="swf">
                                        <option>Select States</option>
                                        <option>Andhra Pradesh</option>
                                        <option>Arunachal Pradesh</option>
                                        <option>Assam</option>
                                        <option>Bihar</option>
                                        <option>Chhattisgarh</option>
                                        <option>Delhi</option>
                                        <option>Goa</option>
                                        <option>Gujarat</option>
                                        <option>Haryana</option>
                                        <option>Himachal Pradesh</option>
                                        <option>Jammu & Kasmir</option>
                                        <option>Jharkhand</option>
                                        <option>Karnatak</option>
                                        <option>Kerala</option>
                                        <option>Maharastra</option>
                                        <option>Madhya Pradesh</option>
                                        <option>Manipur</option>
                                        <option>Meghalaya</option>
                                        <option>Mizoram</option>
                                        <option>Nagaland</option>
                                        <option>Odisha</option>
                                        <option>Punjab</option>
                                        <option>Rajastan</option>
                                        <option>Sikkim</option>
                                        <option>Tamil Nadu</option>
                                        <option>Utter Pradesh</option>
                                        <option>Uttarakhand</option>
                                        <option>West Bengal</option>
                                    </select>
                            </div>
                            <div class="state-wise-post">
                                    <input type="search" class="swf" name="select_post" placeholder="serach your post here" style="width:fit-content;">
                            </div>
                            <div class="state-wise-date-from">
                                <label for="date" style="font-size:20px;">From : </label>
                                <input type="date" class="swf" name="startdate">
                            </div>
                            <div class="state-wise-date-to">
                                <label for="date" style="font-size:20px;">To : </label>
                                <input type="date" class="swf" name="enddate">
                            </div>
                            <div class="state-wise-job-search-button">
                                <button class="swf" style="background-color: darkgoldenrod;border-radius: 100px;" name="submit_search">Search</button>
                            </div>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
            <style>
                .govt-job-div{
                    width:auto;
                    background-color: antiquewhite;
                }
                .state-wise-job{
                    width:auto;
                    background-color: cadetblue;
                }
                .national-govt-job{
                    width:auto;
                    background-color: cadetblue;
                }
                .state-wise-job-text{
                    width:auto;
                    height:50px;
                    display:flex;
                    justify-content: center;
                    align-items: center;
                }
                .state-search-form{
                    width:fit-content;
                    display: flex;
                    justify-content: space-evenly;
                    align-items: center;
                    background-color: burlywood;
                    height:50px;
                    border-radius: 100px;
                    margin-top:40px;
                    margin-bottom:10px;
                }
                .state-wise-job-form{
                    width:auto;
                    display:flex;
                    justify-content: center;
                    align-items: center;
                }
                .swf{
                    background-color: transparent;
                    border:0px;
                    font-size:25px;
                }
                .swf:hover{
                    border-bottom:4px solid red;
                    border-bottom-left-radius:10px;
                    border-bottom-right-radius:10px;
                }
            </style>




            <div class="notification-related-jobs">
                <div class="owner-admin-div">
                    <img src="./Pictures/vijay2.jpg" alt="error">
                </div>
                <div class="photo-notification-div">
                    <div class="sliding-photo-div-related-jobs" id="one">
                    <button class="w3-button w3-black w3-display-left   button-1" onclick="plusDivs(-1)">&#10094;</button>
                    <div class="div-sliding-photo">
                        <img src="./Pictures/wipro-image.png" alt="error"  class="myPhoto" style="width:100%">
                        <img src="./Pictures/amazon-image.png" alt="error"  class="myPhoto" style="width:100%">
                        <img src="./Pictures/google-image.png" alt="error"  class="myPhoto" style="width:100%">
                        <img src="./Pictures/microsoft-image.png" alt="error"  class="myPhoto" style="width:100%">
                    </div>
                    <button class="w3-button w3-black w3-display-right button-2" onclick="plusDivs(1)">&#10095;</button>
                    </div>
                    <div class="check-box-photo">
                        <input type="radio" name="sliding-photo" id="first-photo" onclick="openFirstPhoto()" >
                        <input type="radio" name="sliding-photo" id="second-photo" onclick="openSecondPhoto()">
                        <input type="radio" name="sliding-photo" id="third-photo" onclick="openThirdPhoto()">
                        <input type="radio" name="sliding-photo" id="fourth-photo" onclick="openFourthPhoto()">
                        <input type="radio" name="sliding-photo" id="fifth-photo" onclick="openFifthPhoto()">
                    </div>
                    <div class="notification-jobs-div">
                        <div class="whats-new">
                            <div class="whats-div whats">
                                <p class="nrjfront ">Whats' New</p>
                            </div>
                            <div class="recent-not-div whats">
                                <p class="nrjfront" style="font-size:20px;">Recent Notification</p>
                            </div>
                        </div>
                        <div class="notification-all-recent">
                            <div class="alert-notificaton">
                                <div class="notification-date">
                                        <button>17<br>JAN</button>
                                </div>
                                <div class="notification-details">
                                <?php
                                   session_start();
                                   include("0connection.php");
                                   echo $_SESSION['postNameLoad'];
                                ?>
                                </div>
                                <div class="notification-pdf-link">

                                </div>
                            </div>
                            <div class="alert-notificaton">
                                <div class="notification-date">

                                </div>
                                <div class="notification-details">

                                </div>
                                <div class="notification-pdf-link">
                                    
                                </div>
                            </div>
                            <div class="alert-notificaton">
                                <div class="notification-date">

                                </div>
                                <div class="notification-details">

                                </div>
                                <div class="notification-pdf-link">
                                    
                                </div>
                            </div>
                            <div class="alert-notificaton">
                                <div class="notification-date">

                                </div>
                                <div class="notification-details">

                                </div>
                                <div class="notification-pdf-link">
                                    
                                </div>
                            </div>
                            <div class="alert-notificaton">
                                <div class="notification-date">

                                </div>
                                <div class="notification-details">

                                </div>
                                <div class="notification-pdf-link">
                                    
                                </div>
                            </div>
                        </div>
                        <!--Notification style-->
                        <style>
                            .alert-notificaton{
                                height:8px;
                                width:auto;
                                background-color:bisque;
                                display: flex;
                                align-content: center;
                            }
                            
                            .notification-date{
                                width:5%;
                            }
                            .notification-details{
                                width:80%;
                                /* background-color: red; */
                            }
                            .notification-pdf-link{
                                width:15%;
                                /* background-color: blue; */
                            }
                        </style>
                    </div>
                    <div class="load-more-div">
                        <p style="background-color: darkgoldenrod;border-radius:10px;width:fit-content;font-size:25px;">Load More</p>
                    </div>
                </div>
                <div class="candidate-cornor-div">
                    <div class="candidate-cornor-text">
                        <p class="nrjfront candidate-text">Candidate Cornor's</p>
                    </div>


                    <div class="registration-candidate-id-link">
                        <div class="profile-div-registration">
                            <p onclick="profile_info_popup()">Profile</p>
                            <img src="./Pictures/logo.png" alt="error">
                        </div>
                        <div class="extra-div-registration">
                             <a href="./candidate/1registration.php" style="border:none" id="clickRegistration"><p class="extra-div-registration-border">Registration Here</p></a>
                             <p class="extra-div-registration-border">Resume</p>
                             <p class="extra-div-registration-border">Home</p>
                             <p class="extra-div-registration-border">Upcoming Exam</p>
                             <p class="extra-div-registration-border">Notification</p>
                             <p class="extra-div-registration-border">Results</p>
                             <p class="extra-div-registration-border">Requirment Calender</p>
                             <p class="extra-div-registration-border">Previous Question Paper</p>
                             <p class="extra-div-registration-border">Help & Support</p>
                             <p class="extra-div-registration-border">Helpline</p>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .notification-related-jobs{
                    width:auto;
                    height:auto;
                    background-color: blanchedalmond;
                    display: flex;
                    margin-top:30px;
                    border-bottom:7px solid blueviolet;
                }
                .owner-admin-div{
                    width:20%;
                    border-top:7px solid blueviolet;
                    border-right:2px solid blueviolet;
                    align-items: center;
                }
                .owner-admin-div img{
                    width:80%;
                    margin-left:10%;
                    margin-top:5px;
                }


                .photo-notification-div{
                    width:60%;
                }
                .button-1{
                    height:50px;
                    width:50px;
                }
                .button-2{
                    height:50px;
                    width:50px;
                }
                .candidate-cornor-div{
                    width:20%;
                    border-top:7px solid blueviolet;
                    border-left:2px solid blueviolet;
                }
                .sliding-photo-div-related-jobs{
                    width:100%;
                    height:200px;
                    display: flex;
                    justify-content: center;
                }
                .div-sliding-photo{
                    width:100%;
                    height:200px;
                }
                .div-sliding-photo img{
                    width:auto;
                    height:200px;
                }
                .check-box-photo{
                    display: flex;
                    justify-content: center;
                }
                .whats-new{
                    width:auto;
                    height:35px;
                    display: flex;
                    align-items: center;
                    margin-top:20px;
                }
                .whats{
                    margin-left:4px;
                }
                .recent-not-div{
                    margin-left:35%;    
                }
                .whats-new p:hover{
                    border-bottom:4px solid red;
                    width:fit-content;
                }
                .load-more-div{
                    display:flex;
                    justify-content:end;
                    margin-right:10px;
                    margin-bottom:10px;
                }
                .load-more-div p:hover{
                    background-color:red;
                    border-top:2px solid black;
                }


                .candidate-cornor-text{
                    display: flex;
                    justify-content: center;   
                }
                .candidate-text{
                    border-radius:50px;
                    background-color: coral;
                }
                .candidate-text:hover{
                    border-bottom:4px solid red;
                }
                .nrjfront{
                    margin-top: 5px;
                    font-size:30px;
                    border-bottom:1px solid black;
                }


                .registration-candidate-id-link p{
                    font-size:25px;
                    margin-left:35px;
                }
                .profile-div-registration{
                    display: flex;
                    align-items: center;
                    justify-content: space-evenly;
                }
                .profile-div-registration p{
                    margin-left:-15px;
                    background-color:aqua;
                    border-radius:10px;
                }
                .profile-div-registration img{
                    height:40px;
                    border-radius:100px;
                }
                .extra-div-registration p{
                    width:fit-content;
                }
                .extra-div-registration-border:hover{
                    border:2px solid orangered;
                    border-top-left-radius:5px;
                    border-bottom-left-radius:5px;
                    border-top-right-radius:5px;
                    border-bottom-right-radius:5px;
                    border-top-color: transparent;
                    background-color: darkgray;
                }
            </style>
            <script>
                function clickRegistration(){
                    
                }
            </script>
            


            
            <!--Notification table-->
            <div id="job-notification-table" class="notification-table-div">
                <div class="notification-name">
                    <p style="font-size: 40px;background-color:red;width:fit-content;border-radius: 50px;margin-left:35%;">All Notification Here :-</p>
                </div>
                <div class="notification-table-form">
                    <table border="1" styel="border-collapse:collapse;">
                        <tr>
                            <th>Sl.</th>
                            <th>State Name</th>
                            <th>Post Name</th>
                            <th>Education</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Apply Link</th>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Odisha</td>
                            <td>OSSC</td>
                            <td>Bachelor</td>
                            <td>12-03-2024</td>
                            <td>12-6-2024</td>
                            <td><a href="https://www.ossc.gov.in/Public/OSSC/Default.aspx">Apply</a></td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Andhra Pradesh</td>
                            <td>APSSC</td>
                            <td>Bachelor</td>
                            <td>12-03-2024</td>
                            <td>12-6-2024</td>
                            <td><a href="https://www.ossc.gov.in/Public/OSSC/Default.aspx">Apply</a></td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Delhi</td>
                            <td>DSSC</td>
                            <td>Bachelor</td>
                            <td>12-03-2024</td>
                            <td>12-6-2024</td>
                            <td><a href="https://www.ossc.gov.in/Public/OSSC/Default.aspx">apply</a></td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>Karnatak</td>
                            <td>KPSE</td>
                            <td>Bachelor</td>
                            <td>12-03-2024</td>
                            <td>12-6-2024</td>
                            <td><a href="https://www.ossc.gov.in/Public/OSSC/Default.aspx">Apply</a></td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td>Odisha</td>
                            <td>OPSC</td>
                            <td>Bachelor</td>
                            <td>12-03-2024</td>
                            <td>12-6-2024</td>
                            <td><a href="https://www.ossc.gov.in/Public/OSSC/Default.aspx">Apply</a></td>
                        </tr>
                        <tr>
                            <td>06</td>
                            <td>Chatisgarh</td>
                            <td>CUSC</td>
                            <td>Bachelor</td>
                            <td>12-03-2024</td>
                            <td>12-6-2024</td>
                            <td><a href="https://www.ossc.gov.in/Public/OSSC/Default.aspx">Apply</a></td>
                        </tr>
                        <tr>
                            <td>07</td>
                            <td>Odisha</td>
                            <td>SSC</td>
                            <td>Bachelor</td>
                            <td>12-03-2024</td>
                            <td>12-6-2024</td>
                            <td><a href="https://www.ossc.gov.in/Public/OSSC/Default.aspx">Apply</a></td>
                        </tr>
                        <tr>
                            <td>08</td>
                            <td>TELENGANA</td>
                            <td>SSB</td>
                            <td>Bachelor</td>
                            <td>12-03-2024</td>
                            <td>12-6-2024</td>
                            <td><a href="https://www.ossc.gov.in/Public/OSSC/Default.aspx">Apply</a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Odisha</td>
                            <td>OSSET</td>
                            <td>Bachelor</td>
                            <td>12-03-2024</td>
                            <td>12-6-2024</td>
                            <td><a href="https://www.ossc.gov.in/Public/OSSC/Default.aspx">Apply</a></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Odisha</td>
                            <td>BDO</td>
                            <td>Bachelor</td>
                            <td>12-03-2024</td>
                            <td>12-6-2024</td>
                            <td><a href="https://www.ossc.gov.in/Public/OSSC/Default.aspx">Apply</a></td>
                        </tr>
                    </table>
                    <div class="close-notification-div">
                        <button onclick="closeNotificatonForm()">Close</button>
                    </div>
                </div>
            </div>
            <style>
                .notification-table-div{
                    background-color:darkolivegreen;
                    display: none;
                    width:80%;
                    height:80%;
                    position: fixed;
                    top:80px;
                    left:10%;
                    border: 10px solid red;
                    border-radius:30px;               
                }
                .notification-table-form table,th,td{
                    border-collapse: collapse;
                    font-size:30px;
                }
                .notification-table-form table{
                    width:100%;
                }
                .close-notification-div button{
                    font-size: 30px;
                    margin-top:5px;
                    margin-left:85%;
                    border-radius:50px;
                    border-color: transparent;
                    background-color: darkgoldenrod;
                }
            </style>
        </div>
    </main>




    <footer>
        <div class="foot-div">
            <div class="application-logo">
                <div class="footer-logo">
                    <img src="./Pictures/logo.png" alt="error">
                </div>
            </div>
            <div class="contact-div">
                <ul>
                    <li>About Us</li>
                    <li>Careers</li>
                    <li>Updates</li>
                    <li>Notice</li>
                    <li>Photos</li>
                </ul>
            </div>
            <div class="my-details">
                <p>@ i am student of cutm</p>
            </div>
            <div class="help-div">
                <ul>
                    <li>Help Center</li>
                    <li>Grievence</li>
                    <li>Privacy Policy</li>
                    <li>Term & Condition</li>
                    <li>Report Issue</li>
                </ul>
            </div>
        </div>
    </footer>

    
    <script>
        function profile_logo_popup(){
            document.getElementById("plpf").style.display="block";
        }
        function close_profile_form(){
            document.getElementById("plpf").style.display="none";
        }
        function jobsShow(){
            op
        }


        function openNotificationTable(){
            document.getElementById("job-notification-table").style.display="block";
        }
        function closeNotificatonForm(){
            document.getElementById("job-notification-table").style.display="none";
        }



        var slideIndex = 1;
        showDivs(slideIndex);

   function plusDivs(n) {
    showDivs(slideIndex += n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("myPhoto");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
      }
     x[slideIndex-1].style.display = "block";  
    }      
    </script>
</body>
</html>