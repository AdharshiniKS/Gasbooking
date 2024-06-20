<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script>
        function showSuccessMessage() {
            alert('Account created successfully');
            window.location.href = 'homepage1.php';
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url('san.jpg');
            background-size: cover;
            background-position: center;
            background-color: rgb(152, 152, 152); /* Fallback color */
        }

        .login-form {
            background: rgba(0, 0, 0, 0.8);
            border: 3px solid rgba(255, 255, 255, 0.3);
            padding: 30px;
            border-radius: 16px;
            backdrop-filter: blur(25px);
            text-align: center;
            color: white;
            width: 400px;
            box-shadow: 0px 0px 20px 10px rgba(0, 0, 0, 0.15);
        }

        .login-title {
            font-size: 40px;
            margin-bottom: 40px;
        }

        .input-box {
            margin: 20px 0;
            position: relative;
        }

        .input-box input {
            width: 85%;
            background: rgba(0, 0, 0, 0.1);
            border: none;
            padding: 12px 12px 12px 45px;
            border-radius: 99px;
            outline: 3px solid transparent;
            transition: 0.3s;
            font-size: 17px;
            color: white;
            font-weight: 600;
        }

        .input-box input::placeholder {
            color: rgba(255, 255, 255, 0.8);
            font-size: 17px;
            font-weight: 500;
        }

        .input-box input:focus {
            outline: 3px solid rgba(255, 255, 255, 0.3);
        }

        .input-box input::-ms-reveal {
            filter: invert(100%);
        }

        .input-box i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.8);
        }

        .sign-up-btn, .back {
            width: 100%;
            padding: 10px 0;
            background: #2F9CF4;
            border: none;
            border-radius: 99px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .sign-up-btn:hover, .back:hover {
            background: #0B87EC;
        }

        .message {
            background-color: rgba(255, 0, 0, 0.5);
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .message p {
            margin: 0;
        }

        .btn {
            width: 100%;
            padding: 10px 0;
            background: #2F9CF4;
            border: none;
            border-radius: 99px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background: #0B87EC;
        }
    </style>
</head>
<body>
    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "gasbooking";
    $con = mysqli_connect($server, $username, $password, $database);
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $newpassword = mysqli_real_escape_string($con, $_POST['newpassword']);
        $reenterpassword = mysqli_real_escape_string($con, $_POST['reenterpassword']);
        if ($newpassword !== $reenterpassword) {
            echo "<div class='message'>
                    <p>Passwords do not match, try again!</p>
                    <button class='btn' onclick='javascript:self.history.back()'>Go Back &amp; Try Again</button>
                </div><br>";
        } else {
            $verify_query = mysqli_query($con, "SELECT email FROM signup WHERE email='$email'");
            if (mysqli_num_rows($verify_query) != 0) {
                echo "<div class='message'>
                        <p>This email is already used, try another!</p>
                    </div><br>";
            } 
            else {
                $insert_query = mysqli_query($con, "INSERT INTO signup (name, email, address, newpassword) VALUES ('$name', '$email', '$address', '$newpassword')");
                
                if ($insert_query) {
                    echo "<script>showSuccessMessage();</script>";
                } 
                else {
                    die("Error: " . mysqli_error($con));
                }
            }
        }
    }
    ?>
    <div class="login-form">
        <form action="" method="POST">
            <h1 class="login-title">Sign-Up</h1>
            <div class="input-box">
                <input type="text" id="name" name="name" placeholder="Name" required>
                <i class='bx bx-user'></i>
            </div>
            <div class="input-box">
                <input type="email" id="email" name="email" placeholder="Email" required>
                <i class='bx bx-envelope'></i>
            </div>
            <div class="input-box">
                <input type="text" id="address" name="address" placeholder="Address" required>
                <i class='bx bx-home'></i>
            </div>
            <div class="input-box">
                <input type="password" id="newpassword" name="newpassword" placeholder="Password" minlength="5" maxlength="15" pattern="[a-zA-Z0-9]+" required>
                <i class='bx bx-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="password" id="reenterpassword" name="reenterpassword" placeholder="Re-enter password" minlength="5" maxlength="15" pattern="[a-zA-Z0-9]+" required>
                <i class='bx bx-lock-alt'></i>
            </div>
            <button class="sign-up-btn" type="submit" name="submit">Sign-up</button>
            <br><br>
        </form>
    </div>
</body>
</html>