<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script>
        function showError(message) {
            alert(message);
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
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
            background-color: rgb(152, 152, 152);
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
        .input-box i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.8);
        }
        .remember-forgot-box {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
            font-size: 15px;
        }
        .remember-forgot-box label {
            display: flex;
            gap: 8px;
            cursor: pointer;
        }
        .remember-forgot-box input {
            accent-color: white;
            cursor: pointer;
        }
        .remember-forgot-box a {
            color: white;
            text-decoration: underline;
        }
        .login-btn, .back {
            width: 100%;
            padding: 10px 0;
            border: none;
            border-radius: 99px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }
        .login-btn {
            background: #0B87EC;
        }
        .back {
            background: #2F9CF4;
        }
        .register {
            margin-top: 15px;
            font-size: 15px;
        }
        .register a {
            color: white;
            text-decoration: underline;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "gasbooking";
    $con = new mysqli($server, $username, $password, $database);
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'] ?? '';
        $newpassword = $_POST['newpassword'] ?? '';
        if (!empty($email) && !empty($newpassword)) {
            $stmt = $con->prepare("SELECT * FROM signup WHERE email = ? AND newpassword = ?");
            $stmt->bind_param("ss", $email, $newpassword);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $_SESSION['email'] = $email;
                header("Location: homepage2.php");
                exit();
            } else {
                echo "<script>showError('Invalid email or password.');</script>";
            }
            $stmt->close();
        } else {
            echo "<script>showError('Please fill in all fields.');</script>";
        }
    }
    $con->close();
    ?>
    <div class="login-form">
        <form action="login.php" method="post">
            <h1 class="login-title">Login</h1>
            <div class="input-box">
                <input type="email" id="email" name="email" placeholder="Email" required>
                <i class='bx bx-user'></i>
            </div>
            <div class="input-box">
                <input type="password" id="newpassword" name="newpassword" placeholder="Password" required>
                <i class='bx bx-lock-alt'></i>
            </div>
            <div class="remember-forgot-box">
                <label for="remember">
                    <input type="checkbox" id="remember" name="remember">
                    Remember me
                </label>
                <a href="Forgetpassword.html">Forgot Password</a>
            </div>
            <button class="login-btn" type="submit" name="submit">Login</button><br><br>
            <button class="back" formaction="homepage1.html">Back</button>
            <p class="register">
                Don't have an account?
                <a href="signup.html">Register</a>
            </p>
        </form>
    </div>
</body>
</html>