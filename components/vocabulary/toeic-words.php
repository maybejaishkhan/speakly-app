<?php
$dictionary = json_decode(file_get_contents('dictionaries/TSL.json'), true);

$words = array_keys($dictionary);
sort($words);
?>


<style>
    .toeic-list-inner {
        columns: 2;
        column-gap: 2rem;
        column-rule: 1px solid var(--neutral-100);
    }
    .toeic-list-item {
        strong {
            color: var(--yellow-highlight);
            background-color: var(--primary-700);
            padding: 0.25rem 0.5rem;
            border-radius: var(--rounded);
        }
    }

    @media (max-width: 700px) {
        .toeic-list-inner {
            columns: 1;
        }
        .toeic-list-item {
            font-size: 0.75em;
        }
    }
</style>

<div class="toeic-list">
    <div class="toeic-list-inner">
        <?php foreach ($words as $word): ?>
            <div class="toeic-list-item">
                <strong><?php echo $word ?></strong> &rarr;
                <em><?php echo $dictionary[$word] ?></em>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script>
</script>