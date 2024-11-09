<?php
require 'includes/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<p class='error'>Username already exists. Please choose a different username.</p>";
    } else {
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password_hash);

        if ($stmt->execute()) {
            echo "<p class='success'>Registration successful!</p>";
            header("Location: login-page.php");
        } else {
            echo "<p class='error'>Error: " . $stmt->error . "</p>";
        }
    }

    $stmt->close();
}
$conn->close();
?>

<?php include 'includes/head.php'; ?>
    <style>
        <?php include "static/css/reset.css"; ?>body {
            display: grid;
            place-items: center;
            background-color: var(--primary-700);
        }

        .container {
            width: 500px;
            padding: 2rem;
            border: 1px solid #ccc;
            border-radius: var(--rounded);
            background-color: var(--neutral-200);
        }

        .signup-text {
            width: max-content;
            padding: 0.5rem 1rem;
            background-color: var(--primary-700);
            color: var(--neutral-200);
            border-radius: var(--rounded);

            a {
                color: var(--primary-300);
            }
        }

        .login-heading {
            font-size: 3rem;
        }

        .auth-form {
            margin-top: 3rem;
            display: flex;
            flex-direction: column;
            gap: 3rem;
        }

        .inputs-container,
        .login-buttons-container {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .username-container,
        .password-container,
        .email-container,
        .retype-container {
            display: flex;
            flex-direction: column;
        }

        input {
            padding: 1rem;
            border-radius: var(--less-rounded);
            border: 2px solid #ccc;
            font-size: 1.25em;
        }

        input:valid:not(:placeholder-shown) {
            border-color: var(--valid-color);
            background-image: url("static/assets/svgs/valid.svg");
        }

        input:invalid:not(:placeholder-shown) {
            border-color: var(--invalid-color);
            background-image: url("static/assets/svgs/invalid.svg");
        }

        input:valid:not(:placeholder-shown),
        input:invalid:not(:placeholder-shown) {
            background-size: 20px;
            background-repeat: no-repeat;
            background-position: calc(100% - 10px);
        }

        input:valid:not(:placeholder-shown)+p {
            color: var(--valid-color);
        }

        input:invalid:not(:placeholder-shown)+p {
            color: var(--invalid-color);
        }

        button {
            padding: 1rem;
            border-radius: var(--less-rounded);
            color: var(--neutral-200);
            background-color: var(--neutral-900);
            border: none;
            font-size: 1.25em;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #ccc;
            transition: background-color 0.3s ease;
        }

        dialog {
            min-width: 95%;
            max-height: 100%;
            padding: 20px;
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

        .privacy-text,
        .terms-text {
            color: var(--primary-700);
            cursor: pointer;
        }

        input[type="checkbox"] {
            margin-right: 0.5rem;
            cursor: pointer;
            border: none;
            accent-color: var(--orange-highlight);
            width: 20px;
            height: 20px;
            transition: all 0.3s ease;
        }

        .terms-container,
        .privacy-container {
            display: flex;

            h3 {
                font-weight: bold;
            }
        }

        iframe {
            padding: 1rem;
            border-radius: var(--rounded);
            border: none;
            min-width: 100%;
            min-height: 500px;
        }

        input[type="password"]::-ms-reveal {
            margin-right: 1.5rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="signup-heading">Sign Up! to <span style="color:var(--orange-highlight)">Speakly</span></h1>
        <p class="signup-text">Already have an account? <a href="login-page.php" class="login-link">Login</a></p>
        <form method="POST" class="auth-form">
            <div class="inputs-container">
                <div class="username-container">
                    <input type="text" name="username" placeholder="Username" minlength="4" maxlength="20" required>
                </div>
                <div class="email-container">
                    <input type="email" name="email" placeholder="Email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
                </div>
                <div class="password-container">
                    <input type="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=]).{8,}" required>
                </div>
                <div class="retype-container">
                    <input type="password" placeholder="Password (again)" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=]).{8,}" required>
                </div>
                <div class="terms-container">
                    <input type="checkbox" name="terms" id="terms" required>
                    <label for="terms">I agree to the <span onclick="document.getElementById('termsDialog').showModal()" class="terms-text">Terms and Conditions</span></label>
                    <dialog id="termsDialog">
                        <h3>Terms and Conditions</h3>
                        <iframe src="content/terms-and-condition.html"></iframe>
                        <button onclick="document.getElementById('termsDialog').close()">Close</button>
                    </dialog>
                </div>
                <div class="privacy-container">
                    <input type="checkbox" name="privacy" id="privacy" required>
                    <label for="privacy">I agree to the <span onclick="document.getElementById('privacyDialog').showModal()" class="privacy-text">Privacy Policy</span></label>
                    <dialog id="privacyDialog">
                        <h3>Privacy Policy</h3>
                        <iframe src="content/privacy-policy.html"></iframe>
                        <button onclick="document.getElementById('privacyDialog').close()">Close</button>
                    </dialog>
                </div>
            </div>
            <div class="login-buttons-container">
                <button type="submit">Sign Up</button>
            </div>
        </form>
    </div>

    <script>
        // Form submission validation
        function checkAgreement() {
            const termsCheckbox = document.getElementById('termsCheckbox');
            const privacyCheckbox = document.getElementById('privacyCheckbox');

            if (!termsCheckbox.checked || !privacyCheckbox.checked) {
                alert("Please agree to both Terms and Conditions and Privacy Policy.");
                return false;
            }
            return true;
        }
    </script>
</body>

</html>