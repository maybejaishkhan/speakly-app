<?php ?>

<style>
    .other-words-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 1rem;
    }

    .grid-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 1rem;
        border: 2px solid var(--neutral-100);
        border-radius: var(--rounded);

        &:hover {
            border-color: var(--neutral-900);
        }
    }

    .grid-item-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: var(--rounded);
    }

    .grid-item-text {
        margin-top: 1rem;
    }

    .grid-item-heading {
        font-size: 1.5rem;
    }

    .grid-item-link {
        text-decoration: none;
        font-size: 1rem;
        padding: 0.5rem;
        color: green;

    }
    #NA {
        color: gray;
        text-decoration: line-through;
    }
</style>

<div class="other-words-grid">
    <div class="grid-item">
        <svg width="80" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <text x="0" y="18" font-family="Arial" font-size="16" fill="black">123</text>
        </svg>


        <div class="grid-item-text">
            <h2 class="grid-item-heading">Numbers</h2>
            <a href="numbers.html" class="grid-item-link">Link &nearr;</a>
        </div>
    </div>
    <div class="grid-item">
        <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke="black" stroke-width="2" />
            <line x1="12" y1="12" x2="12" y2="6" stroke="black" stroke-width="2" />
            <line x1="12" y1="12" x2="16" y2="12" stroke="black" stroke-width="2" />
        </svg>

        <div class="grid-item-text">
            <h2 class="grid-item-heading">Day/Time</h2>
            <a href="day-time.html" class="grid-item-link">Link &nearr;</a>
        </div>
    </div>
    <div class="grid-item">
        <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4 4h16v16H4z" stroke="black" stroke-width="2" fill="none" />
            <text x="6" y="14" font-family="Arial" font-size="10" fill="black">" "</text>
        </svg>

        <div class="grid-item-text">
            <h2 class="grid-item-heading">Proverbs</h2>
            <a href="" class="grid-item-link" id="NA">Link</a>
        </div>
    </div>
    <div class="grid-item">
        <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5 4h14v10H5z" fill="lightgray" stroke="black" stroke-width="2" />
            <polygon points="12,18 16,22 8,22" fill="black" />
        </svg>

        <div class="grid-item-text">
            <h2 class="grid-item-heading">Idioms</h2>
            <a href="" class="grid-item-link" id="NA">Link</a>
        </div>
    </div>
    <div class="grid-item">
        <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 12h18" stroke="black" stroke-width="2" />
            <path d="M6 15l6-6l6 6" stroke="black" stroke-width="2" />
        </svg>

        <div class="grid-item-text">
            <h2 class="grid-item-heading">Irregulars</h2>
            <a href="" class="grid-item-link" id="NA">Link</a>
        </div>
    </div>
    <div class="grid-item">
        <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="8" cy="12" r="5" fill="lightblue" stroke="black" stroke-width="2" />
            <circle cx="16" cy="12" r="5" fill="lightgreen" stroke="black" stroke-width="2" />
        </svg>


        <div class="grid-item-text">
            <h2 class="grid-item-heading">Synonyms</h2>
            <a href="" class="grid-item-link" id="NA">Link</a>
        </div>
    </div>
    <div class="grid-item">
        <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line x1="4" y1="12" x2="10" y2="12" stroke="black" stroke-width="2" />
            <line x1="14" y1="12" x2="20" y2="12" stroke="black" stroke-width="2" />
            <line x1="10" y1="8" x2="10" y2="16" stroke="black" stroke-width="2" />
            <line x1="14" y1="8" x2="14" y2="16" stroke="black" stroke-width="2" />
        </svg>

        <div class="grid-item-text">
            <h2 class="grid-item-heading">Antonyms</h2>
            <a href="" class="grid-item-link" id="NA">Link</a>
        </div>
    </div>
    <div class="grid-item">
        <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="8" cy="12" r="5" fill="lightcoral" stroke="black" stroke-width="2" />
            <circle cx="12" cy="12" r="5" fill="lightblue" stroke="black" stroke-width="2" />
            <circle cx="16" cy="12" r="5" fill="lightgreen" stroke="black" stroke-width="2" />
        </svg>


        <div class="grid-item-text">
            <h2 class="grid-item-heading">Homonyms</h2>
            <a href="" class="grid-item-link" id="NA">Link</a>
        </div>
    </div>
</div>

<script>

</script>