<!DOCTYPE HTML>
<html>
<head>
    <title>Checkbox & Radio Demo - Learn with Psudo | Selenium Tutorials</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="../images/logo.ico" />
    <link rel="icon" href="../images/logo.ico" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
     <link rel="canonical" href="https://examples.learnwithpsudo.com/pages/chkboxdemo.php" />
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
                <h2>Checkbox & Radio Buttons Demo</h2>
                <p>This page demonstrates checkboxes and radio buttons in HTML with Selenium usage examples.</p>
            </header>
            <section class="wrapper style5">
                <div class="inner">
                    <!-- Checkboxes Example -->
                    <div class="field">
                        <h3>1. Checkboxes</h3>
                        <p>Checkboxes allow multiple selections. You can locate by ID, name, XPath, or CSS.</p>

                        <input type="checkbox" id="chk_news" name="news">
                        <label for="chk_news">Subscribe to Newsletter</label><br>

                        <input type="checkbox" id="chk_terms" name="terms">
                        <label for="chk_terms">Agree to Terms</label><br>

                        <input type="checkbox" id="chk_offer" name="offer">
                        <label for="chk_offer">Receive Offers</label>

                        <p><strong>Sample Selenium Code:</strong><br>
                        <code>
                    # Select checkbox only if not already selected<br>
                    checkbox = driver.find_element(By.ID, "chk_news")<br>
                    if not checkbox.is_selected():<br>
                        checkbox.click()
                        </code> </p>
                    </div>

                    <!-- Radio Buttons Example -->
                    <div class="field">
                        <h3>2. Radio Buttons</h3>
                        <p>Radio buttons allow only one selection in a group. Use the <code>name</code> attribute to group them.</p>

                        <input type="radio" id="genderMale" name="gender" value="male" checked>
                        <label for="genderMale">Male</label><br>

                        <input type="radio" id="genderFemale" name="gender" value="female">
                        <label for="genderFemale">Female</label><br>

                        <input type="radio" id="genderOther" name="gender" value="other">
                        <label for="genderOther">Other</label>

                        <p><strong>Sample Selenium Code:</strong><br>
                        <code>
                    # Loop through radio buttons and select "Female"<br>
                    radios = driver.find_elements(By.NAME, "gender")<br>
                    for radio in radios:<br>
                        if radio.get_attribute("value") == "female":<br>
                            radio.click()<br>
                            break
                        </code>
                        </p>
                    </div>

                    <!-- Hidden / Dynamic Checkbox Example -->
                    <div class="field">
                        <h3>3. Hidden or Dynamic Checkbox</h3>
                        <p>Some checkboxes appear only after an action.</p>

                        <button type="button" onclick="document.getElementById('hiddenChk').style.display='inline-block'">Show Hidden Checkbox</button><br>
                        <input type="checkbox" id="hiddenChk" style="display:none;">
                        <label for="hiddenChk">Hidden Checkbox</label>

                        <p><strong>Sample Selenium Code:</strong><br>
                        <code>
                    # Click hidden checkbox using JavaScript<br>
                    hidden_checkbox = driver.find_element(By.ID, "hiddenChk")<br>
                    driver.execute_script("arguments[0].click();", hidden_checkbox)
                        </code>
                        </p>
                    </div>

                    <!-- Grouped Checkboxes -->
                    <div class="field">
                        <h3>4. Grouped Checkboxes</h3>

                        <input type="checkbox" id="selectAll" onclick="toggleCheckboxes(this)">
                        <label for="selectAll">Select All</label><br>

                        <input type="checkbox" class="grouped" id="optionA">
                        <label for="optionA">Option A</label><br>

                        <input type="checkbox" class="grouped" id="optionB">
                        <label for="optionB">Option B</label><br>

                        <input type="checkbox" class="grouped" id="optionC">
                        <label for="optionC">Option C</label>

                        <p><strong>Sample Selenium Code:</strong><br>
                        <code>
                    # Loop through grouped checkboxes<br>
                    checkboxes = driver.find_elements(By.CSS_SELECTOR, ".grouped")<br>
                    for cb in checkboxes:<br>
                        cb.click()
                        </code>
                        </p>
                    </div>
                    <!-- 5. Disabled Radio Button -->
                    <div class="field">
                        <h3>5. Disabled Radio Button & Checkbox</h3>
                        <p>This radio button is disabled and cannot be selected.</p>

                        <input type="radio" id="disabledRadio" name="disabledGroup" value="cannotSelect" disabled>
                        <label for="disabledRadio">Disabled Option</label>

                        <p><strong>Sample Selenium Code:</strong></p>
                        <code>
                    # Check if radio button is enabled before clicking<br>
                    radio = driver.find_element(By.ID, "disabledRadio")<br>
                    print(radio.is_enabled())  # Returns False, cannot click
                        </code>

                        <p>This check box is disabled and cannot be selected.</p>
                        <input type="checkbox" id="disabledCheckbox" value="cannotSelect" disabled>
                        <label for="disabledCheckbox" id="disabledcheck" ">Lazy Loaded Checkbox</label><br>

                        <p><strong>Sample Selenium Code:</strong></p>
                        <code>
                    # Check if checkbox button is enabled before clicking<br>
                    chkbox = driver.find_element(By.ID, "disabledCheckbox")<br>
                    print(chkbox.is_enabled())  # Returns False, cannot click
                        </code>
                    </div>

                    <!-- 6. Lazy / Delayed Radio Button & Checkbox -->
                    <div class="field" style="margin-top:50px;" id="lazySection">
                        <h3>6. Delayed / Lazy Elements</h3>
                        <p>These elements appear after scrolling to the section or after a small delay.</p>

                        <button type="button" onclick="setTimeout(showLazyElements, 1000)">Load Lazy Elements</button><br>

                        <input type="checkbox" id="lazyChk" style="display:none;">
                        <label for="lazyChk" id="lazyChkLabel" style="display:none;">Lazy Loaded Checkbox</label><br>

                        <input type="radio" id="lazyRadio" name="lazyGroup" value="lazyOption" style="display:none;">
                        <label for="lazyRadio" id="lazyRadioLabel" style="display:none;">Lazy Loaded Radio</label>

                        <p><strong>Sample Selenium Code:</strong></p>
                        <code>
                    # Scroll to element and click after it appears<br>
                    lazy_chk = driver.find_element(By.ID, "lazyChk")<br>
                    driver.execute_script("arguments[0].scrollIntoView();", lazy_chk)<br>
                    driver.execute_script("arguments[0].click();", lazy_chk)
                        </code>
                    </div>
                </div>
            </section>
        </article>

        <!-- Footer -->
        <footer id="footer">
            <ul class="icons">
                <li><a href="https://www.facebook.com/profile.php?id=61575272247147" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="https://www.instagram.com/learn_with_psudo/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="learnwithpsudo@gmail.com" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
            </ul>
            <ul class="copyright">
                <li>&copy; LWS Learn with PSUDO</li>
                <li>Linkedin: <a href="https://www.linkedin.com/in/sudhanshu-sharma/" target="Window">Linkedin</a></li>
            </ul>
        </footer>

    </div> <!-- #page-wrapper -->

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery.scrollex.min.js"></script>
    <script src="../assets/js/jquery.scrolly.min.js"></script>
    <script src="../assets/js/browser.min.js"></script>
    <script src="../assets/js/breakpoints.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>
    <script>
        function showLazyElements() {
            document.getElementById('lazyChk').style.display = 'inline-block';
            document.getElementById('lazyChkLabel').style.display = 'inline-block';
            document.getElementById('lazyRadio').style.display = 'inline-block';
            document.getElementById('lazyRadioLabel').style.display = 'inline-block';
        }
    </script>
        
    <script>
    // Auto-display elements when scrolled into view
function showLazyElements() {
    const lazySection = document.getElementById('lazySection');
    const sectionTop = lazySection.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;

    if(sectionTop < windowHeight) {  // Section is visible
        ['lazyChk', 'lazyChkLabel', 'lazyRadio', 'lazyRadioLabel'].forEach(id => {
            document.getElementById(id).style.display = 'inline-block';
        });
        window.removeEventListener('scroll', showLazyElements); // Stop checking
    }
}

window.addEventListener('scroll', showLazyElements);
window.addEventListener('load', showLazyElements); // Trigger on load if already visible
    </script>
    <script>
  function toggleCheckboxes(selectAllCheckbox) {
    const checkboxes = document.querySelectorAll(".grouped");
    checkboxes.forEach(cb => cb.checked = selectAllCheckbox.checked);
  }
</script>
</body>
</html>
