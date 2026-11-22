
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Explore | COSMOS</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/explore.css">
</head>

<body>

    <header class="navbar">
        <a href="../index.php" class="logo">
            <span class="logo-symbol">✦</span>
            COSMOS<span class="logo-dot">.</span>
        </a>

        <button class="menu-toggle" id="menuToggle" aria-label="Toggle navigation">☰</button>

        <nav class="nav-links" id="navLinks">
            <a href="../index.php">Home</a>
            <a href="explore.php">Explore</a>
            <a href="../index.php#what-if">What If?</a>
            <a href="../index.php#understand">Understand</a>
            <a href="../index.php#playground">Playground</a>
        </nav>

        <a href="../index.php#join" class="nav-button">Join COSMOS ↗</a>
    </header>

    <main class="explore-page">

        <section class="explore-hero">
            <p class="eyebrow">THE UNIVERSE IS YOURS TO DISCOVER</p>

            <h1>Explore the <span>unknown.</span></h1>

            <p>
                From familiar worlds to mysterious cosmic phenomena,
                discover the extraordinary objects that make up our universe.
            </p>
        </section>

        <section class="catalogue">

            <div class="catalogue-heading">
                <div>
                    <p class="eyebrow">THE COSMIC DIRECTORY</p>
                    <h2>Discover <span>something new.</span></h2>
                </div>

                <p id="resultCount">Loading discoveries...</p>
            </div>

            <div class="search-area">
                <span>⌕</span>
                <input
                    type="search"
                    id="searchInput"
                    placeholder="Search planets, stars, galaxies..."
                    aria-label="Search celestial objects"
                >
            </div>

            <div class="filter-buttons" id="filterButtons">
                <button class="filter-button active" data-category="All">All</button>
                <button class="filter-button" data-category="Planet">Planets</button>
                <button class="filter-button" data-category="Moon">Moons</button>
                <button class="filter-button" data-category="Star">Stars</button>
                <button class="filter-button" data-category="Galaxy">Galaxies</button>
                <button class="filter-button" data-category="Black Hole">Black Holes</button>
            </div>

            <div class="object-grid" id="objectGrid">
                <p class="loading-message">Preparing your discoveries...</p>
            </div>

            <p class="empty-message" id="emptyMessage" hidden>
                No cosmic objects found. Try another search.
            </p>

        </section>

    </main>

    <footer class="footer">
        <a href="../index.php" class="logo">✦ COSMOS<span class="logo-dot">.</span></a>
        <p>The universe, made understandable.</p>
        <span>© 2026 COSMOS. Built for the curious.</span>
    </footer>

    <script src="../js/explore.js"></script>
</body>
</html>
