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
      .then((response) => {
        // Our handler throws an error if the request did not succeed.
        if (!response.ok) {
          alert("Login Failed: Please check your email/password...");
          throw new Error(`HTTP error: ${response.status}`);
        }
        return response.text();
        })
      .then(result => {
        console.log(result);
        window.location.assign('http://127.0.0.1:8080/index.html');})
      .catch(error => console.log('error', error)); 
}