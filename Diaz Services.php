<!DOCTYPE html>
<html>
<head>
  <title>Diaz website</title>
  <style>
    body {
        background-color: #f4f4f4;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: url("https://www.shutterstock.com/shutterstock/photos/2464382765/display_1500/stock-vector-technical-support-customer-help-online-tech-support-customer-service-business-and-technology-2464382765.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
    .learn-more {
        display: inline-block;
        margin-top: 10px;
        padding: 8px 15px;
        background-color: blue;
        color: white;
        text-decoration: none;
        font-size: 14px;
        border-radius: 5px;
        transition: 0.3s;
        cursor: pointer;
    }

    .learn-more:hover {
        background-color: darkblue;
    }

    .popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.8);
        color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        z-index: 1000;
        text-align: center;
        width: 300px;
    }

    .popup h2 {
        margin: 0 0 10px;
    }

    .popup p {
        font-size: 16px;
        color: white;
    }

    .close-btn {
        background-color: blue;
        color: white;
        border: none;
        padding: 8px 15px;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
    }

    .close-btn:hover {
        background-color: darkblue;
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


    .services-section {
        color: white;
        text-align: center;
        padding: 60px 20px;
        margin-top: 100px;
    }

    .services-container {
        display: flex;
        justify-content: center;
        gap: 30px;
        flex-wrap: wrap;
    }

    .service-box {
        background-color: black;
        opacity: 0.8;
        color: white;
        border-radius: 10px;
        padding: 30px;
        width: 350px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        border: 2px solid blue;
        text-align: center;
        margin-top: 20px;
    }

    .service-box img {
        width: 200px;
        height: 200px;
        margin-bottom: 20px;
        border-radius: 10px;
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

  <div class="services-section" id="services">
    <h1>Services Offered By Our Business</h1>
    <div class="services-container">
      <div class="service-box">
        <img src="https://www.seekpng.com/png/detail/831-8315144_tech-support-computer-tech-support-logo.png" alt="Service 1">
        <h3>Tech Support</h3>
        <p>Tech support helps with computer issues, software setup, hardware fixes, internet problems, and security.</p>
        <button class="learn-more" onclick="openPopup('Tech Support', 'We offer 24/7 tech support for businesses and individuals.')">Learn More</button>
      </div>

      <div class="service-box">
        <img src="https://png.pngtree.com/png-clipart/20190905/ourlarge/pngtree-blue-gradient-network-security-logo-png-image_1722555.jpg" alt="Service 2">
        <h3>Network Security</h3>
        <p>Network security services help protect a business network.</p>
        <button class="learn-more" onclick="openPopup('Network Security', 'We provide advanced security solutions to safeguard your data.')">Learn More</button>
      </div>

      <div class="service-box">
        <img src="https://img.freepik.com/free-vector/set-black-circle-social-media-logos-with-new-x-logo_78370-3651.jpg" alt="Service 3">
        <h3>Social Media Interaction</h3>
        <p>We interact with customers and curious audiences.</p>
        <button class="learn-more" onclick="openPopup('Social Media Interaction', 'We help you engage with your audience effectively.')">Learn More</button>
      </div>
    </div>
  </div>

  <div id="popup" class="popup">
    <h2 id="popup-title"></h2>
    <p id="popup-text"></p>
    <button class="close-btn" onclick="closePopup()">Close</button>
  </div>

  <script>
    function openPopup(title, text) {
        document.getElementById('popup-title').innerText = title;
        document.getElementById('popup-text').innerText = text;
        document.getElementById('popup').style.display = 'block';
    }

    function closePopup() {
        document.getElementById('popup').style.display = 'none';
    }
  </script>
</body>
</html>


