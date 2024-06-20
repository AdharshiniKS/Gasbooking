<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: rgb(152, 152, 152);
    }
    header {
        background-color: #333;
        color: #fff;
        text-align: center;
        position: fixed;
        width: 100%;
    }
    header h1 {
        margin: 0;
    }
    nav {
        background-color: #000;
        position: fixed;
        width: 100%;
        padding: 1rem 0;
    }
    nav ul {
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: right;
    }
    nav ul li a {
        color: #fff;
        text-decoration: none;
        padding: 0.5rem 1rem;
        margin: 0 1rem;
        display: block;
    }
    nav ul li a:hover {
        background-color: #555;
        border-radius: 4px;
    }
    main {
        padding: 8rem 2rem 2rem;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .contact {
        background-color: #fff;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        width: 100%;
    }
    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 1rem 0;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
</style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="homepage1.php">Home</a></li>
            <li><a href="About.php">About</a></li>
        </ul>
    </nav>
    <main>
        <section class="contact">
                <h1>This facility is available to all Indo Customers.<br><br>
                    please follow the steps given below:<br><br>
                    Click here to contact at Indo<br>
                    - Send this SMS or call to 77XXXXXXXX or XXXXXX45.<br><br>
                    we will contact you as soon as we recieve you message or call<br> 
        </section>
    </main>
</body>

<footer>
    <p>&copy; 2024 Gas Booking Service. All rights reserved.</p>
</footer>
</html>
