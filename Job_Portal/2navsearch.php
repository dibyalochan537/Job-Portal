<?php
  session_start();
 include("0connection.php");
 error_reporting(0);
 $user = $_SESSION['user_name'];
 if($user == true){

 }
 else{
    header('location:1login.php');
 }
?>
<?php
include("0connection.php");
if (isset($_POST['navSearchIcon'])) {
    $showState = $_POST['navSelectState'];
    $showPost = $_POST['navSearchPost'];
    $queryTableShow = "SELECT * FROM postjobs 
    WHERE stateName='$showState' && postName='$showPost';";
    $connObjShow = mysqli_query($conn, $queryTableShow);
}
else{
    echo "No data Available !!";
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
                    $data=$row['applyLink'];
                    "<script>
                        search($data);
                    </script>"
                ?>
                <td><?php echo $row['stateName']?></td>
                <td><?php echo $row['postName']?></td>
                <td><?php echo $row['searchStartDate']?></td>
                <td><?php echo $row['searchEndDate']?></td>
                <td><a href="" id="link"><?php 
                                            echo $row['applyLink'];
                                        ?>
                    </a>
                </td>
            </tr>
            <tr>
                <?php
                  }
                ?>
            </tr>
        </table>
       </div>
   </main>
   <script>
     function search($data){
        var link=document.getElementById("link").innerText;
        var attr=document.getElementById("link");
        attr.setAttribute("href",$data);
     }
   </script>
</body>

</html>
