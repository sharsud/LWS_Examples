<!DOCTYPE HTML>
<html>
<head>
    <title>Login - Learn with Psudo | Python, Automation & Selenium Tutorials</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="../images/logo.ico" />
    <link rel="icon" href="../images/logo.ico" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
     <link rel="canonical" href="https://examples.learnwithpsudo.com/pages/login.php" />
</head>
<body class="landing">
    <div id="page-wrapper">

        <?php include "../includes/generic_header.php"; ?>

        <article id="main">
            <header>
                <h2>Login Page</h2>
                <p>Use this form to log in with your credentials. Default ID & Password is <strong>admin</strong>.</p>
            </header>
            <section class="wrapper style5">
                <div class="inner">

                    <h3>Login Form</h3>
                    <form id="loginForm" name="loginForm" onsubmit="return validateLogin();">
                        <div class="fields">

                            <div class="field half">
                                <label for="username">Username</label>
                                <input type="text" id="username" name="username" placeholder="Enter username" />
                            </div>

                            <div class="field half">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" placeholder="Enter password" />
                            </div>

                        </div>

                        <ul class="actions">
                            <li><button type="submit" class="button primary">Login</button></li>
                            <li><button type="reset" class="button">Reset</button></li>
                        </ul>

                        <p>Hint: Use <code>admin</code> as both username and password.</p>

                    </form>
                </div>
            </section>
        </article>

        <?php include "../includes/generic_footer.php"; ?>
    </div>

    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery.scrollex.min.js"></script>
    <script src="../assets/js/jquery.scrolly.min.js"></script>
    <script src="../assets/js/browser.min.js"></script>
    <script src="../assets/js/breakpoints.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>

    <script>
        function validateLogin() {
            const username = document.getElementById("username").value.trim();
            const password = document.getElementById("password").value.trim();

            if (username === "admin" && password === "admin") {
                alert("✅ Login successful!");
                return false; // Prevent actual form submission
            } else {
                alert("❌ Invalid credentials. Try again.");
                return false; // Prevent actual form submission
            }
        }
    </script>
</body>
</html>
