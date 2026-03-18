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
            <?php if($_SESSION['id'] != $user['id']) { ?>

            <div class="profile-actions">
                <button class="btn-primary">Connect</button>
                <button class="btn-secondary">Message</button>
            </div>
            <?php } ?>
            <div class="profile-bio">
                <h2>About</h2>
                <p><?= $user['bio'] ?></p>
            </div>
            <div class="profile-experience">
                <h2>Experience</h2>
                <p> ## compane name  + logo ## </p>
                <p> ## job title ## </p>
                <p> ## job description ## </p>
                <p> ## job start date ## </p>
                <p> ## job end date ## </p>
                
            </div>
            <div class="profile-education">
                <h2>Education</h2>
                <p> ## university name + logo ## </p>
                <p> ## degree ## </p>
                <p> ## field of study ## </p>
                <p> ## graduation date ## </p>
            </div>

        </section>
    </main>
</body>
</html>