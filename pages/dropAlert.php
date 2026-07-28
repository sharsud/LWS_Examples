<!DOCTYPE HTML>
<html>
<head>
    <title>Dropdowns & Alerts Demo - Learn with Psudo</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="../images/logo.ico" />
    <link rel="icon" href="../images/logo.ico" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
    <style>
        /* Additional styles for new elements */
        .suggestion-item {
            padding: 8px 12px;
            cursor: pointer;
            border-bottom: 1px solid #eee;
        }
        .suggestion-item:hover {
            background-color: #f5f5f5;
        }
        .hidden-suggestion {
            display: none;
        }
        .scroll-container {
            max-height: 150px;
            overflow-y: auto;
            border: 1px solid #ccc;
            margin-top: 5px;
        }
        .validation-message {
            margin-top: 10px;
            padding: 10px;
            border-radius: 4px;
            display: none;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        .tab-container {
            margin: 20px 0;
        }
        .tab-buttons {
            display: flex;
            border-bottom: 1px solid #ccc;
        }
        .tab-button {
            padding: 10px 20px;
            background: #f5f5f5;
            border: 1px solid #ccc;
            border-bottom: none;
            cursor: pointer;
            margin-right: 5px;
            border-radius: 4px 4px 0 0;
        }
        .tab-button.active {
            background: white;
            font-weight: bold;
        }
        .tab-content {
            padding: 20px;
            border: 1px solid #ccc;
            border-top: none;
        }
        .tab-pane {
            display: none;
        }
        .tab-pane.active {
            display: block;
        }
    </style>
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
        <h2>Dropdowns & Alerts Demo</h2>
        <p>This page demonstrates Select dropdowns, Auto-suggest dropdowns, and JavaScript alerts for Selenium practice.</p>
    </header>

    <section class="wrapper style5">
        <div class="inner">
            <!-- Tab Navigation -->
            <div class="tab-container">
                <div class="tab-buttons">
                    <button class="tab-button active" data-tab="select-dropdowns">Select Dropdowns</button>
                    <button class="tab-button" data-tab="non-select-dropdowns">Non-Select Dropdowns</button>
                    <button class="tab-button" data-tab="advanced-scenarios">Advanced Scenarios</button>
                </div>
                <div class="tab-content">
                    <!-- Select Dropdowns Tab -->
                    <div id="select-dropdowns" class="tab-pane active">
                        <h3>Select Dropdowns (Standard HTML Select Elements)</h3>
                        <form id="dropdownForm" method="post" action="#">
                            <div class="fields">
                                <!-- Single Select -->
                                <div class="field">
                                    <label for="singleSelect">Single Select Dropdown</label>
                                    <select id="singleSelect" class="form-select">
                                        <option value="">-- Select Language --</option>
                                        <option value="python">Python</option>
                                        <option value="java">Java</option>
                                        <option value="js">JavaScript</option>
                                        <option value="csharp">C#</option>
                                    </select>
                                </div>
                                <br>
                                <!-- Multi-Select -->
                                <div class="field">
                                    <label for="multiSelect">Multi-Select Dropdown</label>
                                    <select id="multiSelect" class="form-select" multiple size="10" style="height: 10em;">
                                        <option value="python">Python</option>
                                        <option value="java">Java</option>
                                        <option value="js">JavaScript</option>
                                        <option value="csharp" disabled>C# (Disabled)</option>
                                        <option value="cpp">C++</option>
                                        <option value="ruby" disabled>Ruby (Disabled)</option>
                                        <option value="php">PHP</option>
                                        <option value="go">Go</option>
                                        <option value="swift">Swift</option>
                                        <option value="kotlin">Kotlin</option>
                                    </select>
                                </div><br>
                                <div class="field">
                                    <label for="disbaledSelect">Disabled Dropdown</label>
                                    <select id="disbaledSelect" class="form-select" disabled>
                                        <option value="">-- Select Language --</option>
                                        <option value="python">Python</option>
                                        <option value="java">Java</option>
                                        <option value="js">JavaScript</option>
                                        <option value="csharp">C#</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                        <div class="validation-message" id="selectValidation"></div>
                    </div>

                    <!-- Non-Select Dropdowns Tab -->
                    <div id="non-select-dropdowns" class="tab-pane">
                        <h3>Non-Select Dropdowns (Custom Auto-suggest Elements)</h3>
                        <form id="nonSelectForm">
                            <div class="fields">
                                <!-- Basic Auto-Suggest -->
                                <div class="field">
                                    <label for="autosuggest">Basic Auto-Suggest Input</label>
                                    <input type="text" id="autosuggest" placeholder="Type to get suggestions..." autocomplete="off" />
                                    <ul id="suggestions" style="border:1px solid #ccc; display:none; margin-top:0; list-style:none; padding:0; max-height:120px; overflow-y:auto;">
                                        <li class="suggestion-item">Python</li>
                                        <li class="suggestion-item">Java</li>
                                        <li class="suggestion-item">JavaScript</li>
                                        <li class="suggestion-item">C#</li>
                                        <li class="suggestion-item">C++</li>
                                    </ul>
                                </div>
                                <br>
                                
                                <!-- AJAX-based Auto-Suggest -->
                                <div class="field">
                                    <label for="ajaxAutosuggest">AJAX-Based Auto-Suggest (Dynamic)</label>
                                    <input type="text" id="ajaxAutosuggest" placeholder="Type to simulate AJAX call..." autocomplete="off" />
                                    <div id="ajaxSuggestions" class="scroll-container" style="display:none;">
                                        <!-- AJAX suggestions will be populated here -->
                                    </div>
                                </div>
                                <br>
                                
                                <!-- Hidden/Off-screen Suggestions -->
                                <div class="field">
                                    <label for="hiddenAutosuggest">Hidden/Off-screen Suggestions</label>
                                    <input type="text" id="hiddenAutosuggest" placeholder="Type to reveal hidden suggestions..." autocomplete="off" />
                                    <div id="hiddenSuggestions" class="scroll-container hidden-suggestion">
                                        <div class="suggestion-item">Python Programming</div>
                                        <div class="suggestion-item">Java Development</div>
                                        <div class="suggestion-item">JavaScript Frameworks</div>
                                        <div class="suggestion-item">C# Applications</div>
                                        <div class="suggestion-item">C++ Systems</div>
                                    </div>
                                </div>
                                <br>
                                
                                <!-- Complex XPath/CSS Example -->
                                <div class="field">
                                    <label for="complexAutosuggest">Complex Suggestions (For XPath/CSS Practice)</label>
                                    <input type="text" id="complexAutosuggest" placeholder="Type for complex suggestions..." autocomplete="off" />
                                    <div id="complexSuggestions" class="scroll-container" style="display:none;">
                                        <div class="suggestion-item" data-category="backend" data-popularity="high">Python (Backend)</div>
                                        <div class="suggestion-item" data-category="backend" data-popularity="medium">Java (Backend)</div>
                                        <div class="suggestion-item" data-category="frontend" data-popularity="high">JavaScript (Frontend)</div>
                                        <div class="suggestion-item" data-category="mobile" data-popularity="medium">Kotlin (Mobile)</div>
                                        <div class="suggestion-item" data-category="backend" data-popularity="low">Go (Backend)</div>
                                        <div class="suggestion-item" data-category="frontend" data-popularity="medium">TypeScript (Frontend)</div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="validation-message" id="nonSelectValidation"></div>
                    </div>

                    <!-- Advanced Scenarios Tab -->
                    <div id="advanced-scenarios" class="tab-pane">
                        <h3>Advanced Scenarios</h3>
                        
                        <!-- Stale Element Demo -->
                        <div class="field">
                            <h4>Stale Element Demo</h4>
                            <p>This section demonstrates handling stale elements in dynamic dropdowns:</p>
                            <button id="refreshSuggestions" class="button small">Refresh Suggestions (Causes Stale Elements)</button>
                            <div id="staleElementDemo">
                                <input type="text" id="staleAutosuggest" placeholder="Type then refresh for stale elements..." autocomplete="off" />
                                <div id="staleSuggestions" class="scroll-container" style="display:none;">
                                    <!-- Suggestions will be dynamically updated -->
                                </div>
                            </div>
                        </div>
                        <br>
                        
                        <!-- Validation Demo -->
                        <div class="field">
                            <h4>Selection Validation</h4>
                            <p>Select an option from any dropdown above and validate your selection:</p>
                            <button id="validateSelection" class="button primary">Validate Current Selection</button>
                            <div class="validation-message" id="validationResult"></div>
                        </div>
                        <br>
                        
                        <!-- Alerts Demo -->
                        <div class="field">
                            <h4>JavaScript Alerts</h4>
                            <button type="button" onclick="alert('This is a simple alert')">Show Alert</button>
                            <button type="button" onclick="if(confirm('Do you confirm?')){alert('Confirmed')}else{alert('Cancelled')}">Show Confirm</button>
                            <button type="button" onclick="var input=prompt('Enter something'); alert('You entered: '+input)">Show Prompt</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instructions -->
            <div class="info">
                <p><strong>Selenium Practice Instructions:</strong></p>
                <ul>
                    <li><strong>Select Dropdowns:</strong> Use <code>Select(driver.find_element(By.ID, "singleSelect"))</code> for single select dropdown.</li>
                    <li><strong>Non-Select Dropdowns:</strong> Type in auto-suggest inputs and select suggestions using keyboard or mouse.</li>
                    <li><strong>Explicit Waits:</strong> Use WebDriverWait to wait for suggestion lists to appear.</li>
                    <li><strong>Keyboard Navigation:</strong> Use <code>send_keys(Keys.ARROW_DOWN)</code> and <code>send_keys(Keys.ENTER)</code> to navigate suggestions.</li>
                    <li><strong>AJAX Handling:</strong> Wait for dynamic content to load after typing.</li>
                    <li><strong>XPath/CSS Strategies:</strong> Practice with complex suggestion lists with attributes.</li>
                    <li><strong>Hidden Elements:</strong> Handle suggestions that are initially hidden or off-screen.</li>
                    <li><strong>Stale Elements:</strong> Handle elements that become stale after DOM updates.</li>
                    <li><strong>Validation:</strong> Verify selected values appear correctly.</li>
                    <li><strong>Alerts:</strong> Handle alerts with <code>driver.switch_to.alert.accept()</code>, <code>.dismiss()</code>, <code>.send_keys()</code>.</li>
                </ul>
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
        <li>&copy; LWS Learn with PSUDO</li><li>Linkedin: <a href="https://www.linkedin.com/in/sudhanshu-sharma/" target="Window">Linkedin</a></li>
    </ul>
</footer>

</div> <!-- #page-wrapper -->

<!-- Scripts -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.scrollex.min.js"></script>
<script src="../assets/js/jquery.scrolly.min.js"></script>
<script src="../assets/js/browser.min.js"></script>
<script src="../assets/js/breakpoints.min.js"></script>
<script src="../assets/js/util.js"></script>
<script src="../assets/js/main.js"></script>

<script>
    // Tab functionality
    document.querySelectorAll('.tab-button').forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons and panes
            document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
            document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('active'));
            
            // Add active class to clicked button and corresponding pane
            button.classList.add('active');
            const tabId = button.getAttribute('data-tab');
            document.getElementById(tabId).classList.add('active');
        });
    });

    // Basic Auto-suggest demo
    const input = document.getElementById('autosuggest');
    const suggestionBox = document.getElementById('suggestions');
    const items = suggestionBox.querySelectorAll('.suggestion-item');

    input.addEventListener('input', function() {
        const val = this.value.toLowerCase();
        let visible = false;
        items.forEach(item => {
            if(item.textContent.toLowerCase().includes(val) && val.length > 0) {
                item.style.display = 'block';
                visible = true;
            } else {
                item.style.display = 'none';
            }
        });
        suggestionBox.style.display = visible ? 'block' : 'none';
    });

    items.forEach(item => {
        item.addEventListener('click', function() {
            input.value = this.textContent;
            suggestionBox.style.display = 'none';
            showValidation('nonSelectValidation', `Selected: ${this.textContent}`, true);
        });
    });

    // AJAX-based Auto-suggest demo
    const ajaxInput = document.getElementById('ajaxAutosuggest');
    const ajaxSuggestionBox = document.getElementById('ajaxSuggestions');
    const allLanguages = ['Python', 'Java', 'JavaScript', 'C#', 'C++', 'Ruby', 'PHP', 'Go', 'Swift', 'Kotlin', 'TypeScript', 'Rust', 'Dart'];

    ajaxInput.addEventListener('input', function() {
        const val = this.value.toLowerCase();
        
        // Simulate AJAX delay
        setTimeout(() => {
            if (val.length > 0) {
                const filtered = allLanguages.filter(lang => 
                    lang.toLowerCase().includes(val)
                );
                
                ajaxSuggestionBox.innerHTML = '';
                filtered.forEach(lang => {
                    const div = document.createElement('div');
                    div.className = 'suggestion-item';
                    div.textContent = lang;
                    div.addEventListener('click', function() {
                        ajaxInput.value = this.textContent;
                        ajaxSuggestionBox.style.display = 'none';
                        showValidation('nonSelectValidation', `Selected via AJAX: ${this.textContent}`, true);
                    });
                    ajaxSuggestionBox.appendChild(div);
                });
                
                ajaxSuggestionBox.style.display = filtered.length > 0 ? 'block' : 'none';
            } else {
                ajaxSuggestionBox.style.display = 'none';
            }
        }, 500); // Simulate network delay
    });

    // Hidden suggestions demo
    const hiddenInput = document.getElementById('hiddenAutosuggest');
    const hiddenSuggestionBox = document.getElementById('hiddenSuggestions');

    hiddenInput.addEventListener('focus', function() {
        hiddenSuggestionBox.classList.remove('hidden-suggestion');
    });

    hiddenInput.addEventListener('blur', function() {
        // Add slight delay to allow click event to register
        setTimeout(() => {
            hiddenSuggestionBox.classList.add('hidden-suggestion');
        }, 200);
    });

    hiddenSuggestionBox.querySelectorAll('.suggestion-item').forEach(item => {
        item.addEventListener('click', function() {
            hiddenInput.value = this.textContent;
            hiddenSuggestionBox.classList.add('hidden-suggestion');
            showValidation('nonSelectValidation', `Selected from hidden: ${this.textContent}`, true);
        });
    });

    // Complex suggestions demo
    const complexInput = document.getElementById('complexAutosuggest');
    const complexSuggestionBox = document.getElementById('complexSuggestions');

    complexInput.addEventListener('input', function() {
        const val = this.value.toLowerCase();
        let visible = false;
        
        complexSuggestionBox.querySelectorAll('.suggestion-item').forEach(item => {
            if(item.textContent.toLowerCase().includes(val) && val.length > 0) {
                item.style.display = 'block';
                visible = true;
            } else {
                item.style.display = 'none';
            }
        });
        complexSuggestionBox.style.display = visible ? 'block' : 'none';
    });

    complexSuggestionBox.querySelectorAll('.suggestion-item').forEach(item => {
        item.addEventListener('click', function() {
            complexInput.value = this.textContent;
            complexSuggestionBox.style.display = 'none';
            showValidation('nonSelectValidation', `Selected from complex: ${this.textContent} (Category: ${this.dataset.category})`, true);
        });
    });

    // Stale element demo
    const staleInput = document.getElementById('staleAutosuggest');
    const staleSuggestionBox = document.getElementById('staleSuggestions');
    const refreshButton = document.getElementById('refreshSuggestions');
    let suggestionVersion = 1;
    
    function populateStaleSuggestions() {
        staleSuggestionBox.innerHTML = '';
        const suggestions = [
            `Python v${suggestionVersion}`,
            `Java v${suggestionVersion}`,
            `JavaScript v${suggestionVersion}`,
            `C# v${suggestionVersion}`,
            `C++ v${suggestionVersion}`
        ];
        
        suggestions.forEach(suggestion => {
            const div = document.createElement('div');
            div.className = 'suggestion-item';
            div.textContent = suggestion;
            div.addEventListener('click', function() {
                staleInput.value = this.textContent;
                staleSuggestionBox.style.display = 'none';
                showValidation('validationResult', `Selected: ${this.textContent} (After refresh)`, true);
            });
            staleSuggestionBox.appendChild(div);
        });
    }
    
    staleInput.addEventListener('input', function() {
        const val = this.value.toLowerCase();
        let visible = false;
        
        staleSuggestionBox.querySelectorAll('.suggestion-item').forEach(item => {
            if(item.textContent.toLowerCase().includes(val) && val.length > 0) {
                item.style.display = 'block';
                visible = true;
            } else {
                item.style.display = 'none';
            }
        });
        staleSuggestionBox.style.display = visible ? 'block' : 'none';
    });
    
    refreshButton.addEventListener('click', function() {
        suggestionVersion++;
        populateStaleSuggestions();
        showValidation('validationResult', `Suggestions refreshed to version ${suggestionVersion}`, true);
    });
    
    // Initialize stale suggestions
    populateStaleSuggestions();

    // Validation function
    function showValidation(elementId, message, isSuccess) {
        const element = document.getElementById(elementId);
        element.textContent = message;
        element.className = `validation-message ${isSuccess ? 'success' : 'error'}`;
        element.style.display = 'block';
        
        // Auto-hide after 3 seconds
        setTimeout(() => {
            element.style.display = 'none';
        }, 3000);
    }

    // Global click handler to close dropdowns when clicking outside
    document.addEventListener('click', function(e){
        if(!suggestionBox.contains(e.target) && e.target !== input){
            suggestionBox.style.display = 'none';
        }
        if(!ajaxSuggestionBox.contains(e.target) && e.target !== ajaxInput){
            ajaxSuggestionBox.style.display = 'none';
        }
        if(!complexSuggestionBox.contains(e.target) && e.target !== complexInput){
            complexSuggestionBox.style.display = 'none';
        }
        if(!staleSuggestionBox.contains(e.target) && e.target !== staleInput){
            staleSuggestionBox.style.display = 'none';
        }
    });

    // Select dropdown change handlers
    document.getElementById('singleSelect').addEventListener('change', function() {
        if(this.value) {
            showValidation('selectValidation', `Selected: ${this.options[this.selectedIndex].text}`, true);
        }
    });

    document.getElementById('multiSelect').addEventListener('change', function() {
        const selected = Array.from(this.selectedOptions).map(opt => opt.text);
        if(selected.length > 0) {
            showValidation('selectValidation', `Selected: ${selected.join(', ')}`, true);
        }
    });

    // Validate selection button
    document.getElementById('validateSelection').addEventListener('click', function() {
        // Check all inputs for values
        const inputs = [
            document.getElementById('autosuggest'),
            document.getElementById('ajaxAutosuggest'),
            document.getElementById('hiddenAutosuggest'),
            document.getElementById('complexAutosuggest'),
            document.getElementById('staleAutosuggest')
        ];
        
        const selects = [
            document.getElementById('singleSelect')
        ];
        
        let foundValue = false;
        
        // Check inputs
        inputs.forEach(input => {
            if(input.value) {
                showValidation('validationResult', `Input value: ${input.value}`, true);
                foundValue = true;
                return;
            }
        });
        
        // Check selects if no input value found
        if(!foundValue) {
            selects.forEach(select => {
                if(select.value) {
                    showValidation('validationResult', `Selected: ${select.options[select.selectedIndex].text}`, true);
                    foundValue = true;
                    return;
                }
            });
        }
        
        if(!foundValue) {
            showValidation('validationResult', 'No selection found. Please select an option first.', false);
        }
    });
</script>
</body>
</html>