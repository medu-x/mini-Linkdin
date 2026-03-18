<header class="ln-header">
    <div class="ln-header__inner">
        <!-- Logo -->
        <div class="ln-header__left">
            <a href="index.php?page=home" class="ln-logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="34" height="34">
                    <path d="M20.5 2h-17A1.5 1.5 0 002 3.5v17A1.5 1.5 0 003.5 22h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0020.5 2zM8 19H5v-9h3zM6.5 8.25A1.75 1.75 0 118.3 6.5a1.78 1.78 0 01-1.8 1.75zM19 19h-3v-4.74c0-1.42-.6-1.93-1.38-1.93A1.74 1.74 0 0013 14.19a.66.66 0 000 .14V19h-3v-9h2.9v1.3a3.11 3.11 0 012.7-1.4c1.55 0 3.36.86 3.36 3.66z"/>
                </svg>
            </a>

            <!-- Search -->
            <div class="ln-search">
                <svg class="ln-search__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" width="16" height="16">
                    <path d="M14.56 12.44L11.3 9.18a5.51 5.51 0 10-2.12 2.12l3.26 3.26a1.5 1.5 0 102.12-2.12zM3 6.5A3.5 3.5 0 116.5 10 3.5 3.5 0 013 6.5z"/>
                </svg>
                <input type="text" placeholder="Search for people, jobs, companies and more...">
            </div>
        </div>

        <!-- Navigation -->
        <nav class="ln-nav">
            <a href="index.php?page=home" class="ln-nav__item <?php echo ($_GET['page'] ?? '') === 'home' ? 'ln-nav__item--active' : ''; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                    <path d="M23 9v2h-2v7a3 3 0 01-3 3h-4v-6h-4v6H6a3 3 0 01-3-3v-7H1V9l11-7z"/>
                </svg>
                <span>Home</span>
            </a>
            <a href="index.php?page=profile" class="ln-nav__item <?php echo ($_GET['page'] ?? '') === 'profile' ? 'ln-nav__item--active' : ''; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                    <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm0 3.5a3 3 0 110 6 3 3 0 010-6zM12 18.5a7.5 7.5 0 01-5.65-2.56C7.68 14.35 9.72 13.5 12 13.5s4.32.85 5.65 2.44A7.5 7.5 0 0112 18.5z"/>
                </svg>
                <span>Profile</span>
            </a>
            <a href="#" class="ln-nav__item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                    <path d="M12 16v6H3v-6a3 3 0 013-3h3a3 3 0 013 3zm5.5-3A3.5 3.5 0 1021 9.5a3.49 3.49 0 00-3.5 3.5zm1 2h-2a2.5 2.5 0 00-2.5 2.5V22h7v-4.5a2.5 2.5 0 00-2.5-2.5zM7.5 2A4.5 4.5 0 1012 6.5 4.49 4.49 0 007.5 2z"/>
                </svg>
                <span>Network</span>
            </a>
            <a href="#" class="ln-nav__item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                    <path d="M17 6V5a3 3 0 00-3-3h-4a3 3 0 00-3 3v1H2v4a3 3 0 003 3h14a3 3 0 003-3V6zM9 5a1 1 0 011-1h4a1 1 0 011 1v1H9zm10 9a4 4 0 01-4 4H9a4 4 0 01-4-4v-1h14z"/>
                </svg>
                <span>Jobs</span>
            </a>
        

            <!-- Divider -->
            <div class="ln-nav__divider"></div>

            <!-- Right icons group -->
            <a href="#" class="ln-nav__item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                    <path d="M16 3H8a5 5 0 00-5 5v5a5 5 0 005 5h.28l3.22 3.22a1 1 0 001.41 0L16.13 18H16a5 5 0 005-5V8a5 5 0 00-5-5zm-2 10H8v-2h6zm2-4H8V7h8z"/>
                </svg>
                <span>Messaging</span>
            </a>
            <a href="#" class="ln-nav__item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                    <path d="M22 19h-8.28a2 2 0 11-3.44 0H2v-1a4.52 4.52 0 011.17-2.83l1-1.17h15.7l1 1.17A4.42 4.42 0 0122 18zM18.21 7.44A6.27 6.27 0 0012 2a6.27 6.27 0 00-6.21 5.44L5 13h14z"/>
                </svg>
                <span>Notifications</span>
            </a>

            <!-- Profile dropdown -->
            <a href="index.php?page=profile" class="ln-nav__item ln-nav__profile">
                <img class="ln-nav__avatar" src="<?php echo htmlspecialchars($_SESSION['profile_url'] ?? ''); ?>" alt="Profile">
                <span>Me ▾</span>
            </a>
        </nav>
    </div>
</header>