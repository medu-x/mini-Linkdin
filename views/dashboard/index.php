<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard — Mini Project</title>
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
    <header>
        <div>Mini Project</div>
        <nav class="nav">
            <ul>
                <li><img class="nav-profile" src="<?php echo htmlspecialchars($_SESSION['profile_url'] ?? ''); ?>" alt="Profile"></li>
                <li><a href="index.php?page=logout">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main class="home-main">
        <section class="home-card">
            <h1>Welcome <?php echo htmlspecialchars($_SESSION['name']); ?></h1>
            <div class="home-actions">
                <p>Logged in as <?php echo htmlspecialchars($_SESSION['email']); ?></p>
                <div class="users-section">
                    <h2>Meet Our Users</h2>
                    <div class="users-ticker">
                        <div class="users-track">
                            <?php foreach ($users as $user) { ?>
                            <div class="user">
                                <img src="<?php echo htmlspecialchars($user['profile_url'] ?? ''); ?>" alt="User Avatar" class="user-avatar">
                                <p><?php echo htmlspecialchars($user['name']); ?></p>
                            </div>
                            <?php } ?>
                            <?php /* Duplicate — needed for seamless infinite scroll loop */ ?>
                            <?php foreach ($users as $user) { ?>
                            <div class="user" aria-hidden="true">
                                <img src="<?php echo htmlspecialchars($user['profile_url'] ?? ''); ?>" alt="" class="user-avatar">
                                <p><?php echo htmlspecialchars($user['name']); ?></p>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <a href="index.php?page=logout">Logout</a>
            </div>
        </section>
    </main>
</body>
</html>
