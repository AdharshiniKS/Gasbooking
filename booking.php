<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAIL Gas Booking</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800&display=swap');
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
            background-color: rgb(152, 152, 152);
            color: #FFFFFF;
        }

        .form-container {
            background: rgba(0, 0, 0, 0.8);
            border: 3px solid rgba(255, 255, 255, 0.3);
            padding: 30px;
            border-radius: 16px;
            backdrop-filter: blur(25px);
            text-align: center;
            width: 100%;
            max-width: 400px;
            box-shadow: 0px 0px 20px 10px rgba(0, 0, 0, 0.15);
        }

        .form-container h2 {
            font-size: 30px;
            margin-bottom: 40px;
        }

        .input-box {
            margin: 20px 0;
            position: relative;
        }

        .input-box input, .input-box textarea {
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

        .input-box input::placeholder, .input-box textarea::placeholder {
            color: rgba(255, 255, 255, 0.8);
            font-size: 17px;
            font-weight: 500;
        }

        .input-box input:focus, .input-box textarea:focus {
            outline: 3px solid rgba(255, 255, 255, 0.3);
        }

        .input-box i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.8);
        }

        .submit-btn {
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

        .submit-btn:hover {
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
        $custid = mysqli_real_escape_string($con, $_POST['custid']);
        $cylinder = mysqli_real_escape_string($con, $_POST['cylinder']);
        $date = mysqli_real_escape_string($con, $_POST['date']);
        $time = mysqli_real_escape_string($con, $_POST['time']);
        $check_query = mysqli_query($con, "SELECT email FROM booking WHERE email='$email'");
        if (mysqli_num_rows($check_query) > 0) {
            echo "<script>alert('Order has already been placed with this email.');</script>";
        } 
        else {
            $insert_query = mysqli_query($con, "INSERT INTO booking (name, email, custid, cylinder, date, time) VALUES ('$name', '$email', '$custid', '$cylinder', '$date', '$time')");
            if ($insert_query) {
                echo "<script>alert('Your order has been placed successfully, thank you for booking!');</script>";
                echo "<script>window.location.href = 'homepage2.php';</script>";
            } else {
                die("Error: " . mysqli_error($con));
            }
        }
    } 
?>
    <div class="form-container">
        <form id="bookingForm" method="POST" action="">
            <h1>Book Now</h1>
            <div class="input-box">
                <input type="text" id="name" name="name" placeholder="Username" required>
                <i class='bx bx-user'></i>
            </div>
            <div class="input-box">
                <input type="email" id="email" name="email" placeholder="Email" required>
                <i class='bx bx-envelope'></i>
            </div>
            <div class="input-box">
                <input type="text" id="custid" name="custid" placeholder="Customer ID" required>
                <i class='bx bx-id-card'></i>
            </div>
            <div class="input-box">
                <input type="text" id="cylinder" name="cylinder" placeholder="Number of Cylinders" required>
                <i class='bx bx-gas-pump'></i>
            </div>
            <label><b><i>Expected delivery date and time</i></b></label>
            <div class="input-box">
                <input type="date" id="date" name="date" placeholder="Date of Delivery" required>
                <i class='bx bx-calendar'></i>
            </div>
            <div class="input-box">
                <input type="time" id="time" name="time" placeholder="Time of Delivery" required>
                <i class='bx bx-time'></i>
            </div>
            <button class="submit-btn" type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
