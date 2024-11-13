<?php
   
include_once "./include/header.php";
include_once "./msg/login.php";
?>  
 <style>
        body {
    background-position: center;
    background-size: cover;
    background: url("assets/background1.png") center/cover no-repeat fixed;
}

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh; 
        }

        .card {
    width: 90%;
    max-width: 440px;
    color: black;
    text-align: center;
    padding: 50px 35px;
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

        .btn {
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            font-weight: 500;
            background: #fff;
            color: #ff01cf;
            padding: 10px 30px;
            border-radius: 30px;
            margin: 30px 0 10px;
        }

        .container input {
            width: 100%;
            margin-bottom: 10px;
            border: none;
            border-bottom: 1px solid #333; 
            background: transparent;
            outline: none;
            height: 40px;
            color: #333; 
            font-size: 16px;
        }

        .container button[type="submit"] {
            border: none;
            outline: none;
            width: 60%;
            height: 40px;
            background: #007bff; 
            color: #fff;
            font-size: 16px;
            border-radius: 20px;
            cursor: pointer;
        }

        .container button[type="submit"]:hover {
            background: #0056b3; 
        }

      
        .card-img-top {
            border-radius: 50%;
        }

       
        .alert {
            margin-top: 20px;
        }
    </style>
<div class="container">
    <div class="card">
        <img src="assets/logo1.png" style="height: 150px; width: 150px; margin-left: 110px" class="card-img-top"
             alt="Logo">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center">Login </h3>
            </div>
            <hr>

            <form action="scripts/login.php" method="post">
                <div class="form-group">
    <label for="">Contact No. or Admin Access Code</label>
 <input id="contact" name="contact" type="text" class="form-control"
       placeholder="Enter Your Contact No. or Email" 
       pattern="(\d{10}|admin_access_code|[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})" 
       title="Enter a 10-digit contact number, email address, or the admin access code" 
       required>


</div>


                <div class="form-group">
                    <label for="">Password</label>
                    <input id="password" name="password" type="password" class="form-control"
                        placeholder="Enter Password" minlength="4" required>
                </div>

                <button style="margin-top: 30px;" class="btn btn-block btn-primary" type="submit" name="login"
                    id="login">Login</button><br>
                    <a href="forgot_password.php">Forgot Password</a>
                    <br><a href="user_register.php">Register</a>
            </form>

        </div>
    </div>
    <br><br>
</div>


<?php include_once "./include/footer.php";
