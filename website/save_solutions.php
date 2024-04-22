<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $problemTitle = $_POST['problemTitle'] ?? 'No Title';
    $solutionText = $_POST['solutionText'] ?? '';

    $filePath = "solutions.txt";
    $content = "Problem Title: $problemTitle\nSolution: $solutionText\n---\n";

    if (file_put_contents($filePath, $content, FILE_APPEND)) {
        echo "Solution saved successfully!";
    } else {
        echo "Failed to save the solution.";
    }
}
?>

