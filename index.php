<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relax Beach Resort</title>
    <style>
        * {
            box-sizing: border-box;
        }
        html, body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: url('assets/background1.png') no-repeat center center fixed;
            backdrop-filter: blur(5px);
            background-size: cover;
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: rgba(0, 0, 0, 0.4);
            background: linear-gradient(to right, rgba(0, 0, 0, 0.3), rgba(250, 250, 250, 0.3));
            width: 80%;
            max-width: 950px;
            padding: 35px;
            margin: auto;
            text-align: center;
            box-shadow: 5px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            color: whitesmoke;
            margin-top: 10px;
            flex-grow: 1;
            margin-bottom: 30px; /* Prevent content overlap with footer */
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: flex-end;
            font-size: 20px;
        }
        li {
            display: inline;
            margin: 0 15px;
        }
        li a {
            text-decoration: none;
            color: black;
        }
        li a:hover {
            background-color: rgba(250, 250, 250, 0.1);
            color: blue;
            padding: 5px;
        }
        .header-text {
            text-align: left;
            font-size: 40px;
            margin-top: 20px;
            color: #333;
        }
        .subtext {
            text-align: left;
            font-size: 20px;
            margin-top: 10px;
            color: #333;
        }
        img[alt="Relax Beach Logo"] {
            width: 125px;
            height: 100px;
            border-radius: 50%; /* Makes the image circular */
            object-fit: cover; /* Ensures the image scales within the circular frame */
        }
        #video-container {
            margin-top: 20px;
            text-align: center;
            display: flex;
            justify-content: center;
        }
        #facebook-video {
            width: 100%;
            max-width: 600px;
            height: 350px;
            border: none;
            overflow: hidden;
        }
    </style>
</head>
<body>

    <div class="container">
        <img src="assets/logo1.png" width="125" height="100" align="left" alt="Resort Logo">
        
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="#">Rooms</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Contact</a></li>
        </ul>

        <div class="header-text"><b>Welcome to Paraiso Ni Ronin Resort</b></div>
        <div class="subtext">Experience the perfect blend of comfort and luxury with our exclusive resort services and more.</div>

        <!-- Display video by default -->
        <div id="video-container">
            <iframe id="facebook-video" src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fparaisonironins%2Fvideos%2F355004172530908%2F&show_text=false&width=560&autoplay=true&t=0" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
        </div>
        
    </div>

    <footer>
        <?php include 'include/footer.php';?>
    </footer>
</body>
</html>
