<?php
require_once __DIR__ . '/site-config.php';
$activePage = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
?>
<body data-page="<?= site_escape($pageName) ?>">
    <div class="d-none d-lg-block" style="background:var(--ms-navy);color:#c9d7ee;font-size:.85rem;">
        <div class="container d-flex justify-content-between align-items-center py-2">
            <div class="d-flex align-items-center gap-3">
                <span class="d-inline-flex align-items-center gap-2">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M12 3l7 3v5c0 4.5-3 8.3-7 10-4-1.7-7-5.5-7-10V6l7-3z"/>
                        <path d="M9 12l2 2 4-4"/>
                    </svg>
                    Attorney-backed filings
                </span>
                <span class="opacity-50">
                    |
                </span>
                <span class="d-inline-flex align-items-center gap-2">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M12 3l2.6 5.4 5.9.8-4.3 4.1 1 5.9L12 16.9 6.8 19.2l1-5.9L3.5 9.2l5.9-.8z"/>
                    </svg>
                    Rated 4.9/5 by 12,000+ founders
                </span>
            </div>
            <div class="d-flex align-items-center gap-3">
                <a href="tel:+14243672040" class="d-inline-flex align-items-center gap-2" style="color:#c9d7ee;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M4 4h4l2 5-2.5 1.5a12 12 0 0 0 6 6L15 14l5 2v4a1 1 0 0 1-1 1A16 16 0 0 1 3 5a1 1 0 0 1 1-1z"/>
                    </svg>
                    +1 (424) 367-2040
                </a>
                <span class="opacity-50">
                    |
                </span>
                <span class="d-inline-flex align-items-center gap-2">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="12" cy="12" r="9"/>
                        <path d="M12 7v5l3 2"/>
                    </svg>
                    Mon-Fri 9AM-6PM PST
                </span>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg ms-nav sticky-top" id="mainNav">
        <div class="container">
            <a class="ms-brand" href="index.php">
                <img src="assets/img/usa-trademark-logo.png" alt="USA Trademark Expert" class="brand-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain" aria-controls="navMain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navMain">
                <ul class="navbar-nav mx-auto align-items-lg-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="trademark-registration.php">
                                    <span class="di-ic">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <path d="M12 3l7 3v5c0 4.5-3 8.3-7 10-4-1.7-7-5.5-7-10V6l7-3z"/>
                                            <path d="M9 12l2 2 4-4"/>
                                        </svg>
                                    </span>
                                    <span>
                                        <span class="di-t">
                                            Trademark Registration
                                        </span>
                                        <span class="di-d">
                                            File your mark with the USPTO, guided end-to-end.
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="trademark-search.php">
                                    <span class="di-ic">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <circle cx="11" cy="11" r="7"/>
                                            <path d="M21 21l-4.3-4.3"/>
                                        </svg>
                                    </span>
                                    <span>
                                        <span class="di-t">
                                            Free Trademark Search
                                        </span>
                                        <span class="di-d">
                                            A fast direct-hit check before you commit.
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="comprehensive-search.php">
                                    <span class="di-ic">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <circle cx="12" cy="12" r="9"/>
                                            <circle cx="12" cy="12" r="5"/>
                                            <circle cx="12" cy="12" r="1.4"/>
                                        </svg>
                                    </span>
                                    <span>
                                        <span class="di-t">
                                            Comprehensive Search
                                        </span>
                                        <span class="di-d">
                                            Deep federal, state &amp; common-law clearance.
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="trademark-monitoring.php">
                                    <span class="di-ic">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <circle cx="12" cy="12" r="9"/>
                                            <path d="M12 12l0-9"/>
                                            <path d="M12 12a6 6 0 1 0 6 6" opacity=".55"/>
                                        </svg>
                                    </span>
                                    <span>
                                        <span class="di-t">
                                            Trademark Monitoring
                                        </span>
                                        <span class="di-d">
                                            24/7 watch service that flags copycats.
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="office-action-response.php">
                                    <span class="di-ic">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8z"/>
                                            <path d="M14 3v5h5"/>
                                            <path d="M9 13h6"/>
                                            <path d="M9 17h6"/>
                                        </svg>
                                    </span>
                                    <span>
                                        <span class="di-t">
                                            Office Action Response
                                        </span>
                                        <span class="di-d">
                                            Attorney-drafted replies to USPTO refusals.
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="trademark-renewal.php">
                                    <span class="di-ic">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <path d="M3 12a9 9 0 0 1 15-6.7L21 8"/>
                                            <path d="M21 3v5h-5"/>
                                            <path d="M21 12a9 9 0 0 1-15 6.7L3 16"/>
                                            <path d="M3 21v-5h5"/>
                                        </svg>
                                    </span>
                                    <span>
                                        <span class="di-t">
                                            Trademark Renewal
                                        </span>
                                        <span class="di-d">
                                            Never miss a maintenance or renewal deadline.
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="international-registration.php">
                                    <span class="di-ic">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <circle cx="12" cy="12" r="9"/>
                                            <path d="M3 12h18"/>
                                            <path d="M12 3a15 15 0 0 1 0 18 15 15 0 0 1 0-18z"/>
                                        </svg>
                                    </span>
                                    <span>
                                        <span class="di-t">
                                            International Registration
                                        </span>
                                        <span class="di-d">
                                            Protect your brand in 130+ countries.
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="copyright-registration.php">
                                    <span class="di-ic">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <path d="M7 7h4v6a4 4 0 0 1-4 4"/>
                                            <path d="M15 7h4v6a4 4 0 0 1-4 4"/>
                                        </svg>
                                    </span>
                                    <span>
                                        <span class="di-t">
                                            Copyright Registration
                                        </span>
                                        <span class="di-d">
                                            Protect your original creative works.
                                        </span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= in_array($activePage, ['pricing.php'], true) ? ' active' : '' ?>" href="pricing.php">
                            Pricing
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= in_array($activePage, ['about.php'], true) ? ' active' : '' ?>" href="about.php">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= in_array($activePage, ['faq.php'], true) ? ' active' : '' ?>" href="faq.php">
                            FAQ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= in_array($activePage, ['contact.php'], true) ? ' active' : '' ?>" href="contact.php">
                            Contact
                        </a>
                    </li>
                </ul>
                <div class="d-flex align-items-center gap-2 mt-3 mt-lg-0">
                    <a href="trademark-search.php" class="btn btn-outline-navy btn-sm">
                        Free Search
                    </a>
                    <a href="trademark-registration.php" class="btn btn-primary btn-sm btn-icon">
                        Get Started
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M5 12h14"/>
                            <path d="M13 6l6 6-6 6"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </nav>
