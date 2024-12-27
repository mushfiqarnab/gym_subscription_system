<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to GYM Buddy">
    <meta name="author" content="Your Name">
    <title>Login - GYM Buddy</title>
    <!-- Include core CSS files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
  <div id="content">
  <!-- Your existing login form or main content -->
    <section id="login-section">
      <h2>Login to GYM Buddy</h2>
      <form action="signin.php" method="post">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" name="fname" id="username" class="form-control" placeholder="Enter your username" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" name="pass" id="password" class="form-control" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block mt-3">Sign In</button>
      </form>
      <p class="mt-4">
        Don't have an account? <a href="signup.php">Sign Up Here</a>
      </p>
    </section>

  <!-- Footer -->
    <footer id="footer">
      &copy; 2024 GYM Buddy. All Rights Reserved.
    </footer>
  </div>

  </body>
</html>
