<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['accomplishments'])) {
        $_SESSION['accomplishments'] = $_POST['accomplishments'];
    } else {
        $_SESSION['accomplishments'] = "";
    }
} else {
    header("Location: accomplishments.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Confirm Application</title>
</head>
<body>

<h2>Confirm Your Information</h2>

<p><strong>Name:</strong> <?php echo htmlspecialchars($_SESSION['first_name'] . " " . $_SESSION['last_name']); ?></p>

<p><strong>Courses Taken:</strong></p>
<ul>
<?php
if (isset($_SESSION['courses']) && is_array($_SESSION['courses'])) {
    foreach ($_SESSION['courses'] as $c) {
        echo "<li>" . htmlspecialchars($c) . "</li>";
    }
} else {
    echo "<li>No courses selected</li>";
}
?>
</ul>

<p><strong>Accomplishments:</strong></p>
<p><?php echo nl2br(htmlspecialchars($_SESSION['accomplishments'])); ?></p>

<form method="post" action="results.php">
    <input type="submit" value="Confirm and Submit">
</form>

</body>
</html>
