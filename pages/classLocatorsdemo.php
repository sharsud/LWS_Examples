<!DOCTYPE HTML>
<html>
<head>
    <title>CSS Locator Practice - Learn with Psudo</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="../images/logo.ico" />
    <link rel="icon" href="../images/logo.ico" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
     <link rel="canonical" href="https://examples.learnwithpsudo.com/pages/classLocatorsdemo.php" />
</head>
<body class="landing">
<div id="page-wrapper">
<?php include "../includes/generic_header.php"; ?>

<article id="main">
    <header>
        <h2>CSS Selector Practice</h2>
        <p>Only CSS-based locators are demonstrated here. Try inspecting elements using id, class, attributes, tag names, and nested selectors!</p>
    </header>
    <section class="wrapper style5">
        <div class="inner">

            <form id="cssLocatorForm" method="post" action="#">
                <div class="fields">

                    <!-- ID Selectors -->
                    <div class="field">
                        <label for="username">Username (CSS: #username)</label>
                        <input type="text" id="username" class="input-field" placeholder="admin" />
                    </div>
                    <div class="field">
                        <label for="username2">Backup Username (CSS: #username2)</label>
                        <input type="text" id="username2" class="input-field" placeholder="admin123" />
                    </div>

                    <!-- Class Selectors -->
                    <div class="field">
                        <label for="useremail">Email (CSS: .input-email)</label>
                        <input type="email" id="useremail" class="input-field input-email" placeholder="email@example.com" />
                    </div>
                    <div class="field">
                        <label for="altEmail">Alternate Email (CSS: .input-email)</label>
                        <input type="email" id="altEmail" class="input-email" placeholder="alt@example.com" />
                    </div>

                    <!-- Attribute Selectors -->
                    <div class="field">
                        <label for="pass1">Password (CSS: input[placeholder='Enter password'])</label>
                        <input type="password" id="pass1" class="input-field" placeholder="Enter password" />
                    </div>
                    <div class="field">
                        <label for="passConfirm">Confirm Password (CSS: input[placeholder='Re-enter password'])</label>
                        <input type="password" id="passConfirm" class="input-field" placeholder="Re-enter password" />
                    </div>

                    <!-- Tag + Class Selectors -->
                    <div class="field">
                        <label for="bio">Bio (CSS: textarea.input-field)</label>
                        <textarea id="bio" class="input-field" rows="3" placeholder="Tell us about yourself"></textarea>
                    </div>
                    <div class="field">
                        <label for="feedback">Feedback (CSS: textarea.input-field)</label>
                        <textarea id="feedback" class="input-field" rows="2" placeholder="Your feedback"></textarea>
                    </div>

                    <!-- Starts-With, Ends-With, Contains Attribute -->
                    <div class="field">
                        <label for="user_name1">User Name (name^='user')</label>
                        <input type="text" id="user_name1" name="user_name_main" placeholder="john_doe" />
                    </div>
                    <div class="field">
                        <label for="user_name2">Display Name (name$='_name')</label>
                        <input type="text" id="user_name2" name="display_name" placeholder="Johnny" />
                    </div>
                    <div class="field">
                        <label for="user_name3">Search Name (name*='name')</label>
                        <input type="text" id="user_name3" name="custom_name_field" placeholder="search_name" />
                    </div>

                    <!-- Nested / Descendant Selectors -->
                    <div class="field group-block">
                        <label>Preferred Language (CSS: div.group-block input[type='radio'])</label>
                        <div class="field radio-options">
                            <input type="radio" id="langPython" name="language" value="python" />
                            <label for="langPython">Python</label>
                            <input type="radio" id="langJava" name="language" value="java" />
                            <label for="langJava">Java</label>
                        </div>
                    </div>

                </div>

                <!-- Submit -->
                <ul class="actions">
                    <li><button type="submit" class="button primary" id="submitBtn">Submit</button></li>
                </ul>
            </form>

            <!-- Instructions -->
            <div class="info">
                <p><strong>Instructions for CSS Selector Practice:</strong></p>
                <ul>
                    <li><code>driver.find_element(By.CSS_SELECTOR, "#username")</code></li>
                    <li><code>driver.find_element(By.CSS_SELECTOR, ".input-email")</code></li>
                    <li><code>driver.find_element(By.CSS_SELECTOR, "input[placeholder='Enter password']")</code></li>
                    <li><code>driver.find_element(By.CSS_SELECTOR, "textarea.input-field")</code></li>
                    <li><code>driver.find_element(By.CSS_SELECTOR, "div.group-block input[type='radio']")</code></li>
                    <li><code>driver.find_element(By.CSS_SELECTOR, "input[name^='user']")</code></li>
                    <li><code>driver.find_element(By.CSS_SELECTOR, "input[name$='_name']")</code></li>
                    <li><code>driver.find_element(By.CSS_SELECTOR, "input[name*='name']")</code></li>
                </ul>
            </div>

        </div>
    </section>
</article>

<?php include "../includes/generic_footer.php"; ?>
</div>
</body>
</html>
