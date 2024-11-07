
export class Exercise {
    constructor(name,sets,reps,time,image) {
        this._name = name;
        this._sets = sets;
        this._reps = reps;
        this._time = time;
        this._image = image;
    }
    get name() {
        return this._name;
    }

    get sets() {
        return this._sets;
    }

    get reps() {
        return this._reps;
    }

    get time() {
        return this._time;
    }

    get image() {
        return this._image;
    }
}
// class for Workouts
export class Workout {
    constructor(name = "") {
        this.name = name;
        this.workout = [];
    }
    newExercise(name,sets,reps,time){
        let ex = new Exercise(name,sets,reps,time)
        this.workout.push(ex)
        return ex
    }

    get numberOfExercises(){
        return this.workout.length
    }
    numberOfSetsTotal(){
        let TotalSets = 0;
        for (let i = 0; i < this.workout.length; i++) {
            TotalSets = TotalSets + this.workout[i].name.sets;
        }
        return TotalSets;
    }
}