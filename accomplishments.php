<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['courses'])) {
        $_SESSION['courses'] = $_POST['courses'];
    } else {
        $_SESSION['courses'] = array();
    }
} else {
    header("Location: courses.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Step 3 – Accomplishments</title>
</head>
<body>

<h2>Your Accomplishments</h2>
<form method="post" action="confirm.php">
    <textarea name="accomplishments" rows="8" cols="50" placeholder="Write about your accomplishments..." required></textarea><br><br>
    <input type="submit" value="Next">
</form>

</body>
</html>
