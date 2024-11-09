<?php
$dictionary = json_decode(file_get_contents('dictionaries/NAWL.json'), true);

$words = array_keys($dictionary);
shuffle($words);

// Select the first 10 words from the shuffled list
$randomWords = array_slice($words, 0, 10);
?>


<style>
    .carousel {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 1rem;
        padding: 1rem;
    }

    .carousel-inner .carousel-item:not(.carousel-item:first-child) {
        display: none;
    }

    .carousel-inner {
        width: 100%;
    }

    .carousel-item {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 1rem;
        border: 1px solid var(--neutral-100);
        border-radius: var(--rounded);
        text-wrap: pretty;

        strong {
            color: var(--yellow-highlight);
            border-bottom: 1px solid var(--yellow-highlight);
            font-size: 2rem;
        }

        span {
            font-size: 0.5em;
            font-family: var(--font-mono);
            border-radius: var(--pill);
            border: 1px solid var(--neutral-100);
            padding: 0.25rem 0.5rem;
            background-color: var(--neutral-100);
            color: var(--neutral-900);
        }

        p {
            font-size: clamp(0.5em, 4vw, 1em);
        }
    }

    .carousel-control-prev,
    .carousel-control-next {
        background-color: var(--neutral-100);
        border: none;
        border-radius: var(--rounded);
        font-size: clamp(1em, 5vw, 2em);
        padding: 1rem;
        transition: background-color 0.3s ease-in-out, scale 0.3s ease-in-out;
        cursor: pointer;

        &:hover {
            background-color: var(--primary-300);
            scale: 1.1;
        }
    }

    .carousel-mobile-controls {
        display: none;
    }

    @media (max-width: 700px) {
        .carousel-mobile-controls {
            display: flex;
            justify-content: center;
            gap: 1rem;
            padding: 1rem;
        }

        #prevBtnMob,
        #nextBtnMob {
            font-size: 0.6em;
            padding: 0.5rem 1rem;
            border-radius: var(--pill);
            background-color: var(--neutral-100);
            color: var(--neutral-900);

            &:active {
                background-color: var(--primary-700);
                color: var(--neutral-100);
            }
        }

        .carousel-control-prev,
        .carousel-control-next {
            display: none;
        }
    }
</style>

<div class="carousel-mobile-controls">
    <div id="prevBtnMob">&larr; previous</div>
    <div id="nextBtnMob">next &rarr;</div>
</div>
<div class="carousel slide" data-ride="carousel">
    <button id="prevBtn" class="carousel-control-prev">&larr;</button>
    <div class="carousel-inner">
        <?php foreach ($randomWords as $word): ?>
            <div class="carousel-item">
                <div style="display: flex; align-items: center; gap: 1rem;">
                <strong><?php echo $word ?></strong>
                <span><?php echo $dictionary[$word]['Parts of Speech'] ?></span>
                </div>
                <p><?php echo $dictionary[$word]['Definition'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    <button id="nextBtn" class="carousel-control-next">&rarr;</button>
</div>

<script>
    let carousel = document.querySelector('.carousel-inner');
    let nextBtn = document.getElementById('nextBtn');
    let prevBtn = document.getElementById('prevBtn');
    let nextBtnMob = document.getElementById('nextBtnMob');
    let prevBtnMob = document.getElementById('prevBtnMob');

    nextBtn.addEventListener('click', () => {
        carousel.append(carousel.querySelector('.carousel-item:first-child'));
    });

    prevBtn.addEventListener('click', () => {
        carousel.prepend(carousel.querySelector('.carousel-item:last-child'));
    });

    nextBtnMob.addEventListener('click', () => {
        carousel.append(carousel.querySelector('.carousel-item:first-child'));
    });

    prevBtnMob.addEventListener('click', () => {
        carousel.prepend(carousel.querySelector('.carousel-item:last-child'));
    });
</script>