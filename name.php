<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Step 1 – Name</title>
</head>
<body>

<h2>Enter Your Name</h2>
<form method="post" action="courses.php">
    First name:<br>
    <input type="text" name="first_name" required><br><br>
    Last name:<br>
    <input type="text" name="last_name" required><br><br>
    <input type="submit" value="Next">
</form>

</body>
</html>
