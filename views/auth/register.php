<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="public/style.css">
</head>
<body class="register-page">
    <a class="back-link" href="index.php">Back</a>
    <main class="register-main">
        <section class="register-card">
            <h1>Create Account</h1>
            <p>Fill the form to get started</p>

            <form class="register-form" action="index.php?page=register" method="post">
                <label for="full-name">Full Name</label>
                <input type="text" id="full-name" name="username" placeholder="Your full name" required>

                <label for="register-email">Email</label>
                <input type="email" id="register-email" name="email" placeholder="you@example.com" required>

                <label for="register-password">Password</label>
                <input type="password" id="register-password" name="password" placeholder="Create a password" required>

                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm_password" placeholder="Repeat password" required>

                <button type="submit" name="Register">Register</button>
                <div class="have-account " style="text-align: center;">
                    <a href="index.php?page=login">Already have an account? Login</a>
                </div>
            </form>
        </section>
    </main>
</body>
</html>