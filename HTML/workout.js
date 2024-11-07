import {Exercise, Workout} from './classes.js';



document.addEventListener("DOMContentLoaded", function () {
    const plan1 = new Workout("Chest");
    plan1.newExercise(new Exercise("Bench", 3, 3, 0, "Workout pictures/benchpress.jpg"));
    plan1.newExercise(new Exercise("Bike", 4, 0, 100, "Workout pictures/bike.jpg"));
    plan1.newExercise(new Exercise("Cable flyes", 4, 8, 0, "Workout pictures/cableflyes.jpg"));
    plan1.newExercise(new Exercise("Cable flyes", 4, 8, 0, "Workout pictures/cableflyes.jpg"));

    const exerciseDetails = document.getElementById("exerciseDetails");
    const workoutDetails = document.getElementById("workoutDetails");
    const nextButton = document.getElementById("next-button");

    let currentExerciseIndex = 0;

    function displayExerciseDetails() {
        const exercise = plan1.workout[currentExerciseIndex];
        if(exercise.name.time === 0) {
                exerciseDetails.innerHTML = `
                <h2>Exercise: ${exercise.name.name}</h2>
                <p>Sets: ${exercise.name.sets}</p>
                <p>Reps: ${exercise.name.reps}</p>
                <img src="${exercise.name.image}" alt="${exercise.name.name} Image" class="small-image">
                <button id="next-button">Next</button>
            `;
        }
        else {
            exerciseDetails.innerHTML = `
                <h2>Exercise: ${exercise.name.name}</h2>
                <p>Sets: ${exercise.name.sets}</p>
                <p>Time: ${exercise.name.time + "s"}</p>
                <img src="${exercise.name.image}" alt="${exercise.name.name} Image" class="small-image">
                <button id="next-button">Next</button>
            `;
        }
        // Add a click event listener to the newly created button
        const newNextButton = document.getElementById("next-button");
        newNextButton.addEventListener("click", nextExercise);
    }

    function displayWorkoutDetails() {
        const exercises = plan1.workout.map(exercise => `
            <div class="exercise-container">
                <h2>Exercise: ${exercise.name.name}</h2>
                <p>Sets: ${exercise.name.sets}</p>
                <p>${exercise.name.reps === 0 ? 'Time' : 'Reps'}: ${exercise.name.reps === 0 ? exercise.name.time + 's' : exercise.name.reps}</p>
                <img src="${exercise.name.image}" alt="${exercise.name.name} Image" class="small-image">
            </div>
        `).join('');

        workoutDetails.innerHTML = `
            <h1>Chosen Workout: ${plan1.name}</h1>
            <p>Workout Description</p>
            <p>Exercises: ${plan1.numberOfExercises}</p>
            <p>Sets: ${plan1.numberOfSetsTotal()}</p>
            <div class="workout-row">
                ${exercises}
            </div>
        `;
    }

    function nextExercise() {
        currentExerciseIndex++;
        if (currentExerciseIndex < plan1.numberOfExercises) {
            displayExerciseDetails();
        } else {
            exerciseDetails.innerHTML = `
            <h2>Workout complete</h2>
            <p>Thank you for working out!</p>
            <button id="go-to-another-page-button">Go back to My workouts</button>
        `;
            // Hide the "Next" button when the workout is complete
            nextButton.style.display = "none";
            const goToAnotherPageButton = document.getElementById("go-to-another-page-button");
            goToAnotherPageButton.addEventListener("click", function () {
                // Redirect to another page when the button is clicked
                window.location.href = "myworkouts.html"; // Replace with your desired URL
            });
        }
    }

    // Initially, display the workout details and the first exercise
    displayWorkoutDetails();
    displayExerciseDetails();
});