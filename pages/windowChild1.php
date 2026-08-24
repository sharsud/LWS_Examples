<?php
$lwsBase = '../';
$pageTitle = 'Child Window 1 - Selenium Practice';
$pageCanonical = 'https://examples.learnwithpsudo.com/pages/windowChild1.php';
$navMenuExtra = '<li><a href="windowsDemo.php">Back to Windows Demo</a></li>';


require_once dirname(__DIR__) . '/includes/header.php';
?>
<article id="main">
    <header>
        <h2>Child Window 1</h2>
        <p>This is a child window for practicing window handle switching in Selenium</p>
    </header>
    <section class="wrapper style5">
        <div class="inner">

            <h3>🪟 Window Information</h3>
            <p>Use these details to validate your window switching logic.</p>
            <ul>
                <li><strong>Window Title:</strong> Child Window 1 - Selenium Practice</li>
                <li><strong>Window Name:</strong> ChildWindow1</li>
                <li><strong>Unique ID:</strong> <span id="uniqueId">CW1_</span></li>
            </ul>

            <h3>📝 Interactive Elements</h3>
            <p>Practice interacting with elements after switching to this window.</p>
            <div class="field">
                <label for="childInput">Text Input</label>
                <input type="text" id="childInput" name="childInput" placeholder="Enter text in child window" />
                <p><code>//input[@id='childInput']</code></p>
            </div>

            <div class="field">
                <label for="childSelect">Dropdown</label>
                <select id="childSelect" name="childSelect">
                    <option value="">-- Select Option --</option>
                    <option value="option1">Option 1</option>
                    <option value="option2">Option 2</option>
                    <option value="option3">Option 3</option>
                </select>
                <p><code>//select[@id='childSelect']</code></p>
            </div>

            <div class="field">
                <input type="checkbox" id="childCheckbox" name="childCheckbox" />
                <label for="childCheckbox">Checkbox in Child Window</label>
                <p><code>//input[@id='childCheckbox']</code></p>
            </div>

            <div class="field">
                <input type="radio" name="childRadio" id="radioYes" value="yes" />
                <label for="radioYes">Yes</label>
                <input type="radio" name="childRadio" id="radioNo" value="no" />
                <label for="radioNo">No</label>
                <p><code>//input[@name='childRadio']</code></p>
            </div>

            <h3>🔘 Buttons</h3>
            <div class="field">
                <button type="button" id="childButton" class="button primary" onclick="handleClick()">Click Me</button>
                <button type="button" id="closeWindowBtn" class="button" onclick="window.close()">Close Window</button>
                <p><code>//button[@id='childButton']</code></p>
                <p><code>//button[@id='closeWindowBtn']</code></p>
            </div>

            <div class="field">
                <p id="clickStatus">Status: Waiting for interaction</p>
            </div>

            <h3>📋 Selenium Code for This Window</h3>
            <p><code># After switching to this child window</code></p>
            <p><code>assert "Child Window 1" in driver.title</code></p>
            <p><code>driver.find_element(By.ID, "childInput").send_keys("Test")</code></p>
            <p><code>Select(driver.find_element(By.ID, "childSelect")).select_by_value("option1")</code></p>
            <p><code>driver.find_element(By.ID, "childCheckbox").click()</code></p>
            <p><code>driver.find_element(By.ID, "childButton").click()</code></p>

        </div>
    </section>
</article>
<?php
$extraScripts = <<<'JS'
<script>
document.getElementById('uniqueId').textContent = 'CW1_' + Date.now();
function handleClick() {
    document.getElementById('clickStatus').textContent = 'Status: Button clicked at ' + new Date().toLocaleTimeString();
}
</script>
JS;
require_once dirname(__DIR__) . '/includes/footer.php';
