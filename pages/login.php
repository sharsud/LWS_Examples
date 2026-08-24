<?php
$lwsBase = '../';
$pageTitle = 'Login - Learn with Psudo | Python, Automation & Selenium Tutorials';
$pageCanonical = 'https://examples.learnwithpsudo.com/pages/login.php';
require_once dirname(__DIR__) . '/includes/header.php';
?>
        <article id="main">
            <header>
                <h2>Login Page</h2>
                <p>Use this form to log in with your credentials. Default ID & Password is <strong>admin</strong>.</p>
            </header>
            <section class="wrapper style5">
                <div class="inner">

                    <div class="page-section">
                        <h3>🔐 Login Form</h3>
                        <div class="feature-card">
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

                                <div class="code-info mt-2">
                                    <p>Hint: Use <code>admin</code> as both username and password.</p>
                                    <p><strong>Selenium Example:</strong></p>
                                    <code>driver.find_element(By.ID, "username").send_keys("admin")</code><br>
                                    <code>driver.find_element(By.ID, "password").send_keys("admin")</code><br>
                                    <code>driver.find_element(By.CSS_SELECTOR, "button[type='submit']").click()</code>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </section>
        </article>
<?php
$extraScripts = <<<'JS'
    <script>
        function validateLogin() {
            const username = document.getElementById("username").value.trim();
            const password = document.getElementById("password").value.trim();

            if (username === "admin" && password === "admin") {
                alert("✅ Login successful!");
                return false;
            } else {
                alert("❌ Invalid credentials. Try again.");
                return false;
            }
        }
    </script>
JS;
require_once dirname(__DIR__) . '/includes/footer.php';
