<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        .container{
            margin: 50px 50px;
        }
    </style>
</head>
<body id="login">
    
<div class="container">
    <h1>Form Login</h1>
    <form method="POST" action="ceklogin.php">
        <div class="group-input">
            <label for="username">Email :</label>
            <input type="text" class="form-custom" required placeholder="email" id="email" name="email" >
        </div>
        <div class="group-input">
            <label for="password">Password :</label>
            <input type="password" class="form-custom" required placeholder="Password" id="password" name="password" >
        </div>
        <button><i class="fa fa-arrow-alt-circle-right text-white"></i> Login</button>
    </form>
</div>
</body>
</html>