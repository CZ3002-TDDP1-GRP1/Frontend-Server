function getForecastD(accessDate){
    var requestOptions = {
        method: 'GET',
        redirect: 'follow'
      };
      
      fetch("http://localhost:8080/forecasts", requestOptions)
        .then(response=> response.json())
        .then((data) => 
            data.forEach(element => {
                console.log("fetching forecast d");
                if (element.date.includes(accessDate)){
                    document.getElementById("mainForecastD").innerHTML = element.forecast;
                    return;
                }
            }))
        .catch(error => console.log('error', error));
}

function getForecastP(accessDate){
    var requestOptions = {
        method: 'GET',
        redirect: 'follow'
      };
      
      fetch("http://localhost:8080/forecasts", requestOptions)
        .then(response=> response.json())
        .then((data) => 
            data.forEach(element => {
                console.log("fetching forecasts p");
                if (element.date.includes(accessDate)){
                    if (element.wetWeather){
                        document.getElementById("mainForecastP").src = "images/thundercloud.png";
                        return;
                    }
                    else {document.getElementById("mainForecastP").src = "images/clear.png";}
                }
            }))
        .catch(error => console.log('error', error));
}

function getHighTemp(accessDate){
    var requestOptions = {
        method: 'GET',
        redirect: 'follow'
      };
      
      fetch("http://localhost:8080/forecasts", requestOptions)
        .then(response=> response.json())
        .then((data) => 
            data.forEach(element => {
                console.log("fetching forecast temp");
                if (element.date.includes(accessDate)){
                    document.getElementById('highTemp').innerHTML = element.highTemp + "°C";
                    document.getElementById('lowTemp').innerHTML = element.lowTemp + "°C";
                    return;
                }
            }))
        .catch(error => console.log('error', error));
}