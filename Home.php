<!DOCTYPE html>
<html>
<head>
  <title>Diaz Website</title>
  <style>
    body {
      background-color: #f4f4f4;
     font-family: Arial, sans-serif;
     margin: 0;
     padding: 0;
     background-image: url("https://www.shutterstock.com/shutterstock/photos/2464382765/display_1500/stock-vector-technical-support-customer-help-online-tech-support-customer-service-business-and-technology-2464382765.jpg");
    }
    /* login box area */
.login-container {
    background-color: #070744;
    border-radius: 60px;
    padding: 40px;
    width: 230px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
    border: 2px solid blue;
    opacity: 0.9;
}
.login-container img {
    display: block;
    margin: 0 auto;
    border-radius: 100%;
}
h2 {
    text-align: center;
    color:white;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: white;
}

input[type="text"],
input[type="password"] {
    width: 80%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="submit"] {
    width: 80%;
    background-color: #0909a5;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}
    .title {
            background-color: black;
            overflow: hidden;
            padding: 10px 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            border-bottom: 2px solid blue;
        }


  .title a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 12px 90px 20px;
            text-decoration: none;
            font-size: 18px;
        }

        .title a:hover {
            background-color: blue;
            color: white;
        }


  </style>
</head>
<body>
    <div class="title">
     <a href="index.php">Diaz</a>
    <a href="Home.php">Home</a>
    <a href="About Diaz.php">About</a>
    <a href="Diaz Services.php">Services</a>
    <a href="My Contact.php">Contact</a>
    </div>
  <div class="login-container">

                <img src="https://www.pngitem.com/pimgs/m/65-659809_call-a-va-virtual-assistant-logo-png-transparent.png" width="150" height="150" alt="Avatar" class="avatar">

                <h2>"Guiding you in a technological future"</h2>

                <form method="post" action="login.php">
                
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" required=""><br><br>
                    
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required=""><br><br>
                    
                    <input type="submit" value="Login">
                </form>

        </div>
  
   
  
</body>
</html>