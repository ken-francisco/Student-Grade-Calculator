<?php
$studentName = "Clark Francisco";
$score = 82;

if (!is_numeric($score) || $score < 0 || $score > 100) {
    $status = "Invalid Score";
    $gradeCategory = "N/A";
} else {
    if ($score >= 75) {
        $status = "Passed";
    } else {
        $status = "Failed";
    }

    if ($score >= 90) {
        $gradeCategory = "Excellent";
    } elseif ($score >= 80) {
        $gradeCategory = "Very Good";
    } elseif ($score >= 75) {
        $gradeCategory = "Good";
    } else {
        $gradeCategory = "Needs Improvement";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grade Result</title>
</head>
<body>

    <h1>Student Grade Result</h1>

    <p>Student Name: <?php echo $studentName; ?></p>
    <p>Score: <?php echo $score; ?></p>
    <p>Status: <?php echo $status; ?></p>
    <p>Grade Remark: <?php echo $gradeCategory; ?></p>

</body>
</html>
