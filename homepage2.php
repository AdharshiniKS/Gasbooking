<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gas Booking Service</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(120deg, #e4babe,  #fcf1ef,  #e8d8c9,  #ced3d7 ,  #5e606c);
            color: #000;
        }
        .navbar {
            background-color: #000;
        }
        .section {
            padding: 3rem 0;
        }
        .btn-custom {
            border-radius: 20px;
            padding: 10px 20px;
            background-color: #000;
            color: #ffffff;
            border: 2px solid #000;
        }
        .btn-custom:hover {
            background-color: #ffffff;
            color: #000;
            border-color: #000;
        }
        .card {
            border: none;
            margin-bottom: 2rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);
        }
        .card .card-header {
            background: #000000;
            color: #ffffff;
            font-size: 1.2rem;
        }
        .card .card-body .symbol {
            font-size: 24px;
            margin-right: 10px;
        }
        .card img {
            max-width: 100%;
            border-radius: 8px;
        }
        .interesting-facts {
            font-style: italic;
            color: #b5b3b3;
        }
        .new {
            background-color: #ffffff;
            border: none;
            color: rgb(0, 0, 0);
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 40px;
            margin: 4px 2px;
            border-radius: 15px;
            font-style: Lucida Console;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Gas Booking Service</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="homepage1.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
       </div>
    </div>
  </nav>

  <br><br>

  <div class="container mt-5">
    <div class="jumbotron" style="background-color: white;">
      <h1 class="display-4">Welcome 
      <?php
        session_start();
        include('file.php');
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
        if (!isset($_SESSION['email'])) {
            header("Location: login.php");
            exit();
        } 
        else {
            $email = $_SESSION['email'];
            $sql = "SELECT name FROM signup WHERE email = ?";
            $stmt = $con->prepare($sql);
            if ($stmt) {
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $_SESSION['name'] = $row['name'];
                } 
                else {
                    echo "No user found.";
                    exit();
                }
                $stmt->close();
            } 
            else {
                echo "SQL Error: " . $con->error;
                exit();
            }
        }
        echo htmlspecialchars($_SESSION['name']); 
      ?> to Gas Booking Service</h1>
      <p class="lead">Book your gas hassle-free with us!</p>
      <hr class="my-4">
      <p>We provide efficient and reliable gas booking services. Get your gas cylinders delivered to your doorstep.</p>
    <div class="container">
        <div class="button-container">
            <a href="booking.php" class="button">Book Now</a>
        </div>
    </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="content-section text-center" id="rooms">
        <h1 class="new">Products Available</h1><br><br>
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card">
              <div style="text-align: center;">
                <img style="width: 50%; height: 50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDvMBb2SWcyUcIxbw5JYqUlLTKdQsRtLy6wg&s" class="card-img-top" alt="Diesel fuel">
              </div>
              <div class="card-body">
                <h5 class="card-title">Diesel fuel</h5>
                <p class="card-text">1-Litre ₹92.15</p>
                <a href="#" class="btn btn-primary">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <div style="text-align: center;">
                <img style="width: 50%; height: 50%;" src="https://cdn4.iconfinder.com/data/icons/oil-production-cartoon/512/val54_13-1024.png" class="card-img-top" alt="Petrol">
              </div>
              <div class="card-body">
                <h5 class="card-title">Petrol</h5>
                <p class="card-text">1-Litre ₹104.21</p>
                <a href="#" class="btn btn-primary">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <div style="text-align: center;">
                <img style="width: 50%; height: 50%;" src="data:image/jpeg;base64,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" class="card-img-top" alt="Petrol">
              </div>
              <div class="card-body">
              <h5 class="card-title">Cylinder</h5>
              <p class="card-text">1-Piece   ₹829</p>
                <a href="#" class="btn btn-primary">View Details</a>
              </div>
            </div>
          </div>
      </div>
  </div>
  </div>
  <div class="content-section text-center" id="rooms">
    <div class="row">
      <div class="col-md-4 mb-4">
          <div class="card">
            <div style="text-align: center;">
              <img style="width: 50%; height: 50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfZhUwEMj9srTAvZep9wB1dUKHFyD1YWmD2w&s" class="card-img-top" alt="Single Room">
            </div>
            <div class="card-body">
                <h5 class="card-title">Fire Extinguisher</h5>
                <p class="card-text">1-Piece   ₹3170</p>
                <a href="#" class="btn btn-primary">View Details</a>
            </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <div style="text-align: center;">
            <img style="width: 50%; height: 50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQG6a3DdKMp2Jv2hycbROYRfJ2Iz1vHv7o2_g&s" class="card-img-top" alt="Double Room">
          </div>
          <div class="card-body">
            <h5 class="card-title">Kerosene Oil</h5>
            <p class="card-text">1-Litre   ₹104.21</p>
            <a href="#" class="btn btn-primary">View Details</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <div style="text-align: center;">
            <img style="width: 50%; height: 50%;" src="https://thumbs.dreamstime.com/b/gas-station-cartoon-icon-single-symbol-white-background-65076255.jpg" class="card-img-top" alt="Suite">
          </div>
          <div class="card-body">
            <h5 class="card-title">Liquefied Natural Gas</h5>
            <p class="card-text">1-Metric ton  ₹2400</p>
            <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
<br><br>
</html>