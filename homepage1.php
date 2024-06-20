<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indo Gas Company</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
            color: #000;
        }
        .navbar {
            background-color: #000;
        }
        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: #ffc107;
        }
        .navbar-nav .nav-link {
            color: #ffc107;
        }
        .carousel-inner img {
            width: 100%;
            height: 600px;
            object-fit: cover;
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
        .footer {
            background: #000;
            color: #f7f7f7;
            padding: 2rem 0;
            text-align: center;
        }
        .footer a {
            color: #fefefe;
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
            color: #666;
        }
        body{
            background: linear-gradient(120deg, #e4babe,  #fcf1ef,  #e8d8c9,  #ced3d7 ,  #5e606c);
        }
        .new{
            background-color: #000000;
            border: none;
            color: white;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 26px;
            margin: 4px 2px;
            border-radius: 12px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Indo Gas Company</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://unsplash.com/photos/5QgIuuBxKwM/download?force=true&w=1920" alt="Pipeline Infrastructure">
            </div>
            <div class="carousel-item">
                <img src="https://unsplash.com/photos/tE6th1h6Bfk/download?force=true&w=1920" alt="Energy Sector">
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container mt-5">
        <h2 class="new text-center">Reports & Publications</h2><br><br>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <span class="symbol">📄</span> Noida, 9th April, 2023
                    </div>
                    <div class="card-body">
                        <p>GAIL Gas Limited is steering its pricing mechanism in line with the Government of India's guideline to pass on new domestic gas pricing benefits to its customers and has announced a substantial reduction in prices with effect from 9th April 2023.</p>
                        <p class="interesting-facts">Interesting Fact: This price reduction impacts over 10 million households, providing significant cost savings.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <span class="symbol">💡</span> GAIL Gas Limited
                    </div>
                    <div class="card-body">
                        <p>GAIL Gas Limited has announced a reduction in its Domestic PNG prices by Rs. 7 per SCM in Bengaluru and Dakshin Kannada and Rs. 6 per SCM in all its other Geographical areas.</p><br><br>
                        <p class="interesting-facts">Interesting Fact: The reduction is a result of increased efficiency in gas sourcing and distribution.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <span class="symbol">📊</span> New Domestic PNG Prices
                    </div>
                    <div class="card-body">
                        <p>The new effective Domestic PNG Prices is Rs 52.50 per SCM in Dewas, Meerut, Sonipat, Taj Trapezium Zone, Raisen, Mirzapur, Dhanbad, Adityapur and Rourkela and Rs 51.50 per SCM for Bengaluru & Dakshin Kannada.</p>
                        <p class="interesting-facts">Interesting Fact: The price change aims to promote the usage of cleaner fuels across these regions.</p><br>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="new text-center">safety and precautions</h2><br><br>
            <div class="row mt-4">
                <div class="col-md-8">
                    <div class="card">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Ajst-oAHbiU?si=7q-muggVWHmTPc79" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <span class="symbol">⚠️</span> Safety Guidelines
                        </div>
                    <div class="card-body">
                        <p>Make sure your staff are trained to use equipment.</p>
                        <p>Store gas cylinders as per regulations.</p>
                        <p>Install and regularly test carbon monoxide (CO) detectors and alarm systems.</p>
                        <p>Perform regular inspections.</p>
                        <p>Schedule and record formal maintenance that is carried out by a competent person.</p>
                    </div>
                    </div>
                </div>
            </div>
    </div>

    <br><br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 text-black text-center section" style="background-color: #808080;">
                <h1>Contact</h1>
                <h4>We appreciate your interest in Indo Gas Company.</h4><br>
                <button class="btn btn-custom" onclick="location.href='contact.html'">CONTACT</button>
            </div>
            <div class="col-md-4 text-black text-center section" style="background-color: #a4a4a4;">
                <h1>About</h1>
                <h4>Learn more about our features and availability of products.</h4><br>
                <button class="btn btn-custom" onclick="location.href='About.html'">ABOUT</button>
            </div>
            <div class="col-md-4 text-black text-center section" style="background-color: #bdbdbd;">
                <h1>Service</h1>
                <h4>Special services provided for our customers.</h4><br>
                <button class="btn btn-custom" onclick="location.href='#'">SERVICE</button>
            </div>
        </div>
    </div>
</body>

<br><br>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4>About Us</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Site Map</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Disclaimer</a></li>
                    <li><a href="#">Regulatory Requirements</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4>Our Business</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Project Dashboard</a></li>
                    <li><a href="#">R&D</a></li>
                    <li><a href="#">Environment & CRZ Clearance</a></li>
                    <li><a href="#">Hazira Meter Flow</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4>Important Documents</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Bid Submission Document For July 2024 - GAIL Portal PDF (304 KB)</a></li>
                    <li><a href="#">O&M Policy PDF (99 KB)</a></li>
                    <li><a href="#">Equal Opportunity Policy PDF (257 KB)</a></li>
                </ul>
            </div>
            <div class="col-md-3">                    
                <h4>Employee Section</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Intranet</a></li>
                    <li><a href="#">Webmail</a></li>
                    <li><a href="#">Golden Retirement</a></li>
                    <li><a href="#">GAIL PRAYAS - Facilities For Family Of Deceased Employees</a></li>
                </ul>
            </div>            
        </div>
    </div>

    <br><br>

    <div class="container mt-4">
        <marquee direction="left" bgcolor="white" width="100%" height="40px" style="font-family: 'Lucida Console'; color: #000;">                
            <b>Indo Gas Company</b> - official page - services provided - offers - contact details
        </marquee>
    </div>
</footer>
</html>
