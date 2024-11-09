<?php
// index.php
require 'includes/config.php';

$title = 'Speakly - Vocabulary';
?>

<?php include 'includes/head.php'; ?>

<style>
    <?php include "static/css/reset.css"; ?>.attribution {
        text-align: center;
        padding: 0.5rem;
        background-color: var(--neutral-100);
        color: var(--neutral-500);
        font-size: 0.75em;
        border-top: 1px solid var(--neutral-100);
    }

    .hide-attribution {
        display: none;
    }

    section {
        border-top: 1px solid black;
        padding: 2rem;
        text-align: center;
        font-size: 1.5em;
        transition: background-color 0.3s ease-in-out;

        h1 {
            font-size: clamp(1.5em, 5vw, 4em);
        }

        &:hover:not(.section4) {
            color: var(--neutral-100);
            background-color: var(--primary-700);

        }
    }

    .section-button-1,
    .section-button-2,
    .section-button-3 {
        background-color: var(--neutral-100);
        border: none;
        border-radius: 100%;
        font-size: 2em;
        padding: 0.5rem 1rem;
        transition: background-color 0.3s ease-in-out;
        cursor: pointer;

        &:hover {
            background-color: var(--primary-300);
        }
    }

    .section-content-1,
    .section-content-2,
    .section-content-3 {
        display: none;
        margin-top: 1rem;
    }
</style>

<body>
    <?php include 'includes/header.php'; ?>

    <div class="attribution">
        <p>Taken from the data provided by: <a href="https://www.newgeneralservicelist.com/" target="_blank">The New General Service List.</a></p>
    </div>

    <main>
        <section class="section1">
            <div class="heading-and-button">
                <h1>Essential English Vocabulary</h1>
                <button class="section-button-1">&darr;</button>
            </div>
            <div class="section-content-1">
                <?php include 'components/vocabulary/essential-words.php'; ?>
            </div>
        </section>

        <section class="section2">
            <div class="heading-and-button">
                <h1>Advanced English Vocabulary</h1>
                <button class="section-button-2">&darr;</button>
            </div>
            <div class="section-content-2">
                <?php include 'components/vocabulary/advanced-words.php'; ?>
            </div>
        </section>

        <section class="section3">
            <div class="heading-and-button">
                <h1>TOEIC Vocabulary</h1>
                <button class="section-button-3">&darr;</button>
            </div>
            <div class="section-content-3">
                <?php include 'components/vocabulary/toeic-words.php'; ?>
            </div>
        </section>

        <section class="section4">
            <div class="heading-and-button">
                <h1>Other Vocabulary</h1>
            </div>
            <div class="section-content-4">
                <?php include 'components/vocabulary/other-words-grid.php'; ?>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script>
        const noOfSections = 3;

        for (let i = 1; i <= noOfSections; i++) {
            const sectionButton = document.querySelector(`.section-button-${i}`);
            const sectionContent = document.querySelector(`.section-content-${i}`);
            const section = document.querySelector(`.section${i}`);

            sectionButton.addEventListener('click', () => {
                if (sectionContent.style.display === 'block') {
                    sectionContent.style.display = 'none';
                    sectionButton.innerHTML = '&darr;';
                } else {
                    sectionContent.style.display = 'block';
                    sectionButton.innerHTML = '&uarr;';
                }
            });
        }
    </script>
</body>