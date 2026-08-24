<?php
$lwsBase = '../';
$pageTitle = 'Windows & Tabs Practice - Learn with Psudo';
$pageCanonical = 'https://examples.learnwithpsudo.com/pages/windowsDemo.php';


require_once dirname(__DIR__) . '/includes/header.php';
?>
<article id="main">
    <header>
        <h2>Working with Multiple Browser Windows & Tabs</h2>
        <p>This interactive playground demonstrates handling multiple browser windows and tabs in Selenium WebDriver for Python.</p>
    </header>
    <section class="wrapper style5">
        <div class="inner">

            <div class="page-section">
                <h3>🪟 Introduction to Windows vs Tabs</h3>
                <p>In Selenium, both windows and tabs are treated the same way. Each new window or tab creates a new browsing context with a unique handle, but they share the same browser session.</p>
                <div class="feature-card">
                    <ul>
                        <li><strong>Window Handle:</strong> A unique identifier string for each browser window/tab</li>
                        <li><strong>Parent Window:</strong> The original window where the test starts</li>
                        <li><strong>Child Window:</strong> Any new window/tab opened during the test</li>
                    </ul>
                </div>
            </div>

            <div class="page-section">
                <h3>🔗 When New Windows/Tabs Open</h3>
                <p>New windows can open via links with <code>target="_blank"</code>, JavaScript <code>window.open()</code>, or popup triggers.</p>
                <div class="demo-grid">
                    <div class="feature-card">
                        <h4>Links with target="_blank"</h4>
                        <div class="flex ">
                            <a href="windowChild1.php" target="_blank" id="linkNewTab1" class="button small">Open Child Window 1</a>
                        </div>
						<div class="flex ">
                            <a href="windowChild2.php" target="_blank" id="linkNewTab1" class="button small">Open Child Window 2</a>
                        </div>
						<div class="flex ">
                            <a href="windowChild3.php" target="_blank" id="linkNewTab1" class="button small">Open Child Window 3</a>
                        </div>
                        <div class="code-info">
                            <code>//a[@id='linkNewTab1']  # Click to open new tab</code>
                        </div>
                    </div>

                    <div class="feature-card">
                        <h4>Buttons with window.open()</h4>
                        <div class="flex">
                            <button type="button" id="btnNewWindow" class="button small" onclick="window.open('windowChild1.php', 'ChildWin1', 'width=600,height=400')">Open Sized Window</button>
                            </div>
						<div class="flex">
							<button type="button" id="btnNewWindowLarge" class="button small" onclick="window.open('windowChild2.php', 'ChildWin2', 'width=800,height=600')">Open Large Window</button>
                        </div>
                        <div class="code-info">
                            <code>//button[@id='btnNewWindow']  # Click to open new tab</code>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-section">
                <h3>🔑 Getting Window Handles</h3>
                <p>Before clicking any link that opens a new window, always store the parent window handle.</p>
                <div class="feature-card">
                    <div class="code-info">
                        <code>parent_handle = driver.current_window_handle  # Get current window handle</code><br>
                        <code>all_handles = driver.window_handles            # Get list of all window handles</code><br>
                        <code>len(driver.window_handles)                     # Count open windows/tabs</code>
                    </div>
                </div>
            </div>

            <div class="page-section">
                <h3>🔀 Switching Between Windows</h3>
                <p>Use <code>switch_to.window()</code> to change focus between windows.</p>
                <div class="feature-card">
                    <button type="button" id="btnOpenMultiple" class="button primary" onclick="openMultipleWindows()">Open 3 Windows at Once</button>
                    <div class="code-info mt-2">
                        <code>driver.switch_to.window(handle)</code> - Switch to specific window
                    </div>
                    <div class="code-info">
                        <code>parent = driver.current_window_handle</code><br>
                        <code>driver.find_element(By.ID, "linkNewTab1").click()</code><br>
                        <code>WebDriverWait(driver, 10).until(lambda d: len(d.window_handles) > 1)</code><br>
                        <code>for handle in driver.window_handles:</code><br>
                        <code>    if handle != parent:</code><br>
                        <code>        driver.switch_to.window(handle)</code><br>
                        <code>        break</code>
                    </div>
                </div>
            </div>

            <div class="page-section">
                <h3>👨‍👧 Parent vs Child Window</h3>
                <p>The parent window is where your test starts. Child windows are any windows opened afterward.</p>
                <div class="demo-grid">
                    <div class="feature-card">
                        <h4>Parent Window Input</h4>
                        <div class="field">
                            <label for="parentWindowInput">Input in Parent Window</label>
                            <input type="text" id="parentWindowInput" name="parentWindowInput" placeholder="This is the parent window" />
                        </div>
                        <div class="code-info">
                            <code>//input[@id='parentWindowInput']</code> - Element in parent window
                        </div>
                    </div>
                    <div class="feature-card">
                        <h4>Handle Comparison Pattern</h4>
                        <div class="code-info">
                            <code>parent = driver.current_window_handle</code><br>
                            <code>child = [h for h in driver.window_handles if h != parent][0]</code>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-section">
                <h3>🔄 Iterating Over Windows</h3>
                <p>Loop through all window handles to find specific windows by title or URL.</p>
                <div class="demo-grid">
                    <div class="feature-card">
                        <h4>Find Window by Title</h4>
                        <div class="code-info">
                            <code>for handle in driver.window_handles:</code><br>
                            <code>    driver.switch_to.window(handle)</code><br>
                            <code>    if "Child Window 1" in driver.title:</code><br>
                            <code>        break</code>
                        </div>
                    </div>
                    <div class="feature-card">
                        <h4>Find Window by URL</h4>
                        <div class="code-info">
                            <code>for handle in driver.window_handles:</code><br>
                            <code>    driver.switch_to.window(handle)</code><br>
                            <code>    if "windowChild2.php" in driver.current_url:</code><br>
                            <code>        break</code>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-section">
                <h3>✏️ Performing Actions in Child Window</h3>
                <p>After switching to a child window, you can interact with its elements normally.</p>
                <div class="feature-card">
                    <button type="button" id="btnOpenForAction" class="button" onclick="window.open('windowChild1.php', '_blank')">Open Child for Actions</button>
                    <div class="code-info mt-2">
                        <code># After switching to child window</code><br>
                        <code>driver.find_element(By.ID, "childInput").send_keys("Test")</code><br>
                        <code>driver.find_element(By.ID, "childButton").click()</code>
                    </div>
                </div>
            </div>

            <div class="page-section">
                <h3>↩️ Switching Back to Parent Window</h3>
                <p>Always switch back to the parent window after working with child windows.</p>
                <div class="feature-card">
                    <div class="code-info">
                        <code># Store parent handle BEFORE opening new windows</code><br>
                        <code>parent = driver.current_window_handle</code><br>
                        <code># ... work with child windows ...</code><br>
                        <code>driver.switch_to.window(parent)  # Return to parent</code>
                    </div>
                </div>
            </div>

            <div class="page-section">
                <h3>❌ Closing Windows/Tabs</h3>
                <p>Use <code>close()</code> to close the current window, and <code>quit()</code> to close the entire browser.</p>
                <div class="demo-grid">
                    <div class="feature-card">
                        <h4>Close Methods</h4>
                        <div class="code-info">
                            <code>driver.close()  # Close current window only</code><br>
                            <code>driver.quit()   # Close entire browser (all windows)</code>
                        </div>
                    </div>
                    <div class="feature-card">
                        <h4>Proper Cleanup Pattern</h4>
                        <div class="code-info">
                            <code>parent = driver.current_window_handle</code><br>
                            <code>for handle in driver.window_handles:</code><br>
                            <code>    if handle != parent:</code><br>
                            <code>        driver.switch_to.window(handle)</code><br>
                            <code>        driver.close()</code><br>
                            <code>driver.switch_to.window(parent)</code>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-section">
                <h3>✅ Validations Across Windows</h3>
                <p>Validate window titles, URLs, and content after switching.</p>
                <table border="1">
                    <thead>
                        <tr><th>Window</th><th>Expected Title</th><th>Action</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Child Window 1</td>
                            <td id="expectedTitle1">Child Window 1 - Selenium Practice</td>
                            <td><a href="windowChild1.php" target="_blank" class="button small">Open</a></td>
                        </tr>
                        <tr>
                            <td>Child Window 2</td>
                            <td id="expectedTitle2">Child Window 2 - Form Practice</td>
                            <td><a href="windowChild2.php" target="_blank" class="button small">Open</a></td>
                        </tr>
                        <tr>
                            <td>Child Window 3</td>
                            <td id="expectedTitle3">Child Window 3 - Data Display</td>
                            <td><a href="windowChild3.php" target="_blank" class="button small">Open</a></td>
                        </tr>
                    </tbody>
                </table>
                <div class="code-info mt-2">
                    <code>assert "Child Window 1" in driver.title</code><br>
                    <code>assert "windowChild1.php" in driver.current_url</code>
                </div>
            </div>

            <div class="page-section">
                <h3>🎯 Common Use Cases</h3>
                <ul>
                    <li><strong>Login Popups:</strong> Social login windows that close after authentication</li>
                    <li><strong>OAuth Flows:</strong> Third-party authorization windows (Google, Facebook)</li>
                    <li><strong>Payment Gateways:</strong> Secure payment windows that redirect back</li>
                    <li><strong>Help Links:</strong> Documentation that opens in new tabs</li>
                </ul>
                <div class="flex gap-2 mt-2">
                    <button type="button" id="btnLoginPopup" class="button" onclick="openLoginPopup()">Simulate Login Popup</button>
                    <button type="button" id="btnPaymentPopup" class="button" onclick="openPaymentPopup()">Simulate Payment Popup</button>
                </div>
            </div>

            <div class="page-section">
                <h3>💡 Best Practices</h3>
                <ul>
                    <li>Always store parent handle <strong>before</strong> clicking links that open new windows</li>
                    <li>Never rely on index-based logic like <code>window_handles[1]</code> - order is not guaranteed</li>
                    <li>Use explicit waits: <code>WebDriverWait(driver, 10).until(lambda d: len(d.window_handles) > 1)</code></li>
                    <li>Find windows by title or URL, not by index position</li>
                    <li>Always switch back to parent after closing child windows</li>
                </ul>
            </div>

            <div class="page-section">
                <h3>⚠️ Troubleshooting</h3>
                <ul>
                    <li><strong>NoSuchWindowException:</strong> Window was closed or doesn't exist - check handle validity</li>
                    <li><strong>Wrong Window Focus:</strong> Always verify <code>driver.title</code> after switching</li>
                    <li><strong>StaleElementReferenceException:</strong> Re-find elements after switching windows</li>
                    <li><strong>Missing Handles:</strong> Use explicit wait for new windows to appear</li>
                </ul>
                <div class="feature-card">
                    <div class="code-info">
                        <code>if handle in driver.window_handles:</code><br>
                        <code>	driver.switch_to.window(handle)</code>
                    </div>
                </div>
            </div>

            <div class="page-section">
                <h3>📋 Complete Code Template</h3>
                <div class="code-snippet">
                    <code>from selenium import webdriver</code><br>
                    <code>from selenium.webdriver.common.by import By</code><br>
                    <code>from selenium.webdriver.support.ui import WebDriverWait</code><br><br>
                    <code>driver = webdriver.Chrome()</code><br>
                    <code>driver.get("https://examples.learnwithpsudo.com/pages/windowsDemo.php")</code><br><br>
                    <code># Step 1: Store parent handle</code><br>
                    <code>parent = driver.current_window_handle</code><br><br>
                    <code># Step 2: Click to open new window</code><br>
                    <code>driver.find_element(By.ID, "linkNewTab1").click()</code><br><br>
                    <code># Step 3: Wait for new window</code><br>
                    <code>WebDriverWait(driver, 10).until(lambda d: len(d.window_handles) > 1)</code><br><br>
                    <code># Step 4: Switch to child window</code><br>
                    <code>for handle in driver.window_handles:</code><br>
                    <code>	if handle != parent:</code><br>
                    <code>		driver.switch_to.window(handle)</code><br>
                    <code>		break</code><br><br>
                    <code># Step 5: Perform actions in child</code><br>
                    <code>print(driver.title)</code><br><br>
                    <code># Step 6: Close child and return to parent</code><br>
                    <code>driver.close()</code><br>
                    <code>driver.switch_to.window(parent)</code>
                </div>
                
                <h3>🔗 References</h3>
                <ul>
                    <li><a href="https://www.selenium.dev/documentation/webdriver/interactions/windows/" target="_blank" rel="noopener noreferrer">Selenium WebDriver Windows Documentation</a></li>
                    <li><a href="https://www.learnwithpsudo.com/" target="_blank" rel="noopener noreferrer">Learn With Psudo – Selenium Tutorials</a></li>
                </ul>
            </div>

        </div>
    </section>
</article>
<?php
$extraScripts = <<<'JS'
<script>
function openMultipleWindows() {
    window.open('windowChild1.php', '_blank');
    window.open('windowChild2.php', '_blank');
    window.open('windowChild3.php', '_blank');
}
function openLoginPopup() {
    window.open('oauth.php?type=login', 'LoginPopup', 'width=400,height=350');
}
function openPaymentPopup() {
    window.open('payment_gateway.php?type=payment', 'PaymentPopup', 'width=500,height=400');
}
</script>
JS;
require_once dirname(__DIR__) . '/includes/footer.php';
