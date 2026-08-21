<?php
// No whitespace before this file

header("Content-Type: application/xml; charset=utf-8");

// Never allow PHP warnings to break XML
ini_set('display_errors', 0);
error_reporting(0);

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

$baseUrl = 'https://examples.learnwithpsudo.com';
$rootDir = realpath(__DIR__);

// Allowed page extensions
$allowedExtensions = ['php', 'html', 'htm'];

// Folders to exclude completely
$excludedFolders = [
    '/includes/',
    '/assets/',
    '/css/',
    '/js/',
    '/delete/',
    '/images/'
];

$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($rootDir, FilesystemIterator::SKIP_DOTS)
);

foreach ($iterator as $file) {

    if (!$file->isFile()) {
        continue;
    }

    $extension = strtolower($file->getExtension());
    if (!in_array($extension, $allowedExtensions)) {
        continue;
    }

    $path = str_replace($rootDir, '', $file->getRealPath());
    $path = str_replace(DIRECTORY_SEPARATOR, '/', $path);

    if ($path[0] !== '/') {
        $path = '/' . $path;
    }

    // Exclude unwanted folders
    foreach ($excludedFolders as $folder) {
        if (strpos($path, $folder) === 0) {
            continue 2;
        }
    }

    // Exclude sitemap itself
    if (stripos($path, 'sitemap') !== false) {
        continue;
    }

    $loc = htmlspecialchars($baseUrl . $path, ENT_XML1);
    $lastmod = date('Y-m-d', $file->getMTime());

    echo "  <url>\n";
    echo "    <loc>$loc</loc>\n";
    echo "    <lastmod>$lastmod</lastmod>\n";
    echo "  </url>\n";
}

echo '</urlset>';
