<?php
require 'includes/config.php';
?>

<?php include 'includes/head.php'; ?>
    <style>
        <?php include "static/css/reset.css"; ?>section {
            padding: 2rem;
        }

        .section1 {
            h1 {
                text-align: center;
                font-size: clamp(2em, 5vw, 4em);
            }

        }

        .section2 {
            border-bottom: 10px solid var(--neutral-900);
            background-color: var(--primary-700);
            text-align: center;
            color: var(--neutral-100);
            font-size: 1.5rem;

            h2 {
                font-size: clamp(1.5em, 5vw, 2.75em);
                margin-bottom: 1rem;
                color: var(--primary-300);
            }
        }

        .section3 {
            background: rgb(197, 255, 159);
            background: linear-gradient(126deg, rgba(197, 255, 159, 1) 0%, rgba(197, 248, 243, 1) 100%);
        }
    </style>

<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <section class="section1">
            <h1>Welcome Back! <span style="color:var(--orange-highlight)"><?php echo $_SESSION['username']; ?></span></h1>
        </section>

        <section class="section2">
            <h2 class="daily-words-text">Daily Words</h2>
            <?php include 'components/daily-word-carousel.php'; ?>
        </section>

        <section class="section3">
            <h2>Your Progress so far...</h2>
            <?php include 'components/progress.php'; ?>
        </section>

        <section class="section4">
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>

</html>