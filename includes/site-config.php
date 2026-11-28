<?php
declare(strict_types=1);

/** Shared site identity and metadata defaults. */
const SITE_NAME = 'USA Trademark Expert';
const SITE_THEME_COLOR = '#0B0051';

function site_escape(string|int|float|null $value): string
{
    return htmlspecialchars(
        (string) $value,
        ENT_QUOTES | ENT_SUBSTITUTE,
        'UTF-8',
    );
}

function site_structured_data(): array
{
    return [
        '@context' => 'https://schema.org',
        '@type' => 'LegalService',
        'name' => SITE_NAME,
        'description' => 'Trademark registration, search, monitoring and renewal services.',
        'areaServed' => 'US',
        'priceRange' => '$$',
        'telephone' => '+1-877-646-1464',
    ];
}
