<?php
/**
 * Copy this pattern when adding a new demo page under /pages.
 * Keep all existing locators on interactive elements.
 */
$lwsBase = '../';
$pageTitle = 'Demo title - Learn with Psudo';
$pageCanonical = 'https://examples.learnwithpsudo.com/pages/your-page.php';
$extraHead = ''; // optional <style> or <script> for this page only
$navMenuExtra = ''; // optional extra <li> items inside #menu

require_once dirname(__DIR__) . '/includes/header.php';
?>
<article id="main">
    <header>
        <h2>Page heading</h2>
        <p>Short practice description</p>
    </header>
    <section class="wrapper style5">
        <div class="inner">
            <!-- Demo markup goes here -->
        </div>
    </section>
</article>
<?php
$extraScripts = ''; // optional page JS; rendered just before </body>
require_once dirname(__DIR__) . '/includes/footer.php';
