<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #4e73df;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }
        .login-container h2 {
            margin-bottom: 30px;
            text-align: center;
        }
        .btn-google {
            background-color: #ea4335;
            color: white;
            margin-top: 15px;
        }
        .btn-facebook {
            background-color: #3b5998;
            color: white;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Selamat datang kembali!</h2>
        <form>
        <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
            <!-- <button class="btn btn-google btn-block"><i class="fab fa-google"></i> Login with Google</button>
            <button class="btn btn-facebook btn-block"><i class="fab fa-facebook-f"></i> Login with Facebook</button> -->
            <div class="text-center mt-4">
                <a href="#">Forgot Password?</a>
            </div>
            <div class="text-center">
                <a href="#">Create an Account!</a>
            </div>
        </form>
    </div>
    <!-- Bootstrap and Font Awesome JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
