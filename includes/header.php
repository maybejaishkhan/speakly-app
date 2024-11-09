<style>
    .whitespace {
        background-color: var(--neutral-100);
        height: 100px;
    }

    .nav {
        position: fixed;
        z-index: 10;
        top: 1rem;
        left: 2.5%;
        width: 95%;

        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.5rem 1rem;

        background-color: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);

        border: 3px solid #ccc;
        border-radius: var(--rounded);
    }

    .nav-text {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .nav-list,
    .nav-icons {
        display: flex;
        gap: 1rem;
        list-style: none;
    }

    .nav-item {
        border-radius: var(--more-rounded);
        transition: background-color 0.3s ease;
    }

    .nav-link {
        color: black;
    }

    .nav-link:hover {
        color: var(--primary-700);
        transition: color 0.3s ease;
    }

    .home-link {
        font-weight: bolder;
    }

    .hamburger-menu {
        display: none;
        position: relative;
    }

    .hamburger-menu-content {
        position: absolute;
        top: 50px;
        right: 50px;
        transform: translateX(50%);
        z-index: 10;
        display: none;
        padding: 1rem;
        background-color: var(--primary-700);
        border-radius: var(--rounded);
        border: 2px solid var(--primary-300);
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);

        .ham-list {
            list-style: none;

            .ham-link {
                color: var(--neutral-100);
                padding: 0.5rem;
                border-radius: var(--rounded);
                border: 1px solid transparent;

                &:hover {
                    border-color: var(--neutral-100);
                }

                &:active {
                    background-color: var(--orange-highlight);
                }
            }

        }
    }

    .user-menu {
        position: relative;
    }

    .user-options {
        min-width: max-content;
        position: absolute;
        top: 50px;
        right: 50px;
        transform: translateX(50%);
        z-index: 10;
        display: none;
        padding: 1rem;
        background-color: var(--primary-700);
        border-radius: var(--rounded);
        border: 2px solid var(--primary-300);
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);

        .user-option {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem;
            border-radius: var(--rounded);
            border: 1px solid transparent;

            &:hover {
                border-color: var(--neutral-100);
            }

            &:active {
                background-color: var(--orange-highlight);
            }

            .user-option-link {
                color: var(--neutral-100);
                cursor: pointer;
            }
        }
    }

    .open {
        display: block;
    }

    .user-menu:hover,
    .settings-menu:hover,
    .hamburger-menu:hover {
        outline: 3px solid var(--neutral-900);
    }

    @media (max-width: 700px) {
        .nav-list {
            display: none;
        }

        .hamburger-menu {
            display: block;
        }
    }

    dialog {
        padding: 2rem;
        border-radius: 8px;
        text-align: left;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        border: none;

        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    dialog::backdrop {
        background: rgba(0, 0, 0, 0.5);
    }

    .modal-toprow {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1rem;

        .actions {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            align-items: center;
            gap: 0.5rem;
        }
    }

    .modal-buttons {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 1rem;
        margin-bottom: 2rem;

        .dark-mode,
        .monochrome,
        .notifications {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 3px solid black;
            border-radius: var(--more-rounded);
            padding: 0.5rem;

            .toggle-text {
                margin-top: 0.5rem;
            }
        }
    }

    .modal-title {
        font-size: clamp(1.5rem, 5vw, 2rem);
    }

    /* Base macOS-style button */
    .macos-button {
        display: flex;
        align-items: center;
        gap: 8px;
        border: none;
        border-radius: var(--circle);
        font-size: 16px;
        color: var(--neutral-100);
        cursor: pointer;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        padding: 0.5em;
    }

    /* Icon styling */
    .macos-button svg {
        width: 20px;
        height: 20px;
    }

    .macos-button.close-btn {
        background-color: #ff5f57;

        &:hover {
            background-color: #ff3b30;
        }

        &:active {
            background-color: #d93630;
        }
    }

    .macos-button.save-btn {
        background-color: #28cd41;

        &:hover {
            background-color: #1fb532;
        }

        &:active {
            background-color: #1a9b2c;
        }
    }

    .macos-button.reset-btn {
        background-color: #e0e0e0;

        &:hover {
            background-color: #c0c0c0;
        }

        &:active {
            background-color: #a0a0a0;
        }
    }

    .font-dropdown {
        position: relative;
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: center;
        gap: 0.5rem;
        font-size: clamp(1rem, 5vw, 1.25rem);
        border: 3px solid var(--neutral-900);
        border-radius: var(--rounded);
        padding: 1rem;
        margin-bottom: 1rem;

        &::after {
            content: "▼";
            position: absolute;
            right: 0.5rem;
            pointer-events: none;
            color: var(--neutral-900);
            top: 50%;
            transform: translateY(-50%);
            right: 2rem;
        }
    }

    .font-style-label {
        font-weight: bold;
    }

    .font-style-select {
        font-size: 1em;
        padding: 0.5rem;
        background-color: var(--neutral-100);
        border-radius: var(--rounded);
        appearance: none;
    }
</style>


<div class="whitespace"></div>
<nav class="nav">
    <span class="nav-text">Speakly.</span>
    <ul class="nav-list">
        <li class="nav-item"><a href="index.php" class="nav-link home-link">Home</a></li>
        <li class="nav-item"><a href="grammar-page.php" class="nav-link grammar-link">Grammar</a></li>
        <li class="nav-item"><a href="flashcards-page.php" class="nav-link flashcards-link">Flashcards</a></li>
        <li class="nav-item"><a href="vocabulary-page.php" class="nav-link vocabulary-link">Vocabulary</a></li>
        <li class="nav-item"><a href="about-page.php" class="nav-link about-link">About</a></li>
    </ul>
    <ul class="nav-icons">
        <li class="user-menu nav-icon">
            <img src="static/assets/svgs/user.svg" alt="Home">
            <div class="user-options">
                <?php if (!isset($_SESSION['username'])) : ?>
                    <div class="user-option">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H10" stroke="var(--neutral-100)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17 16L21 12L17 8" stroke="var(--neutral-100)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M21 12H9" stroke="var(--neutral-100)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <a href="login-page.php" class="user-option-link">Login User</a>
                    </div>
                <?php else : ?>
                    <div class="user-option">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 3H19C20.1 3 21 3.9 21 5V19C21 20.1 20.1 21 19 21H14" stroke="var(--neutral-100)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7 16L3 12L7 8" stroke="var(--neutral-100)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3 12H15" stroke="var(--neutral-100)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <a href="logout-page.php" class="user-option-link">Logout</a>
                    </div>
                    <div class="user-option">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="8" r="4" stroke="var(--neutral-100)" stroke-width="2" />
                            <path d="M15 20H3V19C3 16.2386 5.23858 14 8 14H9" stroke="var(--neutral-100)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M21 17L19 15M21 17L23 15M21 17V21M3 7L5 9M3 7L1 9M3 7V3" stroke="var(--neutral-100)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <a href="login-page.php" class="user-option-link">Switch User</a>
                    </div>
                <?php endif; ?>
                <div class="user-option">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="9" cy="8" r="4" stroke="var(--neutral-100)" stroke-width="2" />
                        <path d="M15 20H3V19C3 16.2386 5.23858 14 8 14H9" stroke="var(--neutral-100)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M19 8V14M16 11H22" stroke="var(--neutral-100)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <a href="signup-page.php" class="user-option-link">Signup User</a>
                </div>
            </div>
        </li>
        <li class="settings-menu nav-icon">
            <img src="static/assets/svgs/gear.svg" alt="Settings">
        </li>
        <li class="hamburger-menu nav-icon">
            <img src="static/assets/svgs/hamburger.svg" alt="Menu">
            <div class="hamburger-menu-content">
                <ul class="ham-list">
                    <li class="ham-item"><a href="index.php" class="ham-link home-link">Home</a></li>
                    <li class="ham-item"><a href="grammar-page.php" class="ham-link grammar-link">Grammar</a></li>
                    <li class="ham-item"><a href="flashcards-page.php" class="ham-link flashcards-link">Flashcards</a></li>
                    <li class="ham-item"><a href="vocabulary-page.php" class="ham-link vocabulary-link">Vocabulary</a></li>
                    <li class="ham-item"><a href="about-page.php" class="ham-link about-link">About</a></li>
                </ul>
            </div>
        </li>
    </ul>

    <dialog id="settingsModal">
        <div class="modal-toprow">
            <h2 class="modal-title">Settings</h2>
            <div class="actions">

                <button class="macos-button reset-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24">
                        <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" />
                    </svg>
                </button>
                <button class="macos-button save-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z" />
                    </svg>
                </button>

                <button class="macos-button close-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24">
                        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="modal-buttons">
            <div class="dark-mode" alt="Dark Mode">
                <span class="toggle-text">Dark Mode</span>
                <?php include 'components/on-off-toggle.html'; ?>
            </div>
            <div class="notifications" alt="Notifications">
                <span class="toggle-text">Notifications</span>
                <?php include 'components/on-off-toggle.html'; ?>
            </div>
            <div class="monochrome" alt="Monochrome">
                <span class="toggle-text">Monochrome</span>
                <?php include 'components/on-off-toggle.html'; ?>
            </div>
        </div>

        <div class="font-dropdown">
            <label for="fontStyle" class="font-style-label">Font Style
            </label>
            <select id="fontStyle" class="font-style-select">
                <option value="Atkinson">Atkinson (Default)</option>
                <option value="Inter">Inter (Serif)</option>
                <option value="EB Garamond">EB Garamond (Sans-Serif)</option>
                <option value="JetBrains Mono">JetBrains Mono (Monospace)</option>
            </select>

        </div>


    </dialog>
</nav>

<script>
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const hamburgerMenuContent = document.querySelector('.hamburger-menu-content');
    hamburgerMenu.addEventListener('click', () => {
        hamburgerMenuContent.classList.toggle('open');
    });

    const userMenu = document.querySelector('.user-menu');
    const userOptions = document.querySelector('.user-options');
    userMenu.addEventListener('click', () => {
        userOptions.classList.toggle('open');
    })

    const settingsMenu = document.querySelector('.settings-menu');
    const settingsModal = document.querySelector('#settingsModal');
    const closeBtn = document.querySelector('.close-btn');
    const saveBtn = document.querySelector('.save-btn');
    settingsMenu.addEventListener('click', () => {
        settingsModal.showModal();
    });

    closeBtn.addEventListener('click', () => {
        settingsModal.close();
    });

    saveBtn.addEventListener('click', () => {
        settingsModal.classList.remove('open');
    });
</script>