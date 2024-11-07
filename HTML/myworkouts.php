<?php
require('../include/header.php');
    $planname = 'Onsdag';
    $mastara = "<br>";
    $exercise = show_saved_workout($planname);
    $imagePaths = array();
    $Setsnumber = array();
    $Repsnumber = array();
    $exercisenames = array();
    $plan;
    //ska tas bort 
    $exerer=array();
    if (is_array($exercise) && !empty($exercise)) {
        foreach ($exercise as $exer) {
            $i = 0;
            foreach ($exer as $column) {
                if ($i == 0) {
                    $exercisenames[] = $column;
                }
                if ($i==1)
                {
                    $Repsnumber[]=$column;
                }
                if ($i==2)
                {
                    $Setsnumber[]=$column;
                }
                if($i==3)
                {
                    $plan=$column;
                }
                if ($i == 4) {
                    $imagePaths[] = $column;
                }
                $i++;
            }
        }
    }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="myWorkouts.css">
    <link href="../Welcome/welcome-style.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title>MYWORKOUTS</title>
</head>
<body>
<div class="navbar">
    <div class="logo">XPERT</div>
    <ul class="navbar-links">
        <li><a href="welcome.html">HOME</a></li>
        <li><a href="workout-planner.html">PLANNER</a></li>
        <li><a href="planned.html">WORKOUTS</a></li>
        <li><a href="">STATISTICS</a></li>
        <li><a href="">CONTACT</a></li>
    </ul>
</div>

<div class="welcome-header">
    <h1>My Workouts</h1>
    <p>Select one of our pre-planned workouts below!</p>
</div>
<div id="workoutList">
<div class="workout-container">
    <?php
    echo '<span class="workout-name">'. $plan. "</span>";
    ?>
    <div class="button-container">
    <button class="workout-button">Details</button>
    <button class="start-button">Start</button>
    <button class="remove-button">Remove</button></div>
</div>
</div>

<div id="imageContainerBottom">
    <?php

foreach ($exercise as $exer) {
    foreach ($exer as $column) {
         $exerer=$column;
         echo $exerer;
         echo '<br>';
        }}
         
for ($i = 0; $i < count($exercisenames); $i++) 
{
        echo '<div class="exercise-container">';
        echo '<img src="' . $imagePaths[$i] . '" alt="Image" class="small-image">';
    
        echo '<div class="exercise-details">';
        echo '<p class="exercise-name">Exercise: ' . $exercisenames[$i] . '</p>';
        echo '<p>Sets: ' . $Setsnumber[$i] . '</p>';
        echo '<p> Reps:' . $Repsnumber[$i] . '</p>';
        echo '</div>';
        echo '</div>';
}
    ?>
</div>

<div id="total-info"></div>
<script src="myWorkouts.js" type="module"></script>
</body>
</html>
