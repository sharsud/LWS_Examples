</div><!-- /#page-wrapper -->

    <?php require_once dirname(__DIR__, 2) . '/includes/footer.php'; ?>

    <script src="<?php echo htmlspecialchars($lwsBase ?? '', ENT_QUOTES, 'UTF-8'); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo htmlspecialchars($lwsBase ?? '', ENT_QUOTES, 'UTF-8'); ?>assets/js/jquery.scrollex.min.js"></script>
    <script src="<?php echo htmlspecialchars($lwsBase ?? '', ENT_QUOTES, 'UTF-8'); ?>assets/js/jquery.scrolly.min.js"></script>
    <script src="<?php echo htmlspecialchars($lwsBase ?? '', ENT_QUOTES, 'UTF-8'); ?>assets/js/browser.min.js"></script>
    <script src="<?php echo htmlspecialchars($lwsBase ?? '', ENT_QUOTES, 'UTF-8'); ?>assets/js/breakpoints.min.js"></script>
    <script src="<?php echo htmlspecialchars($lwsBase ?? '', ENT_QUOTES, 'UTF-8'); ?>assets/js/util.js"></script>
    <script src="<?php echo htmlspecialchars($lwsBase ?? '', ENT_QUOTES, 'UTF-8'); ?>assets/js/main.js"></script>
<?php if (!empty($extraScripts)) echo $extraScripts; ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (window.lucide) { lucide.createIcons(); }
            if (typeof window.openTalkToPsudo !== 'function') {
                window.openTalkToPsudo = function () { window.open('https://t.me/learnwithpsudo', '_blank', 'noopener'); };
            }
        });
    </script>
</body>
</html>