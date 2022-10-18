function addNewExercise(){

    var myHeaders = new Headers();
    var userAccessToken = localStorage.getItem('accessToken');

    myHeaders.append("Authorization", userAccessToken);
    myHeaders.append("Content-Type", "application/json");
    console.log("Hi");
    var date = document.getElementById("start").value;
    var exercise = document.getElementById("exercise").value;
    // push up, sit up, running, walking, cycling, swimming, Yoga, weightlifting
    //const exercisesID = ["633aeca7c395a37172c92aaf","633aeca7c395a37172c92ab0","633aeca7c395a37172c92ab1","633aeca7c395a37172c92ab2",
    //                    "633aeca7c395a37172c92ab3", "633aeca7c395a37172c92ab4", "633aeca7c395a37172c92ab5", "633aeca7c395a37172c92ab6"]
    const exercisesID = ["634cd05932c025f5f59d5867","633aeca7c395a37172c92ab0","633aeca7c395a37172c92ab1","633aeca7c395a37172c92ab2",
    "633aeca7c395a37172c92ab3", "633aeca7c395a37172c92ab4", "633aeca7c395a37172c92ab5", "633aeca7c395a37172c92ab6"]
    const exerciseId = exercisesID[exercise-1];
    var raw = JSON.stringify({
        "exerciseID": exerciseId,
        "quantity": document.getElementById("rep").value,
        "sets": document.getElementById("set").value
    });

    var requestOptions = {
        method: 'POST',
        headers: myHeaders,
        body: raw,
        redirect: 'follow'
    };
    //const userId = '633bee48c585975318ce54fd'; //hz's userId
    const userId = '63249e50bafe9f2070ef7d3b'; // cy's userId
    fetch(`http://localhost:8080/plan/${date.slice(6)}-${date.slice(0,2)}-${date.slice(3,5)}/activity`, requestOptions)
    .then((response) => {
        // Our handler throws an error if the request did not succeed.
        if (!response.ok) {
          alert("Failed to add exercise: Please check your again...");
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

async function editExercise(){
    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");
    
    var raw = JSON.stringify({
      "activityID": "633c0e2051360afcf8e78d2f",
      "exerciseID": "633aeca7c395a37172c92ab0",
      "quantity": 50,
      "sets": 3,
      "done": false
    });
    
    var requestOptions = {
      method: 'PATCH',
      headers: myHeaders,
      body: raw,
      redirect: 'follow'
    };
    
    fetch("http://localhost:8080/plan/2022-10-04&633bee48c585975318ce54fd/activity", requestOptions)
      .then(response => response.text())
      .then(result => console.log(result))
      .catch(error => console.log('error', error));
}

async function deleteExercise(){

}

async function getFitnessPlan(){
    var myHeaders = new Headers();
    myHeaders.append("Authorization", "e");
    myHeaders.append("Content-Type", "application/json");

    var requestOptions = {
        method: 'GET',
        headers: myHeaders,
        redirect: 'follow'
    };

    fetch("http://localhost:8080/plan/date/2022-10-05&633bee48c585975318ce54fd", requestOptions)
  .then(response => response.text())
  .then(result => console.log(result))
  .catch(error => console.log('error', error));
}