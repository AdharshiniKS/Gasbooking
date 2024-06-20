<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

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
}

.login-form {
    background: rgba(0, 0, 0);
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
    text-decoration: none;
}

.remember-forgot-box a:hover {
    text-decoration: underline;
}

.sub-btn {
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

.sub-btn:hover {
    background: #0B87EC;
}

.register {
    margin-top: 15px;
    font-size: 15px;
}

.register a {
    color: rgb(0, 0, 0);
    text-decoration: none;
    font-weight: 500;
}

.register a:hover {
    text-decoration: underline;
}

.back {
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

body{
    background-color: rgb(152, 152, 152);
}
    </style>
</head>

<body>
    <form action="#" class="login-form">
      <h1 class="login-title">Forget Password</h1>
        <div class="input-box">
               <input type="text" placeholder="Username">
               <i class='bx bx-user'></i>
        </div>
        <div class="input-box">
            <input type="email" placeholder="Email">
            <i class='bx bx-user'></i>
        </div>
        <button class="sub-btn" formaction="homepage2.html">Submit</button><br><br>
        <button class="back" formaction="login.html">Back</button>
    </form>
</body>
</html>
