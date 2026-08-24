<?php
$lwsBase = '../';
$pageTitle = 'Child Window 2 - Form Practice';
$pageCanonical = 'https://examples.learnwithpsudo.com/pages/windowChild2.php';
$navMenuExtra = '<li><a href="windowsDemo.php">Back to Windows Demo</a></li>';


require_once dirname(__DIR__) . '/includes/header.php';
?>
<article id="main">
    <header>
        <h2>Child Window 2 - Form Practice</h2>
        <p>Practice form interactions in a child window context</p>
    </header>
    <section class="wrapper style5">
        <div class="inner">

            <h3>🪟 Window Information</h3>
            <ul>
                <li><strong>Window Title:</strong> Child Window 2 - Form Practice</li>
                <li><strong>Window Name:</strong> ChildWindow2</li>
                <li><strong>Unique ID:</strong> <span id="uniqueId">CW2_</span></li>
            </ul>

            <h3>📝 Contact Form</h3>
            <p>Fill this form to practice form handling in a child window.</p>
            <form id="childForm" onsubmit="handleSubmit(event)">
                <div class="field">
                    <label for="fullName">Full Name</label>
                    <input type="text" id="fullName" name="fullName" placeholder="Enter your name" />
                    <p><code>//input[@id='fullName']</code></p>
                </div>

                <div class="field">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="your@email.com" />
                    <p><code>//input[@id='email']</code></p>
                </div>

                <div class="field">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" placeholder="123-456-7890" />
                    <p><code>//input[@id='phone']</code></p>
                </div>

                <div class="field">
                    <label for="country">Country</label>
                    <select id="country" name="country">
                        <option value="">-- Select Country --</option>
                        <option value="usa">United States</option>
                        <option value="uk">United Kingdom</option>
                        <option value="india">India</option>
                        <option value="germany">Germany</option>
                        <option value="netherlands">Netherlands</option>
                    </select>
                    <p><code>//select[@id='country']</code></p>
                </div>

                <div class="field">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="4" placeholder="Enter your message"></textarea>
                    <p><code>//textarea[@id='message']</code></p>
                </div>

                <div class="field">
                    <input type="checkbox" id="subscribe" name="subscribe" value="yes" />
                    <label for="subscribe">Subscribe to newsletter</label>
                </div>

                <div class="field">
                    <button type="submit" id="submitBtn" class="button primary">Submit Form</button>
                    <button type="reset" id="resetBtn" class="button">Reset</button>
                    <button type="button" id="closeWindowBtn" class="button" onclick="window.close()">Close Window</button>
                </div>
            </form>

            <div class="field">
                <p id="formStatus">Form Status: Ready to fill</p>
            </div>

            <h3>📋 Selenium Code for Form</h3>
            <p><code>driver.find_element(By.ID, "fullName").send_keys("John Doe")</code></p>
            <p><code>driver.find_element(By.ID, "email").send_keys("john@example.com")</code></p>
            <p><code>Select(driver.find_element(By.ID, "country")).select_by_value("india")</code></p>
            <p><code>driver.find_element(By.ID, "message").send_keys("Test message")</code></p>
            <p><code>driver.find_element(By.ID, "submitBtn").click()</code></p>

        </div>
    </section>
</article>
<?php
$extraScripts = <<<'JS'
<script>
document.getElementById('uniqueId').textContent = 'CW2_' + Date.now();
function handleSubmit(e) {
    e.preventDefault();
    document.getElementById('formStatus').textContent = 'Form Status: Submitted at ' + new Date().toLocaleTimeString();
}
</script>
JS;
require_once dirname(__DIR__) . '/includes/footer.php';
