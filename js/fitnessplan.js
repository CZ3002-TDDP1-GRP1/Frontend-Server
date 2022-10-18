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
  var userAccessToken = localStorage.getItem('accessToken');

  myHeaders.append("Authorization", userAccessToken);
  myHeaders.append("Content-Type", "application/json");
  console.log("Hi");
  var date = document.getElementById("start").value;
  var exerciseID = exercisesList[document.getElementById("exerciseList").value];
  console.log(document.getElementById("exerciseList").value);
  
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

  fetch(`http://localhost:8080/plan/${date.slice(6)}-${date.slice(0,2)}-${date.slice(3,5)}/activity`, requestOptions)
  .then((response) => {
      // Our handler throws an error if the request did not succeed.
      if (!response.ok) {
        alert("Failed to add exercise: Please check your  again...");
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.text();
      })
    .then(result => {
      console.log(result);
      alert("Exercise plan added...");
      window.location.assign('http://127.0.0.1:8080/index.html');})
    .catch(error => console.log('error', error)); 
}

async function editExercise(clickID){
  const clickList = clickID.split(",");
  console.log(clickList[0]);
  console.log(clickList[1]);
  var myHeaders = new Headers();
  var userAccessToken = localStorage.getItem('accessToken');
  // var date = document.getElementById("start").value;
  
  myHeaders.append("Authorization", userAccessToken);
  myHeaders.append("Content-Type", "application/json");
  var raw = JSON.stringify({
    "activityID": clickList[0],
    "exerciseID": clickList[1],
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
  
  await fetch(`http://localhost:8080/plan/2022-10-18/activity`, requestOptions)
    .then(response => response.json())
    .then(result => {
      console.log(result)
      alert("Exercise plan edited...");
      window.location.assign('http://127.0.0.1:8080/index.html')
    })
    .catch(error => console.log('error', error));
}

async function deleteExercise(activityID){
console.log(activityID);
var myHeaders = new Headers();
var userAccessToken = localStorage.getItem('accessToken');
// var date = document.getElementById("start").value;

myHeaders.append("Authorization", userAccessToken);
myHeaders.append("Content-Type", "application/json");

var raw = JSON.stringify({
  "activityID": activityID
});

var requestOptions = {
  method: 'DELETE',
  headers: myHeaders,
  body: raw,
  redirect: 'follow'
};

fetch(`http://localhost:8080/plan/2022-10-18/activity`, requestOptions)
  .then(response => response.text())
  .then(result => {
    console.log(result)
    alert("Exercise plan deleted...");
    window.location.assign('http://127.0.0.1:8080/index.html')
  })
  .catch(error => console.log('error', error));
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
var userAccessToken = localStorage.getItem('accessToken');
// var date = document.getElementById("start").value;

myHeaders.append("Authorization", userAccessToken);
myHeaders.append("Content-Type", "application/json");
var requestOptions = {
    method: 'GET',
    headers: myHeaders,
    redirect: 'follow'
};

fetch(`http://localhost:8080/plan/2022-10-18`, requestOptions)
.then(response => response.json())
.then(result => {
const activities = result.activities;
count = 0;
activities.forEach(async (activity) => {
  const activityID = activity._id;
  // localStorage.setItem(activityID, JSON.stringify(activity));
  count += 1;
  const exeID = activity.exerciseID;
  const exerciseName = exercisesList[exeID];
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
                    <button onclick="openForm(this.id)" class="btn btn-danger" wstyle="padding: 0.5em; text-decoration: none;">
                        <span class="glyphicon glyphicon-pencil"></span> 
                    </button>

                    <div class="form-popup" id="myForm">
                      <form class="form-container">
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

                        <a class="btn btn-info" onclick="editExercise(this.id)" id="${[activityID,exeID]}">Edit</a>
                        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                      </form>
                    </div>

                    <a href="#" id="${activityID}" onclick="deleteExercise(this.id)" class="btn btn-info" style="padding: 0.5em; text-decoration: none;">
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

function openForm(clickID){
// const clickList = clickID.split(",");
// var myHeaders = new Headers();
// var userAccessToken = localStorage.getItem('accessToken');

// myHeaders.append("Authorization", userAccessToken);
// myHeaders.append("Content-Type", "application/json");
// var requestOptions = {
//     method: 'GET',
//     headers: myHeaders,
//     redirect: 'follow'
// };

// fetch("http://localhost:8080/plan/2022-10-17", requestOptions)
// .then(response => response.json())
// .then(result => {const activities = result.activities;
//   const activityDict = {}
//   activities.forEach(async (activity) => {
//     activityDict[activity.exerciseID] = activity;
//   })
//   console.log(activityDict[clickList[1]].totalQuantity);
//   document.getElementById("edit-reps").placeholder = activityDict[clickList[1]].totalQuantity;
//   document.getElementById("edit-sets").placeholder = activityDict[clickList[1]].sets;
// });
document.getElementById("myForm").style.display = "block";
}

function closeForm(){
document.getElementById("myForm").style.display = "none";
}