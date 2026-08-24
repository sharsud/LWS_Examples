<?php
$lwsBase = '../';
$pageTitle = 'Multiple Windows & Tabs Demo - Learn with Psudo';
$pageCanonical = 'https://examples.learnwithpsudo.com/pages/windows.php';

$extraHead = <<<'HTML'
<style>
.window-demo {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            padding: 1.5em;
            margin: 1.5em 0;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .window-container {
            background: rgba(0, 0, 0, 0.15);
            border-radius: 6px;
            padding: 1.25em;
            margin: 1.25em 0;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .window-header {
            border-bottom: 2px solid #2e5c87;
            padding-bottom: 0.75em;
            margin-bottom: 1em;
        }
        
        .window-info {
            background: rgba(46, 92, 135, 0.15);
            padding: 0.875em;
            border-radius: 4px;
            margin: 0.875em 0;
            border-left: 4px solid #2e5c87;
        }
        
        .window-badge {
            background: #2e5c87;
            color: white;
            padding: 0.25em 0.625em;
            border-radius: 3px;
            font-size: 0.75em;
            display: inline-block;
            margin-right: 0.5em;
        }
        
        .code-snippet {
            background: rgba(0, 0, 0, 0.2);
            padding: 0.875em;
            border-radius: 4px;
            font-family: 'Courier New', monospace;
            font-size: 0.875em;
            margin: 0.875em 0;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .demo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5em;
            margin: 1.5em 0;
        }
        
        .window-controls {
            display: flex;
            gap: 1em;
            margin: 1em 0;
            flex-wrap: wrap;
        }

        .status-box {
            background: rgba(40, 167, 69, 0.2);
            border: 1px solid #28a745;
            padding: 1em;
            border-radius: 4px;
            margin-top: 1em;
            display: none;
        }
</style>
HTML;

require_once dirname(__DIR__) . '/includes/header.php';
?>
<article id="main">
    <header>
        <h2>Multiple Windows & Tabs Demo</h2>
        <p>Master window handles, tab switching, and context navigation in Selenium</p>
    </header>

    <section class="wrapper style5">
        <div class="inner">

            <!-- Section 1: Standard Links and Buttons Opening New Windows -->
            <div class="window-demo">
                <div class="window-header">
                    <h3><i class="fas fa-window-restore"></i> Basic Window & Tab Triggers</h3>
                    <p>Learn how target attributes and JavaScript trigger new browser contexts</p>
                </div>

                <div class="demo-grid">
                    <!-- Standard Target _blank Link -->
                    <div class="window-container">
                        <h4><span class="window-badge">LINK</span>Standard New Tab Link</h4>
                        <div class="window-info">
                            <strong>Mechanism:</strong> <code>&lt;a target="_blank"&gt;</code><br>
                            <strong>Behavior:</strong> Opens real child HTML page in a new tab.
                        </div>
                        <a href="child-window.html" target="_blank" id="openNewTabLink" class="button primary">Open New Tab</a>
                    </div>

                    <!-- JavaScript Pop-up Window -->
                    <div class="window-container">
                        <h4><span class="window-badge">POPUP</span>JS window.open() Popup</h4>
                        <div class="window-info">
                            <strong>Mechanism:</strong> <code>window.open('child-window.html')</code><br>
                            <strong>Behavior:</strong> Opens dedicated window with specific dimensions.
                        </div>
                        <button onclick="openPopupWindow()" id="openPopupBtn" class="button">Open Pop-up Window</button>
                    </div>
                </div>
            </div>

            <!-- Section 2: Real-World Use Cases -->
            <div class="page-section">
                <h3>🌍 Real-World Multi-Window Scenarios</h3>
                
                <div class="demo-grid">
                    <!-- Simulated OAuth Login -->
                    <div class="window-container">
                        <h4>OAuth Authentication Popup</h4>
                        <div class="window-info">
                            <strong>Simulates:</strong> OAuth SSO login provider<br>
                            <strong>Validation:</strong> Authenticate in popup and update main page.
                        </div>
                        <button onclick="openOAuthWindow()" id="oauthLoginBtn" class="button fit">Simulate OAuth Login</button>
                        <div id="oauthStatus" class="status-box">
                            ✅ OAuth Verification Completed! User: <strong id="loggedInUser"></strong>
                        </div>
                    </div>

                    <!-- Multi-Tab Data Verification -->
                    <div class="window-container">
                        <h4>Terms Verification Workflow</h4>
                        <div class="window-info">
                            <strong>Simulates:</strong> Reviewing legal agreement tab<br>
                            <strong>Validation:</strong> Review child page, then agree on parent form.
                        </div>
                        <a href="terms-page.html" target="_blank" id="termsLink" class="button" style="display: block; margin-bottom: 1em;">Read Terms & Conditions</a>
                        <label for="agreeCheckbox">
                            <input type="checkbox" id="agreeCheckbox" disabled> I have read and agree to the terms
                        </label>
                    </div>
                </div>
            </div>

            <!-- Section 3: Dynamic Delayed Windows -->
            <div class="page-section">
                <h3>⏱️ Dynamic & Delayed Window Opening</h3>
                <p>Simulates asynchronous operations opening new windows after a delay</p>
                
                <div class="window-controls">
                    <button onclick="openDelayedWindow()" id="delayedWindowBtn" class="button primary">Open Window (3s Delay)</button>
                    <button onclick="openMultipleTabs()" id="multiTabBtn" class="button">Open 3 Tabs Simultaneously</button>
                </div>
                <p id="delayTimerText" style="color: #ffc107; display: none;">⏳ Opening new window in 3 seconds...</p>
            </div>

            <!-- Instructions -->
            <div class="page-section">
                <h3>📋 Selenium Window Management Instructions</h3>
                <div class="demo-grid">
                    <div class="feature-card">
                        <h4>Window Handle Methods</h4>
                        <ul>
                            <li><strong>Current Handle:</strong> <code>driver.current_window_handle</code></li>
                            <li><strong>All Handles:</strong> <code>driver.window_handles</code></li>
                            <li><strong>Switching:</strong> <code>driver.switch_to.window(handle)</code></li>
                        </ul>
                    </div>
                    <div class="feature-card">
                        <h4>Best Practices</h4>
                        <ul>
                            <li><strong>Store Parent Handle:</strong> Keep main handle before switching.</li>
                            <li><strong>Use Explicit Waits:</strong> Wait for <code>EC.number_of_windows_to_be(2)</code>.</li>
                            <li><strong>Return Focus:</strong> Always switch back to the original parent handle.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
</article>
<?php
$extraScripts = <<<'JS'
<script>
    function openPopupWindow() {
        window.open('child-window.html', 'PopupWindow', 'width=600,height=400,resizable=yes');
    }

    function openOAuthWindow() {
        window.open('oauth-sim.html', 'OAuthWindow', 'width=500,height=500');
    }

    function completeOAuth(username) {
        document.getElementById('loggedInUser').innerText = username;
        document.getElementById('oauthStatus').style.display = 'block';
    }

    function openDelayedWindow() {
        document.getElementById('delayTimerText').style.display = 'block';
        setTimeout(function() {
            window.open('child-window.html', '_blank');
            document.getElementById('delayTimerText').style.display = 'none';
        }, 3000);
    }

    function openMultipleTabs() {
        window.open('child-window.html?tab=1', '_blank');
        window.open('child-window.html?tab=2', '_blank');
        window.open('child-window.html?tab=3', '_blank');
    }
</script>
JS;
require_once dirname(__DIR__) . '/includes/footer.php';
