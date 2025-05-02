<html>
<head>
    <style>
*      
body {
      background-color: #f4f4f4;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      height: 100vh;
      background-image: url('https://www.shutterstock.com/shutterstock/photos/2464382765/display_1500/stock-vector-technical-support-customer-help-online-tech-support-customer-service-business-and-technology-2464382765.jpg'); 
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
 }
.login-container {
    background-color: rgba(0, 0, 0, 0.9);
    border-radius: 15px;
    padding: 30px;
    width: 320px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateY(-50%);
    text-align: center;
    box-shadow: 0 0 15px blue;
    border: 2px solid blue;
    transition: 0.3s;
    transform: translate(-50%, -50%)
  }

  .login-container:hover {
    box-shadow: 0 0 25px #00f, 0 0 50px rgba(0, 0, 255, 0.6);
  }

  .login-container img {
    display: block;
    margin: 0 auto;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    border: 2px solid blue;
    box-shadow: 0 0 10px blue;
  }

  .login-container h2 {
    text-align: center;
    color: white;
    text-shadow: 0 0 5px blue;
  }
  label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      color: white;
    }

    input[type="text"],
    input[type="password"] {
      width: 90%;
      padding: 10px;
      margin-bottom: 15px;
      border: none;
      border-radius: 5px;
      background-color: black;
      color: white;
      text-align: center;
      border: 2px solid blue;
      box-shadow: 0 0 5px blue;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
      outline: none;
      box-shadow: 0 0 10px cyan;
    }

    input[type="submit"] {
      width: 50%;
      background-color: blue;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.3s;
      font-weight: bold;
      box-shadow: 0 0 10px blue;
    }

    input[type="submit"]:hover {
      background-color: navy;
      box-shadow: 0 0 20px cyan;
    }
    </style>
    </head> 
    <body>
        <div class="login-container">
            <img src="https://www.pngitem.com/pimgs/m/65-659809_call-a-va-virtual-assistant-logo-png-transparent.png">
            <h2>Login</h2>
            <form method="post" action="login.php" id="loginForm">
              <label for="username">Username:</label>
              <input type="text" name="username" id="username" required="" fdprocessedid="hhur6p"><br>
        
              <label for="password">Password:</label>
              <input type="password" name="password" id="password" required="" fdprocessedid="yy7zn9"><br>
        
              <input type="submit" value="Login" fdprocessedid="u68ax8">
            </form>
            <script>
                document.getElementById('loginForm').addEventListener('submit', function(event) {
                  event.preventDefault();
            
                  var username = document.getElementById('username').value;
                  var password = document.getElementById('password').value;
            
                  if (username === 'user' && password === 'password') {
                    window.location.href = 'Home.php'; 
                    document.querySelector('.main-text').style.visibility = 'visible';
                    document.querySelector('.title').style.display = 'block';
                    document.querySelector('.login-container').style.display = 'none';
                  } else {
                    alert('Incorrect username or password.');
                  }
                });
              </script>
            
          </div>
       
<span id="PING_IFRAME_FORM_DETECTION" style="display: none;"></span></body></html>