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
      .then(response => response.text())
      .then(result => console.log(result))
      .catch(error => console.log('error', error)); 
}