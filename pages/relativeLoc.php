<!DOCTYPE HTML>
<html>
<head>
    <title>Login - Learn with Psudo | Python, Automation & Selenium Tutorials</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="../images/logo.ico" />
    <link rel="icon" href="../images/logo.ico" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
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
</head>
<body class="landing">
    <div id="page-wrapper">

        <?php include "../includes/generic_header.php"; ?>

        <article id="main">
            <header>
                <h2>Login Page</h2>
                <p>Use this form to log in with your credentials. Default ID & Password is <strong>admin</strong>.</p>
            </header>
            <section class="wrapper style5">
                <div class="inner">

                    <h3>📍 Relative Locators - Selenium 4</h3>
                    <p>This section demonstrates Selenium 4's relative locator methods using real DOM layout examples.</p>

                    <div class="field" style="margin-bottom: 30px;">
                        <label for="emailInput">Email</label>
                        <input type="text" id="emailInput" placeholder="Enter Email" />
                    </div>

                    <div class="field" style="margin-bottom: 30px;">
                        <label for="passwordInput">Password</label>
                        <input type="password" id="passwordInput" placeholder="Enter Password" />
                    </div>

                    <div class="field" style="display: flex; gap: 20px; align-items: center; margin-bottom: 30px;">
                        <label for="siblingLeft">Left Field</label>
                        <input type="text" id="siblingLeft" placeholder="Left of Right Field" />
                        <label for="siblingRight">Right Field</label>
                        <input type="text" id="siblingRight" placeholder="Right of Left Field" />
                    </div>

                    <div class="field" style="display: flex; gap: 10px; align-items: center; margin-bottom: 30px;">
                        <label for="nearRef">Near Field</label>
                        <input type="text" id="nearRef" placeholder="Reference Field" />
                        <button id="btnNear">Click Me</button>
                    </div>
                    <!-- Submit Button Section -->
                    <div class="field">
                        <button id="submitBtn">Submit</button>
                    </div>

                    <!-- Popup Message Div -->
                    <div id="popupMessage">
                        ✅ Form submitted successfully! This message was triggered by the Submit button.
                    </div>
                    <div id="nearMsg">
                        ✅ Clicked on button near the Field.
                    </div>
                </div>
            </section>
        </article>

        <?php include "../includes/generic_footer.php"; ?>
    </div>
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
</body>
</html>
