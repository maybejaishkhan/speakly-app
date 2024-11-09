<?php
require 'includes/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("SELECT username, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($username, $hashed_password);

    if ($stmt->num_rows > 0) {
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['username'] = $username;

            echo "<p class='success'>Login successful.</p>";
            header("Location: dashboard-page.php");
            exit();
        } else {
            echo "<p class='error'>Incorrect password.</p>";
        }
    } else {
        echo "<p class='error'>Invalid email or password.</p>";
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

    .email-container,
    .password-container {
        display: flex;
        flex-direction: column;

        p {
            margin: 0.5rem;
            color: var(--neutral-500);
            font-size: 11px;
        }
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

    input[type="password"]::-ms-reveal {
        margin-right: 1.5rem;
    }
</style>

<body>
    <div class="container">
        <h1 class="login-heading">Login to <span style="color:var(--orange-highlight)">Speakly</span></h1>
        <p class="signup-text">Don't have an account? <a href="signup-page.php" class="signup-link">Sign up</a></p>
        <form method="POST" class="auth-form">
            <div class="inputs-container">
                <div class="email-container">
                    <input type="email" name="email" placeholder="Email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
                    <p>Email must use the format <span style="font-family:monospace;">email@example.com</span></p>
                </div>
                <div class="password-container">
                    <input type="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=]).{8,}" required>
                    <p>Password must be atleast 8 characters long and contain at least one number, one uppercase letter, and one lowercase letter.</p>
                </div>
            </div>
            <div class="login-buttons-container">
                <button type="submit">Log In</button>
                <p class="forgot-text">Forgot Password? <a href="reset-password-page.php" class="forgot-link">Reset Password</a></p>
            </div>
        </form>
    </div>
</body>