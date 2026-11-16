<?php


$name = "Arl Janssen B. Algan";
$course = "Bachelor of Science in Information Technology";
$school = "Mater Dei College";
$yearLevel = "BSIT Student";
$location = "Philippines";
$email = "your.email@example.com"; // Replace with your email address
$phone = "+63 9XX XXX XXXX";       // Replace with your phone number
$about = "I am an Information Technology student who enjoys learning how technology works and building useful digital experiences. Outside academics, I spend time freestyle dancing, working out, and running. I believe in staying curious, improving through practice, and learning something new every day.";

$skills = [
    "HTML5",
    "CSS3",
    "PHP",
    "Java",
    "Problem Solving",
    "Teamwork"
];

$hobbies = [
    ["icon" => "🎧", "name" => "Freestyle Dance", "description" => "Music, movement, creativity, and self-expression."],
    ["icon" => "🏃", "name" => "Running", "description" => "Building endurance and challenging personal limits."],
    ["icon" => "🏋️", "name" => "Fitness", "description" => "Strength training and consistent self-improvement."],
    ["icon" => "💻", "name" => "Technology", "description" => "Exploring programming and learning new digital skills."]
];

$education = [
    [
        "level" => "College",
        "school" => "Mater Dei College",
        "details" => "Bachelor of Science in Information Technology"
    ],
    [
        "level" => "Senior High School",
        "school" => "Senior High School",
        "details" => "Add your strand, school, and graduation year here."
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Personal profile and student portfolio of <?php echo htmlspecialchars($name); ?>">
    <title><?php echo htmlspecialchars($name); ?> | Student Portfolio</title>

    <style>
        /* ---------- Global styles ---------- */
        :root {
            --background: #f4f7fb;
            --surface: #ffffff;
            --primary: #2457d6;
            --primary-dark: #183f9f;
            --text: #182230;
            --muted: #667085;
            --border: #e7ebf2;
            --shadow: 0 12px 35px rgba(25, 45, 85, 0.08);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: var(--background);
            color: var(--text);
            line-height: 1.6;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .container {
            width: min(1100px, 90%);
            margin: 0 auto;
        }

        /* ---------- Header and navigation ---------- */
        header {
            background: var(--surface);
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .nav {
            min-height: 72px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .logo {
            color: var(--primary);
            font-size: 1.15rem;
            font-weight: 800;
            letter-spacing: 0.5px;
        }

        .nav-links {
            display: flex;
            flex-wrap: wrap;
            gap: 22px;
            list-style: none;
        }

        .nav-links a {
            color: var(--muted);
            font-size: 0.92rem;
            font-weight: 600;
            transition: color 0.2s ease;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        /* ---------- Hero / profile section ---------- */
        .hero {
            padding: 76px 0 48px;
        }

        .profile-card {
            background: linear-gradient(125deg, #ffffff 55%, #edf3ff 100%);
            border: 1px solid var(--border);
            border-radius: 24px;
            box-shadow: var(--shadow);
            padding: 48px;
            display: flex;
            align-items: center;
            gap: 38px;
        }

        .profile-photo {
            width: 180px;
            height: 180px;
            flex: 0 0 180px;
            border-radius: 50%;
            border: 6px solid #ffffff;
            outline: 3px solid #dce7ff;
            object-fit: cover;
            background: #dce7ff;
        }

        .eyebrow {
            color: var(--primary);
            font-size: 0.8rem;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        h1 {
            font-size: clamp(2rem, 5vw, 3.1rem);
            line-height: 1.15;
            margin-bottom: 10px;
        }

        .course {
            color: var(--muted);
            font-size: 1.05rem;
            margin-bottom: 18px;
        }

        .hero-description {
            max-width: 620px;
            color: #475467;
        }

        .location {
            display: inline-block;
            margin-top: 18px;
            padding: 7px 13px;
            border-radius: 30px;
            background: #eaf0ff;
            color: var(--primary-dark);
            font-size: 0.85rem;
            font-weight: 700;
        }

        
        main {
            padding-bottom: 70px;
        }

        .section {
            margin-top: 30px;
        }

        .section-title {
            font-size: 1.45rem;
            margin-bottom: 18px;
        }

        .card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 26px;
            box-shadow: var(--shadow);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 17px 40px rgba(25, 45, 85, 0.12);
        }

        .about-text {
            color: #475467;
        }

        /* ---------- Education ---------- */
        .education-list {
            display: grid;
            gap: 16px;
        }

        .education-item {
            border-left: 4px solid var(--primary);
            padding: 3px 0 3px 18px;
        }

        .education-item h3 {
            font-size: 1.05rem;
            margin-bottom: 3px;
        }

        .education-item p {
            color: var(--muted);
            font-size: 0.94rem;
        }

        .education-level {
            color: var(--primary);
            font-size: 0.78rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        
        .skills-list {
            display: flex;
            flex-wrap: wrap;
            gap: 11px;
        }

        .skill {
            background: #edf2ff;
            color: var(--primary-dark);
            border: 1px solid #dce6ff;
            border-radius: 30px;
            padding: 9px 16px;
            font-size: 0.9rem;
            font-weight: 700;
            transition: background 0.2s ease, color 0.2s ease;
        }

        .skill:hover {
            background: var(--primary);
            color: #ffffff;
        }

        /* ---------- Hobbies ---------- */
        .hobby-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
        }

        .hobby-icon {
            font-size: 1.8rem;
            margin-bottom: 8px;
        }

        .hobby-card h3 {
            margin-bottom: 5px;
            font-size: 1.02rem;
        }

        .hobby-card p {
            color: var(--muted);
            font-size: 0.92rem;
        }

        
        .contact-card p {
            color: var(--muted);
            margin: 7px 0;
            overflow-wrap: anywhere;
        }

        .contact-card strong {
            color: var(--text);
            display: inline-block;
            min-width: 75px;
        }

        .contact-card a {
            color: var(--primary);
        }

        .contact-card a:hover {
            text-decoration: underline;
        }

        
        footer {
            background: #17243d;
            color: #d9e2f2;
            text-align: center;
            padding: 24px 15px;
            font-size: 0.9rem;
        }

        footer span {
            color: #91b0ff;
        }

        
        @media (max-width: 700px) {
            .nav {
                padding: 15px 0;
                align-items: flex-start;
                flex-direction: column;
            }

            .nav-links {
                gap: 12px 18px;
            }

            .hero {
                padding-top: 38px;
            }

            .profile-card {
                padding: 30px 22px;
                flex-direction: column;
                text-align: center;
                gap: 25px;
            }

            .profile-photo {
                width: 150px;
                height: 150px;
                flex-basis: 150px;
            }

            .hobby-grid {
                grid-template-columns: 1fr;
            }

            .card {
                padding: 22px;
            }
        }
    </style>
</head>

<body>
    <!-- Page header and navigation -->
    <header>
        <div class="container nav">
            <a class="logo" href="#home">MY PORTFOLIO</a>

            <nav aria-label="Main navigation">
                <ul class="nav-links">
                    <li><a href="#about">About</a></li>
                    <li><a href="#education">Education</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#hobbies">Hobbies</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container" id="home">
        <!-- Profile photo, name, and introduction -->
        <section class="hero">
            <div class="profile-card">
                <!-- Put your photo in the same folder and name it profile.jpg -->
                <img
                    class="profile-photo"
                    src="image.png"
                    alt="Profile photo of <?php echo htmlspecialchars($name); ?>"
                    onerror="this.style.display='none';"
                >

                <div>
                    <p class="eyebrow"><?php echo htmlspecialchars($yearLevel); ?></p>
                    <h1><?php echo htmlspecialchars($name); ?></h1>
                    <p class="course"><?php echo htmlspecialchars($course); ?></p>
                    <p class="hero-description">
                        <?php echo htmlspecialchars($about); ?>
                    </p>
                    <span class="location">📍 <?php echo htmlspecialchars($location); ?></span>
                </div>
            </div>
        </section>

        <!-- About me -->
        <section class="section" id="about">
            <h2 class="section-title">About Me</h2>
            <div class="card">
                <p class="about-text"><?php echo htmlspecialchars($about); ?></p>
            </div>
        </section>

        <!-- Educational background -->
        <section class="section" id="education">
            <h2 class="section-title">Educational Background</h2>
            <div class="card education-list">
                <?php foreach ($education as $item): ?>
                    <div class="education-item">
                        <span class="education-level"><?php echo htmlspecialchars($item["level"]); ?></span>
                        <h3><?php echo htmlspecialchars($item["school"]); ?></h3>
                        <p><?php echo htmlspecialchars($item["details"]); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Skills -->
        <section class="section" id="skills">
            <h2 class="section-title">Skills</h2>
            <div class="card">
                <div class="skills-list">
                    <?php foreach ($skills as $skill): ?>
                        <span class="skill"><?php echo htmlspecialchars($skill); ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Hobbies and interests -->
        <section class="section" id="hobbies">
            <h2 class="section-title">Hobbies &amp; Interests</h2>
            <div class="hobby-grid">
                <?php foreach ($hobbies as $hobby): ?>
                    <article class="card hobby-card">
                        <div class="hobby-icon" aria-hidden="true">
                            <?php echo $hobby["icon"]; ?>
                        </div>
                        <h3><?php echo htmlspecialchars($hobby["name"]); ?></h3>
                        <p><?php echo htmlspecialchars($hobby["description"]); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Contact information -->
        <section class="section" id="contact">
            <h2 class="section-title">Contact Information</h2>
            <div class="card contact-card">
                <p><strong>Email:</strong> <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a></p>
                <p><strong>Phone:</strong> <?php echo htmlspecialchars($phone); ?></p>
                <p><strong>Location:</strong> <?php echo htmlspecialchars($location); ?></p>
            </div>
        </section>
    </main>

    <!-- Page footer -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> <?php echo htmlspecialchars($name); ?>.
            Made with <span>PHP, HTML5 &amp; CSS3</span>.</p>
    </footer>
</body>
</html>
