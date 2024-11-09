<?php
// index.php
require 'includes/config.php';

$title = 'Speakly - Home';
?>

<?php include 'includes/head.php'; ?>
<style>
    <?php include 'static/css/reset.css'; ?>
    section {
        padding: 2rem;
    }

    .section1 {
        background-color: var(--primary-700);
        text-align: center;
        color: var(--neutral-100);
        font-size: 1em;

        h1 {
            margin-top: 1rem;
            color: var(--primary-300);
            font-size: clamp(2em, 5vw, 3em);
        }

        p {
            font-size: clamp(0.75em, 5vw, 1.5em);
        }

        .start-learning-btn {
            display: inline-block;
            margin-top: 3rem;
            margin-bottom: 1rem;
            padding: 0.5rem 1rem;
            background-color: var(--primary-300);
            color: rgb(42, 69, 78);
            border-radius: var(--rounded);
            transition: background-color 0.3s ease;

            &:hover {
                background-color: var(--primary-700);
                color: var(--primary-300);
            }
        }
    }

    .section2 {
        background: rgb(197, 255, 159);
        background: linear-gradient(126deg, rgba(197, 255, 159, 1) 0%, rgba(197, 248, 243, 1) 100%);

        blockquote {
            font-size: 1em;
            margin: 1rem;
            padding: 1rem;

            border: solid 2px;
            box-shadow: 15px 15px 0 0 black;
        }

        p {
            text-align: center;
            padding-top: 1rem;
            font-size: 1em;

            a {
                text-decoration: none;
                font-weight: bold;
            }
        }
    }

    .section3 {
        background-color: var(--primary-700);
        color: white
    }
</style>

<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <section class="section1">
            <h1>Do you want to learn a new language?</h1>
            <p>Get started by choosing a language to learn.</p>
            <a href="#language-section" class="start-learning-btn">Start Learning &darr;</a>
        </section>

        <section class="section2">
            <blockquote>Speakly is a language learning app that helps you learn a new language by teaching you from the basics to the advanced level. It is designed to be user-friendly and interactive, making it easy for you to learn and practice the language.</blockquote>

            <p style="text-align: center;"> Want to create an Account? <a href="signup-page.php">Sign up</a> ... or perhaps you are already registered? <a href="login-page.php">Login</a></p>
        </section>

        <section class="section3" id="language-section">
            <?php include 'components/language-grid.php'; ?>
        </section>

        <section class="section4">
            <?php include 'components/apps.php'; ?>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>