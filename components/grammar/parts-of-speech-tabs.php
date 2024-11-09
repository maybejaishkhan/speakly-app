<?php ?>

<style>
    .chevron {
        position: absolute;
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-top: 10px solid #007bff;
        transition: left 0.3s ease;
    }

    .tab-container {
        position: relative;
        margin-top: 1rem;
    }

    .tabs {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        position: relative;
    }

    .tab {
        padding: 10px 20px;
        background-color: #f1f1f1;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s;
        font-family: monospace;
        font-size: 1em;
    }

    .tab:hover {
        background-color: #ddd;
    }

    .tab-content {
        border: 1px solid #ddd;
        padding: 20px;
        background-color: #fff;
    }

    .content {
        display: none;
    }
</style>

<div class="tab-container">
    <div class="tabs">
        <button class="tab" onclick="showTab('noun');" data-color="#48eb88">Noun</button>
        <button class="tab" onclick="showTab('pronoun')" data-color="#9d94cd">Pronoun</button>
        <button class="tab" onclick="showTab('verb')" data-color="#bfbba1">Verb</button>
        <button class="tab" onclick="showTab('adjective')" data-color="#fb9597">Adjective</button>
        <button class="tab" onclick="showTab('adverb')" data-color="#b2d3bd">Adverb</button>
        <button class="tab" onclick="showTab('preposition')" data-color="#afc0e4">Preposition</button>
        <button class="tab" onclick="showTab('conjunction')" data-color="#f89fcb">Conjunction</button>
        <button class="tab" onclick="showTab('interjection')" data-color="#6281e1">Interjection</button>
        <button class="tab" onclick="showTab('determiner')" data-color="#fbb36a">Determinative</button>
    </div>

    <div id="chevron" class="chevron"></div>

    <div class="tab-content">
        <div id="noun" class="content">Noun content goes here...</div>
        <div id="pronoun" class="content">Pronoun content goes here...</div>
        <div id="verb" class="content">Verb content goes here...</div>
        <div id="adjective" class="content">Adjective content goes here...</div>
        <div id="adverb" class="content">Adverb content goes here...</div>
        <div id="preposition" class="content">Preposition content goes here...</div>
        <div id="conjunction" class="content">Conjunction content goes here...</div>
        <div id="interjection" class="content">Interjection content goes here...</div>
        <div id="determiner" class="content">Determinative content goes here...</div>
    </div>
</div>

<script>
    function showTab(tabId) {
        // Hide all content sections
        const contents = document.querySelectorAll('.content');
        contents.forEach(content => content.style.display = 'none');

        // Remove the active class and reset color on all tabs
        const tabs = document.querySelectorAll('.tab');
        tabs.forEach(tab => {
            tab.classList.remove('active');
            tab.style.backgroundColor = ''; // Reset background color
            tab.style.color = ''; // Reset text color if needed
        });

        // Show the selected content and apply active color
        const activeTab = event.target;
        document.getElementById(tabId).style.display = 'block';
        if(activeTab) activeTab.classList.add('active'); else console.log("No active tab");

        // Get the color from the data-color attribute
        const color = activeTab.getAttribute('data-color');
        activeTab.style.backgroundColor = color;
        activeTab.style.color = '#fff'; // Adjust text color for visibility if needed

        // Move the chevron to the active tab and change its color
        const chevron = document.getElementById('chevron');
        const tabRect = activeTab.getBoundingClientRect();
        const containerRect = document.querySelector('.tabs').getBoundingClientRect();
        chevron.style.left = `${tabRect.left - containerRect.left + tabRect.width / 2 - 10}px`;
        chevron.style.borderTopColor = color;
    }

    // Show the first tab by default on page load
    document.addEventListener("DOMContentLoaded", function() {
        showTab('noun');
    });
</script>