<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>Login</h2>
        <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
            <p style="color: red;">Invalid username or password.</p>
        <?php endif; ?>
        <div>
            <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        </div>
        <div>
            <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        </div>
             <div class="remember-forgot">
             <label> <input type="checkbox"> Remember me </label> <a href="#">Forgot Password?</a>
       </div>
        <div>
              <button type="submit">Login</button>
            </form>
    <p>Don't have an account? <a href="signup.html">Sign Up</a></p>
</div>
</body>
</html>
