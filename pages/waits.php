<?php
$lwsBase = '../';
$pageTitle = 'Selenium Waits - Sleep vs Implicit vs Explicit - Learn with Psudo';
$pageCanonical = 'https://www.learnwithpsudo.com/examples/pages/waits.php';

$extraHead = <<<'HTML'
<style>
    .delay-box { padding: 1rem 1.2rem; background: #f5f5f5; border: 1px solid #ddd; border-radius: 6px; text-align: center; min-height: 70px; display: flex; align-items: center; justify-content: center; flex-direction: column; gap: 0.75rem; }
    .delayed-element { display: none; padding: 0.6rem 1rem; background: #2ebaae; color: #fff; border-radius: 4px; font-weight: 600; box-shadow: 0 4px 10px rgba(46,186,174,0.15); }
    .delayed-element.visible { display: inline-flex; align-items: center; gap: 0.5rem; }
    .wait-table { width: 100%; border-collapse: collapse; }
    .wait-table th, .wait-table td { padding: 0.7rem 0.9rem; border: 1px solid #e3e3e3; vertical-align: top; font-size: 0.95rem; }
    .wait-table thead { background: #f7f7f7; }
    .wait-table tbody tr:nth-child(even) { background: #fafafa; }
    .status-text { font-weight: 600; min-height: 1.5rem; }
    .status-success { color: #2ebaae; }
    .status-waiting { color: #f39c12; }
</style>
HTML;

require_once dirname(__DIR__) . '/includes/header.php';
?>
<article id="main">
    <header>
        <h2>Sleep vs Implicit Wait vs Explicit Wait</h2>
        <p>time.sleep(), driver.implicitly_wait() &amp; WebDriverWait with live demos</p>
    </header>
    <section class="wrapper style5">
        <div class="inner">

            <!-- 1. TIME.SLEEP() -->
            <div class="page-section">
                <h3>1. time.sleep() - Hard Wait</h3>
                <p><code>time.sleep(seconds)</code> pauses execution for a fixed time. It blocks the thread unconditionally, even if the element is ready earlier.</p>
                <div class="feature-card">
                    <h4>Demo: Element appears after 3 seconds</h4>
                    <div class="delay-box" id="sleepDemoBox">
                        <button type="button" class="button small" id="btnSleepTrigger">Trigger Delayed Element (3s)</button>
                        <div class="delayed-element" id="sleepDelayedElem">Element is now Visible & Ready!</div>
                    </div>
                    <p class="status-text" id="sleepStatus">Status: Idle...</p>
                    <div class="code-info">
                        <strong>Python:</strong> <code>import time; time.sleep(3)</code>
                    </div>
                </div>
            </div>

            <!-- 2. IMPLICIT WAIT -->
            <div class="page-section">
                <h3>2. Implicit Wait - <code>driver.implicitly_wait()</code></h3>
                <p>Global wait applied to all <code>find_element</code> calls. Polls for element presence in DOM and returns early if found.</p>
                <div class="feature-card">
                    <h4>Demo: Dynamic element appears after random 2–4s</h4>
                    <div class="delay-box" id="implicitDemoBox">
                        <button type="button" class="button small" id="btnImplicitTrigger">Trigger Dynamic Element (Random 2s–4s)</button>
                        <div class="delayed-element" id="implicitDelayedElem">Found in DOM via Implicit Wait!</div>
                    </div>
                    <p class="status-text" id="implicitStatus">Status: Idle...</p>
                    <div class="code-info">
                        <strong>Python:</strong><br>
                        <code>driver.implicitly_wait(10)</code><br>
                        <code>elem = driver.find_element(By.ID, "implicitDelayedElem")</code>
                    </div>
                </div>
            </div>

            <!-- 3. EXPLICIT WAIT -->
            <div class="page-section">
                <h3>3. Explicit Wait - <code>WebDriverWait</code> + <code>ExpectedConditions</code></h3>
                <p>Wait for a specific condition on a specific element. More precise than implicit wait.</p>

                <div class="demo-grid">
                    <div class="feature-card">
                        <h4>Wait for Visibility</h4>
                        <p>Use <code>EC.visibility_of_element_located</code> when element must be visible.</p>
                        <div class="delay-box" id="explicitVisBox">
                            <button type="button" class="button small" id="btnExplicitVisTrigger">Show Element After 3.5s (Wait for Visibility)</button>
                            <div class="delayed-element" id="explicitVisibleElem">✓ Now Visible</div>
                        </div>
                        <p class="status-text" id="explicitVisStatus">Status: Idle...</p>
                        <div class="code-info">
                            <strong>Python:</strong><br>
                            <code>wait = WebDriverWait(driver, 10)</code><br>
                            <code>elem = wait.until(EC.visibility_of_element_located((By.ID, "explicitVisibleElem")))</code>
                        </div>
                    </div>

                    <div class="feature-card">
                        <h4>Wait for Clickable</h4>
                        <p>Use <code>EC.element_to_be_clickable</code> before clicking.</p>
                        <div class="delay-box" id="explicitClickBox">
                            <button type="button" class="button small" id="btnExplicitClickTrigger">Enable &amp; Reveal After 2.5s (Wait for Clickable)</button>
                            <button type="button" class="button" id="explicitClickableElem" disabled style="opacity: 0.4; pointer-events: none;">I'm Now Clickable!</button>
                        </div>
                        <p class="status-text" id="explicitClickStatus">Status: Idle...</p>
                        <div class="code-info">
                            <strong>Python:</strong><br>
                            <code>wait = WebDriverWait(driver, 10)</code><br>
                            <code>btn = wait.until(EC.element_to_be_clickable((By.ID, "explicitClickableElem")))</code><br>
                            <code>btn.click()</code>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. QUICK COMPARISON -->
            <div class="page-section">
                <h3>4. Quick Comparison</h3>
                <div class="table-wrapper">
                    <table class="wait-table">
                        <thead>
                            <tr>
                                <th>Feature</th>
                                <th><code>time.sleep()</code></th>
                                <th><code>implicitly_wait()</code></th>
                                <th><code>WebDriverWait</code></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Type</strong></td>
                                <td>Fixed</td>
                                <td>Dynamic (on find)</td>
                                <td>Conditional (on state)</td>
                            </tr>
                            <tr>
                                <td><strong>Scope</strong></td>
                                <td>Local</td>
                                <td>Global (driver)</td>
                                <td>Local (per call)</td>
                            </tr>
                            <tr>
                                <td><strong>Waits For</strong></td>
                                <td>Time only</td>
                                <td>Element in DOM</td>
                                <td>Visibility / Clickable / etc.</td>
                            </tr>
                            <tr>
                                <td><strong>Efficient</strong></td>
                                <td>No</td>
                                <td>Yes</td>
                                <td>Yes (most precise)</td>
                            </tr>
                            <tr>
                                <td><strong>Usage</strong></td>
                                <td>Demos only</td>
                                <td>Simple pages</td>
                                <td>Recommended for dynamic UIs</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 5. WHEN TO USE -->
            <div class="page-section">
                <h3>5. When to Use</h3>
                <ul>
                    <li><strong>time.sleep()</strong> – Only for quick demos/debugging</li>
                    <li><strong>implicitly_wait()</strong> – When most elements just need to appear in DOM</li>
                    <li><strong>WebDriverWait</strong> – When waiting for visibility, clickability, AJAX loads, spinners etc.</li>
                </ul>
                <div class="code-info" style="margin-top: 1rem;">
                    <strong>Import:</strong><br>
                    <code>from selenium.webdriver.support.ui import WebDriverWait</code><br>
                    <code>from selenium.webdriver.support import expected_conditions as EC</code>
                </div>
            </div>

        </div>
    </section>
</article>

<?php
$extraScripts = <<<'JS'
<script>
    // Sleep demo
    const sleepTrigger = document.getElementById('btnSleepTrigger');
    const sleepDelayed = document.getElementById('sleepDelayedElem');
    const sleepStatus = document.getElementById('sleepStatus');
    let sleepRunning = false;
    sleepTrigger.addEventListener('click', () => {
        if (sleepRunning) return;
        sleepRunning = true;
        sleepDelayed.classList.remove('visible');
        sleepStatus.textContent = 'Status: Waiting 3s...';
        sleepStatus.className = 'status-text status-waiting';
        sleepTrigger.disabled = true;
        setTimeout(() => {
            sleepDelayed.classList.add('visible');
            sleepStatus.textContent = 'Status: Element appeared after 3s';
            sleepStatus.className = 'status-text status-success';
            sleepTrigger.disabled = false;
            sleepRunning = false;
        }, 3000);
    });

    // Implicit demo
    const implicitTrigger = document.getElementById('btnImplicitTrigger');
    const implicitDelayed = document.getElementById('implicitDelayedElem');
    const implicitStatus = document.getElementById('implicitStatus');
    let implicitRunning = false;
    implicitTrigger.addEventListener('click', () => {
        if (implicitRunning) return;
        implicitRunning = true;
        implicitDelayed.classList.remove('visible');
        const delay = Math.floor(Math.random() * 2000) + 2000;
        implicitStatus.textContent = `Status: Waiting ~${(delay/1000).toFixed(1)}s...`;
        implicitStatus.className = 'status-text status-waiting';
        implicitTrigger.disabled = true;
        setTimeout(() => {
            implicitDelayed.classList.add('visible');
            implicitStatus.textContent = `Status: Found after ${(delay/1000).toFixed(1)}s`;
            implicitStatus.className = 'status-text status-success';
            implicitTrigger.disabled = false;
            implicitRunning = false;
        }, delay);
    });

    // Explicit visibility
    const explicitVisTrigger = document.getElementById('btnExplicitVisTrigger');
    const explicitVisElem = document.getElementById('explicitVisibleElem');
    const explicitVisStatus = document.getElementById('explicitVisStatus');
    let explicitVisRunning = false;
    explicitVisTrigger.addEventListener('click', () => {
        if (explicitVisRunning) return;
        explicitVisRunning = true;
        explicitVisElem.classList.remove('visible');
        explicitVisStatus.textContent = 'Status: Waiting for visibility...';
        explicitVisStatus.className = 'status-text status-waiting';
        explicitVisTrigger.disabled = true;
        setTimeout(() => {
            explicitVisElem.classList.add('visible');
            explicitVisStatus.textContent = 'Status: Now visible';
            explicitVisStatus.className = 'status-text status-success';
            explicitVisTrigger.disabled = false;
            explicitVisRunning = false;
        }, 3500);
    });

    // Explicit clickable
    const explicitClickTrigger = document.getElementById('btnExplicitClickTrigger');
    const explicitClickElem = document.getElementById('explicitClickableElem');
    const explicitClickStatus = document.getElementById('explicitClickStatus');
    let explicitClickRunning = false;
    let clickedOnce = false;
    explicitClickTrigger.addEventListener('click', () => {
        if (explicitClickRunning) return;
        explicitClickRunning = true;
        explicitClickElem.disabled = true;
        explicitClickElem.style.opacity = '0.4';
        explicitClickElem.style.pointerEvents = 'none';
        explicitClickStatus.textContent = 'Status: Waiting for clickable...';
        explicitClickStatus.className = 'status-text status-waiting';
        explicitClickTrigger.disabled = true;
        setTimeout(() => {
            explicitClickElem.disabled = false;
            explicitClickElem.style.opacity = '1';
            explicitClickElem.style.pointerEvents = 'auto';
            explicitClickStatus.textContent = 'Status: Now clickable';
            explicitClickStatus.className = 'status-text status-success';
            explicitClickTrigger.disabled = false;
            explicitClickRunning = false;
        }, 2500);
    });
    explicitClickElem.addEventListener('click', () => {
        if (!clickedOnce) {
            explicitClickStatus.textContent = 'Status: Clicked successfully!';
            explicitClickStatus.className = 'status-text status-success';
            clickedOnce = true;
        }
    });
</script>
JS;
require_once dirname(__DIR__) . '/includes/footer.php';
?>