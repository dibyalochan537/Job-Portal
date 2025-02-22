<!DOCTYPE html>
<html>
<head>
    <title>Loop and Call JavaScript</title>
</head>
<body>
<?php
// Your PHP code here (e.g., fetching data from a database)
$username = "John"; // Replace with your actual value

// Call the JavaScript function
echo '<script>
        myFunction("' . $username . '");
    </script>';
?>

<script>
    // Define your JavaScript function
    function myFunction(username) {
        console.log('Hello, ' + username + '!');
    }
</script>

</body>
</html>
