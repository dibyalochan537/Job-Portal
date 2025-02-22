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
<?php
  include("0connection.php");
      $queryTable="CREATE TABLE searchJobs(
        id int(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        stateName VARCHAR(220),
        postName VARCHAR(220),
        searchStartDate DATE,
        searchEndDate DATE);";
      $connObj=mysqli_query($conn,$queryTable);
      if(isset($_POST['submit_search'])){
        $searchState=$_POST['select_search'];
        $searchPost=$_POST['select_post'];
        $searchStartDate=date('Y-m-d', strtotime($_POST["startdate"]));
        $searchEndDate=date('Y-m-d', strtotime($_POST["enddate"]));
        $queryTableShow="SELECT * FROM postjobs 
        WHERE stateName='$searchState' || postName='$searchPost' || searchStartDate>='$searchStartDate' || searchEndDate<='$searchEndDate';";
        $data=$queryTableShow;
        $connObjShow=mysqli_query($conn,$queryTableShow);
      }     
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post search page</title>
</head>
<style>
    body{
        background-color:blanchedalmond;
    }
    table{
        border-collapse: collapse;
        font-size:40px;
    }
    th{
        background-color:burlywood;
    }
    .nav-data{
        margin-top:50px;
        height:60px;
        
    }
    .search-data-name{
        width:fit-content;
        margin-left:40%;
    }
    .show-data{
        margin-top:40px;
        margin-left:12%;
    }
</style>
<body>
   <header>
       <div class="nav-data">
         <div class="search-data-name">
            <p style="font-size:50px;"><u>Search Data</u></p>
         </div>
       </div>
   </header>
   <main>
       <div class="show-data">
        <table border="1">
            <tr>
              <th>State Name</th>
              <th>Post Name</th>
              <th>Start Date</th>
              <th>End Date</th>
              <th>Apply Link</th>
            </tr>
            <tr>
                <?php
                  while($row = mysqli_fetch_assoc($connObjShow)){
                ?>
                <td><?php echo $row['stateName']?></td>
                <td><?php echo $row['postName']?></td>
                <td><?php echo $row['searchStartDate']?></td>
                <td><?php echo $row['searchEndDate']?></td>
                <td><a href=""><?php echo $row['applyLink']?></td>
            </tr>
            <tr>
                <?php
                  }
                ?>
            </tr>
        </table>
       </div>
   </main>
</body>

</html>
