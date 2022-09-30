async function loginHandler() {
    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");
    
    var raw = JSON.stringify({
        "email": document.getElementById('login_email').value,
        "password": document.getElementById('login_pwd').value
      });

    console.log('get element by id successful');

    var requestOptions = {
      method: 'POST',
      headers: myHeaders,
      body: raw,
      redirect: 'follow'
    };
    
    fetch("http://localhost:8080/auth/login", requestOptions)
      .then(response => response.text())
      .then(result => console.log(result))
      .catch(error => console.log('error', error)); 
}