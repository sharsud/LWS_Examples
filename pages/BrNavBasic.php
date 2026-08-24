<?php
$lwsBase = '../';
$pageTitle = 'Selenium Interaction Demo - Learn with Psudo';
$pageCanonical = 'https://examples.learnwithpsudo.com/pages/BrNavBasic.php';

$extraHead = <<<'HTML'
<style>
#output, #scrollMessage {
            display: none;
            margin-top: 15px;
            padding: 12px;
            border-radius: 6px;
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .spacer {
            height: 600px;
        }
        .element-block {
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 0.5rem;
        }
        .element-block h4 {
            color: #0f172a;
            font-weight: 600;
            margin-bottom: 1rem;
        }
</style>
HTML;

require_once dirname(__DIR__) . '/includes/header.php';
?>
<article id="main">
    <header>
        <h2>Selenium Web Element & Browser Features Demo</h2>
        <p>Practice element interactions, state checks, keyboard actions, browser navigation, and scrolling using Selenium Python.</p>
    </header>

    <section class="wrapper style5">
        <div class="inner">

            <!-- Element Interaction Basics -->
            <div class="page-section">
                <h3>📌 Element Interaction Basics</h3>

                <div class="demo-grid">
                    <div class="feature-card">
                        <h4>Text Input & Clear</h4>
                        <div class="field">
                            <label for="inputField">Type Something</label>
                            <input type="text" id="inputField" placeholder="Enter text here" />
                        </div>
                        <button id="btnClear" class="button small">Clear Input</button>
                        <div class="code-info">
                            <strong>Selenium Example:</strong><br>
                            <code>driver.find_element(By.ID, "inputField").send_keys("Hello World")</code><br>
                            <code>driver.find_element(By.ID, "inputField").clear()</code>
                        </div>
                    </div>

                    <div class="feature-card">
                        <h4>Button Click</h4>
                        <button id="btnClickMe" class="button primary">Click Me</button>
						<div class="code-info">
                            <strong>Selenium Example:</strong><br>
                            <code>driver.find_element(By.ID, "btnClickMe").click()</code>
                        </div>
						<div id="successMessage" style="display: none; opacity: 0; color: #3b82f6; margin-top: 10px; font-weight: bold; transition: opacity 2s ease;">
							Success! The button was clicked.
						</div>
                        
                    </div>
                </div>
            </div>

            <!-- Form Demo Section -->
            <div class="page-section">
                <h3>📝 Contact Form Demo</h3>
                <div class="feature-card">
                    <form id="contactForm">
                        <div class="field">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="field">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="field">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="button primary">Submit</button>
                    </form>

                    <div id="successMessage" class="status-message success">
                        ✅ Form submitted successfully!
                    </div>
                    <div class="code-info">
                        <strong>Selenium `.submit()` Example:</strong><br>
                        <code>driver.find_element(By.ID, "name").send_keys("John Doe")</code><br>
                        <code>driver.find_element(By.ID, "email").send_keys("john@example.com")</code><br>
                        <code>form = driver.find_element(By.ID, "contactForm")</code><br>
                        <code>form.submit()</code>
                    </div>
                </div>
            </div>

            <!-- Element Property Retrieval -->
            <div class="page-section">
                <h3>🔍 Element Property Retrieval</h3>
                <div class="demo-grid">
                    <div class="feature-card">
                        <h4>Text Content</h4>
                        <p id="textExample">This is a sample text to retrieve</p>
                        <div class="code-info">
                            <code>text = driver.find_element(By.ID, "textExample").text</code>
                        </div>
                    </div>

                    <div class="feature-card">
                        <h4>Link Attributes</h4>
                        <a href="https://example.com" id="linkExample" class="button small">Example Link</a>
                        <div class="code-info">
                            <code>link = driver.find_element(By.ID, "linkExample").get_attribute("href")</code>
                        </div>
                    </div>

                    <div class="feature-card">
                        <h4>CSS Properties</h4>
                        <p id="cssExample" style="color: blue;">Check my CSS property</p>
                        <div class="code-info">
                            <code>color = driver.find_element(By.ID, "cssExample").value_of_css_property("color")</code>
                        </div>
                    </div>
                </div>
            </div>

            <!-- State & Visibility Checks -->
            <div class="page-section">
                <h3>✅ State & Visibility Checks</h3>
                <div class="demo-grid">
                    <div class="feature-card">
                        <h4>Checkbox Selection</h4>
                        <div class="field">
                            <input type="checkbox" id="chkAgree" />
                            <label for="chkAgree">Agree to Terms</label>
                        </div>
                        <div class="code-info">
                            <code>checkbox = driver.find_element(By.ID, "chkAgree")</code><br>
                            <code>print(checkbox.is_selected())</code>
                        </div>
                    </div>

                    <div class="feature-card">
                        <h4>Element Enabled State</h4>
                        <button id="btnDisabled" disabled class="button">Disabled Button</button>
                        <div class="code-info">
                            <code>button = driver.find_element(By.ID, "btnDisabled")</code><br>
                            <code>print(button.is_enabled())</code>
                        </div>
                    </div>

                    <div class="feature-card">
                        <h4>Element Visibility</h4>
                        <p id="hiddenText" style="display:none;">I am hidden!</p>
                        <button id="btnShowHidden" class="button small">Show Hidden Text</button>
                        <div class="code-info">
                            <code>hidden = driver.find_element(By.ID, "hiddenText")</code><br>
                            <code>print(hidden.is_displayed())</code>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Advanced Typing & Actions -->
            <div class="page-section">
                <h3>⌨️ Advanced Typing & Actions</h3>
                <div class="feature-card">
                    <div class="field">
                        <label for="keyInput">Keyboard Actions Input</label>
                        <input type="text" id="keyInput" placeholder="Use keyboard actions here" />
                    </div>
                    <div class="code-info">
                        <strong>Special Keys:</strong><br>
                        <code>input_field.send_keys(Keys.ENTER)</code><br>
                        <code>input_field.send_keys(Keys.CONTROL, "a")</code><br>
                        <code>input_field.send_keys(Keys.ARROW_DOWN)</code>
                    </div>
                </div>
            </div>

            <!-- Browser Navigation Commands -->
            <div class="page-section">
                <h3>🌐 Browser Navigation Commands</h3>
                <div class="control-panel">
                    <div class="flex gap-2">
                        <button id="btnBack" class="button">Go Back</button>
                        <button id="btnForward" class="button">Go Forward</button>
                        <button id="btnRefresh" class="button">Refresh Page</button>
                        <button id="btnOpen" class="button primary">Open Example.com</button>
                    </div>
                    <div class="code-info mt-2">
                        <code>driver.get("https://example.com")</code><br>
                        <code>driver.back()</code><br>
                        <code>driver.forward()</code><br>
                        <code>driver.refresh()</code>
                    </div>
                </div>
            </div>

            <!-- Scrolling & Viewport Handling -->
            <div class="page-section">
                <h3>� Scrolling & Viewport Handling</h3>
                <div class="spacer"></div>
                <div class="feature-card" id="scrollTarget">
                    <h4>Scroll Target Element</h4>
                    <p>This is the target element for scrolling demos.</p>
                    <div class="flex gap-2 mt-2">
                        <button id="btnScrollIntoView" class="button">Scroll To Element</button>
                        <button id="btnScrollBy" class="button">Scroll By 300px</button>
                    </div>
                    <div class="code-info mt-2">
                        <code>driver.execute_script("arguments[0].scrollIntoView();", element)</code><br>
                        <code>driver.execute_script("window.scrollBy(0, 300);")</code>
                    </div>
                </div>
            </div>

            <div id="output" class="status-message success">✅ Action Triggered!</div>
            <div id="scrollMessage" class="status-message success">✅ Scrolled Successfully!</div>

        </div>
    </section>
</article>
<?php
$extraScripts = <<<'JS'
<script>
    document.getElementById('btnClickMe').addEventListener('click', () => {
        const output = document.getElementById('output');
        output.style.display = 'block';
        output.innerText = "✅ Button Clicked!";
    });
    document.getElementById('btnClear').addEventListener('click', () => {
        document.getElementById('inputField').value = '';
        const output = document.getElementById('output');
        output.style.display = 'block';
        output.innerText = "✅ Input Cleared!";
    });
    document.getElementById('btnShowHidden').addEventListener('click', () => {
        document.getElementById('hiddenText').style.display = 'block';
    });
    document.getElementById('btnScrollIntoView').addEventListener('click', () => {
        document.getElementById('scrollTarget').scrollIntoView({behavior: "smooth"});
        const scrollMessage = document.getElementById('scrollMessage');
        scrollMessage.style.display = 'block';
    });
    document.getElementById('btnScrollBy').addEventListener('click', () => {
        window.scrollBy(0, 300);
        const scrollMessage = document.getElementById('scrollMessage');
        scrollMessage.style.display = 'block';
    });
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const successMessage = document.getElementById('successMessage');
        successMessage.style.display = 'block';
    });
	// Bind click events to handle browser operations
    document.getElementById('btnBack').addEventListener('click', () => {
        window.history.back(); // Navigates to previous page
    });

    document.getElementById('btnForward').addEventListener('click', () => {
        window.history.forward(); // Navigates to next page
    });

    document.getElementById('btnRefresh').addEventListener('click', () => {
        window.location.reload(); // Reloads the current page
    });

    document.getElementById('btnOpen').addEventListener('click', () => {
		// Opens example.com in a new tab or browser window
		window.open("https://example.com", "_blank"); 
	});

    document.getElementById("btnClickMe").addEventListener("click", function() {
        var message = document.getElementById("successMessage");
        
        // 2. Reset display and trigger layout
        message.style.display = "block";
        message.style.opacity = "0";
        
        // Force reflow so the browser registers the opacity change
        void message.offsetHeight; 
        
        // 3. Fade in instantly or smoothly
        message.style.opacity = "1";
        
        // 4. Wait 1 second, then fade out over 2 seconds
        setTimeout(function() {
            message.style.opacity = "0";
            
            // 5. Hide completely after the 2-second fade finishes
            setTimeout(function() {
                if (message.style.opacity === "0") {
                    message.style.display = "none";
                }
            }, 2000); 
        }, 2000); // Keeps message solid for 1 second before fading
    });

</script>
JS;
require_once dirname(__DIR__) . '/includes/footer.php';
