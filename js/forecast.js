function getHighTemp(accessDate){
    var requestOptions = {
        method: 'GET',
        redirect: 'follow'
      };
      
      fetch("http://localhost:8080/forecasts", requestOptions)
        .then(response=> response.json())
        .then((data) => 
            data.forEach(element => {
                if (element.date.includes(accessDate)){
                    document.getElementById('highTemp').innerHTML = element.highTemp + "°C";
                    document.getElementById('lowTemp').innerHTML = element.lowTemp + "°C";
                    return;
                }
            }))
        .catch(error => console.log('error', error));
}