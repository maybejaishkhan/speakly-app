<?php
// index.php
require 'includes/config.php';

$title = 'Speakly - Flashcards';
?>

<?php include 'includes/head.php'; ?>
<style>
    <?php include 'static/css/reset.css'; ?>
    section {
        padding: 2rem;

        h1 {
            font-size: clamp(1.5em, 5vw, 3.5em);
        }
        h2 {
            font-size: clamp(1em, 5vw, 3em);
        }
    }

    .section1 {
        background-color: var(--primary-700);
        color: var(--neutral-100);
    }
    
    .section2 {
        background: rgb(197, 255, 159);
        background: linear-gradient(126deg, rgba(197, 255, 159, 1) 0%, rgba(197, 248, 243, 1) 100%);
    }
</style>

<?php include 'includes/header.php'; ?>

<main>
    <section class="section1">
        <h1 class="flashcard-heading">Flashcard Sets</h1>
        <?php include 'components/flashcards/default-flashcards.php' ?>
    </section>
    <section class="section2">
        <?php include 'components/flashcards/your-flashcards.php' ?>
    </section>
    <section class="section3">
        <?php include 'components/flashcards/create-flashcards.php' ?>
    </section>
</main>

<?php include 'includes/footer.php'; ?>