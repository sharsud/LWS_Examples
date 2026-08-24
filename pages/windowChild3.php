<?php
$lwsBase = '../';
$pageTitle = 'Child Window 3 - Data Display';
$pageCanonical = 'https://examples.learnwithpsudo.com/pages/windowChild3.php';
$navMenuExtra = '<li><a href="windowsDemo.php">Back to Windows Demo</a></li>';


require_once dirname(__DIR__) . '/includes/header.php';
?>
<article id="main">
    <header>
        <h2>Child Window 3 - Data Display</h2>
        <p>Practice data validation and table handling in a child window</p>
    </header>
    <section class="wrapper style5">
        <div class="inner">

            <h3>🪟 Window Information</h3>
            <ul>
                <li><strong>Window Title:</strong> Child Window 3 - Data Display</li>
                <li><strong>Window Name:</strong> ChildWindow3</li>
                <li><strong>Unique ID:</strong> <span id="uniqueId">CW3_</span></li>
                <li><strong>Timestamp:</strong> <span id="timestamp"></span></li>
            </ul>

            <h3>📊 Statistics Table</h3>
            <p>Validate these values using Selenium assertions.</p>
            <table border="1">
                <thead>
                    <tr><th>Metric</th><th>Value</th><th>Element ID</th></tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Total Users</td>
                        <td id="statUsers">1,234</td>
                        <td><code>statUsers</code></td>
                    </tr>
                    <tr>
                        <td>Active Orders</td>
                        <td id="statOrders">567</td>
                        <td><code>statOrders</code></td>
                    </tr>
                    <tr>
                        <td>Revenue</td>
                        <td id="statRevenue">$45,678</td>
                        <td><code>statRevenue</code></td>
                    </tr>
                    <tr>
                        <td>Growth Rate</td>
                        <td id="statGrowth">+23%</td>
                        <td><code>statGrowth</code></td>
                    </tr>
                </tbody>
            </table>

            <h3>📋 Product Data Table</h3>
            <table border="1" id="productTable">
                <thead>
                    <tr><th>ID</th><th>Product</th><th>Category</th><th>Price</th><th>Stock</th></tr>
                </thead>
                <tbody>
                    <tr id="row1">
                        <td id="row1_id">P001</td>
                        <td id="row1_product">Selenium WebDriver</td>
                        <td id="row1_category">Testing</td>
                        <td id="row1_price">$99.99</td>
                        <td id="row1_stock">Available</td>
                    </tr>
                    <tr id="row2">
                        <td id="row2_id">P002</td>
                        <td id="row2_product">Python Course</td>
                        <td id="row2_category">Education</td>
                        <td id="row2_price">$149.99</td>
                        <td id="row2_stock">Available</td>
                    </tr>
                    <tr id="row3">
                        <td id="row3_id">P003</td>
                        <td id="row3_product">Automation Framework</td>
                        <td id="row3_category">Tools</td>
                        <td id="row3_price">$299.99</td>
                        <td id="row3_stock">Limited</td>
                    </tr>
                </tbody>
            </table>
            <p><code>//table[@id='productTable']/tbody/tr[2]/td[2]</code> → selects "Python Course"</p>
            <p><code>//tr[@id='row1']/td[@id='row1_price']</code> → selects "$99.99"</p>

            <h3>🔄 Dynamic Content</h3>
            <div class="field">
                <p><strong>Random Number:</strong> <span id="randomNum"></span></p>
                <p><strong>Session ID:</strong> <span id="sessionId"></span></p>
                <p><strong>Current Time:</strong> <span id="currentTime"></span></p>
                <button type="button" id="refreshBtn" class="button small" onclick="refreshData()">Refresh Data</button>
            </div>

            <h3>🔒 Hidden Data (for validation)</h3>
            <p>These elements are hidden but can be accessed via Selenium.</p>
            <div class="field">
                <span id="hiddenData1" hidden>SECRET_VALUE_123</span>
                <span id="hiddenData2" hidden>HIDDEN_TOKEN_ABC</span>
                <p><code>driver.find_element(By.ID, "hiddenData1").get_attribute("textContent")</code></p>
            </div>

            <div class="field">
                <button type="button" id="closeWindowBtn" class="button" onclick="window.close()">Close Window</button>
            </div>

            <h3>📋 Selenium Code for Validation</h3>
            <p><code># Validate statistics</code></p>
            <p><code>users = driver.find_element(By.ID, "statUsers").text</code></p>
            <p><code>assert users == "1,234"</code></p>
            <p><code></code></p>
            <p><code># Validate table data</code></p>
            <p><code>product = driver.find_element(By.ID, "row1_product").text</code></p>
            <p><code>assert product == "Selenium WebDriver"</code></p>
            <p><code></code></p>
            <p><code># Count table rows</code></p>
            <p><code>rows = driver.find_elements(By.CSS_SELECTOR, "#productTable tbody tr")</code></p>
            <p><code>assert len(rows) == 3</code></p>

        </div>
    </section>
</article>
<?php
$extraScripts = <<<'JS'
<script>
document.getElementById('uniqueId').textContent = 'CW3_' + Date.now();
document.getElementById('timestamp').textContent = new Date().toISOString();
function refreshData() {
    document.getElementById('randomNum').textContent = Math.floor(Math.random() * 10000);
    document.getElementById('sessionId').textContent = 'SES_' + Math.random().toString(36).substring(2, 10);
    document.getElementById('currentTime').textContent = new Date().toLocaleString();
}
refreshData();
</script>
JS;
require_once dirname(__DIR__) . '/includes/footer.php';
