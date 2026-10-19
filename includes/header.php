<?php
if (!isset($lwsBase)) {
    $lwsBase = '';
}
// Site-wide page title helper: every <title> renders as "LWS || <Page Name>".
// Strips pre-existing brand tokens so the result is never double-branded.
if (!function_exists('lws_page_title')) {
    function lws_page_title($title, $fallback = 'Learn With Psudo') {
        $t = trim((string) $title);
        // Drop a trailing " - Learn With Psudo <tagline>" / " | Learn With Psudo
        // <tagline>" and a leading "Learn With Psudo | <tagline>" prefix, so titles
        // that embed the brand anywhere collapse down to just the page name.
        $t = preg_replace('/\s*[-|]\s*Learn\s*With\s*Psudo\b.*$/iu', '', $t);
        $t = preg_replace('/^Learn\s*With\s*Psudo\b\s*[|:\-]?\s*/iu', '', $t);
        // Drop leftover short-brand tokens (LWS || / LWS - / | LWS).
        $t = preg_replace('/^\s*LWS\s*(?:\|\||-)\s*/iu', '', $t);
        $t = preg_replace('/\s*(?:\|\||\|)\s*LWS\s*$/iu', '', $t);
        // Trim dangling separators left behind by the removals.
        $t = preg_replace('/^(?:\s*[-|\x{2013}\x{2014}]+\s*)+/u', '', $t);
        $t = preg_replace('/(?:\s*[-|\x{2013}\x{2014}]+\s*)+$/u', '', $t);
        $t = trim($t);
        if ($t === '') {
            $t = $fallback;
        }
        return 'LWS || ' . $t;
    }
}
$pageTitle = $pageTitle ?? 'Learn with Psudo | Python, Automation & Selenium Tutorials (Practice Labs)';
// Normalise to the site-wide "LWS || Page Name" title.
$pageTitle = lws_page_title($pageTitle, 'Practice Labs');
$pageRobots = $pageRobots ?? 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1';
$pageCanonical = $pageCanonical ?? '';
$bodyClass = $bodyClass ?? 'landing is-preload bg-slate-50 text-slate-900 antialiased';
$extraHead = $extraHead ?? '';
$isHome = !empty($isHome);
$homeHref = $homeHref ?? ($lwsBase . 'index.php');
$navMenuExtra = $navMenuExtra ?? '';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="robots" content="<?php echo htmlspecialchars($pageRobots, ENT_QUOTES, 'UTF-8'); ?>" />
    <link rel="shortcut icon" href="<?php echo htmlspecialchars($lwsBase, ENT_QUOTES, 'UTF-8'); ?>images/logo.ico" />
    <link rel="icon" href="<?php echo htmlspecialchars($lwsBase, ENT_QUOTES, 'UTF-8'); ?>images/logo.ico" type="image/x-icon"/>
    <meta name="description" content="Hands-on Selenium practice labs: XPath, CSS selectors, relative locators, frames, windows, mouse and keyboard actions. Open real pages and see the code that drives them." />
    <?php if ($pageCanonical !== ''): ?>
    <link rel="canonical" href="<?php echo htmlspecialchars($pageCanonical, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta property="og:url" content="<?php echo htmlspecialchars($pageCanonical, ENT_QUOTES, 'UTF-8'); ?>" />
    <?php endif; ?>
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Learn With Psudo" />
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta property="og:description" content="Hands-on Selenium practice labs: XPath, CSS selectors, relative locators, frames, windows, mouse and keyboard actions. Open real pages and see the code that drives them." />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta name="twitter:description" content="Hands-on Selenium practice labs: XPath, CSS selectors, relative locators, frames, windows, mouse and keyboard actions." />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            500: '#0284c7',
                            600: '#0284c7',
                            700: '#0369a1',
                            accent: '#7c3aed'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    }
                }
            }
        };
    </script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="stylesheet" href="<?php echo htmlspecialchars($lwsBase, ENT_QUOTES, 'UTF-8'); ?>assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo htmlspecialchars($lwsBase, ENT_QUOTES, 'UTF-8'); ?>assets/css/layout.css" />
    <?php if ($isHome): ?>
    <link rel="stylesheet" href="<?php echo htmlspecialchars($lwsBase, ENT_QUOTES, 'UTF-8'); ?>assets/css/home.css" />
    <?php else: ?>
    <link rel="stylesheet" href="<?php echo htmlspecialchars($lwsBase, ENT_QUOTES, 'UTF-8'); ?>assets/css/pages.css" />
    <?php endif; ?>
    <noscript><link rel="stylesheet" href="<?php echo htmlspecialchars($lwsBase, ENT_QUOTES, 'UTF-8'); ?>assets/css/noscript.css" /></noscript>
    <?php echo $extraHead; ?>
</head>
<body class="<?php echo htmlspecialchars($bodyClass, ENT_QUOTES, 'UTF-8'); ?>">
    <?php require_once dirname(__DIR__, 2) . '/includes/header.php'; ?>
    <div id="page-wrapper">