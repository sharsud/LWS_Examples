<!DOCTYPE HTML>
<html>
<head>
    <title>XPath Practice - Learn with Psudo</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="../images/logo.ico" />
    <link rel="icon" href="../images/logo.ico" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
     <link rel="canonical" href="https://examples.learnwithpsudo.com/pages/xpathdemo.php" />
    
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
        <h2>XPath Locator Strategies (Absolute, Relative, Dynamic)</h2>
        <p>This interactive playground demonstrates XPath locator techniques used in Selenium WebDriver, covering static and dynamic scenarios.</p>
    </header>
    <section class="wrapper style5">
        <div class="inner">

            <h3>🧠 What is XPath?</h3>
            <p>XPath is a language used to locate elements in XML/HTML documents. In Selenium, it’s widely used to navigate and interact with DOM elements.</p>
            <ul>
                <li><strong>XPath vs CSS:</strong> XPath supports text(), axes, and direction-based navigation. CSS is faster but less flexible in dynamic cases.</li>
            </ul>

            <h3>📌 Absolute XPath</h3>
            <p><code>/html/body/section/div[2]/form/input[1]</code> - Starts at the root. Fragile with any UI change.</p>
            <div class="field">
                <label for="absoluteField">Absolute XPath Example</label>
                <input type="text" id="absoluteField" name="absoluteField" placeholder="Inspect and try /html/..." />
            </div>

            <h3>📌 Relative XPath</h3>
            <p><code>//input[@id='relativeField']</code> - More robust, doesn’t rely on full path.</p>
            <div class="field">
                <label for="relativeField">Relative XPath Example</label>
                <input type="text" id="relativeField" name="relativeField" placeholder="Relative XPath" />
            </div>

            <h3>📝 Text-based XPath</h3>
            <div class="field">
                <button id="loginBtn">Login</button>
                <p><code>//button[text()='Login']</code></p>
                <p><code>//*[text()='Login']</code></p>
            </div>

            <h3>🔀 Combining Conditions (and/or)</h3>
            <div class="field">
                <input type="text" id="userName" name="username" placeholder="Username" />
                <p><code>//input[@type='text' and @name='username']</code></p>
            </div>

            <h3>🔢 Indexing and Position()</h3>
            <div class="field">
                <input type="text" name="indexed" placeholder="Input 1" />
                <input type="text" name="indexed" placeholder="Input 2" />
                <input type="text" name="indexed" placeholder="Input 3" />
                <p><code>(//input[@name='indexed'])[2]</code></p>
                <p><code>//input[@name='indexed'][position()=3]</code></p>
            </div>

            <h3>📦 Dynamic XPath: contains(), starts-with(), ends-with()</h3>
            <div class="field">
                <input type="text" id="input_email_456" name="email_field" placeholder="Your Email" />
                <p><code>//input[contains(@id,'email')]</code></p>
            </div>
            <div class="field">
                <input type="text" name="user_id_123" placeholder="User ID" />
                <p><code>//input[starts-with(@name,'user')]</code></p>
            </div>
            <div class="field">
                <input type="text" name="home_address" placeholder="Address" />
                <p><code>//input[substring(@name,string-length(@name)-7)='_address']</code></p>
            </div>

            <h3>🗣️ Working with text() & Wildcards</h3>
            <div class="field">
                <p>Welcome to XPath World!</p>
                <p><code>//*[contains(text(),'Welcome')]</code></p>
                <p><code>//div/*</code> - Select all child elements</p>
            </div>

            <h3>⚙️ XPath Axes</h3>
            <div class="field">
                <label for="password">Password</label>
                <input type="password" id="password" />
                <p>
                    <code>//label[text()='Password']/following::input[1]</code><br>
                    <code>//input[@id='password']/preceding::label</code><br>
                    <code>//input[@id='password']/ancestor::div</code><br>
                    <code>//input[@id='password']/parent::div</code>
                </p>
            </div>
		 <h3>⚙️ XPath Axes (Extended)</h3>
            <div class="field">
                <div class="parent-axes">
                    <label for="password">Password</label>
                    <input type="password" id="password" />
                </div>
                <div class="child-axes">
                    <label for="emailFromLabel">Email</label>
                    <input type="email" id="emailFromLabel" placeholder="Enter Email" />
                </div>
                <div class="sibling-axes">
                    <label for="sibling1">Sibling 1</label>
                    <input type="text" id="sibling1" />
                    <label for="sibling2">Sibling 2</label>
                    <input type="text" id="sibling2" />
                </div>
                <div class="descendant-axes">
                    <fieldset>
                        <legend>Descendant Form</legend>
                        <div class="descendant-wrapper">
                            <input type="text" name="descName" placeholder="Descendant Input" />
                        </div>
                    </fieldset>
                </div>
                <p>
                    <code>//label[text()='Email']/following::input[1]</code><br>
                    <code>//input[@id='password']/preceding::label[1]</code><br>
                    <code>//input[@id='password']/ancestor::div</code><br>
                    <code>//input[@id='password']/parent::div</code><br>
                    <code>//fieldset/descendant::input</code><br>
                    <code>//label[@for='sibling1']/following-sibling::input</code><br>
                    <code>//input[@id='sibling2']/preceding-sibling::label</code>
                </p>
            </div>
            <h3>🧩 Chained & Nested XPath</h3>
            <div class="field">
                <div class="container">
                    <input type="email" name="email" placeholder="Email Address" />
                </div>
                <p><code>//div[@class='container']//input[@name='email']</code></p>
            </div>

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
            <p>
                <code>//table/tbody/tr[2]/td[1]</code> → selects "Bob"<br>
                <code>//table//tr[position()=3]/td[2]</code> → selects age 40
            </p>
			<h3>🔘 Buttons & Text-based XPath Examples</h3>
            <div class="field">
                <button id="submitBtnDemo">Submit</button>
                <p><code>//button[text()='Submit']</code> - Find Submit button by exact text</p>
            </div>

            <div class="field">
                <button id="resetPasswordText">Reset Fields</button>
                <p><code>//*[text()='Reset Fields']</code> - Match paragraph or heading with exact visible text</p>
            </div>
            <h3>💡 Bonus Tips</h3>
            <ul>
                <li>Prefer Relative XPath for long-term stability</li>
                <li>Use `$x("//tag[@attr='value']")` in Chrome DevTools for testing</li>
                <li>Use `find_elements()` when multiple elements match</li>
                <li>Mixing XPath functions increases resilience in dynamic pages</li>
            </ul>

            <h3>🔗 References</h3>
            <ul>
                <li><a href="https://www.selenium.dev/documentation/webdriver/elements/locators/" target="_blank">Selenium Locator Strategies</a></li>
                <li><a href="https://www.learnwithpsudo.com/" target="_blank">Learn With Psudo – XPath Tutorials</a></li>
            </ul>

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
</body>
</html>