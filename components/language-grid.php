<style>
    .lang-link {
        color: white;
    }

    .lang-list {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1rem;
    }

    .lang-item {
        padding: 1rem;
        border-radius: var(--more-rounded);
        transition: background-color 0.3s ease;
        cursor: pointer;
        position: relative;
        border: 1px solid white;

        img {
            width: 100%;
        }
    }

    .lang-item-text {
        display: flex;
        justify-content: space-between;
        gap: 0.5rem;
    }

    #languages:hover>.languages::after {
        opacity: 1;
    }

    .lang-item:hover::before {
        opacity: 1;
    }

    .lang-item::before,
    .lang-item::after {
        border-radius: inherit;
        content: "";
        height: 100%;
        left: 0px;
        opacity: 0;
        position: absolute;
        top: 0px;
        transition: opacity 500ms;
        width: 100%;
    }

    .lang-item::before {
        background: radial-gradient(800px circle at var(--mouse-x) var(--mouse-y),
                rgba(255, 255, 255, 0.06),
                transparent 40%);
        z-index: 3;
    }

    .lang-item::after {
        background: radial-gradient(600px circle at var(--mouse-x) var(--mouse-y),
                rgba(255, 255, 255, 0.4),
                transparent 40%);
        z-index: 1;
    }

    .heading-container {
        margin-block: 3rem;

        h2 {
            font-size: clamp(1em, 5vw, 3rem);
            font-weight: bold;
            text-align: center;
        }
    }

    .not-available {
        filter: grayscale(100%);
        opacity: 0.5;
    }
</style>

<div class="heading-container">
    <h2>Choose a <strong style="color:yellow">Language</strong> to Learn <br> &darr;</h2>
</div>

<div class="lang-list" id="languages">
    <a href="content/languages/english-intro.html" class="lang-link">
        <div class="lang-item">
            <img src="static/assets/svgs/languages/english.svg" alt="English">
            <div class="lang-item-text">
                <h3>English</h3>
                <p>Learn US/UK English</p>
            </div>
        </div>
    </a>
    <a href="content/languages/urdu-intro.html" class="lang-link">
        <div class="lang-item not-available">
            <img src="static/assets/svgs/languages/urdu.svg" alt="Urdu">
            <div class="lang-item-text">
                <h3>Urdu</h3>
                <p>Not Available</p>
            </div>
        </div>
    </a>
    <a href="content/languages/arabic-intro.html" class="lang-link">
        <div class="lang-item not-available">
            <img src="static/assets/svgs/languages/arabic.svg" alt="Arabic">
            <div class="lang-item-text">
                <h3>Arabic</h3>
                <p>Not Available</p>
            </div>
        </div>
    </a>
    <a href="content/languages/hindi-intro.html" class="lang-link">
        <div class="lang-item not-available">
            <img src="static/assets/svgs/languages/hindi.svg" alt="Hindi">
            <div class="lang-item-text">
                <h3>Hindi</h3>
                <p>Not Available</p>
            </div>
        </div>
    </a>
    <a href="content/languages/french-intro.html" class="lang-link">
        <div class="lang-item not-available">
            <img src="static/assets/svgs/languages/french.svg" alt="French">
            <div class="lang-item-text">
                <h3>French</h3>
                <p>Not Available</p>
            </div>
        </div>
    </a>
    <a href="content/languages/german-intro.html" class="lang-link">
        <div class="lang-item not-available">
            <img src="static/assets/svgs/languages/german.svg" alt="German">
            <div class="lang-item-text">
                <h3>German</h3>
                <p>Not Available</p>
            </div>
        </div>
    </a>
    <a href="content/languages/italian-intro.html" class="lang-link">
        <div class="lang-item not-available">
            <img src="static/assets/svgs/languages/italian.svg" alt="Italian">
            <div class="lang-item-text">
                <h3>Italian</h3>
                <p>Not Available</p>
            </div>
        </div>
    </a>
    <a href="content/languages/spanish-intro.html" class="lang-link">
        <div class="lang-item not-available">
            <img src="static/assets/svgs/languages/spanish.svg" alt="Spanish">
            <div class="lang-item-text">
                <h3>Spanish</h3>
                <p>Not Available</p>
            </div>
        </div>
    </a>
    <a href="content/languages/sindhi-intro.html" class="lang-link">
        <div class="lang-item not-available">
            <img src="static/assets/svgs/languages/sindhi.svg" alt="Sindhi">
            <div class="lang-item-text">
                <h3>Sindhi</h3>
                <p>Not Available</p>
            </div>
        </div>
    </a>
    <a href="content/languages/balochi-intro.html" class="lang-link">
        <div class="lang-item not-available">
            <img src="static/assets/svgs/languages/balochi.svg" alt="Balochi">
            <div class="lang-item-text">
                <h3>Balochi</h3>
                <p>Not Available</p>
            </div>
        </div>
    </a>
    <a href="content/languages/punjabi-intro.html" class="lang-link">
        <div class="lang-item not-available">
            <img src="static/assets/svgs/languages/punjabi.svg" alt="Punjabi">
            <div class="lang-item-text">
                <h3>Punjabi</h3>
                <p>Not Available</p>
            </div>
        </div>
    </a>
    <a href="content/languages/pashto-intro.html" class="lang-link">
        <div class="lang-item not-available">
            <img src="static/assets/svgs/languages/pashto.svg" alt="Pashto">
            <div class="lang-item-text">
                <h3>Pashto</h3>
                <p>Not Available</p>
            </div>
        </div>
    </a>
    <a href="content/languages/japanese-intro.html" class="lang-link">
        <div class="lang-item not-available">
            <img src="static/assets/svgs/languages/japanese.svg" alt="Japanese">
            <div class="lang-item-text">
                <h3>Japanese</h3>
                <p>Not Available</p>
            </div>
        </div>
    </a>
    <a href="content/languages/korean-intro.html" class="lang-link">
        <div class="lang-item not-available">
            <img src="static/assets/svgs/languages/korean.svg" alt="Korean">
            <div class="lang-item-text">
                <h3>Korean</h3>
                <p>Not Available</p>
            </div>
        </div>
    </a>
    <a href="content/languages/mandarin-intro.html" class="lang-link">
        <div class="lang-item not-available">
            <img src="static/assets/svgs/languages/mandarin.svg" alt="Mandarin">
            <div class="lang-item-text">
                <h3>Mandarin (Chinese)</h3>
                <p>Not Available</p>
            </div>
        </div>
    </a>
    <a href="content/languages/cantonese-intro.html" class="lang-link">
        <div class="lang-item not-available">
            <img src="static/assets/svgs/languages/cantonese.svg" alt="Cantonese">
            <div class="lang-item-text">
                <h3>Cantonese (Chinese)</h3>
                <p>Not Available</p>
            </div>
        </div>
    </a>
</div>

<script>
    document.getElementById("languages").onmousemove = e => {
        for (const card of document.getElementsByClassName("lang-item")) {
            const rect = card.getBoundingClientRect(),
                x = e.clientX - rect.left,
                y = e.clientY - rect.top;

            card.style.setProperty("--mouse-x", `${x}px`);
            card.style.setProperty("--mouse-y", `${y}px`);
        };
    }
</script>