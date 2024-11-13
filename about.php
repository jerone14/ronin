<?php include_once "./include/header.php"; ?>

<style>
    body {
        background-position: center;
        background-size: cover;
        background: url("assets/background1.png") center/cover no-repeat fixed;
        /* Provide the correct path to your image */
    }

    .container {
        padding-top: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
     
    }

    .card {
        width: 90%;
        max-width: 540px;
        color: black;
        text-align: center;
        padding: 20px 15px;
        border: 1px solid rgba(255, 255, 255, 0.3);
        background: rgba(255, 255, 255, 0.5);
        
        backdrop-filter: blur(10px);
        
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        transform-origin: center;
        transform-style: preserve-3d;
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: scale(1.05) rotateX(5deg);
        
    }

    .container input {
        width: 100%;
        margin-bottom: 10px;
        border: none;
        border-bottom: 1px solid #333;
        /* Darken the border color */
        background: transparent;
        outline: none;
        height: 40px;
        color: #333;
       
        font-size: 16px;
    }

    .logo {
        width: 500px;  
        height: 300px;
    }
</style>

<div class="container">
    <br><br><br><br><br><br><br>

    <div class="container col-8" style="margin-top: 50px;">
        <div class="card">
            <img src="assets/logo1.png" class="logo" alt="Logo">

            <div class="card-body">
                <strong class="card-title">Paraiso Ni Ronin</strong>
            </div>

            <div class="card-footer text-center">
                <i>"Welcome to our Paraiso Ni Ronin platform! Nestled amid lush landscapes and surrounded by serene beauty, Paraiso Ni Ronin Resort offers an unforgettable retreat into nature’s embrace. Designed to provide both relaxation and adventure, the resort is a sanctuary for guests looking to unwind or explore. With meticulously designed rooms that blend luxury with comfort, guests can enjoy a refreshing stay, complete with views of scenic landscapes and soothing natural sounds.

At Paraiso Ni Ronin, we pride ourselves on offering diverse amenities, including room service, local and international cuisine at our ground-floor bar, and an array of activities that invite exploration and enjoyment. Guests can embark on guided tours, relax by the pool, or use our available rides to discover nearby attractions, all while experiencing a warm and welcoming atmosphere. Dedicated to excellent service and the highest standards of hospitality, Paraiso Ni Ronin Resort is more than a destination; it’s a paradise crafted for your perfect escape.

."</i>
            </div>
        </div>
    </div>
</div>

<?php include_once "./include/footer.php"; ?>
