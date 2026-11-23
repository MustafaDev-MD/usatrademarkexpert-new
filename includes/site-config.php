<?php
/** Shared defaults and page metadata for the site layout. */
if (!isset($pageTitle)) {
    $pageTitle = 'USA Trademark Expert';
}

if (!isset($pageDescription)) {
    $pageDescription = 'Attorney-backed trademark registration, search, monitoring, and renewal services.';
}

if (!isset($pageCanonical)) {
    $pageCanonical = '/' . basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
}

if (!isset($pageName)) {
    $pageName = pathinfo($_SERVER['SCRIPT_NAME'] ?? 'index.php', PATHINFO_FILENAME);
}

if (!isset($pageStructuredData)) {
    $pageStructuredData = [
        '@context' => 'https://schema.org',
        '@type' => 'LegalService',
        'name' => 'USA Trademark Expert',
        'description' => 'Trademark registration, search, monitoring and renewal services.',
        'areaServed' => 'US',
        'priceRange' => '$$',
        'telephone' => '+1-877-646-1464',
    ];
}

function siteEscape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
