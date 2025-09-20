<?php
session_start();

// Save name
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['first_name'])) {
        $_SESSION['first_name'] = $_POST['first_name'];
    }
    if (isset($_POST['last_name'])) {
        $_SESSION['last_name'] = $_POST['last_name'];
    }
} else {
    // If accessed directly, could redirect back
    header("Location: name.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Step 2 – Courses</title>
</head>
<body>

<h2>Hello, <?php echo htmlspecialchars($_SESSION['first_name'] . " " . $_SESSION['last_name']); ?></h2>
<h3>Select Courses You Have Taken</h3>

<form method="post" action="accomplishments.php">
    <input type="checkbox" name="courses[]" value="Object‑oriented programming"> Object‑oriented programming<br>
    <input type="checkbox" name="courses[]" value="Systems analysis & design"> Systems analysis & design<br>
    <input type="checkbox" name="courses[]" value="Advanced programming"> Advanced programming<br>
    <input type="checkbox" name="courses[]" value="Introduction to Networking"> Introduction to Networking<br>
    <input type="checkbox" name="courses[]" value="Introduction to Computer Security"> Introduction to Computer Security<br><br>
    <input type="submit" value="Next">
</form>

</body>
</html>
