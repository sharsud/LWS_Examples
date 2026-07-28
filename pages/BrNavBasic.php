<!DOCTYPE HTML>
<html>
<head>
    <title>Selenium Interaction Demo - Learn with Psudo</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="../images/logo.ico" />
    <link rel="icon" href="../images/logo.ico" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
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
        pre {
            background-color: #f5f5f5;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
        }
        .element-block {
            margin-bottom: 40px;
        }
    </style>
</head>
<body class="landing">
<div id="page-wrapper">
<?php include "../includes/generic_header.php"; ?>

<article id="main">
    <header>
        <h2>Selenium Web Element & Browser Features Demo</h2>
        <p>Practice element interactions, state checks, keyboard actions, browser navigation, and scrolling using Selenium Python.</p>
    </header>

    <section class="wrapper style5">
        <div class="inner">

            <!-- Element Interaction Basics -->
            <h3>📌 Element Interaction Basics</h3>

            <div class="element-block">
                <label for="inputField">Type Something</label>
                <input type="text" id="inputField" placeholder="Enter text here" />
                <button id="btnClear">Clear Input</button>
                <label>🔹 Selenium Example:</label>
                <pre>
# Typing text
driver.find_element(By.ID, "inputField").send_keys("Hello World")

# Clearing input
driver.find_element(By.ID, "inputField").clear()
                </pre>
            </div>
            <hr>
            <div class="element-block">
                <button id="btnClickMe">Click Me</button>
                <label>🔹 Selenium Example:</label>
                <pre>
driver.find_element(By.ID, "btnClickMe").click()
                </pre>
            </div>
            <hr>
            <!-- Form Demo Section -->
            <div class="element-block">
            <h3>Contact Form</h3>
            <form id="contactForm">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="3" required></textarea>

                <button type="submit">Submit</button>
            </form>

            <p id="successMessage" style="color: green; display: none; font-weight: bold; margin-top: 10px;">
                ✅ Form submitted successfully!
            </p>
            <h4>Selenium `.submit()` Example (Python)</h4>
            <pre>
# Fill form fields
driver.find_element(By.ID, "name").send_keys("John Doe")
driver.find_element(By.ID, "email").send_keys("john@example.com")
driver.find_element(By.ID, "message").send_keys("Hello! This is a test.")

# Submit form using .submit()
form = driver.find_element(By.ID, "contactForm")
form.submit()
            </pre>
            </div>
<hr>
            <div class="element-block">
                <p id="textExample">This is a sample text to retrieve</p>
                <label>🔹 Selenium Example:</label>
                <pre>
text = driver.find_element(By.ID, "textExample").text
print(text)
                </pre>
            </div>
<hr>
            <div class="element-block">
                <a href="https://example.com" id="linkExample">Example Link</a>
                <label>🔹 Selenium Example:</label>
                <pre>
link = driver.find_element(By.ID, "linkExample").get_attribute("href")
print(link)
                </pre>
            </div>
<hr>
            <div class="element-block">
                <p id="cssExample" style="color: blue;">Check my CSS property</p>
                <label>🔹 Selenium Example:</label>
                <pre>
color = driver.find_element(By.ID, "cssExample").value_of_css_property("color")
print(color)
                </pre>
            </div>
<hr>
            <!-- State & Visibility Checks -->
            <h3>📌 State & Visibility Checks</h3>

            <div class="element-block">
                <input type="checkbox" id="chkAgree" />
                <label for="chkAgree">Agree to Terms</label>
                <label>🔹 Selenium Example:</label>
                <pre>
checkbox = driver.find_element(By.ID, "chkAgree")
print(checkbox.is_selected())
checkbox.click()  # Select or unselect
                </pre>
            </div>
<hr>
            <div class="element-block">
                <button id="btnDisabled" disabled>Disabled Button</button>
                <label>🔹 Selenium Example:</label>
                <pre>
button = driver.find_element(By.ID, "btnDisabled")
print(button.is_enabled())
                </pre>
            </div>
<hr>
            <div class="element-block">
                <p id="hiddenText" style="display:none;">I am hidden!</p>
                <button id="btnShowHidden">Show Hidden Text</button>
                <label>🔹 Selenium Example:</label>
                <pre>
hidden = driver.find_element(By.ID, "hiddenText")
print(hidden.is_displayed())  # False if hidden
driver.find_element(By.ID, "btnShowHidden").click()
                </pre>
            </div>

            <!-- Advanced Typing & Actions -->
            <h3>📌 Advanced Typing & Actions</h3>

            <div class="element-block">
                <input type="text" id="keyInput" placeholder="Use keyboard actions here" />
                <label>🔹 Selenium Example:</label>
                <pre>
from selenium.webdriver.common.keys import Keys

input_field = driver.find_element(By.ID, "keyInput")
input_field.send_keys("Hello")
input_field.send_keys(Keys.ENTER)
input_field.send_keys(Keys.TAB)
input_field.send_keys(Keys.ARROW_DOWN)
input_field.send_keys(Keys.CONTROL, "a")  # CTRL+A
input_field.send_keys(Keys.CONTROL, "c")  # CTRL+C
input_field.send_keys(Keys.CONTROL, "v")  # CTRL+V
                </pre>
            </div>

            <!-- Browser Navigation Commands -->
            <h3>📌 Browser Navigation Commands</h3>

            <div class="element-block">
                <button id="btnBack">Go Back</button>
                <button id="btnForward">Go Forward</button>
                <button id="btnRefresh">Refresh Page</button>
                <button id="btnOpen">Open Example.com</button>
                <label>🔹 Selenium Example:</label>
                <pre>
driver.get("https://example.com")
driver.back()
driver.forward()
driver.refresh()
                </pre>
            </div>

            <!-- Scrolling & Viewport Handling -->
            <h3>📌 Scrolling & Viewport Handling</h3>

            <div class="spacer"></div>
            <div class="element-block" id="scrollTarget">
                <p>This is the target element for scrolling demos.</p>
                <button id="btnScrollIntoView">Scroll To Element</button>
                <button id="btnScrollBy">Scroll By 300px</button>
                <label>🔹 Selenium Example:</label>
                <pre>
# Scroll to element
element = driver.find_element(By.ID, "scrollTarget")
driver.execute_script("arguments[0].scrollIntoView();", element)

# Scroll by pixels
driver.execute_script("window.scrollBy(0, 300);")
                </pre>
            </div>

            <div id="output">✅ Action Triggered!</div>
            <div id="scrollMessage">✅ Scrolled Successfully!</div>

        </div>
    </section>
</article>

<?php include "../includes/generic_footer.php"; ?>
</div>

<script>
    document.getElementById('btnClickMe').addEventListener('click', () => {
        document.getElementById('output').style.display = 'block';
        document.getElementById('output').innerText = "✅ Button Clicked!";
    });
    document.getElementById('btnClear').addEventListener('click', () => {
        document.getElementById('inputField').value = '';
        document.getElementById('output').style.display = 'block';
        document.getElementById('output').innerText = "✅ Input Cleared!";
    });
    document.getElementById('btnShowHidden').addEventListener('click', () => {
        document.getElementById('hiddenText').style.display = 'block';
    });
    document.getElementById('btnScrollIntoView').addEventListener('click', () => {
        document.getElementById('scrollTarget').scrollIntoView({behavior: "smooth"});
        document.getElementById('scrollMessage').style.display = 'block';
    });
    document.getElementById('btnScrollBy').addEventListener('click', () => {
        window.scrollBy(0, 300);
        document.getElementById('scrollMessage').style.display = 'block';
    });
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault(); // prevent page refresh
        document.getElementById('successMessage').style.display = 'block';
    });

</script>
</body>
</html>
