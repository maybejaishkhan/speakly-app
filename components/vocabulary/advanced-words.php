<?php
$dictionary = json_decode(file_get_contents('dictionaries/NAWL.json'), true);

$words = array_keys($dictionary);
sort($words);
?>


<style>
    .list-inner {
        columns: 250px;
    }
    
    .list-item {
        break-inside: avoid;
        padding: 1rem;
        margin-bottom: 1rem;
        border: 1px solid var(--neutral-100);
        border-radius: var(--rounded);
        font-size: 1em;
        text-align: left;
        text-wrap: pretty;

        strong {
            background-color: var(--neutral-100);
            color: var(--neutral-900);
            border-radius: var(--pill);
            border: 1px solid var(--neutral-100);
            padding: 0.25rem 0.5rem;
            text-transform: capitalize;
        }

        .parts-of-speech {
            color: var(--neutral-500);
        }
    }
</style>

<div class="list">
    <div class="list-inner">
        <?php foreach ($words as $word): ?>
            <div class="list-item">
                <strong><?php echo $word ?></strong>
                <span class="parts-of-speech"><?php echo $dictionary[$word]['Parts of Speech'] ?></span>
                <p><?php echo $dictionary[$word]['Definition'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script>
</script>