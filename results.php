<?php
session_start();
require_once 'util.php';

$total = 5;  // number of courses listed

$taken = 0;
if (isset($_SESSION['courses']) && is_array($_SESSION['courses'])) {
    $taken = count($_SESSION['courses']);
}

$accomplishments = "";
if (isset($_SESSION['accomplishments'])) {
    $accomplishments = $_SESSION['accomplishments'];
}

$accepted = evaluate_application($accomplishments, $total, $taken);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
</head>
<body>

<h2>Your Application Result</h2>

<?php
if ($accepted) {
    echo "<p>Congratulations, you are accepted for a phone interview!</p>";
} else {
    echo "<p>Sorry, your application was rejected.</p>";
}
?>

</body>
</html>
