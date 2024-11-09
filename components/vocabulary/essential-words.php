<?php
$dictionary = json_decode(file_get_contents('dictionaries/NGSL.json'), true);

$words = array_keys($dictionary);
sort($words);
?>


<style>
    .list-inner {
        columns: 200px;
    }
    
    .list-item {
        break-inside: avoid;
        padding: 1rem;
        margin-bottom: 1rem;
        border: 1px solid var(--neutral-100);
        border-radius: var(--rounded);
        text-align: left;
        text-wrap: pretty;
        font-size: clamp(0.25em, 1vw, 1em);
        
        strong {
            background-color: var(--neutral-100);
            color: var(--neutral-900);
            border-radius: var(--pill);
            border: 1px solid var(--neutral-100);
            padding: 0.25rem 0.5rem;
            text-transform: capitalize;
        }
    }
</style>

<div class="list">
    <div class="list-inner">
        <?php foreach ($words as $word): ?>
            <div class="list-item">
                <strong><?php echo $word ?></strong>
                <span><?php echo $dictionary[$word] ?></span>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script>
</script>