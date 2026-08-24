<?php
$lwsBase = '../';
$pageTitle = 'CSS Locator Practice - Learn with Psudo';
$pageCanonical = 'https://examples.learnwithpsudo.com/pages/classLocatorsdemo.php';
require_once dirname(__DIR__) . '/includes/header.php';
?>
<article id="main">
    <header>
        <h2>CSS Selector Practice</h2>
        <p>Only CSS-based locators are demonstrated here. Try inspecting elements using id, class, attributes, tag names, and nested selectors!</p>
    </header>
    <section class="wrapper style5">
        <div class="inner">

            <form id="cssLocatorForm" method="post" action="#">
                <!-- ID Selectors -->
                <div class="page-section">
                    <h3>🆔 ID Selectors</h3>
                    <div class="demo-grid">
                        <div class="feature-card">
                            <div class="field">
                                <label for="username">Username (CSS: #username)</label>
                                <input type="text" id="username" class="input-field" placeholder="admin" />
                            </div>
                            <div class="code-info">
                                <code>driver.find_element(By.CSS_SELECTOR, "#username")</code>
                            </div>
                        </div>
                        <div class="feature-card">
                            <div class="field">
                                <label for="username2">Backup Username (CSS: #username2)</label>
                                <input type="text" id="username2" class="input-field" placeholder="admin123" />
                            </div>
                            <div class="code-info">
                                <code>driver.find_element(By.CSS_SELECTOR, "#username2")</code>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Class Selectors -->
                <div class="page-section">
                    <h3>🏷️ Class Selectors</h3>
                    <div class="demo-grid">
                        <div class="feature-card">
                            <div class="field">
                                <label for="useremail">Email (CSS: .input-email)</label>
                                <input type="email" id="useremail" class="input-field input-email" placeholder="email@example.com" />
                            </div>
                            <div class="code-info">
                                <code>driver.find_element(By.CSS_SELECTOR, ".input-email")</code>
                            </div>
                        </div>
                        <div class="feature-card">
                            <div class="field">
                                <label for="altEmail">Alternate Email (CSS: .input-email)</label>
                                <input type="email" id="altEmail" class="input-email" placeholder="alt@example.com" />
                            </div>
                            <div class="code-info">
                                <code>driver.find_element(By.CSS_SELECTOR, ".input-email")</code>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Attribute Selectors -->
                <div class="page-section">
                    <h3>🔍 Attribute Selectors</h3>
                    <div class="demo-grid">
                        <div class="feature-card">
                            <div class="field">
                                <label for="pass1">Password (CSS: input[placeholder='Enter password'])</label>
                                <input type="password" id="pass1" class="input-field" placeholder="Enter password" />
                            </div>
                            <div class="code-info">
                                <code>driver.find_element(By.CSS_SELECTOR, "input[placeholder='Enter password']")</code>
                            </div>
                        </div>
                        <div class="feature-card">
                            <div class="field">
                                <label for="passConfirm">Confirm Password (CSS: input[placeholder='Re-enter password'])</label>
                                <input type="password" id="passConfirm" class="input-field" placeholder="Re-enter password" />
                            </div>
                            <div class="code-info">
                                <code>driver.find_element(By.CSS_SELECTOR, "input[placeholder='Re-enter password']")</code>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tag + Class Selectors -->
                <div class="page-section">
                    <h3>🏷️ Tag + Class Selectors</h3>
                    <div class="demo-grid">
                        <div class="feature-card">
                            <div class="field">
                                <label for="bio">Bio (CSS: textarea.input-field)</label>
                                <textarea id="bio" class="input-field" rows="3" placeholder="Tell us about yourself"></textarea>
                            </div>
                            <div class="code-info">
                                <code>driver.find_element(By.CSS_SELECTOR, "textarea.input-field")</code>
                            </div>
                        </div>
                        <div class="feature-card">
                            <div class="field">
                                <label for="feedback">Feedback (CSS: textarea.input-field)</label>
                                <textarea id="feedback" class="input-field" rows="2" placeholder="Your feedback"></textarea>
                            </div>
                            <div class="code-info">
                                <code>driver.find_element(By.CSS_SELECTOR, "textarea.input-field")</code>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Advanced Attribute Selectors -->
                <div class="page-section">
                    <h3>🔤 Advanced Attribute Selectors</h3>
                    <div class="demo-grid">
                        <div class="feature-card">
                            <div class="field">
                                <label for="user_name1">User Name (name^='user')</label>
                                <input type="text" id="user_name1" name="user_name_main" placeholder="john_doe" />
                            </div>
                            <div class="code-info">
                                <code>driver.find_element(By.CSS_ SELECTOR,"input[name^='user']")</code>
                            </div>
                        </div>
                        <div class="feature-card">
                            <div class="field">
                                <label for="user_name2">Display Name (name$='_name')</label>
                                <input type="text" id="user_name2" name="display_name" placeholder="Johnny" />
                            </div>
                            <div class="code-info">
                                <code>driver.find_element(By.CSS_ SELECTOR,"input[name$='_name']")</code>
                            </div>
                        </div>
                        <div class="feature-card">
                            <div class="field">
                                <label for="user_name3">Search Name (name*='name')</label>
                                <input type="text" id="user_name3" name="custom_name_field" placeholder="search_name" />
                            </div>
                            <div class="code-info">
                                <code>driver.find_element(By.CSS_ SELECTOR,"input[name*='name']")</code>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Nested / Descendant Selectors -->
                <div class="page-section">
                    <h3>🔗 Nested / Descendant Selectors</h3>
                    <div class="feature-card">
                        <div class="field group-block">
                            <label>Preferred Language (CSS: div.group-block input[type='radio'])</label>
                            <div class="field radio-options flex gap-2">
                                <div>
                                    <input type="radio" id="langPython" name="language" value="python" />
                                    <label for="langPython">Python</label>
                                </div>
                                <div>
                                    <input type="radio" id="langJava" name="language" value="java" />
                                    <label for="langJava">Java</label>
                                </div>
                            </div>
                        </div>
                        <div class="code-info">
                            <code>driver.find_element(By.CSS_SELECTOR, "div.group-block input[type='radio']")</code>
                        </div>
                    </div>
                </div>

                <!-- Submit -->
                <div class="control-panel">
                    <ul class="actions">
                        <li><button type="submit" class="button primary" id="submitBtn">Submit</button></li>
                    </ul>
                </div>
            </form>

            <!-- Instructions -->
            <div class="page-section">
                <h3>📋 CSS Selector Practice Instructions</h3>
                <div class="code-info">
                    <p><strong>Common CSS Selector Patterns:</strong></p>
                    <ul style="margin-top: 1rem;">
                        <li><code>driver.find_element(By.CSS_SELECTOR, "#username")</code> - ID selector</li>
                        <li><code>driver.find_element(By.CSS_SELECTOR, ".input-email")</code> - Class selector</li>
                        <li><code>driver.find_element(By.CSS_SELECTOR, "input[placeholder='Enter password']")</code> - Attribute selector</li>
                        <li><code>driver.find_element(By.CSS_SELECTOR, "textarea.input-field")</code> - Tag + Class selector</li>
                        <li><code>driver.find_element(By.CSS_SELECTOR, "div.group-block input[type='radio']")</code> - Descendant selector</li>
                        <li><code>driver.find_element(By.CSS_SELECTOR, "input[name^='user']")</code> - Starts with</li>
                        <li><code>driver.find_element(By.CSS_SELECTOR, "input[name$='_name']")</code> - Ends with</li>
                        <li><code>driver.find_element(By.CSS_SELECTOR, "input[name*='name']")</code> - Contains</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
</article>
<?php
require_once dirname(__DIR__) . '/includes/footer.php';
