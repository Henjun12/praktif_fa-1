<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lab1 = $_POST['lab1'];
    $lab2 = $_POST['lab2'];
    $lab3 = $_POST['lab3'];
    $lab4 = $_POST['lab4'];
    $pbt1 = $_POST['pbt1'];
    $pbt2 = $_POST['pbt2'];
    $case_study = $_POST['case_study'];
    $presentation1 = $_POST['presentation1'];
    $presentation2 = $_POST['presentation2'];

    $lab_total = ($lab1 + $lab2 + $lab3 + $lab4) * 0.05; 
    $pbt_total = ($pbt1 + $pbt2) * 0.20; 
    $case_study_total = $case_study * 0.30; 
    $presentation_total = ($presentation1 + $presentation2) * 0.05; 

    $total_marks = $lab_total + $pbt_total + $case_study_total + $presentation_total;

    if ($total_marks >= 90) {
        $grade = 'A+';
    } elseif ($total_marks >= 80) {
        $grade = 'A';
    } elseif ($total_marks >= 70) {
        $grade = 'B';
    } elseif ($total_marks >= 60) {
        $grade = 'C';
    } elseif ($total_marks >= 50) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }

    echo "<h1>DFP50193 Web Programming Marks Result</h1>";
    echo "Total Marks: " . number_format($total_marks, 2) . "<br>";
    echo "Grade: " . $grade;
}
?>
