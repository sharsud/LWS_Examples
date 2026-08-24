<?php
$lwsBase = '../';
$pageTitle = 'XPath Practice - Learn with Psuto';
$pageCanonical = 'https://examples.learnwithpsudo.com/pages/xpathdemo.php';


require_once dirname(__DIR__) . '/includes/header.php';
?>
<article id="main">
    <header>
        <h2>XPath Locator Strategies (Absolute, Relative, Dynamic)</h2>
        <p>This interactive playground demonstrates XPath locator techniques used in Selenium WebDriver, covering static and dynamic scenarios.</p>
    </header>
    <section class="wrapper style5">
        <div class="inner">

            <div class="page-section">
                <h3>🧠 What is XPath?</h3>
                <p>XPath is a language used to locate elements in XML/HTML documents. In Selenium, it's widely used to navigate and interact with DOM elements.</p>
                <div class="feature-card">
                    <ul>
                        <li><strong>XPath vs CSS:</strong> XPath supports text(), axes, and direction-based navigation. CSS is faster but less flexible in dynamic cases.</li>
                    </ul>
                </div>
            </div>

            <div class="page-section">
                <h3>📌 Absolute vs Relative XPath</h3>
                <div class="demo-grid">
                    <div class="feature-card">
                        <h4>Absolute XPath</h4>
                        <p><code>/html/body/section/div[2]/form/input[1]</code> - Starts at the root. Fragile with any UI change.</p>
                        <div class="field">
                            <label for="absoluteField">Absolute XPath Example</label>
                            <input type="text" id="absoluteField" name="absoluteField" placeholder="Inspect and try /html/..." />
                        </div>
                    </div>
                    <div class="feature-card">
                        <h4>Relative XPath</h4>
                        <p><code>//input[@id='relativeField']</code> - More robust, doesn't rely on full path.</p>
                        <div class="field">
                            <label for="relativeField">Relative XPath Example</label>
                            <input type="text" id="relativeField" name="relativeField" placeholder="Relative XPath" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-section">
                <h3>📝 Text-based XPath</h3>
                <div class="feature-card">
                    <button id="loginBtn" class="button">Login</button>
                    <div class="code-info mt-2">
                        <code>//button[text()='Login']</code><br>
                        <code>//*[text()='Login']</code>
                    </div>
                </div>
            </div>

            <div class="page-section">
                <h3>🔀 Combining Conditions (and/or)</h3>
                <div class="feature-card">
                    <div class="field">
                        <label for="userName">Username</label>
                        <input type="text" id="userName" name="username" placeholder="Username" />
                    </div>
                    <div class="code-info">
                        <code>//input[@type='text' and @name='username']</code>
                    </div>
                </div>
            </div>

            <div class="page-section">
                <h3>🔢 Indexing and Position()</h3>
                <div class="feature-card">
                    <div class="field">
                        <input type="text" name="indexed" placeholder="Input 1" />
                        <input type="text" name="indexed" placeholder="Input 2" />
                        <input type="text" name="indexed" placeholder="Input 3" />
                    </div>
                    <div class="code-info">
                        <code>(//input[@name='indexed'])[2]</code><br>
                        <code>//input[@name='indexed'][position()=3]</code>
                    </div>
                </div>
            </div>

            <div class="page-section">
                <h3>📦 Dynamic XPath: contains(), starts-with(), ends-with()</h3>
                <div class="demo-grid">
                    <div class="feature-card">
                        <h4>contains()</h4>
                        <div class="field">
                            <label for="input_email_456">Email</label>
                            <input type="text" id="input_email_456" name="email_field" placeholder="Your Email" />
                        </div>
                        <div class="code-info">
                            <code>//input[contains(@id,'email')]</code>
                        </div>
                    </div>
                    <div class="feature-card">
                        <h4>starts-with()</h4>
                        <div class="field">
                            <label for="user_id_123">User ID</label>
                            <input type="text" name="user_id_123" placeholder="User ID" />
                        </div>
                        <div class="code-info">
                            <code>//input[starts-with(@name,'user')]</code>
                        </div>
                    </div>
                    <div class="feature-card">
                        <h4>ends-with()</h4>
                        <div class="field">
                            <label for="home_address">Address</label>
                            <input type="text" name="home_address" placeholder="Address" />
                        </div>
                        <div class="code-info">
                            <code>//input[substring(@name,string-length(@name)-7)='_address']</code>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-section">
                <h3>🗣️ Working with text() & Wildcards</h3>
                <div class="feature-card">
                    <p>Welcome to XPath World!</p>
                    <div class="code-info">
                        <code>//*[contains(text(),'Welcome')]</code><br>
                        <code>//div/*</code> - Select all child elements
                    </div>
                </div>
            </div>

            <div class="page-section">
                <h3>⚙️ XPath Axes</h3>
                <div class="feature-card">
                    <div class="field">
                        <label for="password">Password</label>
                        <input type="password" id="password" />
                    </div>
                    <div class="code-info">
                        <code>//label[text()='Password']/following::input[1]</code><br>
                        <code>//input[@id='password']/preceding::label</code><br>
                        <code>//input[@id='password']/ancestor::div</code><br>
                        <code>//input[@id='password']/parent::div</code>
                    </div>
                </div>
            </div>

            <div class="page-section">
                <h3>⚙️ XPath Axes (Extended)</h3>
                <div class="feature-card">
                    <div class="demo-grid">
                        <div>
                            <div class="parent-axes">
                                <label for="password">Password</label>
                                <input type="password" id="password" />
                            </div>
                        </div>
                        <div>
                            <div class="child-axes">
                                <label for="emailFromLabel">Email</label>
                                <input type="email" id="emailFromLabel" placeholder="Enter Email" />
                            </div>
                        </div>
                        <div>
                            <div class="sibling-axes">
                                <label for="sibling1">Sibling 1</label>
                                <input type="text" id="sibling1" />
                                <label for="sibling2">Sibling 2</label>
                                <input type="text" id="sibling2" />
                            </div>
                        </div>
                        <div>
                            <div class="descendant-axes">
                                <fieldset>
                                    <legend>Descendant Form</legend>
                                    <div class="descendant-wrapper">
                                        <input type="text" name="descName" placeholder="Descendant Input" />
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="code-info mt-2">
                        <code>//label[text()='Email']/following::input[1]</code><br>
                        <code>//input[@id='password']/preceding::label[1]</code><br>
                        <code>//input[@id='password']/ancestor::div</code><br>
                        <code>//input[@id='password']/parent::div</code><br>
                        <code>//fieldset/descendant::input</code><br>
                        <code>//label[@for='sibling1']/following-sibling::input</code><br>
                        <code>//input[@id='sibling2']/preceding-sibling::label</code>
                    </div>
                </div>
            </div>

            <div class="page-section">
                <h3>🧩 Chained & Nested XPath</h3>
                <div class="feature-card">
                    <div class="container">
                        <div class="field">
                            <label for="nestedEmail">Email Address</label>
                            <input type="email" name="email" id="nestedEmail" placeholder="Email Address" />
                        </div>
                    </div>
                    <div class="code-info">
                        <code>//div[@class='container']//input[@name='email']</code>
                    </div>
                </div>
            </div>

            <div class="page-section">
                <h3>📋 Handling Tables with XPath</h3>
                <table border="1">
                    <thead>
                        <tr><th>Name</th><th>Age</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>Alice</td><td>30</td></tr>
                        <tr><td>Bob</td><td>35</td></tr>
                        <tr><td>Charlie</td><td>40</td></tr>
                    </tbody>
                </table>
                <div class="code-info">
                    <code>//table/tbody/tr[2]/td[1]</code> → selects "Bob"<br>
                    <code>//table//tr[position()=3]/td[2]</code> → selects age 40
                </div>
            </div>

            <div class="page-section">
                <h3>🔘 Buttons & Text-based XPath Examples</h3>
                <div class="demo-grid">
                    <div class="feature-card">
                        <button id="submitBtnDemo" class="button primary">Submit</button>
                        <div class="code-info">
                            <code>//button[text()='Submit']</code> - Find Submit button by exact text
                        </div>
                    </div>
                    <div class="feature-card">
                        <button id="resetPasswordText" class="button">Reset Fields</button>
                        <div class="code-info">
                            <code>//*[text()='Reset Fields']</code> - Match paragraph or heading with exact visible text
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-section">
                <h3>💡 Bonus Tips</h3>
                <div class="feature-card">
                    <ul>
                        <li>Prefer Relative XPath for long-term stability</li>
                        <li>Use `$x("//tag[@attr='value']")` in Chrome DevTools for testing</li>
                        <li>Use `find_elements()` when multiple elements match</li>
                        <li>Mixing XPath functions increases resilience in dynamic pages</li>
                    </ul>
                </div>
            </div>

            <div class="page-section">
                <h3>🔗 References</h3>
                <ul>
                    <li><a href="https://www.selenium.dev/documentation/webdriver/elements/locators/" target="_blank" rel="noopener noreferrer">Selenium Locator Strategies</a></li>
                    <li><a href="https://blog.learnwithpsudo.com/2026/01/understanding-the-dom-and-inspecting-elements" target="_blank" rel="noopener noreferrer">Learn With Psudo – XPath Tutorials</a></li>
                </ul>
            </div>

        </div>
    </section>
</article>
<?php
$extraScripts = '';
require_once dirname(__DIR__) . '/includes/footer.php';
