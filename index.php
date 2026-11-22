
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="COSMOS makes the universe understandable through interactive astronomy experiences.">
    <title>COSMOS | The Universe, Made Understandable</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- NAVIGATION -->
    <header class="navbar">
        <a href="index.php" class="logo">
            <span class="logo-symbol">✦</span>
            COSMOS<span class="logo-dot">.</span>
        </a>

        <button class="menu-toggle" id="menuToggle" aria-label="Toggle navigation">
            ☰
        </button>

        <nav class="nav-links" id="navLinks">
            <a href="#home">Home</a>
           <a href="pages/explore.php">Explore</a>
            <a href="#what-if">What If?</a>
            <a href="pages/explore.php">Understand</a>
            <a href="#playground">Playground</a>
        </nav>

        <a href="#join" class="nav-button">Join COSMOS ↗</a>
    </header>


    <main>

        <!-- HERO SECTION -->
        <section class="hero" id="home">

            <div class="hero-content">
                <p class="eyebrow">
                    <span class="live-dot"></span>
                    YOUR JOURNEY THROUGH THE UNIVERSE
                </p>

                <h1>
                    The universe is<br>
                    bigger than <span>you imagine.</span>
                </h1>

                <p class="hero-description">
                    Discover distant worlds, understand extraordinary
                    phenomena and explore the science behind everything
                    that exists.
                </p>

                <div class="hero-actions">
                    <a href="#explore" class="primary-button">
                        Begin exploring <span>↗</span>
                    </a>

                    <a href="#understand" class="text-button">
                        Discover how it works →
                    </a>
                </div>

                <div class="hero-note">
                    <span>✦</span> Curiosity has no limits.
                </div>
            </div>

            <div class="hero-bottom">
                <span>01 / THE BEGINNING</span>
                <span>SCROLL TO EXPLORE ↓</span>
            </div>

        </section>


        <!-- INTRODUCTION -->
        <section class="intro section-padding">
            <div class="intro-label">A DIFFERENT WAY TO DISCOVER</div>

            <div class="intro-content">
                <h2>
                    Space shouldn't feel<br>
                    <span>impossible to understand.</span>
                </h2>

                <p>
                    From the smallest particles to the largest galaxies,
                    COSMOS turns complicated astronomical ideas into
                    experiences that anyone can explore.
                </p>
            </div>
        </section>


        <!-- EXPLORE SECTION -->
        <section class="explore-section section-padding" id="explore">

            <div class="section-heading">
                <div>
                    <p class="eyebrow">YOUR UNIVERSE AWAITS</p>
                    <h2>Where would you like<br>to <span>begin?</span></h2>
                </div>

                <p class="section-side-text">
                    Every discovery begins<br>with a question.
                </p>
            </div>

            <div class="category-grid">

                <a href="#understand" class="category-card planets">
                    <div class="card-number">01</div>
                    <div class="category-info">
                        <p>OUR COSMIC NEIGHBOURS</p>
                        <h3>Planets</h3>
                        <span>Explore worlds beyond Earth ↗</span>
                    </div>
                </a>

                <a href="#understand" class="category-card stars">
                    <div class="card-number">02</div>
                    <div class="category-info">
                        <p>LIGHT ACROSS THE COSMOS</p>
                        <h3>Stars</h3>
                        <span>Discover how stars are born ↗</span>
                    </div>
                </a>

                <a href="#understand" class="category-card galaxies">
                    <div class="card-number">03</div>
                    <div class="category-info">
                        <p>ISLANDS OF THE UNIVERSE</p>
                        <h3>Galaxies</h3>
                        <span>Explore cosmic cities ↗</span>
                    </div>
                </a>

                <a href="#understand" class="category-card blackholes">
                    <div class="card-number">04</div>
                    <div class="category-info">
                        <p>WHERE PHYSICS GETS STRANGE</p>
                        <h3>Black Holes</h3>
                        <span>Look beyond the event horizon ↗</span>
                    </div>
                </a>

            </div>
        </section>


        <!-- FEATURED DISCOVERY -->
        <section class="discovery-section section-padding">

            <div class="discovery-image">
                <div class="image-caption">
                    <span>FEATURED DISCOVERY</span>
                    <span>OUR SOLAR SYSTEM</span>
                </div>
            </div>

            <div class="discovery-content">
                <p class="eyebrow">THE COSMIC SPOTLIGHT</p>
                <h2>A planet<br>wearing <span>rings.</span></h2>

                <p>
                    Saturn is famous for its spectacular ring system.
                    But those rings are made of countless pieces of
                    ice and rock, ranging from tiny grains to enormous
                    chunks.
                </p>

                <div class="fact-row">
                    <div>
                        <strong>7</strong>
                        <span>Main rings</span>
                    </div>
                    <div>
                        <strong>1,400+</strong>
                        <span>Million km away</span>
                    </div>
                </div>

                <a href="#understand" class="text-button">
                    Understand Saturn →
                </a>
            </div>

        </section>


        <!-- UNDERSTAND SECTION -->
        <section class="understand-section section-padding" id="understand">

            <div class="understand-heading">
                <p class="eyebrow">SCIENCE, AT YOUR OWN PACE</p>
                <h2>One universe.<br><span>Different perspectives.</span></h2>
                <p>
                    Choose how deeply you want to understand a concept.
                    Start simple, follow your curiosity, or dive into the science.
                </p>
            </div>

            <div class="explanation-box">

                <div class="level-buttons">
                    <button class="level-button active" data-level="beginner">
                        Beginner
                    </button>

                    <button class="level-button" data-level="curious">
                        Curious
                    </button>

                    <button class="level-button" data-level="deep">
                        Deep Dive
                    </button>
                </div>

                <div class="explanation-content">
                    <span class="concept-label">TODAY'S CONCEPT</span>
                    <h3>What is a black hole?</h3>

                    <p id="explanationText">
                        A black hole is a region in space where gravity
                        is so strong that nothing, not even light,
                        can escape once it crosses a boundary called
                        the event horizon.
                    </p>
                </div>

                <div class="explanation-footer">
                    <span>LEARN WITHOUT LIMITS</span>
                    <span>✦ COSMOS EXPLAINS</span>
                </div>

            </div>
        </section>


        <!-- WHAT IF SECTION -->
        <section class="whatif-section section-padding" id="what-if">

            <div class="whatif-content">
                <p class="eyebrow">LET YOUR IMAGINATION TRAVEL</p>
                <h2>What if<br><span>the impossible</span><br>happened?</h2>

                <p>
                    Explore hypothetical cosmic scenarios and discover
                    what science can tell us about them.
                </p>

                <a href="#playground" class="primary-button">
                    Explore possibilities ↗
                </a>
            </div>

            <div class="whatif-card">
                <span class="question-mark">?</span>
                <p>WHAT IF...</p>
                <h3>Earth had<br>two moons?</h3>
                <span class="question-bottom">A COSMIC THOUGHT EXPERIMENT</span>
            </div>

        </section>


        <!-- PLAYGROUND SECTION -->
        <section class="playground-section section-padding" id="playground">

            <div class="section-heading">
                <div>
                    <p class="eyebrow">LEARN BY PLAYING</p>
                    <h2>How well do you<br>know <span>your universe?</span></h2>
                </div>
            </div>

            <div class="quiz-card">
                <div class="quiz-top">
                    <span>QUICK COSMIC CHALLENGE</span>
                    <span>01 / 01</span>
                </div>

                <h3>Which planet has the most prominent ring system?</h3>

                <div class="quiz-options">
                    <button class="quiz-option" data-answer="wrong">Jupiter</button>
                    <button class="quiz-option" data-answer="correct">Saturn</button>
                    <button class="quiz-option" data-answer="wrong">Neptune</button>
                    <button class="quiz-option" data-answer="wrong">Mars</button>
                </div>

                <p id="quizFeedback" aria-live="polite">
                    Choose your answer to test your knowledge.
                </p>
            </div>

        </section>


        <!-- JOIN SECTION -->
        <section class="join-section section-padding" id="join">
            <p class="eyebrow">YOUR UNIVERSE IS WAITING</p>
            <h2>Curiosity looks<br>good on <span>you.</span></h2>

            <p>
                Start your journey. Save discoveries, track your learning
                and make the universe your own.
            </p>

            <a href="pages/register.php" class="primary-button">
                Become an explorer ↗
            </a>
        </section>

    </main>


    <!-- FOOTER -->
    <footer class="footer">
        <a href="#home" class="logo">✦ COSMOS<span class="logo-dot">.</span></a>
        <p>The universe, made understandable.</p>
        <span>© 2026 COSMOS. Built for the curious.</span>
    </footer>


    <script src="js/main.js"></script>
</body>
</html>

