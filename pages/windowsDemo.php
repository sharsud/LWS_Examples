<!DOCTYPE HTML>
<html>
<head>
    <title>Windows & Tabs Practice - Learn with Psudo</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="../images/logo.ico" />
    <link rel="icon" href="../images/logo.ico" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
</head>
<body class="landing">
<div id="page-wrapper">

<header id="header">
    <h1><a href="index.php">Learn With Psudo</a></h1>
    <nav id="nav">
        <ul>
            <li class="special">
                <a href="#menu" class="menuToggle"><span>Menu</span></a>
                <div id="menu">
                    <ul>
                        <li><a href="../index.php">Topics</a></li>
                        <li><a href="https://examples.learnwithpsudo.com/?i=1">Back to Mainpage</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</header>
<article id="main">
    <header>
        <h2>Working with Multiple Browser Windows & Tabs</h2>
        <p>This interactive playground demonstrates handling multiple browser windows and tabs in Selenium WebDriver for Python.</p>
    </header>
    <section class="wrapper style5">
        <div class="inner">

            <h3>🪟 Introduction to Windows vs Tabs</h3>
            <p>In Selenium, both windows and tabs are treated the same way. Each new window or tab creates a new browsing context with a unique handle, but they share the same browser session.</p>
            <ul>
                <li><strong>Window Handle:</strong> A unique identifier string for each browser window/tab</li>
                <li><strong>Parent Window:</strong> The original window where the test starts</li>
                <li><strong>Child Window:</strong> Any new window/tab opened during the test</li>
            </ul>

            <h3>🔗 When New Windows/Tabs Open</h3>
            <p>New windows can open via links with <code>target="_blank"</code>, JavaScript <code>window.open()</code>, or popup triggers.</p>
            <div class="field">
                <label>Links with target="_blank" (Opens New Tab)</label>
                <a href="windowChild1.php" target="_blank" id="linkNewTab1" class="button small">Open Child Window 1</a>
                <a href="windowChild2.php" target="_blank" id="linkNewTab2" class="button small">Open Child Window 2</a>
                <a href="windowChild3.php" target="_blank" id="linkNewTab3" class="button small">Open Child Window 3</a>
                <pre><code>//a[@id='linkNewTab1']  # Click to open new tab</code></pre>
            </div>

            <div class="field">
                <label>Buttons with window.open() (Opens New Window)</label>
                <button type="button" id="btnNewWindow" class="button small" onclick="window.open('windowChild1.php', 'ChildWin1', 'width=600,height=400')">Open Sized Window</button>
                <button type="button" id="btnNewWindowLarge" class="button small" onclick="window.open('windowChild2.php', 'ChildWin2', 'width=800,height=600')">Open Large Window</button>
				<pre><code>//button[@id='btnNewWindow']  # Click to open new tab</code></pre>
            </div>

            <h3>🔑 Getting Window Handles</h3>
            <p>Before clicking any link that opens a new window, always store the parent window handle.</p>
            <div class="field">
                <pre><code>parent_handle = driver.current_window_handle  # Get current window handle
all_handles = driver.window_handles            # Get list of all window handles
len(driver.window_handles)                     # Count open windows/tabs</code></pre>
            </div>

            <h3>🔀 Switching Between Windows</h3>
            <p>Use <code>switch_to.window()</code> to change focus between windows.</p>
            <div class="field">
                <button type="button" id="btnOpenMultiple" class="button primary" onclick="openMultipleWindows()">Open 3 Windows at Once</button>
                <p><code>driver.switch_to.window(handle)</code> - Switch to specific window</p>
            </div>
            <div class="field">
                <pre><code>parent = driver.current_window_handle
driver.find_element(By.ID, "linkNewTab1").click()

WebDriverWait(driver, 10).until(lambda d: len(d.window_handles) > 1)

for handle in driver.window_handles:
    if handle != parent:
        driver.switch_to.window(handle)
        break</code></pre>

            </div>

            <h3>👨‍👧 Parent vs Child Window</h3>
            <p>The parent window is where your test starts. Child windows are any windows opened afterward.</p>
            <div class="field">
                <label for="parentWindowInput">Input in Parent Window</label>
                <input type="text" id="parentWindowInput" name="parentWindowInput" placeholder="This is the parent window" />
                <p><code>//input[@id='parentWindowInput']</code> - Element in parent window</p>
            </div>
            <div class="field">
                <p><strong>Handle Comparison Pattern:</strong></p>
                <p><code>parent = driver.current_window_handle</code></p>
                <p><code>child = [h for h in driver.window_handles if h != parent][0]</code></p>
            </div>

            <h3>🔄 Iterating Over Windows</h3>
            <p>Loop through all window handles to find specific windows by title or URL.</p>
            <div class="field">
                <p><strong>Find Window by Title:</strong></p>
                <pre><code>for handle in driver.window_handles:
    driver.switch_to.window(handle)
    if "Child Window 1" in driver.title:
        break</code></pre>

            </div>
            <div class="field">
                <p><strong>Find Window by URL:</strong></p>
                <pre><code>for handle in driver.window_handles:
    driver.switch_to.window(handle)
    if "windowChild2.php" in driver.current_url:
        break</code></pre>

            </div>

            <h3>✏️ Performing Actions in Child Window</h3>
            <p>After switching to a child window, you can interact with its elements normally.</p>
            <div class="field">
                <button type="button" id="btnOpenForAction" class="button" onclick="window.open('windowChild1.php', '_blank')">Open Child for Actions</button>
                <pre><code># After switching to child window
driver.find_element(By.ID, "childInput").send_keys("Test")
driver.find_element(By.ID, "childButton").click()</code></pre>

            </div>

            <h3>↩️ Switching Back to Parent Window</h3>
            <p>Always switch back to the parent window after working with child windows.</p>
            <div class="field">
                <pre><code># Store parent handle BEFORE opening new windows
parent = driver.current_window_handle

# ... work with child windows ...

driver.switch_to.window(parent)  # Return to parent</code></pre>

            </div>

            <h3>❌ Closing Windows/Tabs</h3>
            <p>Use <code>close()</code> to close the current window, and <code>quit()</code> to close the entire browser.</p>
            <div class="field">
                <pre><code>driver.close()  # Close current window only
driver.quit()   # Close entire browser (all windows)</code></pre>
            </div>
            <div class="field">
                <p><strong>Proper Cleanup Pattern:</strong></p>
                <pre><code>parent = driver.current_window_handle

for handle in driver.window_handles:
    if handle != parent:
        driver.switch_to.window(handle)
        driver.close()

driver.switch_to.window(parent)</code></pre>
            </div>

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
            <p><code>assert "Child Window 1" in driver.title</code></p>
            <p><code>assert "windowChild1.php" in driver.current_url</code></p>

            <h3>🎯 Common Use Cases</h3>
            <ul>
                <li><strong>Login Popups:</strong> Social login windows that close after authentication</li>
                <li><strong>OAuth Flows:</strong> Third-party authorization windows (Google, Facebook)</li>
                <li><strong>Payment Gateways:</strong> Secure payment windows that redirect back</li>
                <li><strong>Help Links:</strong> Documentation that opens in new tabs</li>
            </ul>
            <div class="field">
                <button type="button" id="btnLoginPopup" class="button" onclick="openLoginPopup()">Simulate Login Popup</button>
                <button type="button" id="btnPaymentPopup" class="button" onclick="openPaymentPopup()">Simulate Payment Popup</button>
            </div>

            <h3>💡 Best Practices</h3>
            <ul>
                <li>Always store parent handle <strong>before</strong> clicking links that open new windows</li>
                <li>Never rely on index-based logic like <code>window_handles[1]</code> - order is not guaranteed</li>
                <li>Use explicit waits: <code>WebDriverWait(driver, 10).until(lambda d: len(d.window_handles) > 1)</code></li>
                <li>Find windows by title or URL, not by index position</li>
                <li>Always switch back to parent after closing child windows</li>
            </ul>

            <h3>⚠️ Troubleshooting</h3>
            <ul>
                <li><strong>NoSuchWindowException:</strong> Window was closed or doesn't exist - check handle validity</li>
                <li><strong>Wrong Window Focus:</strong> Always verify <code>driver.title</code> after switching</li>
                <li><strong>StaleElementReferenceException:</strong> Re-find elements after switching windows</li>
                <li><strong>Missing Handles:</strong> Use explicit wait for new windows to appear</li>
            </ul>
            <div class="field">
                <pre><code>if handle in driver.window_handles:
	driver.switch_to.window(handle)			</code></pre>
            </div>

            <h3>📋 Complete Code Template</h3>
				<pre><code>from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait

driver = webdriver.Chrome()
driver.get("https://examples.learnwithpsudo.com/pages/windowsDemo.php")

# Step 1: Store parent handle
parent = driver.current_window_handle

# Step 2: Click to open new window
driver.find_element(By.ID, "linkNewTab1").click()

# Step 3: Wait for new window
WebDriverWait(driver, 10).until(lambda d: len(d.window_handles) > 1)

# Step 4: Switch to child window
for handle in driver.window_handles:
	if handle != parent:
		driver.switch_to.window(handle)
		break

# Step 5: Perform actions in child
print(driver.title)

# Step 6: Close child and return to parent
driver.close()
driver.switch_to.window(parent)
				</code></pre>
				
				<h3>🔗 References</h3>
            <ul>
                <li><a href="https://www.selenium.dev/documentation/webdriver/interactions/windows/" target="_blank">Selenium WebDriver Windows Documentation</a></li>
                <li><a href="https://www.learnwithpsudo.com/" target="_blank">Learn With Psudo – Selenium Tutorials</a></li>
            </ul>
            </div>

            

        </div>
    </section>
</article>

<footer id="footer">
    <ul class="icons">
        <li><a href="https://www.facebook.com/profile.php?id=61575272247147" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
        <li><a href="https://www.instagram.com/learn_with_psudo/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
        <li><a href="mailto:learnwithpsudo@gmail.com" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
    </ul>
    <ul class="copyright">
        <li>&copy; LWS Learn with PSUDO</li><li>LinkedIn: <a href="https://www.linkedin.com/in/sudhanshu-sharma/" target="_blank">LinkedIn</a></li>
    </ul>
</footer>

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
function openMultipleWindows() {
    window.open('windowChild1.php', '_blank');
    window.open('windowChild2.php', '_blank');
    window.open('windowChild3.php', '_blank');
}
function openLoginPopup() {
    window.open('windowChild1.php?type=login', 'LoginPopup', 'width=400,height=350');
}
function openPaymentPopup() {
    window.open('windowChild2.php?type=payment', 'PaymentPopup', 'width=500,height=400');
}
</script>
</body>
</html>
