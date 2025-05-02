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
    
  background-color: black;
    border-radius: 5px;
    padding: 50px;
    width: 350px; 
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
    border: 2px solid blue;
    opacity: 0.8; 

    position: absolute; 
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
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
    background-color: #f11e1e;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}
.login-info {
      display: grid;
      grid-template-columns: max-content max-content auto;
      gap: 5px;
      color: white;
	  
    }

    .login-info label {
      font-weight: bold;
      min-width: 90px;
      text-align: left;
      white-space: nowrap;
	  
    }

    .colon {
      min-width: 10px;
    }

    .login-info span {
      text-align: left;
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
    <a href="#">Home</a>
    <a href="About Diaz.php">About</a>
    <a href="Diaz Services.php">Services</a>
    <a href="My Contact.php">Contact</a>
    </div>
    </div>
		
	  <div class="login-container">
    <img src="https://www.pngitem.com/pimgs/m/65-659809_call-a-va-virtual-assistant-logo-png-transparent.png" width="150" height="150" alt="Avatar" class="avatar">

    <h2>"Guiding you in a technological future"</h2>

    <form method="post" action="login.php">
      <div class="login-info">
        <label>Name</label> <span class="colon">:</span> <span>Mark Neon S. Diaz</span>
        <label>Phone #</label> <span class="colon">:</span> <span>09071626864</span>
        <label>Email</label> <span class="colon">:</span> <span>Markneond@gmail.com</span>
      </div>
    </form>
  </div>


</body></html>