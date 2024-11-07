<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php
require('../include/header.php');
#send all info to the database

if (isset($_POST['showPlan'])) {
  // Check if 'Setsnumber' is set and is an array
    if (isset($_POST['Setsnumber']) &&(isset($_POST['Repsnumber'])))
    {
      $Setsnumbers = $_POST['Setsnumber'];
      $Repsnumbers = $_POST['Repsnumber'];
      $workoutnames = $_POST["workoutname"];
      $Time=$_POST['Time'];
      $planname = $_POST['planname'];
      $imagesrc=$_POST['imageSrc'];
      for ($i = 0; $i < count($Setsnumbers); $i++) 
      {
        //$newline="<br>";
        if ($i == 7 && (!empty($Setsnumbers[$i]) && (!empty($Time))))
        {
         // echo $workoutnames[$i],$Setsnumbers[$i], $Time,$planname,$imagesrc[$i];
          showPlan($workoutnames[$i],$Setsnumbers[$i],$Time,$planname,$imagesrc[$i]);

          }
        //  $newline="<br>";

        if((!empty($Setsnumbers[$i]) || !empty($Repsnumbers[$i])) && $i != 7)
        {
            showPlan($workoutnames[$i],$Setsnumbers[$i],$Repsnumbers[$i],$planname,$imagesrc[$i]);
          //  echo $workoutnames[$i],$Setsnumbers[$i],$Repsnumbers[$i],$planname,$imagesrc[$i],$newline;
        }
      }
    }
  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--<link rel="stylesheet" href="workout-planner.css">-->
  <link href="../Welcome/welcome-style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="workout-planner.css">
  <meta charset="UTF-8">
  <title>planner</title>
</head>
<body>
<div class="navbar">

  <div class="logo">XPERT</div>

  <!-- Hamburger Icon -->
  <!--<div class="hamburger">&#9776;</div> -->

  <ul class="navbar-links">
    <li><a href="../Welcome/welcome.html">HOME</a></li>
    <li><a href="workout-planner.html">PLANNER</a></li>
    <li><a href="../Welcome/planned.html">WORKOUTS</a></li>
    <li><a href="">STATISTICS</a></li>
    <li><a href="">CONTACT</a></li>
  </ul>
</div>

<!-- Header -->
<div class="welcome-header">
  <h1>My Workouts</h1>
  <p>Welcome to planner! Choose from the workouts below and enter a name for the workout. When you are done press plan to create your own workout</p>
</div>


<form method="post">
<div class="exercise-group">
  <h1>Chest</h1>
<div class="exercise-container">
  <div class="exercise">
    <img id="box1" src="Workout pictures/benchpress.jpg" alt="Bench">
    <input type="hidden" name="imageSrc[]" value="Workout pictures/benchpress.jpg">
    <div class="input-column">
      <h3>Bench</h3>
      <input type="hidden" name="workoutname[]" value="Bench">
      <div class="input-row">
        <label for="box1Sets">Sets:</label>
        <input type="text" id="box1Sets" name="Setsnumber[]">
      </div>
      <div class="input-row">
        <label for="box1Reps">Reps:</label>
        <input type="text" id="box1Reps" name="Repsnumber[]">
      </div>
        <button type="button" id="box1Button" name="showPlan">Add</button>
      </div>
    </div>

    <div class="exercise">
      <img id="box2" src="Workout pictures/cableflyes.jpg" alt="Exercise 2">
      <input type="hidden" name="imageSrc[]" value="Workout pictures/cableflyes.jpg">      
      <div class="input-column">
        <h3>Cable flyes</h3>
        <div class="input-row">
          <label for="box2Sets">Sets:</label>
          <input type="hidden" name="workoutname[]" value="Cable flyes">
          <input type="text" id="box2Sets" name="Setsnumber[]">
        </div>
        <div class="input-row">
          <label for="box2Reps">Reps:</label>
          <input type="text" id="box2Reps" name="Repsnumber[]">
        </div>
          <!--<div class="input-row">
            <label for="box2Time">Time:</label>
            <input type="text" id="box2Time" name="box2Time">
          </div>-->
          <button type="button" id="box2Button" name="showPlan">Add</button>
        </div>
      </div>
      
      <div class="exercise">
          <img id="box3" src="Workout pictures/pushup.jpg" alt="Shoulder Press 3">
          <input type="hidden" name="imageSrc[]" value="Workout pictures/pushup.jpg">          
          <div class="input-column">
            <h3>push up</h3>
            <input type="hidden" name="workoutname[]" value="push up">
            <div class="input-row">
              <label for="box11Sets">Sets:</label>
              <input type="text" id="box3Sets"  name="Setsnumber[]">
            </div>
            <div class="input-row">
              <label for="box3Reps">Reps:</label>
              <input type="text" id="box3Reps"  name="Repsnumber[]">
            </div>
            <!--<div class="input-row">
              <label for="box6Time">Time:</label>
              <input type="text" id="box6Time" name="box6Time">
            </div>-->
            <button type="button" id="box3Button"name="showPlan">Add</button>
          </div>
        </div>

      <div class="exercise">
        <img id="box4" src="Workout pictures/dips.jpg" alt="Dip">
        <input type="hidden" name="imageSrc[]" value="Workout pictures/dips.jpg">        
        <div class="input-column">
          <h3>Dips</h3>
          <input type="hidden" name="workoutname[]" value="Dips">
          <div class="input-row">
            <label for="box4Sets">Sets:</label>
            <input type="text" id="box4Sets"  name="Setsnumber[]">
          </div>
          <div class="input-row">
            <label for="box4Reps">Reps:</label>
            <input type="text" id="box4Reps"  name="Repsnumber[]">
          </div>
            <!--<div class="input-row">
              <label for="box4Time">Time:</label>
              <input type="text" id="box4Time" name="box4Time">
            </div>-->
         <button type="button" id="box4Button"name="showPlan">Add</button>
        </div>
      </div>
    </div>
    </div>

    <div class="exercise-group">
      <h1>Shoulders</h1>
      <div class="exercise-container">
        <div class="exercise">
          <img id="box5" src="Workout pictures/lateralraise.jpg" alt="Shoulder Press 1">
          <input type="hidden" name="imageSrc[]" value="Workout pictures/lateralraise.jpg">          
          <div class="input-column">
            <h3>Lateral raise</h3>
            <input type="hidden" name="workoutname[]" value="Lateral raise">
            <div class="input-row">
              <label for="box5Sets">Sets:</label>
              <input type="text" id="box5Sets"  name="Setsnumber[]">
            </div>
            <div class="input-row">
              <label for="box5Reps">Reps:</label>
              <input type="text" id="box5Reps"  name="Repsnumber[]">
            </div>
            <!--<div class="input-row">
              <label for="box5Time">Time:</label>
              <input type="text" id="box5Time" name="box5Time">
            </div>-->
           <button type="button" id="box5Button"name="showPlan">Add</button>
          </div>
        </div>

        <div class="exercise">
          <img id="box6" src="Workout pictures/shoulderpress.jpg" alt="Shoulder Press 2">
          <input type="hidden" name="imageSrc[]" value="Workout pictures/shoulderpress.jpg">
          <div class="input-column">
            <h3>Shoulder press</h3>
            <input type="hidden" name="workoutname[]" value="Shoulder press">
            <div class="input-row">
              <label for="box6Sets">Sets:</label>
              <input type="text" id="box6Sets"  name="Setsnumber[]">
            </div>
            <div class="input-row">
              <label for="box6Reps">Reps:</label>
              <input type="text" id="box6Reps"  name="Repsnumber[]">
            </div>
            <!--<div class="input-row">
              <label for="box6Time">Time:</label>
              <input type="text" id="box6Time" name="box6Time">
            </div>-->
           <button type="button" id="box6Button"name="showPlan">Add</button>
          </div>
        </div>
        
        <div class="exercise">
          <img id="box7" src="Workout pictures/cableface.jpg" alt="Shoulder Press 3">
          <input type="hidden" name="imageSrc[]" value="Workout pictures/ cableface.jpg">          
          <div class="input-column">
            <h3>Cable face pull</h3>
            <input type="hidden" name="workoutname[]" value="cable face">
            <div class="input-row">
              <label for="box7Sets">Sets:</label>
              <input type="text" id="box7Sets"  name="Setsnumber[]">
            </div>
            <div class="input-row">
              <label for="box7Reps">Reps:</label>
              <input type="text" id="box7Reps"  name="Repsnumber[]">
            </div>
            <!--<div class="input-row">
              <label for="box6Time">Time:</label>
              <input type="text" id="box6Time" name="box6Time">
            </div>-->
            <button type="button" id="box7Button" name="showPlan">Add</button>
          </div>
        </div>

        <div class="exercise">
          <img id="box8" src="Workout pictures/frontraise.jpg" alt="Shoulder Press 4">
          <input type="hidden" name="imageSrc[]" value="Workout pictures/ frontraise.jpg">          
          <div class="input-column">
            <h3>Front raise</h3>
            <input type="hidden" name="workoutname[]" value="Front raise">
            <div class="input-row">
              <label for="box8Sets">Sets:</label>
              <input type="text" id="box8Sets"  name="Setsnumber[]">
            </div>
            <div class="input-row">
              <label for="box8Reps">Reps:</label>
              <input type="text" id="box8Reps"  name="Repsnumber[]">
            </div>
            <!--<div class="input-row">
              <label for="box8Time">Time:</label>
              <input type="text" id="box8Time" name="box8Time">
            </div>-->
            <button type="button" id="box8Button"name="showPlan">Add</button>
          </div>
        </div>
      </div>
    </div>


    <div class="exercise-group">
      <h1>legs</h1>
      <div class="exercise-container">
        <div class="exercise">
          <img id="box9" src="Workout pictures/squats.jpg" alt="legs1">
          <input type="hidden" name="imageSrc[]" value="Workout pictures/squats.jpg">         
          <div class="input-column">
            <h3>Squats</h3>
            <input type="hidden" name="workoutname[]" value="Squats">
            <div class="input-row">
              <label for="box9Sets">Sets:</label>
              <input type="text" id="box9Sets"  name="Setsnumber[]">
            </div>
            <div class="input-row">
              <label for="box9Reps">Reps:</label>
              <input type="text" id="box9Reps" name="Repsnumber[]">
            </div>
            <!--<div class="input-row">
              <label for="box9Time">Time:</label>
              <input type="text" id="box9Time" name="box9Time">
            </div>-->
           <button type="button" id="box9Button"name="showPlan">Add</button>
          </div>
        </div>

        <div class="exercise">
          <img id="box10" src="Workout pictures/bike.jpg" alt="legs2">
          <input type="hidden" name="imageSrc[]" value="Workout pictures/bike.jpg">          
          <div class="input-column">
            <h3>Bike</h3>
            <input type="hidden" name="workoutname[]" value="Bike">
            <div class="input-row">
              <label for="box10Sets">Sets:</label>
              <input type="text" id="box10Sets"  name="Setsnumber[]">
            </div>
              <!--<div class="input-row">
                <label for="box10Reps">Reps:</label>
                <input type="text" id="box10Reps" name="Repsnumber[]">
              </div>-->
              <div class="input-row">
                <label for="box10Time">Time:</label>
                <input type="text" id="box10Time" name="Time">
              </div>
              <button type="button" id="box10Button"name="showPlan">Add</button>
            </div>
          </div>

          <form method="post">
          <div class="exercise">
            <img id="box11" src="Workout pictures/quadextension.jpg" alt="Legs1">
            <input type="hidden" name="imageSrc[]" value="Workout pictures/quadextension.jpg">            
            <div class="input-column">
              <h3>Quad extension</h3>
              <input type="hidden" name="workoutname[]" value="Quad extension">
              <div class="input-row">
                <label for="box11Sets">Sets:</label>
                <input type="text" id="box11Sets"  name="Setsnumber[]">
              </div>
              <div class="input-row">
                <label for="box11Reps">Reps:</label>
                <input type="text" id="box11Reps"  name="Repsnumber[]">
              </div>
              <!--<div class="input-row">
                <label for="box11Time">Time:</label>
                <input type="text" id="box11Time" name="box11Time">
              </div>-->
             <button type="button" id="box11Button"name="showPlan">Add</button>
            </div>
          </div>
          <div class="exercise">
            <img id="box12" src="Workout pictures/leggpress.jpg" alt="Legs3">
            <input type="hidden" name="imageSrc[]" value="Workout pictures/leggpress.jpg">            
            <div class="input-column">
              <h3>leg press</h3>
              <input type="hidden" name="workoutname[]" value="leg press">
              <div class="input-row">
                <label for="box12Sets">Sets:</label>
                <input type="text" id="box12Sets"  name="Setsnumber[]">
              </div>
              <div class="input-row">
                <label for="box12Reps">Reps:</label>
                <input type="text" id="box12Reps"  name="Repsnumber[]">
              </div>
              <!--<div class="input-row">
                <label for="box9Time">Time:</label>
                <input type="text" id="box9Time" name="box9Time">
              </div>-->
             <button type="button" id="box12Button"name="showPlan">Add</button>
            </div>
          </div>
      </div>
    </div>
   
        <div class = "exercise-group">
      <h1>Back</h1>
      <div class = "exercise-container">
        <div class="exercise">
          <img id="box13" src="Workout pictures/dumbbellrow.jpg" alt="back1">
          <input type="hidden" name="imageSrc[]" value="Workout pictures/dumbbellrow.jpg">         
          <div class="input-column">
            <h3>Dumbbell row</h3>
            <input type="hidden" name="workoutname[]" value="Dumbbell row">
            <div class="input-row">
              <label for="box13Sets">Sets:</label>
              <input type="text" id="box13Sets"  name="Setsnumber[]">
            </div>
            <div class="input-row">
              <label for="box13Reps">Reps:</label>
              <input type="text" id="box13Reps" name="Repsnumber[]">
            </div>
   
           <button type="button" id="box13Button"name="showPlan">Add</button>
          </div>
        </div>
        <div class="exercise">
          <img id="box14" src="Workout pictures/cablerow.jpg" alt="back1">
          <input type="hidden" name="imageSrc[]" value="Workout pictures/cablerow.jpg">         
          <div class="input-column">
            <h3>Cable row</h3>
            <input type="hidden" name="workoutname[]" value="Cable row">
            <div class="input-row">
              <label for="box14Sets">Sets:</label>
              <input type="text" id="box14Sets"  name="Setsnumber[]">
            </div>
            <div class="input-row">
              <label for="box14Reps">Reps:</label>
              <input type="text" id="box14Reps" name="Repsnumber[]">
            </div>
   
           <button type="button" id="box14Button"name="showPlan">Add</button>
          </div>
        </div>
        <div class="exercise">
          <img id="box15" src="Workout pictures/pullup.jpg" alt="back1">
          <input type="hidden" name="imageSrc[]" value="Workout pictures/pullup.jpg">         
          <div class="input-column">
            <h3>pull upp</h3>
            <input type="hidden" name="workoutname[]" value="pull upp">
            <div class="input-row">
              <label for="box15Sets">Sets:</label>
              <input type="text" id="box15Sets"  name="Setsnumber[]">
            </div>
            <div class="input-row">
              <label for="box15Reps">Reps:</label>
              <input type="text" id="box15Reps" name="Repsnumber[]">
            </div>
   
           <button type="button" id="box15Button"name="showPlan">Add</button>
          </div>
        </div>
        <div class="exercise">
          <img id="box16" src="Workout pictures/barbellrow.jpg" alt="back4">
          <input type="hidden" name="imageSrc[]" value="Workout pictures/barbellrow.jpg">         
          <div class="input-column">
            <h3>Barbell row</h3>
            <input type="hidden" name="workoutname[]" value="Squats">
            <div class="input-row">
              <label for="box16Sets">Sets:</label>
              <input type="text" id="box16Sets"  name="Setsnumber[]">
            </div>
            <div class="input-row">
              <label for="box16Reps">Reps:</label>
              <input type="text" id="box16Reps" name="Repsnumber[]">
            </div>
   
           <button type="button" id="box16Button"name="showPlan">Add</button>
          </div>
        </div>
        </div>
        </div>
    <div class="workout_name">
        <h2>Enter name for the workout</h2>
        <label for="name">
        <input type="text" id="name" name="planname"><br><br>
        <button type="button" id="submitBtn" name="showPlan">Submit</button>
        </label>
      </div>
    <div id="workoutName">Please enter a name for the workout!</div>
    <div id="imageContainerBottom"></div>
     <button id="saveButton" name="showPlan">Save</button>
     </div>
     <div id="total-info">
       Exercises: 0, Sets: 0
      </div>
    </form>
        <div id="restart">Restart</div>
        <script src="workout-planner.js" type="module"></script>
      </body>
      </html>