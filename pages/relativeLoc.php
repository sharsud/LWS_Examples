<?php
$lwsBase = '../';
$pageTitle = 'Login - Learn with Psudo | Python, Automation & Selenium Tutorials';
$pageCanonical = 'https://examples.learnwithpsudo.com/pages/relativeLoc.php';

$extraHead = <<<'HTML'
<style>
#nearMsg {
      display: none;
      padding: 12px;
      margin-top: 20px;
      border-radius: 6px;
      background-color: #d4edda;
      color: #155724;
      border: 1px solid #c3e6cb;
    }
    #popupMessage {
      display: none;
      padding: 12px;
      margin-top: 20px;
      border-radius: 6px;
      background-color: #d4edda;
      color: #155724;
      border: 1px solid #c3e6cb;
    }
</style>
HTML;

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
                        <h3>📍 Relative Locators - Selenium 4</h3>
                        <p>This section demonstrates Selenium 4's relative locator methods using real DOM layout examples.</p>

                        <div class="demo-grid">
                            <div class="feature-card">
                                <h4>Email & Password</h4>
                                <div class="field">
                                    <label for="emailInput">Email</label>
                                    <input type="text" id="emailInput" placeholder="Enter Email" />
                                </div>
                                <div class="field">
                                    <label for="passwordInput">Password</label>
                                    <input type="password" id="passwordInput" placeholder="Enter Password" />
                                </div>
                                <div class="code-info">
                                    <code>driver.find_element(By.TAG_NAME, "input").near(email_input)</code>
                                </div>
                            

                            
                                <h4>Sibling Fields</h4>
                                <div class="flex gap-2">
                                    <div class="field">
                                        <label for="siblingLeft">Left Field</label>
                                        <input type="text" id="siblingLeft" placeholder="Left of Right Field" />
                                    </div>
                                    <div class="field">
                                        <label for="siblingRight">Right Field</label>
                                        <input type="text" id="siblingRight" placeholder="Right of Left Field" />
                                    </div>
                                </div>
                                <div class="code-info">
                                    <code>driver.find_element(By.ID, "siblingRight").to_left_of(sibling_left)</code>
                                </div>
                            

                                <h4>Near Element</h4>
                                <div class="flex gap-2 items-center">
                                    <div class="field">
                                        <label for="nearRef">Near Field</label>
                                        <input type="text" id="nearRef" placeholder="Reference Field" />
                                    </div>
                                    <button id="btnNear" class="button">Click Me</button>
                                </div>
                                <div class="code-info">
                                    <code>driver.find_element(By.ID, "btnNear").near(near_ref)</code>
                                </div>
								<!-- Submit Button Section -->

									<button id="submitBtn" class="button primary">Submit</button>
									<div class="code-info mt-2">
										<code>driver.find_element(By.ID, "submitBtn").above(password_input)</code>
									</div>


								<!-- Popup Message Div -->
								<div id="popupMessage" class="status-message success">
									✅ Form submitted successfully! This message was triggered by the Submit button.
								</div>
								<div id="nearMsg" class="status-message success">
									✅ Clicked on button near the Field.
								</div>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
        </article>
<?php
$extraScripts = <<<'JS'
<script>
                        document.getElementById('submitBtn').addEventListener('click', function() {
                        document.getElementById('popupMessage').style.display = 'block';
                        document.getElementById('nearMsg').style.display = 'none';
                        });

                        document.getElementById('btnNear').addEventListener('click', function() {
                        document.getElementById('nearMsg').style.display = 'block';
                        document.getElementById('popupMessage').style.display = 'none';
                        });
                    </script>
JS;
require_once dirname(__DIR__) . '/includes/footer.php';
