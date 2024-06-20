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
        padding: 0.5rem 1rem;
        margin: 0 1rem;
        display: block;
    }
    nav ul li a:hover {
        background-color: #555;
        border-radius: 4px;
    }
    main {
        display: flex;
    }
    .image-container {
        flex: 1;
    }
    .content-container {
        flex: 2;
        padding: 8rem 2rem 2rem;
        max-width: calc(100% - 33.33%);
    }
    .about {
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
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <main>
        <div class="image-container">
        </div>
        <div class="content-container">
            <section class="about">
                <h4>Indo Oil Corporation, the largest LPG marketer in the country, is in constant endeavour to cater the LPG requirement of all citizens,across every nook and corner of the country. Indo Oil is marketing Free Trade LPG (FTL) in 5 Kg cylinders against the production of identity proof only. There is no hassle of documentation; no address proof is required to avail FTL connection.
                    Over the years, with the boom in various segments such as IT, Real Estate, BPOs and Educational Institutes, a large category of customers have emerged, who are young, staying away from home, migrant in nature and have got adequate disposable income for using LPG. However their monthly consumption is considerably less in view of their nature of job. This category of customers can afford LPG but are unable to avail new connection in view of absence of proof of address and paucity of time to visit the distributorship during the working hours, because of their highly irregular work timings.</h5>
            </section>
        </div>
    </main>
</body>
<footer>
    <p>&copy; 2024 Gas Booking Service. All rights reserved.</p>
</footer>
</html>
