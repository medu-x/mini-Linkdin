<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home — Mini LinkedIn</title>
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
    <?php require 'views/layout/header.php'; ?>

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
                            <a href="index.php?page=profile&user=<?php echo htmlspecialchars($user['id']); ?>">
                                <div class="user">
                                <img src="<?php echo htmlspecialchars($user['profile_url'] ?? ''); ?>" alt="User Avatar" class="user-avatar">
                                <p><?php echo htmlspecialchars($user['name']); ?></p>
                            </div>
                            </a>
                            
                            <?php } ?>
                            <?php /* Duplicate — needed for seamless infinite scroll loop */ ?>
                            <?php foreach ($users as $user) { ?>
                                <a href="index.php?page=profile&user=<?php echo htmlspecialchars($user['id']); ?>">
                            <div class="user" aria-hidden="true">
                                <img src="<?php echo htmlspecialchars($user['profile_url'] ?? ''); ?>" alt="" class="user-avatar">
                                <p><?php echo htmlspecialchars($user['name']); ?></p>
                            </div>
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <a class="btn-secondary" href="index.php?page=logout">Logout</a>
            </div>
        </section>
    </main>
</body>
</html>
