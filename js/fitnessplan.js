async function addNewExercise(){
    var exercisesList = {};
    try {     
      const response = await fetch('http://localhost:8080/exercise', {
        method: 'get'
      });
      const results = await response.json();
      results.forEach(exercise => {
        exercisesList[exercise.name] = exercise._id;
      })
      console.log(exercisesList);
    } catch(err) {
      console.error(`Error: ${err}`);
    };    

    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");
    var date = document.getElementById("start").value;
    var exerciseID = exercisesList[document.getElementById("exercise").value];
    
    var raw = JSON.stringify({
        "exerciseID": exerciseID,
        "quantity": document.getElementById("rep").value,
        "sets": document.getElementById("set").value
    });

    var requestOptions = {
        method: 'POST',
        headers: myHeaders,
        body: raw,
        redirect: 'follow'
    };

    fetch(`http://localhost:8080/plan/${date.slice(6)}-${date.slice(0,2)}-${date.slice(3,5)}&633bee48c585975318ce54fd/activity`, requestOptions)
    .then(response => response.json())
    .then(result => console.log(result))
    .catch(error => console.log('error', error));
}

async function editExercise(){
    alert(document.getElementById("current-reps").value);
    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");
    
    var raw = JSON.stringify({
      "activityID": "633c0e2051360afcf8e78d2f",
      "exerciseID": "633aeca7c395a37172c92ab0",
      "quantity": document.getElementById("edit-reps").value,
      "sets": document.getElementById("edit-sets").value,
      "done": false
    });
    
    var requestOptions = {
      method: 'PATCH',
      headers: myHeaders,
      body: raw,
      redirect: 'follow'
    };
    
    fetch("http://localhost:8080/plan/2022-10-04&633bee48c585975318ce54fd/activity", requestOptions)
      .then(response => response.json())
      .then(result => console.log(result))
      .catch(error => console.log('error', error));
}

async function deleteExercise(){

}

async function getFitnessPlan(){
    var exercisesList = {};
    try {     
      const response = await fetch('http://localhost:8080/exercise', {
        method: 'get'
      });
      const results = await response.json();
      results.forEach(exercise => {
        exercisesList[exercise._id] = exercise.name;
      })
      console.log(exercisesList);
    } catch(err) {
      console.error(`Error: ${err}`);
    };    
    var myHeaders = new Headers();
    myHeaders.append("Authorization", "e");
    myHeaders.append("Content-Type", "application/json");
    var requestOptions = {
        method: 'GET',
        headers: myHeaders,
        redirect: 'follow'
    };

    fetch("http://localhost:8080/plan/date/2022-10-05&633bee48c585975318ce54fd", requestOptions)
  .then(response => response.json())
  .then(result => {
    const activities = result.activities;
    activities.forEach(async (activity) => {
      const exerciseName = exercisesList[activity.exerciseID]
      const mainDiv = document.getElementById("dynamic-container");
      const newDiv = document.createElement("div");
      str = "";
      str = str + `<div class="col-md-2">
                        <input class="form-check-input" type="checkbox" value="" id="${exerciseName}">
                    </div>
                    <div class="col-md-5">
                        <label class="form-check-label" for="${exerciseName}" style="font-size: 13px;">
                            <b>${exerciseName}</b>
                        </label>
                    </div>
                    <div class="col-md-5">
                        <button onclick="openForm()" class="btn btn-danger" style="padding: 0.5em; text-decoration: none;">
                            <span class="glyphicon glyphicon-pencil"></span> 
                        </button>

                        <div class="form-popup" id="myForm">
                          <form action="/action_page.php" class="form-container">
                            <select id="exercise">
                              <option value="Push Up">Push Up</option>
                              <option value="Sit Up">Sit Up</option>
                              <option value="Running">Running</option>
                              <option value="Swimming">Swimming</option>
                              <option value="Weightlifting">Weightlifting</option>
                            </select>
                            </br>

                            <label for="Reps"><b>Number of Reps</b></label>
                            <input type="text" placeholder="" id="edit-reps" required>

                            <label for="Sets"><b>Number of Sets</b></label>
                            <input type="text" placeholder="" id="edit-sets" required>

                            <button type="submit" class="btn" onclick="editExercise()">Edit</button>
                            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                          </form>
                        </div>

                        <a href="#" onclick="deleteExercise(this)" class="btn btn-info" style="padding: 0.5em; text-decoration: none;">
                            <span class="glyphicon glyphicon-trash"></span> 
                        </a> 
                    </div>
                    <br /> <br /> <br />
                    <div class="col-md-6">
                        <span id="current-reps">Reps: ${activity.totalQuantity}</span>
                        <br />
                        <span id="current-sets">Sets: ${activity.sets}</span>
                    </div>
                    <div class="col-md-6">
                        <span class="glyphicon glyphicon-fire"></span> 102.60kcal
                        <br />
                        burned
                    </div>
                  </div>`
      newDiv.innerHTML = str;
      mainDiv.appendChild(newDiv);
    })
  })
  .catch(err => console.log(err));
}

function openForm(){
  document.getElementById("myForm").style.display = "block";
}

function closeForm(){
  document.getElementById("myForm").style.display = "none";
}