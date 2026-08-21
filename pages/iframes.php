<!DOCTYPE HTML>
<html>
<head>
    <title>iFrames & Frames Demo - Learn with Psudo</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="../images/logo.ico" />
    <link rel="icon" href="../images/logo.ico" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
         <link rel="canonical" href="https://examples.learnwithpsudo.com/pages/iframes.php" />
    <style>
        .frame-demo {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 4px;
            padding: 2em;
            margin: 2em 0;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .frame-container {
            background: rgba(0, 0, 0, 0.2);
            border-radius: 4px;
            padding: 1.5em;
            margin: 1.5em 0;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .frame-header {
            border-bottom: 2px solid #2e5c87;
            padding-bottom: 1em;
            margin-bottom: 1em;
        }
        
        .frame-info {
            background: rgba(46, 92, 135, 0.2);
            padding: 1em;
            border-radius: 4px;
            margin: 1em 0;
            border-left: 4px solid #2e5c87;
        }
        
        .iframe-wrapper {
            position: relative;
            margin: 1em 0;
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 4px;
            overflow: hidden;
        }
        
        .nested-frame {
            height: 500px;
            width: 100%;
        }
        
        .simple-frame {
            height: 250px;
            width: 100%;
        }
        
        .small-frame {
            height: 200px;
            width: 100%;
        }
        
        .frame-badge {
            background: #2e5c87;
            color: white;
            padding: 0.3em 0.8em;
            border-radius: 3px;
            font-size: 0.8em;
            display: inline-block;
            margin-right: 0.5em;
        }
        
        .frame-hierarchy {
            background: rgba(0, 0, 0, 0.3);
            padding: 1em;
            border-radius: 4px;
            margin: 1em 0;
        }
        
        .hierarchy-level {
            padding: 0.5em;
            margin: 0.5em 0;
            border-radius: 4px;
            border-left: 4px solid;
        }
        
        .level-1 { 
            background: rgba(255, 193, 7, 0.1); 
            border-left-color: #ffc107; 
        }
        .level-2 { 
            background: rgba(23, 162, 184, 0.1); 
            border-left-color: #17a2b8; 
            margin-left: 2em;
        }
        .level-3 { 
            background: rgba(220, 53, 69, 0.1); 
            border-left-color: #dc3545; 
            margin-left: 4em;
        }
        
        .code-snippet {
            background: rgba(0, 0, 0, 0.3);
            padding: 1em;
            border-radius: 4px;
            font-family: 'Courier New', monospace;
            font-size: 0.9em;
            margin: 1em 0;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .demo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2em;
            margin: 2em 0;
        }
        
        .frame-controls {
            display: flex;
            gap: 1em;
            margin: 1em 0;
            flex-wrap: wrap;
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
        <h2>iFrames & Nested Frames Demo</h2>
        <p>Master frame handling in Selenium with interactive examples</p>
    </header>

    <section class="wrapper style5">
        <div class="inner">

            <!-- Section 1: Simple iFrames -->
            <div class="frame-demo">
                <div class="frame-header">
                    <h3><i class="fas fa-window-restore"></i> Simple iFrames</h3>
                    <p>Learn different strategies to locate and switch to frames</p>
                </div>

                <div class="demo-grid">
                    <!-- Frame with ID -->
                    <div class="frame-container">
                        <h4><span class="frame-badge">ID</span>Frame with Unique Identifier</h4>
                        <div class="frame-info">
                            <strong>Locator Strategy:</strong> <code>By.ID("mainFrame")</code><br>
                            <strong>Best for:</strong> Stable, uniquely identified frames
                        </div>
                        <div class="iframe-wrapper">
                            <iframe id="mainFrame" class="simple-frame" srcdoc='
                                <html style="background: #1a1a1a; color: white; font-family: Arial, sans-serif;">
                                    <body style="margin: 0; padding: 2em;">
                                        <h4 style="color: #ffc107; border-bottom: 2px solid #ffc107; padding-bottom: 1em;">🆔 Frame with ID</h4>
                                        <input type="text" id="username" placeholder="Enter username" style="width: 100%; padding: 0.75em; margin: 1em 0; border: 1px solid #444; background: #2a2a2a; color: white; border-radius: 3px;">
                                        <button onclick="document.getElementById(&quot;result&quot;).innerHTML=&quot;✅ Welcome &quot; + document.getElementById(&quot;username&quot;).value" style="background: #2e5c87; color: white; border: none; padding: 0.75em 1.5em; border-radius: 3px; cursor: pointer; margin: 0.5em 0;">Login</button>
                                        <div id="result" style="margin-top: 1em; padding: 1em; background: rgba(46, 92, 135, 0.3); border-radius: 3px;"></div>
                                    </body>
                                </html>
                            '></iframe>
                        </div>
                    </div>

                    <!-- Frame with Name -->
                    <div class="frame-container">
                        <h4><span class="frame-badge">NAME</span>Named Frame</h4>
                        <div class="frame-info">
                            <strong>Locator Strategy:</strong> <code>By.NAME("sidebarFrame")</code><br>
                            <strong>Best for:</strong> Frames with semantic naming
                        </div>
                        <div class="iframe-wrapper">
                            <iframe name="sidebarFrame" class="simple-frame" srcdoc='
                                <html style="background: #1a1a1a; color: white; font-family: Arial, sans-serif;">
                                    <body style="margin: 0; padding: 2em;">
                                        <h4 style="color: #17a2b8; border-bottom: 2px solid #17a2b8; padding-bottom: 1em;">📛 Named Frame</h4>
                                        <select id="theme" style="width: 100%; padding: 0.75em; margin: 1em 0; background: #2a2a2a; color: white; border: 1px solid #444; border-radius: 3px;">
                                            <option value="">Select Theme</option>
                                            <option value="dark">Dark Theme</option>
                                            <option value="light">Light Theme</option>
                                        </select>
                                        <br>
                                        <a href="#" onclick="alert(&quot;🔗 Navigation link clicked!&quot;)" style="color: #ffc107; text-decoration: none; display: block; margin: 1em 0; padding: 0.5em; background: rgba(255, 193, 7, 0.1); border-radius: 3px;">📎 Navigation Link</a>
                                    </body>
                                </html>
                            '></iframe>
                        </div>
                    </div>
                </div>

                <!-- Index-based Frame -->
                <div class="frame-container">
                    <h4><span class="frame-badge">INDEX</span>Index-based Frame Access</h4>
                    <div class="frame-info">
                        <strong>Locator Strategy:</strong> <code>driver.switch_to.frame(2)</code><br>
                        <strong>Best for:</strong> Frames without ID/Name (use cautiously)
                    </div>
                    <div class="iframe-wrapper">
                        <iframe class="simple-frame" srcdoc='
                            <html style="background: #1a1a1a; color: white; font-family: Arial, sans-serif;">
                                <body style="margin: 0; padding: 2em;">
                                    <h4 style="color: #dc3545; border-bottom: 2px solid #dc3545; padding-bottom: 1em;">#️⃣ Frame by Index</h4>
                                    <form>
                                        <label style="display: block; margin: 1em 0; color: #ccc;">
                                            <input type="checkbox" name="preferences" value="news" style="margin-right: 0.5em;"> 📰 News Updates
                                        </label>
                                        <label style="display: block; margin: 1em 0; color: #ccc;">
                                            <input type="radio" name="frameRadio" value="1" style="margin-right: 0.5em;"> 📻 Radio 1
                                        </label>
                                        <label style="display: block; margin: 1em 0; color: #ccc;">
                                            <input type="radio" name="frameRadio" value="2" style="margin-right: 0.5em;"> 📻 Radio 2
                                        </label>
                                    </form>
                                </body>
                            </html>
                        '></iframe>
                    </div>
                </div>
            </div>

            <!-- Section 2: Nested Frames -->
			<div class="frame-demo">
				<h3>Nested Frames - Multiple Levels</h3>
				
				<div class="frame-container">
					<h4>Parent Frame → Child Frame → Grandchild Frame</h4>
					<div class="frame-info">
						<strong>Structure:</strong> 3-level nested frame hierarchy<br>
						<strong>Navigation:</strong> Switch sequentially through levels
					</div>
					
					<div class="frame-hierarchy">
						<div class="hierarchy-level level-1">
							<strong>Level 1:</strong> Parent Frame (ID: "parentFrame")
						</div>
						<div class="hierarchy-level level-2">
							<strong>Level 2:</strong> Child Frame (ID: "childFrame")
						</div>
						<div class="hierarchy-level level-3">
							<strong>Level 3:</strong> Grandchild Frame (Index: 0)
						</div>
					</div>
					
					<div class="iframe-wrapper">
						<iframe id="parentFrame" class="nested-frame" src="parent-frame.html"></iframe>
					</div>
				</div>
			</div>

            <!-- Section 3: Real-world Use Cases -->
            <div class="frame-demo">
                <h3>Real-world iFrame Use Cases</h3>
                
                <div class="demo-grid">
                    <div class="frame-container">
                        <h4>Embedded Contact Form</h4>
                        <div class="frame-info">
                            <strong>Simulates:</strong> Embedded forms like Contact forms, Payment forms<br>
                            <strong>Common in:</strong> CRM systems, E-commerce sites
                        </div>
                        <div class="iframe-wrapper">
                            <iframe id="contactFormFrame" class="small-frame" srcdoc="
                                <html style='background: #1a1a1a; color: white; font-family: Arial, sans-serif;'>
                                    <body style='margin: 0; padding: 1.5em;'>
                                        <h5 style='color: #ffc107; border-bottom: 1px solid #ffc107; padding-bottom: 0.5em;'>📝 Contact Form</h5>
                                        <form>
                                            <input type='text' id='name' placeholder='Name' style='width: 100%; padding: 0.5em; margin: 0.25em 0; border: 1px solid #444; background: #2a2a2a; color: white; border-radius: 3px;'><br>
                                            <input type='email' id='email' placeholder='Email' style='width: 100%; padding: 0.5em; margin: 0.25em 0; border: 1px solid #444; background: #2a2a2a; color: white; border-radius: 3px;'><br>
                                            <textarea id='message' placeholder='Message' style='width: 100%; height: 60px; padding: 0.5em; margin: 0.25em 0; border: 1px solid #444; background: #2a2a2a; color: white; border-radius: 3px;'></textarea><br>
                                            <button type='button' onclick='alert(&quot;✅ Form submitted successfully!&quot;)' style='background: #2e5c87; color: white; border: none; padding: 0.75em 1.5em; border-radius: 3px; cursor: pointer;'>Submit</button>
                                        </form>
                                    </body>
                                </html>
                            "></iframe>
                        </div>
                    </div>

                    <div class="frame-container">
                        <h4>Embedded Map Widget</h4>
                        <div class="frame-info">
                            <strong>Simulates:</strong> Embedded maps, charts, third-party widgets<br>
                            <strong>Common in:</strong> Location services, Analytics dashboards
                        </div>
                        <div class="iframe-wrapper">
                            <iframe id="mapWidgetFrame" class="small-frame" srcdoc="
                                <html style='background: #1a1a1a; color: white; font-family: Arial, sans-serif;'>
                                    <body style='margin: 0; padding: 1em;'>
                                        <h5 style='color: #17a2b8; border-bottom: 1px solid #17a2b8; padding-bottom: 0.5em;'>🗺️ Map Widget</h5>
                                        <div style='background: #2a2a2a; padding: 1em; border: 1px solid #444; border-radius: 3px;'>
                                            <input type='text' id='searchLocation' placeholder='Search location...' style='width: 70%; padding: 0.5em; border: 1px solid #444; background: #1a1a1a; color: white; border-radius: 3px;'>
                                            <button style='background: #17a2b8; color: white; border: none; padding: 0.5em 1em; border-radius: 3px; cursor: pointer;'>Search</button>
                                            <p style='font-size: 0.8em; margin: 0.5em 0; color: #ccc;'>Simulated map area</p>
                                            <div style='background: #333; height: 60px; text-align: center; line-height: 60px; border-radius: 3px; color: #ccc;'>🗺️ Map View</div>
                                        </div>
                                    </body>
                                </html>
                            "></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 4: Dynamic iFrames -->
            <div class="frame-demo">
                <h3>Dynamic iFrames</h3>
                <p>Frames loaded dynamically after user interaction</p>
                
                <div class="frame-controls">
                    <button onclick="loadDynamicFrame()" class="button primary">Load Dynamic iFrame</button>
                    <button onclick="removeDynamicFrame()" class="button">Remove Dynamic iFrame</button>
                </div>
                
                <div id="dynamicFrameContainer" style="margin-top: 1em;"></div>
            </div>

            <!-- Instructions -->
            <div class="box">
                <h3>Selenium Practice Instructions</h3>
                <div class="row">
                    <div class="col-6 col-12-medium">
                        <h4>Frame Locating Strategies</h4>
                        <ul>
                            <li><strong>By ID:</strong> <code>driver.switch_to.frame("mainFrame")</code></li>
                            <li><strong>By Name:</strong> <code>driver.switch_to.frame("sidebarFrame")</code></li>
                            <li><strong>By Index:</strong> <code>driver.switch_to.frame(2)</code></li>
                            <li><strong>By WebElement:</strong> <code>driver.switch_to.frame(frame_element)</code></li>
                        </ul>
                    </div>
                    <div class="col-6 col-12-medium">
                        <h4>Navigation Methods</h4>
                        <ul>
                            <li><strong>Switch to Frame:</strong> <code>switch_to.frame()</code></li>
                            <li><strong>Return to Main:</strong> <code>switch_to.default_content()</code></li>
                            <li><strong>Parent Frame:</strong> <code>switch_to.parent_frame()</code></li>
                            <li><strong>Explicit Waits:</strong> Use with <code>EC.frame_to_be_available_and_switch_to_it()</code></li>
                        </ul>
                    </div>
                </div>
                
                <h4>Code Examples</h4>
                <div class="code-snippet">
                    # Switch to nested frames<br>
                    driver.switch_to.frame("parentFrame")<br>
                    driver.switch_to.frame("childFrame")<br>
                    # Interact with elements...<br>
                    # Return to main content<br>
                    driver.switch_to.default_content()
                </div>
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

</div>

<!-- Scripts -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.scrollex.min.js"></script>
<script src="../assets/js/jquery.scrolly.min.js"></script>
<script src="../assets/js/browser.min.js"></script>
<script src="../assets/js/breakpoints.min.js"></script>
<script src="../assets/js/util.js"></script>
<script src="../assets/js/main.js"></script>

<script>
    function loadDynamicFrame() {
        const container = document.getElementById('dynamicFrameContainer');
        container.innerHTML = `
            <div class="frame-container">
                <h4><span class="frame-badge">DYNAMIC</span>Dynamically Loaded iFrame</h4>
                <div class="frame-info">
                    <strong>ID:</strong> "dynamicFrame" - Loaded after button click<br>
                    <strong>Use Case:</strong> Simulates AJAX-loaded content
                </div>
                <div class="iframe-wrapper">
                    <iframe id="dynamicFrame" class="simple-frame" srcdoc="
                        <html style='background: #1a1a1a; color: white; font-family: Arial, sans-serif;'>
                            <body style='margin: 0; padding: 2em;'>
                                <h4 style='color: #28a745; border-bottom: 2px solid #28a745; padding-bottom: 1em;'>⚡ Dynamic Frame Content</h4>
                                <p style='color: #ccc;'>This frame was loaded dynamically after user interaction</p>
                                <input type='number' id='dynamicNumber' placeholder='Enter number...' style='width: 100%; padding: 0.75em; margin: 1em 0; border: 1px solid #444; background: #2a2a2a; color: white; border-radius: 3px;'>
                                <button onclick='document.getElementById(&quot;dynamicOutput&quot;).innerText=&quot;✅ Dynamic button worked!&quot;' style='background: #28a745; color: white; border: none; padding: 0.75em 1.5em; border-radius: 3px; cursor: pointer; margin: 0.5em 0;'>Dynamic Button</button>
                                <p id='dynamicOutput' style='color: #ccc;'></p>
                            </body>
                        </html>
                    "></iframe>
                </div>
            </div>
        `;
    }
    
    function removeDynamicFrame() {
        const container = document.getElementById('dynamicFrameContainer');
        container.innerHTML = '<p style="color: #ccc; text-align: center;">Dynamic frame removed. Click "Load Dynamic iFrame" to load again.</p>';
    }
</script>
</body>
</html>