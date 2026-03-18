<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile — Mini LinkedIn</title>
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
    <?php require 'views/layout/header.php'; ?>

    <main class="home-main">
        <section class="home-card">
            <div class="cover-image">
                <img src="<?= $user['cover_url'] ?>" alt="">
            </div>
            <div class="profile-image">
                <img src="<?= $user['profile_url'] ?>" alt="">
                <h2 class="user-profile-name"><?= $user['name'] ?></h2>
                <p class="user-profile-headline"><?= $user['headline'] ?></p>
                <p class="user-profile-location"><?= $user['location'] ?></p>
                <p class="user-profile-connections">+600 connections</p>
            </div>
            <div class="profile-actions">
                <button class="btn-primary">Connect</button>
                <button class="btn-secondary">Message</button>
            </div>

        </section>
    </main>
</body>
</html>