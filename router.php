<?php
/**
 * SAS Publishers Router
 * Handles routing for HTML to PHP conversion
 */

// Get the requested page
$page = isset($_GET['page']) ? sanitize_filename($_GET['page']) : 'index';

// Define allowed pages
$allowed_pages = [
    'index', 'about-us', 'books', 'conference', 'contact-us', 'copyright', 
    'indexing', 'journals', 'payments', 'submit-manuscript', 'author-login',
    'author-instructions', 'processing-fees', 'publication-ethics', 
    'publication-certificate', 'review-process', 'subscribe-hardcopy'
];

// Verify the page is allowed
if (!in_array($page, $allowed_pages)) {
    $page = 'index';
}

// Determine the file path
if ($page === 'index') {
    $file = __DIR__ . '/index.php';
} else {
    $file = __DIR__ . '/pages/' . $page . '.php';
}

// Check if file exists
if (file_exists($file)) {
    include $file;
} else {
    // Fallback to index
    include __DIR__ . '/index.php';
}

/**
 * Sanitize filename to prevent directory traversal
 */
function sanitize_filename($filename) {
    $filename = basename($filename);
    $filename = str_replace(['.html', '.php', '.'], '', $filename);
    $filename = preg_replace('/[^a-z0-9\-_]/i', '', $filename);
    return $filename;
}
?>
