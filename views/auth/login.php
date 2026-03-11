<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="public/style.css">
</head>
<body class="login-page">
    <a class="back-link" href="index.php">Back</a>
    <main class="login-main">
        <section class="login-card">
            <h1>Welcome Back</h1>
            <p>Sign in to your account</p>

            <form class="login-form" action="index.php?page=login" method="post">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="you@example.com" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>

                <div class="login-options">
                    <label class="remember">
                        <input type="checkbox" name="remember">
                        Remember me
                    </label>
                    <a href="#">Forgot password?</a>
                </div>

                <button type="submit">Login</button>
                <div class="have-account " style="text-align: center;">
                    <a href="index.php?page=register">Don't have an account? Register</a>
                </div>

            </form>
        </section>
    </main>
</body>
</html>