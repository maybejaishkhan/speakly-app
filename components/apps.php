<style>
    .apps-container {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        padding-inline: 1rem;
        justify-content: center;

        border-left: 20px solid var(--yellow-highlight);
        border-right: 20px solid var(--orange-highlight);
    }

    .platform-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        list-style: none;
    }

    .platform-tag {
        padding: 0.5rem 1rem;
        border-radius: var(--pill);
        border: 2px solid black;

        a {
            font-family: "JetBrains Mono", monospace;
            font-size: clamp(0.75em, 1.5vw, 1em);

            &:hover {
                text-decoration: underline;
            }
        }
    }
</style>

<div class="apps-container">
    <h2 style="color:black">We currently don't have any apps available for you to download. We are working on it!</h2>
    <ul class="platform-tags">
        <li class="platform-tag"><a href="content/apps/android-app.html">#Android</a></li>
        <li class="platform-tag"><a href="content/apps/ios-app.html">#iOS</a></li>
        <li class="platform-tag"><a href="content/apps/windows-app.html">#Windows</a></li>
        <li class="platform-tag"><a href="content/apps/macos-app.html">#MacOS</a></li>
        <li class="platform-tag"><a href="content/apps/debian-app.html">#Debian</a></li>
        <li class="platform-tag"><a href="content/apps/fedora-app.html">#Fedora</a></li>
        <li class="platform-tag"><a href="content/apps/arch-app.html">#Arch</a></li>
    </ul>
</div>