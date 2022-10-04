async function registerHandler() {
    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");

    console.log("trying to get element by id");

    var raw = JSON.stringify({
      "email": document.getElementById('user_email').value,
      "name": document.getElementById('user_name').value,
      "password": document.getElementById('user_pwd').value
    });

    console.log('get element by id successful');

    var requestOptions = {
      method: 'POST',
      headers: myHeaders,
      body: raw,
      redirect: 'follow'
    };
    
    fetch("http://localhost:8080/auth/register", requestOptions)
      .then((response) => {
        // Our handler throws an error if the request did not succeed.
        if (!response.ok) {
          alert(response.json());
          throw new Error(`HTTP error: ${response.status}`);
        }
        return response.text();
        })
      .then(result => {
        console.log(result);
        window.location.assign('http://127.0.0.1:8080/index.html');})
      .catch(error => console.log('error', error));   

    } 