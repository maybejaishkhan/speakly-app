<style>
    footer {
        display: flex;
        justify-content: space-between;
        border-top: 1px solid #ccc;
        padding: 1rem;
        gap: 1rem;
    }

    @media (max-width: 700px) {
        footer {
            flex-direction: column;
            align-items: center;
        }
    }

    .footer_links {
        display: flex;
        gap: 1rem;
        list-style: none;
        transition: scale 0.3s ease-in-out;
    }

    .footer_link:hover {
        scale: 1.1;
    }

    .author_link {
        color: var(--orange-highlight);
    }

    .footer_image {
        width: 1.5rem;
        height: 1.5rem;
        margin: 0 0.5rem;
    }

</style>

<footer>
    <p>Designed & Developed by
        <a href="https://www.linkedin.com/in/jaish-khan-b54083236/" target="_blank" class="author_link">Jaish Khan.</a>
    </p>
    <div class="footer_links">
        <a href="" class="footer_link tooltip"><img src="static/assets/svgs/github-logo.svg" alt="Github" class="footer_image"></a>
        <a href="" class="footer_link tooltip"><img src="static/assets/svgs/facebook-logo.svg" alt="Facebook" class="footer_image"></a>
        <a href="" class="footer_link tooltip"><img src="static/assets/svgs/reddit-logo.svg" alt="Reddit" class="footer_image"></a>
        <a href="" class="footer_link tooltip"><img src="static/assets/svgs/threads-logo.svg" alt="Threads" class="footer_image"></a>
        <a href="" class="footer_link tooltip"><img src="static/assets/svgs/linkedin-logo.svg" alt="LinkedIn" class="footer_image"></a>
    </div>

</footer>