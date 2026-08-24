<?php
$lwsBase = '../';
$pageTitle = 'Checkbox & Radio Demo - Learn with Psudo | Selenium Tutorials';
$pageCanonical = 'https://examples.learnwithpsudo.com/pages/chkboxdemo.php';


require_once dirname(__DIR__) . '/includes/header.php';
?>
<article id="main">
            <header>
                <h2>Checkbox & Radio Buttons Demo</h2>
                <p>This page demonstrates checkboxes and radio buttons in HTML with Selenium usage examples.</p>
            </header>
            <section class="wrapper style5">
                <div class="inner">
                    <!-- Checkboxes Example -->
                    <div class="page-section">
                        <h3>📦 Checkboxes</h3>
                        <p>Checkboxes allow multiple selections. You can locate by ID, name, XPath, or CSS.</p>

                        <div class="feature-card">
                            <div class="field">
                                <input type="checkbox" id="chk_news" name="news">
                                <label for="chk_news">Subscribe to Newsletter</label>
                            </div>
                            <div class="field">
                                <input type="checkbox" id="chk_terms" name="terms">
                                <label for="chk_terms">Agree to Terms</label>
                            </div>
                            <div class="field">
                                <input type="checkbox" id="chk_offer" name="offer">
                                <label for="chk_offer">Receive Offers</label>
                            </div>
                            <div class="code-info">
                                <strong>Sample Selenium Code:</strong><br>
                                <code>checkbox = driver.find_element(By.ID, "chk_news")</code><br>
                                <code>if not checkbox.is_selected(): checkbox.click()</code>
                            </div>
                        </div>
                    </div>

                    <!-- Radio Buttons Example -->
                    <div class="page-section">
                        <h3>📻 Radio Buttons</h3>
                        <p>Radio buttons allow only one selection in a group. Use the <code>name</code> attribute to group them.</p>

                        <div class="feature-card">
                            <div class="field">
                                <input type="radio" id="genderMale" name="gender" value="male" checked>
                                <label for="genderMale">Male</label>
                            </div>
                            <div class="field">
                                <input type="radio" id="genderFemale" name="gender" value="female">
                                <label for="genderFemale">Female</label>
                            </div>
                            <div class="field">
                                <input type="radio" id="genderOther" name="gender" value="other">
                                <label for="genderOther">Other</label>
                            </div>
                            <div class="code-info">
                                <strong>Sample Selenium Code:</strong><br>
                                <code>radios = driver.find_elements(By.NAME, "gender")</code><br>
                                <code>for radio in radios:</code><br>
                                <code>    if radio.get_attribute("value") == "female":</code><br>
                                <code>        radio.click()</code>
                            </div>
                        </div>
                    </div>

                    <!-- Hidden / Dynamic Checkbox Example -->
                    <div class="page-section">
                        <h3>👁️ Hidden or Dynamic Checkbox</h3>
                        <p>Some checkboxes appear only after an action.</p>

                        <div class="feature-card">
                            <button type="button" onclick="document.getElementById('hiddenChk').style.display='inline-block'" class="button">Show Hidden Checkbox</button>
                            <div class="field mt-2">
                                <input type="checkbox" id="hiddenChk" style="display:none;">
                                <label for="hiddenChk">Hidden Checkbox</label>
                            </div>
                            <div class="code-info">
                                <strong>Sample Selenium Code:</strong><br>
                                <code>hidden_checkbox = driver.find_element(By.ID, "hiddenChk")</code><br>
                                <code>driver.execute_script("arguments[0].click();", hidden_checkbox)</code>
                            </div>
                        </div>
                    </div>

                    <!-- Grouped Checkboxes -->
                    <div class="page-section">
                        <h3>🔗 Grouped Checkboxes</h3>

                        <div class="feature-card">
                            <div class="field">
                                <input type="checkbox" id="selectAll" onclick="toggleCheckboxes(this)">
                                <label for="selectAll">Select All</label>
                            </div>
                            <div class="field">
                                <input type="checkbox" class="grouped" id="optionA">
                                <label for="optionA">Option A</label>
                            </div>
                            <div class="field">
                                <input type="checkbox" class="grouped" id="optionB">
                                <label for="optionB">Option B</label>
                            </div>
                            <div class="field">
                                <input type="checkbox" class="grouped" id="optionC">
                                <label for="optionC">Option C</label>
                            </div>
                            <div class="code-info">
                                <strong>Sample Selenium Code:</strong><br>
                                <code>checkboxes = driver.find_elements(By.CSS_SELECTOR, ".grouped")</code><br>
                                <code>for cb in checkboxes: cb.click()</code>
                            </div>
                        </div>
                    </div>

                    <!-- Disabled Radio Button -->
                    <div class="page-section">
                        <h3>🚫 Disabled Radio Button & Checkbox</h3>
                        <p>These elements are disabled and cannot be selected.</p>

                        <div class="demo-grid">
                            <div class="feature-card">
                                <h4>Disabled Radio</h4>
                                <div class="field">
                                    <input type="radio" id="disabledRadio" name="disabledGroup" value="cannotSelect" disabled>
                                    <label for="disabledRadio">Disabled Option</label>
                                </div>
                                <div class="code-info">
                                    <code>radio = driver.find_element(By.ID, "disabledRadio")</code><br>
                                    <code>print(radio.is_enabled())  # Returns False</code>
                                </div>
                            </div>

                            <div class="feature-card">
                                <h4>Disabled Checkbox</h4>
                                <div class="field">
                                    <input type="checkbox" id="disabledCheckbox" value="cannotSelect" disabled>
                                    <label for="disabledCheckbox">Disabled Checkbox</label>
                                </div>
                                <div class="code-info">
                                    <code>chkbox = driver.find_element(By.ID, "disabledCheckbox")</code><br>
                                    <code>print(chkbox.is_enabled())  # Returns False</code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Lazy / Delayed Radio Button & Checkbox -->
                    <div class="page-section" id="lazySection">
                        <h3>⏱️ Delayed / Lazy Elements</h3>
                        <p>These elements appear after scrolling to the section or after a small delay.</p>

                        <div class="feature-card">
                            <button type="button" onclick="setTimeout(showLazyElements, 1000)" class="button primary">Load Lazy Elements</button>
                            <div class="field mt-2">
                                <input type="checkbox" id="lazyChk" style="display:none;">
                                <label for="lazyChk" id="lazyChkLabel" style="display:none;">Lazy Loaded Checkbox</label>
                            </div>
                            <div class="field">
                                <input type="radio" id="lazyRadio" name="lazyGroup" value="lazyOption" style="display:none;">
                                <label for="lazyRadio" id="lazyRadioLabel" style="display:none;">Lazy Loaded Radio</label>
                            </div>
                            <div class="code-info">
                                <strong>Sample Selenium Code:</strong><br>
                                <code>lazy_chk = driver.find_element(By.ID, "lazyChk")</code><br>
                                <code>driver.execute_script("arguments[0].scrollIntoView();", lazy_chk)</code><br>
                                <code>driver.execute_script("arguments[0].click();", lazy_chk)</code>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
<?php
$extraScripts = <<<'JS'
<script>
    function showLazyElements() {
        document.getElementById('lazyChk').style.display = 'inline-block';
        document.getElementById('lazyChkLabel').style.display = 'inline-block';
        document.getElementById('lazyRadio').style.display = 'inline-block';
        document.getElementById('lazyRadioLabel').style.display = 'inline-block';
    }

    // Auto-display elements when scrolled into view
    function showLazyElementsScroll() {
        const lazySection = document.getElementById('lazySection');
        const sectionTop = lazySection.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if(sectionTop < windowHeight) {
            ['lazyChk', 'lazyChkLabel', 'lazyRadio', 'lazyRadioLabel'].forEach(id => {
                document.getElementById(id).style.display = 'inline-block';
            });
            window.removeEventListener('scroll', showLazyElementsScroll);
        }
    }

    window.addEventListener('scroll', showLazyElementsScroll);
    window.addEventListener('load', showLazyElementsScroll);

    function toggleCheckboxes(selectAllCheckbox) {
        const checkboxes = document.querySelectorAll(".grouped");
        checkboxes.forEach(cb => cb.checked = selectAllCheckbox.checked);
    }
</script>
JS;
require_once dirname(__DIR__) . '/includes/footer.php';
