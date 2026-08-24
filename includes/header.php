<?php
if (!isset($lwsBase)) {
    $lwsBase = '';
}
$pageTitle = $pageTitle ?? 'Learn with Psudo | Python, Automation & Selenium Tutorials';
$pageCanonical = $pageCanonical ?? '';
$bodyClass = $bodyClass ?? 'landing is-preload bg-slate-50 text-slate-900 antialiased';
$headerClass = $headerClass ?? 'alt';
$extraHead = $extraHead ?? '';
$isHome = !empty($isHome);
$homeHref = $homeHref ?? ($lwsBase . 'index.php');
$navMenuExtra = $navMenuExtra ?? '';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="<?php echo htmlspecialchars($lwsBase, ENT_QUOTES, 'UTF-8'); ?>images/logo.ico" />
    <link rel="icon" href="<?php echo htmlspecialchars($lwsBase, ENT_QUOTES, 'UTF-8'); ?>images/logo.ico" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo htmlspecialchars($lwsBase, ENT_QUOTES, 'UTF-8'); ?>assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo htmlspecialchars($lwsBase, ENT_QUOTES, 'UTF-8'); ?>assets/css/layout.css" />
    <?php if ($isHome): ?>
    <link rel="stylesheet" href="<?php echo htmlspecialchars($lwsBase, ENT_QUOTES, 'UTF-8'); ?>assets/css/home.css" />
    <?php else: ?>
    <link rel="stylesheet" href="<?php echo htmlspecialchars($lwsBase, ENT_QUOTES, 'UTF-8'); ?>assets/css/pages.css" />
    <?php endif; ?>
    <noscript><link rel="stylesheet" href="<?php echo htmlspecialchars($lwsBase, ENT_QUOTES, 'UTF-8'); ?>assets/css/noscript.css" /></noscript>
    <?php if ($pageCanonical !== ''): ?>
    <link rel="canonical" href="<?php echo htmlspecialchars($pageCanonical, ENT_QUOTES, 'UTF-8'); ?>" />
    <?php endif; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ["Inter", "ui-sans-serif", "system-ui", "sans-serif"]
                    }
                }
            }
        };
    </script>
    <?php echo $extraHead; ?>
</head>
<body class="<?php echo htmlspecialchars($bodyClass, ENT_QUOTES, 'UTF-8'); ?>">
    <div id="page-wrapper">
        <header id="header" class="<?php echo htmlspecialchars($headerClass, ENT_QUOTES, 'UTF-8'); ?>">
            <h1>
                <a href="<?php echo htmlspecialchars($homeHref, ENT_QUOTES, 'UTF-8'); ?>" class="group lws-brand-link">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-sky-500 via-indigo-500 to-purple-600 p-0.5 shadow-sm group-hover:scale-105 transition transform">
                        <div class="w-full h-full bg-white rounded-[10px] flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="w-6 h-6 text-sky-600">
                                <g fill="currentColor" fill-rule="evenodd">
                                    <path d="M 35.00 21.00 L 34.00 22.00 L 34.00 23.00 L 41.00 23.00 L 42.00 24.00 L 44.00 24.00 L 48.00 28.00 L 48.00 29.00 L 49.00 30.00 L 49.00 171.00 L 45.00 175.00 L 44.00 175.00 L 43.00 176.00 L 35.00 176.00 L 34.00 177.00 L 34.00 178.00 L 151.00 178.00 L 151.00 175.00 L 152.00 174.00 L 152.00 172.00 L 153.00 171.00 L 153.00 167.00 L 154.00 166.00 L 154.00 163.00 L 155.00 162.00 L 155.00 159.00 L 156.00 158.00 L 156.00 155.00 L 157.00 154.00 L 157.00 151.00 L 158.00 150.00 L 158.00 147.00 L 159.00 146.00 L 159.00 143.00 L 160.00 142.00 L 160.00 139.00 L 161.00 138.00 L 161.00 135.00 L 162.00 134.00 L 162.00 131.00 L 163.00 130.00 L 163.00 127.00 L 164.00 126.00 L 164.00 123.00 L 165.00 122.00 L 165.00 117.00 L 164.00 117.00 L 164.00 118.00 L 163.00 119.00 L 163.00 121.00 L 162.00 122.00 L 162.00 124.00 L 161.00 125.00 L 161.00 127.00 L 160.00 128.00 L 160.00 130.00 L 158.00 133.00 L 158.00 135.00 L 157.00 136.00 L 157.00 137.00 L 156.00 138.00 L 156.00 139.00 L 155.00 140.00 L 155.00 141.00 L 154.00 142.00 L 154.00 143.00 L 153.00 144.00 L 152.00 147.00 L 150.00 149.00 L 149.00 152.00 L 146.00 155.00 L 146.00 156.00 L 136.00 166.00 L 135.00 166.00 L 130.00 170.00 L 129.00 170.00 L 126.00 172.00 L 124.00 172.00 L 121.00 174.00 L 119.00 174.00 L 118.00 175.00 L 114.00 175.00 L 113.00 176.00 L 83.00 176.00 L 82.00 175.00 L 79.00 175.00 L 78.00 174.00 L 77.00 174.00 L 73.00 170.00 L 73.00 167.00 L 72.00 166.00 L 72.00 33.00 L 73.00 32.00 L 73.00 29.00 L 74.00 28.00 L 74.00 27.00 L 76.00 25.00 L 77.00 25.00 L 78.00 24.00 L 80.00 24.00 L 81.00 23.00 L 87.00 23.00 L 87.00 21.00 Z"></path>
                                    <path d="M 84.00 69.00 L 84.00 98.00 L 87.00 101.00 L 88.00 101.00 L 90.00 103.00 L 91.00 103.00 L 94.00 106.00 L 95.00 106.00 L 97.00 108.00 L 98.00 108.00 L 100.00 110.00 L 101.00 110.00 L 104.00 113.00 L 105.00 113.00 L 108.00 116.00 L 109.00 116.00 L 112.00 119.00 L 113.00 119.00 L 127.00 133.00 L 127.00 134.00 L 129.00 136.00 L 129.00 137.00 L 131.00 140.00 L 131.00 142.00 L 132.00 143.00 L 132.00 153.00 L 137.00 148.00 L 137.00 147.00 L 141.00 142.00 L 141.00 141.00 L 142.00 140.00 L 142.00 139.00 L 143.00 138.00 L 143.00 137.00 L 144.00 136.00 L 144.00 135.00 L 147.00 130.00 L 147.00 128.00 L 148.00 127.00 L 149.00 124.00 L 147.00 122.00 L 146.00 119.00 L 143.00 116.00 L 143.00 115.00 L 135.00 107.00 L 134.00 107.00 L 130.00 103.00 L 129.00 103.00 L 127.00 101.00 L 126.00 101.00 L 123.00 98.00 L 122.00 98.00 L 120.00 96.00 L 119.00 96.00 L 117.00 94.00 L 116.00 94.00 L 114.00 92.00 L 113.00 92.00 L 111.00 90.00 L 110.00 90.00 L 108.00 88.00 L 107.00 88.00 L 105.00 86.00 L 104.00 86.00 L 102.00 84.00 L 101.00 84.00 L 98.00 81.00 L 97.00 81.00 L 92.00 76.00 L 91.00 76.00 L 86.00 71.00 L 86.00 70.00 L 85.00 69.00 Z"></path>
                                    <path d="M 100.00 22.00 L 99.00 23.00 L 99.00 25.00 L 100.00 26.00 L 109.00 26.00 L 110.00 27.00 L 113.00 27.00 L 114.00 28.00 L 116.00 28.00 L 117.00 29.00 L 120.00 30.00 L 122.00 32.00 L 123.00 32.00 L 126.00 35.00 L 127.00 35.00 L 131.00 39.00 L 131.00 40.00 L 134.00 43.00 L 134.00 44.00 L 136.00 46.00 L 136.00 47.00 L 138.00 50.00 L 138.00 52.00 L 140.00 55.00 L 140.00 58.00 L 141.00 59.00 L 141.00 63.00 L 142.00 64.00 L 142.00 72.00 L 143.00 73.00 L 144.00 73.00 L 144.00 24.00 L 143.00 24.00 L 142.00 25.00 L 142.00 29.00 L 139.00 32.00 L 130.00 32.00 L 129.00 31.00 L 128.00 31.00 L 127.00 30.00 L 126.00 30.00 L 125.00 29.00 L 124.00 29.00 L 123.00 28.00 L 122.00 28.00 L 117.00 25.00 L 115.00 25.00 L 114.00 24.00 L 112.00 24.00 L 111.00 23.00 L 107.00 23.00 L 106.00 22.00 Z"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <span class="lws-brand-copy">
                        <span class="lws-brand-name">Learn With Psudo</span>
                        <span class="lws-brand-tag">Automation sandbox</span>
                    </span>
                </a>
            </h1>
            <nav id="nav">
                <ul>
					<li><a href="https://www.learnwithpsudo.com/?i=1" class="menu" target="_blank"><span>Main Site</span></a></li>
					<li><a href="https://www.about.learnwithpsudo.com/?i=1" class="menu" target="_blank"><span>About Me</span></a></li>
					<li><a href="<?php echo htmlspecialchars($homeHref, ENT_QUOTES, 'UTF-8'); ?>" class="menu"><span>Home</span></a></li>
					
                    <!--<li class="special">
                        <a href="#menu" class="menuToggle"><span>home</span></a>
						
                        <div id="menu">
                            <ul>
                                <li><a href="<?php echo htmlspecialchars($homeHref, ENT_QUOTES, 'UTF-8'); ?>">Topics</a></li>
                                <?php echo $navMenuExtra; ?>
                                <li><a href="https://www.learnwithpsudo.com/" target="_blank" rel="noopener noreferrer">Back to Mainpage</a></li>
                            </ul>
                        </div>
                    </li> -->
                </ul>
            </nav>
        </header>
		<!-- floating menu -->
		<a href="https://www.learnwithpsudo.com/" 
           target="_blank" 
           rel="noopener noreferrer" 
           class="fixed bottom-[50px] right-6 z-50 flex items-center gap-3 px-4 py-2.5 rounded-full bg-gradient-to-r from-sky-500 via-indigo-500 to-purple-600 text-white font-medium shadow-lg hover:shadow-indigo-500/30 hover:scale-105 active:scale-95 transition-all duration-300 ease-out group border border-white/20">
            <div class="w-7 h-7 rounded-lg bg-white flex items-center justify-center p-0.5 shadow-inner group-hover:rotate-12 transition-transform duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="w-5 h-5 text-sky-600">
                    <g fill="currentColor" fill-rule="evenodd">
                        <path d="M 35.00 21.00 L 34.00 22.00 L 34.00 23.00 L 41.00 23.00 L 42.00 24.00 L 44.00 24.00 L 48.00 28.00 L 48.00 29.00 L 49.00 30.00 L 49.00 171.00 L 45.00 175.00 L 44.00 175.00 L 43.00 176.00 L 35.00 176.00 L 34.00 177.00 L 34.00 178.00 L 151.00 178.00 L 151.00 175.00 L 152.00 174.00 L 152.00 172.00 L 153.00 171.00 L 153.00 167.00 L 154.00 166.00 L 154.00 163.00 L 155.00 162.00 L 155.00 159.00 L 156.00 158.00 L 156.00 155.00 L 157.00 154.00 L 157.00 151.00 L 158.00 150.00 L 158.00 147.00 L 159.00 146.00 L 159.00 143.00 L 160.00 142.00 L 160.00 139.00 L 161.00 138.00 L 161.00 135.00 L 162.00 134.00 L 162.00 131.00 L 163.00 130.00 L 163.00 127.00 L 164.00 126.00 L 164.00 123.00 L 165.00 122.00 L 165.00 117.00 L 164.00 117.00 L 164.00 118.00 L 163.00 119.00 L 163.00 121.00 L 162.00 122.00 L 162.00 124.00 L 161.00 125.00 L 161.00 127.00 L 160.00 128.00 L 160.00 130.00 L 158.00 133.00 L 158.00 135.00 L 157.00 136.00 L 157.00 137.00 L 156.00 138.00 L 156.00 139.00 L 155.00 140.00 L 155.00 141.00 L 154.00 142.00 L 154.00 143.00 L 153.00 144.00 L 152.00 147.00 L 150.00 149.00 L 149.00 152.00 L 146.00 155.00 L 146.00 156.00 L 136.00 166.00 L 135.00 166.00 L 130.00 170.00 L 129.00 170.00 L 126.00 172.00 L 124.00 172.00 L 121.00 174.00 L 119.00 174.00 L 118.00 175.00 L 114.00 175.00 L 113.00 176.00 L 83.00 176.00 L 82.00 175.00 L 79.00 175.00 L 78.00 174.00 L 77.00 174.00 L 73.00 170.00 L 73.00 167.00 L 72.00 166.00 L 72.00 33.00 L 73.00 32.00 L 73.00 29.00 L 74.00 28.00 L 74.00 27.00 L 76.00 25.00 L 77.00 25.00 L 78.00 24.00 L 80.00 24.00 L 81.00 23.00 L 87.00 23.00 L 87.00 21.00 Z"></path>
                        <path d="M 84.00 69.00 L 84.00 98.00 L 87.00 101.00 L 88.00 101.00 L 90.00 103.00 L 91.00 103.00 L 94.00 106.00 L 95.00 106.00 L 97.00 108.00 L 98.00 108.00 L 100.00 110.00 L 101.00 110.00 L 104.00 113.00 L 105.00 113.00 L 108.00 116.00 L 109.00 116.00 L 112.00 119.00 L 113.00 119.00 L 127.00 133.00 L 127.00 134.00 L 129.00 136.00 L 129.00 137.00 L 131.00 140.00 L 131.00 142.00 L 132.00 143.00 L 132.00 153.00 L 137.00 148.00 L 137.00 147.00 L 141.00 142.00 L 141.00 141.00 L 142.00 140.00 L 142.00 139.00 L 143.00 138.00 L 143.00 137.00 L 144.00 136.00 L 144.00 135.00 L 147.00 130.00 L 147.00 128.00 L 148.00 127.00 L 149.00 124.00 L 147.00 122.00 L 146.00 119.00 L 143.00 116.00 L 143.00 115.00 L 135.00 107.00 L 134.00 107.00 L 130.00 103.00 L 129.00 103.00 L 127.00 101.00 L 126.00 101.00 L 123.00 98.00 L 122.00 98.00 L 120.00 96.00 L 119.00 96.00 L 117.00 94.00 L 116.00 94.00 L 114.00 92.00 L 113.00 92.00 L 111.00 90.00 L 110.00 90.00 L 108.00 88.00 L 107.00 88.00 L 105.00 86.00 L 104.00 86.00 L 102.00 84.00 L 101.00 84.00 L 98.00 81.00 L 97.00 81.00 L 92.00 76.00 L 91.00 76.00 L 86.00 71.00 L 86.00 70.00 L 85.00 69.00 Z"></path>
                        <path d="M 100.00 22.00 L 99.00 23.00 L 99.00 25.00 L 100.00 26.00 L 109.00 26.00 L 110.00 27.00 L 113.00 27.00 L 114.00 28.00 L 116.00 28.00 L 117.00 29.00 L 120.00 30.00 L 122.00 32.00 L 123.00 32.00 L 126.00 35.00 L 127.00 35.00 L 131.00 39.00 L 131.00 40.00 L 134.00 43.00 L 134.00 44.00 L 136.00 46.00 L 136.00 47.00 L 138.00 50.00 L 138.00 52.00 L 140.00 55.00 L 140.00 58.00 L 141.00 59.00 L 141.00 63.00 L 142.00 64.00 L 142.00 72.00 L 143.00 73.00 L 144.00 73.00 L 144.00 24.00 L 143.00 24.00 L 142.00 25.00 L 142.00 29.00 L 139.00 32.00 L 130.00 32.00 L 129.00 31.00 L 128.00 31.00 L 127.00 30.00 L 126.00 30.00 L 125.00 29.00 L 124.00 29.00 L 123.00 28.00 L 122.00 28.00 L 117.00 25.00 L 115.00 25.00 L 114.00 24.00 L 112.00 24.00 L 111.00 23.00 L 107.00 23.00 L 106.00 22.00 Z"></path>
                    </g>
                </svg>
            </div>
            <span class="tracking-wide text-sm drop-shadow-sm">Main Site</span>
        </a>
