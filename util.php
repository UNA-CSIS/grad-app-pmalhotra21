<?php
// util.php
// Function to check acceptance based on accomplishments and courses

function evaluate_application($accomplishments, $total_courses, $taken_courses) {
    // keyword to search, from assignment
    $keyword = "PHP";
    // percentage threshold
    $threshold = 50;

    // check if accomplishments contains keyword (case-insensitive)
    // W3Schools uses strpos or stripos for this kind of search
    if (stripos($accomplishments, $keyword) === false) {
        return false;
    }

    // avoid division by zero
    if ($total_courses == 0) {
        return false;
    }

    $percentage = ($taken_courses / $total_courses) * 100;

    if ($percentage >= $threshold) {
        return true;
    } else {
        return false;
    }
}
?>
