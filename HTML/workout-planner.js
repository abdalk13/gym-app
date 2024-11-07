
import {Exercise, Workout} from './classes.js';
/* Code for workout-planner.html */

// MAYBE REMOVE?
let plan = new Workout();

// Function to display the whole workout with name
function showImages() {
    let imageContainerBottom = document.getElementById("imageContainerBottom");

    // Clear any previously displayed content
    imageContainerBottom.innerHTML = "";

    // Loop through the workout plan and create elements for each exercise
    for (let i = 0; i < plan.workout.length; i++) {
        let exercise = plan.workout[i];

        // Create a container div for each exercise
        let exerciseContainer = document.createElement("div");
        exerciseContainer.className = "exercise-container";

        // Create an img element for the exercise image
        let imgElement = document.createElement("img");
        imgElement.src = exercise.name.image;
        imgElement.alt = "Image " + (i + 1);
        imgElement.classList.add("small-image");

        // Create a div for exercise details
        let detailsContainer = document.createElement("div");
        detailsContainer.className = "exercise-details";

        // Create a paragraph element for the exercise name
        let nameElement = document.createElement("p");
        nameElement.textContent = "Exercise: " + exercise.name.name;
        nameElement.className = "exercise-name";

        // Create paragraph elements for sets, reps, and time
        let setsElement = document.createElement("p");
        setsElement.textContent = "Sets: " + exercise.name.sets;

        let repsElement = document.createElement("p");
        repsElement.textContent = "Reps: " + exercise.name.reps;

        let timeElement = document.createElement("p");
        timeElement.textContent = "Time: " + exercise.name.time + " s";

        // Append the name, sets, reps, and time elements to the details container
        detailsContainer.appendChild(nameElement);
        detailsContainer.appendChild(setsElement);
        if(exercise.name.reps !== 0){
            detailsContainer.appendChild(repsElement);
        }
        if(exercise.name.time !== 0){
            detailsContainer.appendChild(timeElement);
        }


        // Append the img and details container to the exercise container
        exerciseContainer.appendChild(imgElement);
        exerciseContainer.appendChild(detailsContainer);

        // Append the exercise container to the image container
        imageContainerBottom.appendChild(exerciseContainer);
    }
}
// Function for total info
function showInfo() {
    let totalSets = plan.numberOfSetsTotal();
    let totalExercises = plan.numberOfExercises;
    const totalInfo = document.getElementById('total-info');
    totalInfo.textContent = `Total Exercises: ${totalExercises}, Total Sets: ${totalSets}`;
}
// SUBMIT button sets name of workout
document.getElementById("submitBtn").addEventListener("click", function() {
    // Get the value of the 'name' input field
    let nameInput = document.getElementById("name");
    let workoutNameElement = document.getElementById("workoutName");

    // Set the workout name based on user input
    workoutNameElement.textContent = "Workout Name: " + nameInput.value;

    // Clear the input field
});

// ALL the exercises
document.getElementById("box1Button").addEventListener("click", function() {
    // Get exercise information from input fields
    let sets = parseInt(document.getElementById("box1Sets").value);
    let reps = parseInt(document.getElementById("box1Reps").value);
    //let time = parseFloat(document.getElementById("box1Time").value);
    if(Number.isNaN(sets) || Number.isNaN(reps)){
        return;
    }
    // Create a new exercise and add it to the workout plan
    plan.newExercise(new Exercise("Bench", sets, reps, 0,document.getElementById("box1").src));
    // Display the updated workout plan
    showImages();
    showInfo();
});
document.getElementById("box2Button").addEventListener("click", function() {
    let sets = parseInt(document.getElementById("box2Sets").value);
    let reps = parseInt(document.getElementById("box2Reps").value);
    if(Number.isNaN(sets) || Number.isNaN(reps)){
        return;
    }
    plan.newExercise(new Exercise("Cable flyes",sets,reps,0, document.getElementById("box2").src));
    showImages();
    showInfo();
});

document.getElementById("box3Button").addEventListener("click", function() {
    let sets = parseInt(document.getElementById("box3Sets").value);
    let reps = parseInt(document.getElementById("box3Reps").value);
    if(Number.isNaN(sets) || Number.isNaN(reps)){
        return;
    }
    plan.newExercise(new Exercise("Push up",sets,reps,0,document.getElementById("box3").src));
    showImages();
    showInfo();
});

document.getElementById("box4Button").addEventListener("click", function() {
    let sets = parseInt(document.getElementById("box4Sets").value);
    let reps = parseInt(document.getElementById("box4Reps").value);
    if(Number.isNaN(sets) || Number.isNaN(reps)){
        return;
    }
    plan.newExercise(new Exercise("Dips",sets,reps,0,document.getElementById("box4").src));
    showImages();
    showInfo();
});
document.getElementById("box5Button").addEventListener("click", function() {
    let sets = parseInt(document.getElementById("box5Sets").value);
    let reps = parseInt(document.getElementById("box5Reps").value);
    if(Number.isNaN(sets) || Number.isNaN(reps)){
        return;
    }
    plan.newExercise(new Exercise("Lateral raise",sets,reps,0,document.getElementById("box5").src));
    showImages();
    showInfo();
});
document.getElementById("box6Button").addEventListener("click", function() {
    let sets = parseInt(document.getElementById("box6Sets").value);
    let reps = parseInt(document.getElementById("box6Reps").value);
    if(Number.isNaN(sets) || Number.isNaN(reps)){
        return;
    }
    plan.newExercise(new Exercise("shoulder press",sets,reps,0,document.getElementById("box6").src));
    showImages();
    showInfo();
});

document.getElementById("box7Button").addEventListener("click", function() {
    let sets = parseInt(document.getElementById("box7Sets").value);
    let reps = parseInt(document.getElementById("box7Reps").value);
    if(Number.isNaN(sets) || Number.isNaN(reps)){
        return;
    }
    plan.newExercise(new Exercise("Cable face pull",sets,reps,0,document.getElementById("box7").src));
    showImages();
    showInfo();
});
document.getElementById("box8Button").addEventListener("click", function() {
    let sets = parseInt(document.getElementById("box8Sets").value);
    let reps = parseInt(document.getElementById("box8Reps").value);
    if(Number.isNaN(sets) || Number.isNaN(reps)){
        return;
    }
    plan.newExercise(new Exercise("Front raise",sets,reps,0,document.getElementById("box8").src));
    showImages();
    showInfo();
});
document.getElementById("box9Button").addEventListener("click", function() {
    let sets = parseInt(document.getElementById("box9Sets").value);
    let reps = parseInt(document.getElementById("box9Reps").value);
    if(Number.isNaN(sets) || Number.isNaN(reps)){
        return;
    }
    plan.newExercise(new Exercise("Squats",sets,reps,0,document.getElementById("box9").src));
    showImages();
    showInfo();
});
document.getElementById("box10Button").addEventListener("click", function() {
    let sets = parseInt(document.getElementById("box10Sets").value);
    //let reps = parseInt(document.getElementById("box1Reps").value);
    let time = parseFloat(document.getElementById("box10Time").value);
    if(Number.isNaN(sets) || Number.isNaN(time)){
        return;
    }
    plan.newExercise(new Exercise("Bike",sets,0,time,document.getElementById("box10").src));
    showImages();
    showInfo();
});
document.getElementById("box11Button").addEventListener("click", function() {
    let sets = parseInt(document.getElementById("box11Sets").value);
    let reps = parseInt(document.getElementById("box11Reps").value);
    if(Number.isNaN(sets) || Number.isNaN(reps)){
        return;
    }
    plan.newExercise(new Exercise("Quad extension",sets,reps,0,document.getElementById("box11").src));
    showImages();
    showInfo();
});

document.getElementById("box12Button").addEventListener("click", function() {
    let sets = parseInt(document.getElementById("box12Sets").value);
    let reps = parseInt(document.getElementById("box12Reps").value);
    if(Number.isNaN(sets) || Number.isNaN(reps)){
        return;
    }
    plan.newExercise(new Exercise("Leg press",sets,reps,0,document.getElementById("box12").src));
    showImages();
    showInfo();
});

document.getElementById("box13Button").addEventListener("click", function() {
    let sets = parseInt(document.getElementById("box13Sets").value);
    let reps = parseInt(document.getElementById("box13Reps").value);
    if(Number.isNaN(sets) || Number.isNaN(reps)){
        return;
    }
    plan.newExercise(new Exercise("Dumbbell row",sets,reps,0,document.getElementById("box13").src));
    showImages();
    showInfo();
});

document.getElementById("box14Button").addEventListener("click", function() {
    let sets = parseInt(document.getElementById("box14Sets").value);
    let reps = parseInt(document.getElementById("box14Reps").value);
    if(Number.isNaN(sets) || Number.isNaN(reps)){
        return;
    }
    plan.newExercise(new Exercise("Cable row",sets,reps,0,document.getElementById("box14").src));
    showImages();
    showInfo();
});
document.getElementById("box15Button").addEventListener("click", function() {
    let sets = parseInt(document.getElementById("box15Sets").value);
    let reps = parseInt(document.getElementById("box15Reps").value);
    if(Number.isNaN(sets) || Number.isNaN(reps)){
        return;
    }
    plan.newExercise(new Exercise("Pull up",sets,reps,0,document.getElementById("box15").src));
    showImages();
    showInfo();
});

document.getElementById("box16Button").addEventListener("click", function() {
    let sets = parseInt(document.getElementById("box16Sets").value);
    let reps = parseInt(document.getElementById("box16Reps").value);
    if(Number.isNaN(sets) || Number.isNaN(reps)){
        return;
    }
    plan.newExercise(new Exercise("Barbell row",sets,reps,0,document.getElementById("box16").src));
    showImages();
    showInfo();
});

/*
document.getElementById("box10Button").addEventListener("click", function() {
    plan.newExercise(new Exercise("backex",0,0,30,"https://www.mensjournal.com/.image/t_share/MTk2MTM2MTExNjc2MTM5MDEz/bentoveronearmrow.jpg\" alt = \"backex"));
    showImages();
    showInfo();
});

document.getElementById("box11Button").addEventListener("click", function() {
    plan.newExercise(new Exercise("backex2",0,0,30,"https://www.bulk.com/uk/the-core/wp-content/uploads/2018/03/useful-back-exercises.jpg\" alt = \"backex2"));
    showImages();
    showInfo();
});

document.getElementById("box12Button").addEventListener("click", function() {
    plan.newExercise(new Exercise("backex3",0,0,30,"https://www.basic-fit.com/dw/image/v2/BDFP_PRD/on/demandware.static/-/Library-Sites-basic-fit-shared-library/default/dw9d0ca39f/Roots/Blog/Blog-Header/528x352/Blog-training-rowing-back-pain-fitness.jpg?sw=600"));
    showImages();
    showInfo();
});




document.getElementById("restart").addEventListener("click", function() {
    // Create a new Workout object when the element with id "restart" is clicked
    plan = new Workout();

});



 */

