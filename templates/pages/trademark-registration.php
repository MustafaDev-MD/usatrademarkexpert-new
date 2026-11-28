<?php
declare(strict_types=1);
?>

<section class="page-hero">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <div class="breadcrumb-ms">
                    <a href="index.php">
                        Home
                    </a>
                    /
                    <a href="index.php#services">
                        Services
                    </a>
                    / Trademark Registration
                </div>
                <span class="section-eyebrow">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M12 3l7 3v5c0 4.5-3 8.3-7 10-4-1.7-7-5.5-7-10V6l7-3z"/>
                        <path d="M9 12l2 2 4-4"/>
                    </svg>
                    Trademark Registration
                </span>
                <h1>
                    Federal Trademark Registration
                </h1>
                <p class="lede">
                    Protect your brand name, logo, or slogan nationwide with seamless, attorney-assisted USPTO filing.
                </p>
                <div class="hero-cta-row mt-4">
                    <a href="#apply" class="btn btn-primary btn-lg btn-icon">
                        Register my Trademark
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M5 12h14"/>
                            <path d="M13 6l6 6-6 6"/>
                        </svg>
                    </a>
                    <a href="contact.php" class="btn btn-outline-navy btn-lg">
                        Consult a Trademark Expert
                    </a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-photo reveal in" style="aspect-ratio:16/13;">
                    <img src="assets/img/trademark-registration.jpg" alt="A specialist preparing a trademark application with a client" loading="eager">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============ Multi-step application ============ -->
<a id="apply">
</a>
<?php if (false): ?>
<section class="section">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                <form id="regForm" class="form-shell"  action="https://www.usatrademarkexpert.com/crm/include/steps_new/lead.php" method="POST" novalidate>
                    <div class="stepper">
                        <div class="sp active">
                            <div class="bar">
                            </div>
                            <span class="lbl">
                                Your mark
                            </span>
                        </div>
                        <div class="sp">
                            <div class="bar">
                            </div>
                            <span class="lbl">
                                Details
                            </span>
                        </div>
                        <div class="sp">
                            <div class="bar">
                            </div>
                            <span class="lbl">
                                Contact
                            </span>
                        </div>
                        <div class="sp">
                            <div class="bar">
                            </div>
                            <span class="lbl">
                                Review
                            </span>
                        </div>
                    </div>
                    <div class="form-body">
                        <!-- Step 1 -->
                        <div class="fstep show">
                            <h3 class="mb-3">
                                What are you protecting?
                            </h3>
                            <div class="mb-3">
                                <label class="form-label">
                                    Trademark name
                                    <span class="text-danger">
                                        *
                                    </span>
                                </label>
                                <input type="text" class="form-control" name="mark_name" data-review="Trademark" required placeholder="e.g. Bloom &amp; Co">
                                <div class="invalid-feedback">
                                    Please enter the name or wording you want to protect.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    What type of mark is it?
                                    <span class="text-danger">
                                        *
                                    </span>
                                </label>
                                <select class="form-select" name="mark_type" data-review="Mark type" required>
                                    <option value="">
                                        Choose one…
                                    </option>
                                    <option value="Word mark (name, slogan)">
                                        Word mark (name, slogan)
                                    </option>
                                    <option value="Logo / design">
                                        Logo / design
                                    </option>
                                    <option value="Name + logo combined">
                                        Name + logo combined
                                    </option>
                                </select>
                                <div class="invalid-feedback">
                                    Select the type of mark.
                                </div>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">
                                    Is the mark already in use?
                                    <span class="text-danger">
                                        *
                                    </span>
                                </label>
                                <select class="form-select" name="in_use" data-review="In use" required>
                                    <!--<input type="hidden" name="leadsource" value="lp">-->
                                    <option value="">
                                        Choose one…
                                    </option>
                                    <option value="Yes — I'm using it in commerce now">
                                        Yes — I'm using it in commerce now
                                    </option>
                                    <option value="Not yet — I intend to use it soon">
                                        Not yet — I intend to use it soon
                                    </option>
                                </select>
                                <div class="invalid-feedback">
                                    Let us know its current status.
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-4">
                                <button type="button" class="btn btn-primary btn-icon next-step">
                                    Continue
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M5 12h14"/>
                                        <path d="M13 6l6 6-6 6"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- Step 2 -->
                        <div class="fstep">
                            <h3 class="mb-3">
                                Tell us about your goods &amp; services
                            </h3>
                            <div class="mb-3">
                                <label class="form-label">
                                    Industry / category
                                    <span class="text-danger">
                                        *
                                    </span>
                                </label>
                                <select class="form-select" name="industry" data-review="Industry" required>
                                    <option value="">
                                        Choose one…
                                    </option>
                                    <option value="Apparel and accessories">
                                        Apparel &amp; accessories
                                    </option>
                                    <option value="Food and beverage">
                                        Food &amp; beverage
                                    </option>
                                    <option value="Technology and software">
                                        Technology &amp; software
                                    </option>
                                    <option value="Health and beauty">
                                        Health &amp; beauty
                                    </option>
                                    <option value="Professional services">
                                        Professional services
                                    </option>
                                    <option value="Retail and e-commerce">
                                        Retail &amp; e-commerce
                                    </option>
                                    <option value="Other">
                                        Other
                                    </option>
                                </select>
                                <div class="invalid-feedback">
                                    Select the industry that best fits.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    Describe the products or services you offer
                                    <span class="text-danger">
                                        *
                                    </span>
                                </label>
<textarea class="form-control" name="goods" data-review="Goods/services" required placeholder="e.g. Handmade candles and home fragrance products sold online"></textarea>
                                <div class="invalid-feedback">
                                    A short description helps us classify your mark.
                                </div>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">
                                    How many classes do you expect?
                                </label>
                                <select class="form-select" name="classes" data-review="Classes">
                                    <option value="1 class">
                                        1 class
                                    </option>
                                    <option value="2 classes">
                                        2 classes
                                    </option>
                                    <option value="3+ classes">
                                        3+ classes
                                    </option>
                                    <option value="Not sure — help me decide">
                                        Not sure — help me decide
                                    </option>
                                </select>
                                <p class="form-note mt-2">
                                    Each class carries a separate $350 USPTO fee. We'll confirm the right classes before filing.
                                </p>
                            </div>
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-outline-navy prev-step">
                                    Back
                                </button>
                                <button type="button" class="btn btn-primary btn-icon next-step">
                                    Continue
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M5 12h14"/>
                                        <path d="M13 6l6 6-6 6"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- Step 3 -->
                        <div class="fstep">
                            <h3 class="mb-3">
                                Where should we send your results?
                            </h3>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">
                                        Full name
                                        <span class="text-danger">
                                            *
                                        </span>
                                    </label>
                                    <input type="text" class="form-control" name="customer_full_name" data-review="Name" required placeholder="Jane Founder">
                                    <div class="invalid-feedback">
                                        Please enter your name.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">
                                        Email
                                        <span class="text-danger">
                                            *
                                        </span>
                                    </label>
                                    <input type="email" class="form-control" name="customer_email" data-review="Email" required placeholder="you@company.com">
                                    <div class="invalid-feedback">
                                        Enter a valid email address.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">
                                        Phone
                                        <span class="text-danger">
                                            *
                                        </span>
                                    </label>
                                    <input type="tel" class="form-control" name="customer_phone" data-review="Phone" required placeholder="(555) 123-4567">
                                    <div class="invalid-feedback">
                                        Enter a valid phone number.
                                    </div>
                                    <input type="hidden" name="data_package_title" value="Basic Package">
                                    <input type="hidden" name="data_package_price" value="35">
                                    <input type="hidden" name="full_url" id="" value="https://www.usatrademarkexpert.com/trademark-registration.php">
                                    <input type="hidden" name="msclkid" value="">
                                    <input type="hidden" name="gclid" value="">
                                    <input type="hidden" name="fbclid" value="">
                                    <input type="hidden" name="__keyword" value="">
                                    <input type="hidden" name="__device" value="">
                                    <input type="hidden" name="__utm_source" value="">
                                    <input type="hidden" name="__utm_campaign" value="">
                                    <input type="hidden" name="__utm_content" value="">
                                    <input type="hidden" name="__utm_term" value="">
                                    <input type="hidden" name="__matchtype" value="">
                                    <input type="hidden" name="__adgroupid" value="">
                                    <input type="hidden" name="__gad_source" value="">
                                </div>
                                <!--<div class="col-md-6">-->
                                <!--  <label class="form-label">Package</label>-->
                                <!--  <select class="form-select" name="plan" data-review="Package">-->
                                <!--    <optio value="Basic — $35">Basic — $35</option>-->
                                <!--    <option value="Standard — $135" selected>Standard — $135</option>-->
                                <!--    <option value="Professional — $235">Professional — $235</option>-->
                                <!--  </select>-->
                                <!--</div>-->
                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" id="consent" name="consent" required>
                                <label class="form-check-label form-note" for="consent">
                                    I agree to be contacted about my trademark and accept the
                                    <a href="terms.php">
                                        Terms
                                    </a>
                                    &amp;
                                    <a href="privacy-policy.php">
                                        Privacy Policy
                                    </a>
                                    .
                                </label>
                                <div class="invalid-feedback">
                                    Please accept to continue.
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-outline-navy prev-step">
                                    Back
                                </button>
                                <button type="submit" class="btn btn-primary btn-icon ">
                                    Submit
                                </button>
                                <!--next-step-->
                            </div>
                        </div>
                        <!-- Step 4 -->
                        <!--<div class="fstep">-->
                        <!--  <h3 class="mb-3">Review &amp; submit</h3>-->
                        <!--  <p class="form-note">Please confirm your details. Nothing is filed until you approve and pay the government fee.</p>-->
                        <!--  <div id="reviewBox" class="mb-3"></div>-->
                        <!--  <div class="guarantee">-->
                        <!--    <span class="g-ic"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="4" y="10" width="16" height="11" rx="2"/><path d="M8 10V7a4 4 0 0 1 8 0v3"/></svg></span>-->
                        <!--    <div><h4 class="mb-1" style="font-size:1rem;">Your information is secure</h4><p class="mb-0 form-note">Submitted over an encrypted connection. We never sell your data.</p></div>-->
                        <!--  </div>-->
                        <!--  <div class="d-flex justify-content-between mt-4">-->
                        <!--    <button type="button" class="btn btn-outline-navy prev-step">Back</button>-->
                        <!--    <button type="submit" class="btn btn-accent btn-icon submit-reg">Submit Application <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg></button>-->
                        <!--  </div>-->
                        <!--</div>-->
                    </div>
                    <!-- Success -->
                    <!--<div class="form-success">-->
                    <!--  <div class="fs-ic"><svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg></div>-->
                    <!--  <h3>Application received!</h3>-->
                    <!--  <p class="mb-1">Thanks — a USA Trademark Expert specialist will email you within one business day to confirm your details and next steps.</p>-->
                    <!--  <p class="form-note">Check your inbox for a confirmation from support@usatrademarkexpert.com.</p>-->
                    <!--  <a href="index.php" class="btn btn-primary mt-2">Back to Home</a>-->
                    <!--</div>-->
                </form>
            </div>
            <div class="col-lg-5">
                <div class="reveal in ps-lg-3">
                    <h3 class="mb-3">
                        What's included
                    </h3>
                    <ul class="ticklist mb-4">
                        <li>
                            Comprehensive clearance search of federal &amp; state databases
                        </li>
                        <li>
                            Correct class selection so your protection matches your business
                        </li>
                        <li>
                            Attorney review to catch the errors that get filings refused
                        </li>
                        <li>
                            USPTO filing within 48 hours of approval
                        </li>
                        <li>
                            A tracking dashboard and status alerts by email
                        </li>
                    </ul>
                    <div class="card-ms">
                        <div class="tst-stars">
                            ★★★★★
                        </div>
                        <p class="mb-2" style="color:var(--ms-ink);font-weight:500;">
                            “The clearest trademark process I've used. I answered a few questions and it was filed two days later.”
                        </p>
                        <div class="tst-who">
                            <span class="tst-avatar">
                                MC
                            </span>
                            <div>
                                <div class="tst-name">
                                    Marcus Cole
                                </div>
                                <div class="tst-role">
                                    Founder, Northpeak
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 p-4 rounded-4 bg-soft">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M4 13v-1a8 8 0 0 1 16 0v1"/>
                                <rect x="2.5" y="13" width="4" height="6" rx="1.5"/>
                                <rect x="17.5" y="13" width="4" height="6" rx="1.5"/>
                                <path d="M20 19a4 4 0 0 1-4 3h-2"/>
                            </svg>
                            <strong>
                                Prefer to talk it through?
                            </strong>
                        </div>
                        <p class="form-note mb-3">
                            Speak with a trademark specialist before you file — free of charge.
                        </p>
                        <a href="contact.php" class="btn btn-outline-navy btn-sm">
                            Book a free consultation
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- ============ Stats ============ -->
<?php if (false): ?>
<section class="section pt-0">
    <div class="container">
        <div class="stat-band reveal">
            <div class="row g-4">
                <div class="col-6 col-lg-3">
                    <div class="stat">
                        <div class="stat-num">
                            1500+
                        </div>
                        <div class="stat-lbl">
                            Successful Trademarks Filed
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="stat">
                        <div class="stat-num">
                            1000+
                        </div>
                        <div class="stat-lbl">
                            Ongoing Filing Process
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="stat">
                        <div class="stat-num">
                            500+
                        </div>
                        <div class="stat-lbl">
                            4.5/5 Star Ratings
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="stat">
                        <div class="stat-num">
                            10+
                        </div>
                        <div class="stat-lbl">
                            Years of Experience
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- ============ Registration process ============ -->
<section class="section">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="reveal">
                    <span class="section-eyebrow">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 3v18"/>
                            <path d="M6 21h12"/>
                            <path d="M3 8l3-4 3 4"/>
                            <path d="M15 8l3-4 3 4"/>
                            <path d="M3 8a3 3 0 0 0 6 0"/>
                            <path d="M15 8a3 3 0 0 0 6 0"/>
                        </svg>
                        How it works
                    </span>
                    <h2 class="section-title">
                        Why Register Your Trademark?
                    </h2>
                    <p class="section-lede mb-1">
                    Securing your brand prevents costly disputes, blocks competitors, and establishes full legal ownership.
                </p>
                </div>
                <div class="howto reveal d1">
                    <div class="howto-step">
                        <div class="howto-num">
                            01
                        </div>
                        <div class="howto-body">
                            <h4>
                                Nationwide Exclusivity
                            </h4>
                            <p>
                                Federal registration gives you exclusive rights to use your mark across the entire country, not just locally.
                            </p>
                        </div>
                    </div>
                    <div class="howto-step">
                        <div class="howto-num">
                            02
                        </div>
                        <div class="howto-body">
                            <h4>
                                Enhanced Legal Power
                            </h4>
                            <p>
                                A registered mark proves ownership in federal court and provides stronger protection against infringement.
                            </p>
                        </div>
                    </div>
                    <div class="howto-step">
                        <div class="howto-num">
                            03
                        </div>
                        <div class="howto-body">
                            <h4>
                                Official Brand Authority
                            </h4>
                            <p>
                                Unlocks the official ® symbol, signaling to customers and competitors that your business is fully protected.
                            </p>
                        </div>
                    </div>
                </div>
                <a href="#apply" class="btn btn-primary btn-lg btn-icon reveal d2">
                    Start My Trademark Registration
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M5 12h14"/>
                        <path d="M13 6l6 6-6 6"/>
                    </svg>
                </a>
            </div>
            <div class="col-lg-6">
                <div class="reveal d1" style="max-width:460px;margin:0 auto;">
                    <div class="hero-photo">
                        <img src="assets/photo.php?p=signing-documents&w=900" alt="A specialist preparing a trademark application with a client" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============ Packages ============ -->
<section class="section bg-soft">
    <div class="container">
        <div class="text-center mb-5 reveal">
            <span class="section-eyebrow">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M12 3v18"/>
                    <path d="M6 21h12"/>
                    <path d="M3 8l3-4 3 4"/>
                    <path d="M15 8l3-4 3 4"/>
                    <path d="M3 8a3 3 0 0 0 6 0"/>
                    <path d="M15 8a3 3 0 0 0 6 0"/>
                </svg>
                Pricing plans
            </span>
            <h2 class="section-title">
                    Clear Packages, Complete Protection
                </h2>
            <p class="section-lede mx-auto">
                    Choose the level of legal support and filing expertise that matches your business goals.
                </p>
        </div>
        <div class="row g-4 align-items-stretch">
            <div class="col-lg-4">
                <div class="price-card reveal ">
                    <div class="price-name">
                        Basic Package
                    </div>
                    <p class="price-desc">
                        Straightforward filing tools to get your application officially submitted.
                    </p>
                    <div class="price-badge">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 3l7 3v5c0 4.5-3 8.3-7 10-4-1.7-7-5.5-7-10V6l7-3z"/>
                            <path d="M9 12l2 2 4-4"/>
                        </svg>
                        USA Trademark Expert Guarantee
                    </div>
                    <div class="price-from">
                        Starting from
                    </div>
                    <div class="price-amt">
                        $49
                    </div>
                    <div class="price-gov">
                        + $350 gov. fee per class
                    </div>
                                        <ul class="price-feats">
                        <li>
                            <strong>
                                Federal Database Direct-Hit Search
                            </strong>
                            <span>
                                We scan the USPTO registry to check your mark’s availability and flag immediate conflicts.
                            </span>
                        </li>
                        <li>
                            <strong>
                                Custom Legal Classification
                            </strong>
                            <span>
                                Our team reviews the USPTO ID manual to precisely categorize your goods and services for maximum protection.
                            </span>
                        </li>
                    </ul>
                    <a href="#apply" class="btn btn-outline-navy w-100">
                        Get Started Now
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="price-card reveal featured">
                    <div class="price-name">
                        Standard Package
                    </div>
                    <p class="price-desc">
                        Step up to dedicated legal guidance and brand enforcement tools.
                    </p>
                    <div class="price-badge">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 3l7 3v5c0 4.5-3 8.3-7 10-4-1.7-7-5.5-7-10V6l7-3z"/>
                            <path d="M9 12l2 2 4-4"/>
                        </svg>
                        USA Trademark Expert Guarantee
                    </div>
                    <div class="price-from">
                        Starting from
                    </div>
                    <div class="price-amt">
                        $199
                    </div>
                    <div class="price-gov">
                        + $350 gov. fee per class
                    </div>
                                        <ul class="price-feats">
                        <li>
                            <strong>
                                1-on-1 Attorney Consultation
                            </strong>
                            <span>
                                Speak directly with a licensed trademark lawyer in a focused 15-minute session to resolve specific questions and outline your filing strategy.
                            </span>
                        </li>
                        <li>
                            <strong>
                                Cease &amp; Desist Safeguards
                            </strong>
                            <span>
                                Enforceable legal documents to act quickly against brand infringement.
                            </span>
                        </li>
                    </ul>
                    <a href="#apply" class="btn btn-primary w-100">
                        Get Started Now
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="price-card reveal ">
                    <div class="price-name">
                        Premium Package
                    </div>
                    <p class="price-desc">
                        Priority rush filing paired with continuous brand monitoring.
                    </p>
                    <div class="price-badge">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 3l7 3v5c0 4.5-3 8.3-7 10-4-1.7-7-5.5-7-10V6l7-3z"/>
                            <path d="M9 12l2 2 4-4"/>
                        </svg>
                        USA Trademark Expert Guarantee
                    </div>
                    <div class="price-from">
                        Starting from
                    </div>
                    <div class="price-amt">
                        $349
                    </div>
                    <div class="price-gov">
                        + $350 gov. fee per class
                    </div>
                                        <ul class="price-feats">
                        <li>
                            <strong>
                                1-Hour Attorney Session
                            </strong>
                            <span>
                                In-depth legal planning with a trademark lawyer.
                            </span>
                        </li>
                        <li>
                            <strong>
                                48-Hour Priority Processing
                            </strong>
                            <span>
                                Fast-track filing to secure your official USPTO date immediately.
                            </span>
                        </li>
                        <li>
                            <strong>
                                Infringement Alerts
                            </strong>
                            <span>
                                Ongoing monitoring to protect your registered mark from copycats.
                            </span>
                        </li>
                    </ul>
                    <a href="#apply" class="btn btn-outline-navy w-100">
                        Get Started Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============ Why register ============ -->
<section class="section bg-soft">
    <div class="container">
        <div class="text-center mb-5 reveal">
            <span class="section-eyebrow">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M12 3l7 3v5c0 4.5-3 8.3-7 10-4-1.7-7-5.5-7-10V6l7-3z"/>
                    <path d="M9 12l2 2 4-4"/>
                </svg>
                Why it matters
            </span>
            <h2 class="section-title">
                Why Is It Important to Register Your Trademark?
            </h2>
            <p class="section-lede mx-auto">
                Registering a trademark is an essential step to protect intellectual property and ensure long-term business success.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card-ms reveal d1">
                    <div class="card-ic">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 3l7 3v5c0 4.5-3 8.3-7 10-4-1.7-7-5.5-7-10V6l7-3z"/>
                            <path d="M9 12l2 2 4-4"/>
                        </svg>
                    </div>
                    <h3>
                        Protect from Infringements
                    </h3>
                    <p class="mb-0">
                        Our comprehensive approach identifies potential threats, ensuring that your trademarks and copyrights remain secure.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-ms reveal d2">
                    <div class="card-ic">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M8 4h8v4a4 4 0 0 1-8 0z"/>
                            <path d="M8 6H5a3 3 0 0 0 3 3"/>
                            <path d="M16 6h3a3 3 0 0 1-3 3"/>
                            <path d="M12 12v4"/>
                            <path d="M9 20h6"/>
                            <path d="M10 16h4"/>
                        </svg>
                    </div>
                    <h3>
                        Attain Competitive Edge
                    </h3>
                    <p class="mb-0">
                        Our customized protection strategies safeguard your intellectual property and establish your brand as distinctive and unique.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-ms reveal d3">
                    <div class="card-ic">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="12" cy="9" r="6"/>
                            <path d="M9 14l-2 7 5-3 5 3-2-7"/>
                        </svg>
                    </div>
                    <h3>
                        Get Exclusive Rights
                    </h3>
                    <p class="mb-0">
                        Our services empower you with exclusive rights to your trademarks that enhance the value of your intellectual property.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-ms reveal d1">
                    <div class="card-ic">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8z"/>
                            <path d="M14 3v5h5"/>
                            <path d="M9 15l2 2 4-4"/>
                        </svg>
                    </div>
                    <h3>
                        Legally Certified
                    </h3>
                    <p class="mb-0">
                        Our team of experts assist you in navigating the certification process, ensuring legal recognition and protection of your rights.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-ms reveal d2">
                    <div class="card-ic">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="12" cy="12" r="9"/>
                            <path d="M3 12h18"/>
                            <path d="M12 3a15 15 0 0 1 0 18 15 15 0 0 1 0-18z"/>
                        </svg>
                    </div>
                    <h3>
                        Global Expansion
                    </h3>
                    <p class="mb-0">
                        Our expertise in navigating international intellectual property laws safeguards your brand&rsquo;s identity, opening doors to new markets.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-ms reveal d3">
                    <div class="card-ic">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M14 4l6 6-3 3-6-6z"/>
                            <path d="M9 9l-5 5a2 2 0 0 0 3 3l5-5"/>
                            <path d="M14 18h7"/>
                        </svg>
                    </div>
                    <h3>
                        Right to File Case
                    </h3>
                    <p class="mb-0">
                        Possess the legal right to take action against trademark or copyright infringements. Our services equip you with a legal foundation to pursue unauthorized use.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============ Why search ============ -->
<section class="section">
    <div class="container">
        <div class="row g-4 g-lg-5 align-items-center">
            <div class="col-lg-5">
                <div class="hero-photo reveal" style="aspect-ratio:16/13;">
                    <img src="assets/img/usatrademark-old/services/extension.webp" alt="A researcher reviewing trademark search results" loading="lazy">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="reveal d1">
                    <span class="section-eyebrow">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="11" cy="11" r="7"/>
                            <path d="M21 21l-4.3-4.3"/>
                        </svg>
                        Trademark search
                    </span>
                    <h2 class="section-title">
                        Why Search First?
                    </h2>
                    <p class="section-lede mb-4">
                    Before submitting your official application, verifying that your brand name or logo is truly available is critical. A pre-filing clearance search identifies existing registrations and confusingly similar marks, helping you avoid immediate USPTO rejections, non-refundable government fees, and mandatory rebranding later.
                </p>
                    <div class="howto mb-0">
                        <div class="howto-step">
                            <div class="howto-num">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path d="M12 7v5l3 2"/>
                                </svg>
                            </div>
                            <div class="howto-body">
                                <h4>
                                    Saves Time
                                </h4>
                                <p>
                                    In order to avoid legal disputes, it is important to register your trademark which can save you valuable time.
                                </p>
                            </div>
                        </div>
                        <div class="howto-step">
                            <div class="howto-num">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M12 3v18"/>
                                    <path d="M6 21h12"/>
                                    <path d="M3 8l3-4 3 4"/>
                                    <path d="M15 8l3-4 3 4"/>
                                    <path d="M3 8a3 3 0 0 0 6 0"/>
                                    <path d="M15 8a3 3 0 0 0 6 0"/>
                                </svg>
                            </div>
                            <div class="howto-body">
                                <h4>
                                    Saves Money
                                </h4>
                                <p>
                                    Legal protection reduces the risk of expensive legal battles, including litigation costs and potential damages.
                                </p>
                            </div>
                        </div>
                        <div class="howto-step">
                            <div class="howto-num">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M2 12s4-7 10-7 10 7 10 7-4 7-10 7-10-7-10-7z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                            </div>
                            <div class="howto-body">
                                <h4>
                                    Protect from Imitators
                                </h4>
                                <p>
                                    It serves as a powerful deterrent against individuals or businesses attempting to steal or infringe upon your brand.
                                </p>
                            </div>
                        </div>
                    </div>
                    <a href="trademark-search.php" class="btn btn-outline-navy mt-4">
                        View More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============ Testimonials ============ -->
<section class="section bg-soft">
    <div class="container">
        <div class="text-center mb-5 reveal">
            <span class="section-eyebrow">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M7 7h4v6a4 4 0 0 1-4 4"/>
                    <path d="M15 7h4v6a4 4 0 0 1-4 4"/>
                </svg>
                Client testimonials
            </span>
            <h2 class="section-title">
                    Loved by Business Owners Across the Country
                </h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="tst-card reveal d1">
                    <div class="tst-stars">
                        ★★★★★
                    </div>
                    <p>
                            The 48-hour rush processing was vital for our product launch. Having an attorney review and submit our application so quickly gave us absolute confidence.
                        </p>
                    <div class="tst-who">
                        <span class="tst-avatar">
                            JS
                        </span>
                        <div>
                            <div class="tst-name">
                            C. Lopez
                        </div>
                            <div class="tst-role">
                            E-Commerce Director
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="tst-card reveal d2">
                    <div class="tst-stars">
                        ★★★★★
                    </div>
                    <p>
                            Our brand spanned two tricky trademark classes. The legal support team handled the custom classification flawlessly, making the USPTO process completely seamless.
                        </p>
                    <div class="tst-who">
                        <span class="tst-avatar">
                            SB
                        </span>
                        <div>
                            <div class="tst-name">
                            M. Jenkins
                        </div>
                            <div class="tst-role">
                            Brand Owner
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="tst-card reveal d3">
                    <div class="tst-stars">
                        ★★★★★
                    </div>
                    <p>
                            Outstanding legal guidance from start to finish. They answered all my questions about brand exclusivity and secured our official filing date without delay.
                        </p>
                    <div class="tst-who">
                        <span class="tst-avatar">
                            EL
                        </span>
                        <div>
                            <div class="tst-name">
                            D. Kim
                        </div>
                            <div class="tst-role">
                            Startup Founder
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="tst-card reveal d1">
                    <div class="tst-stars">
                        ★★★★★
                    </div>
                    <p>
                            The 48-hour rush processing was vital for our product launch. Having an attorney review and submit our application so quickly gave us absolute confidence.
                        </p>
                    <div class="tst-who">
                        <span class="tst-avatar">
                            PR
                        </span>
                        <div>
                            <div class="tst-name">
                            C. Lopez
                        </div>
                            <div class="tst-role">
                            E-Commerce Director
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="tst-card reveal d2">
                    <div class="tst-stars">
                        ★★★★★
                    </div>
                    <p>
                            Our brand spanned two tricky trademark classes. The legal support team handled the custom classification flawlessly, making the USPTO process completely seamless.
                        </p>
                    <div class="tst-who">
                        <span class="tst-avatar">
                            MG
                        </span>
                        <div>
                            <div class="tst-name">
                            M. Jenkins
                        </div>
                            <div class="tst-role">
                            Brand Owner
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="tst-card reveal d3">
                    <div class="tst-stars">
                        ★★★★★
                    </div>
                    <p>
                            Outstanding legal guidance from start to finish. They answered all my questions about brand exclusivity and secured our official filing date without delay.
                        </p>
                    <div class="tst-who">
                        <span class="tst-avatar">
                            DT
                        </span>
                        <div>
                            <div class="tst-name">
                            D. Kim
                        </div>
                            <div class="tst-role">
                            Startup Founder
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============ FAQ ============ -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="text-center mb-5 reveal">
                    <span class="section-eyebrow">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M21 12a8 8 0 0 1-11.5 7.2L4 21l1.8-5.5A8 8 0 1 1 21 12z"/>
                        </svg>
                        FAQ
                    </span>
                    <h2 class="section-title">
                        Frequently asked questions
                    </h2>
                </div>
                <div class="accordion accordion-ms reveal" id="regFaq">
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#rf0">
                                    What is a federal trademark and how does it protect my business?
                                </button>
                        </h3>
                        <div id="rf0" class="accordion-collapse collapse show" data-bs-parent="#regFaq">
                            <div class="accordion-body">
                                    <p>A trademark is an exclusive legal identifier—such as a word, phrase, logo, or symbol—that distinguishes your goods or services from competitors. Registering your mark with the USPTO grants you nationwide legal presumption of ownership, deters potential copycats, and gives you the right to display the official ® symbol alongside your brand.</p>
                                </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rf1">
                                    What is a "common law" trademark vs. federal registration?
                                </button>
                        </h3>
                        <div id="rf1" class="accordion-collapse collapse " data-bs-parent="#regFaq">
                            <div class="accordion-body">
                                    <p>Common law rights are established automatically simply by using a brand name in commerce, but they only apply to your local geographic area. Federal USPTO registration expands your protection nationwide across all 50 states, preventing competitors anywhere in the country from using or registering a confusingly similar mark.</p>
                                </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rf2">
                                    Should I trademark my brand name, my custom logo, or both?
                                </button>
                        </h3>
                        <div id="rf2" class="accordion-collapse collapse " data-bs-parent="#regFaq">
                            <div class="accordion-body">
                                    <p>Trademarking your name provides the broadest overall protection because it shields your word mark regardless of font, color, or design changes. Registering your logo locks down your specific visual graphics and styling. While securing both offers total coverage, starting with your brand name usually establishes the strongest legal foundation.</p>
                                </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rf3">
                                    I already own my domain name and social media handles—do I still need a trademark?
                                </button>
                        </h3>
                        <div id="rf3" class="accordion-collapse collapse " data-bs-parent="#regFaq">
                            <div class="accordion-body">
                                    <p>Yes. Purchasing a domain name or securing social handles does not grant legal trademark rights. A third party holding a registered federal trademark can legally force you to surrender a domain or change your business name if they prove it creates consumer confusion in the marketplace.</p>
                                </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rf4">
                                    Can I trademark a tagline or marketing slogan?
                                </button>
                        </h3>
                        <div id="rf4" class="accordion-collapse collapse " data-bs-parent="#regFaq">
                            <div class="accordion-body">
                                    <p>Absolutely. As long as your slogan is creative, distinctive, and actively used to promote your goods or services, it can be federally registered. Generic phrases cannot be trademarked, but unique taglines that consumers associate directly with your brand qualify for full protection.</p>
                                </div>
                        </div>
                    </div>
                </div>
                <p class="text-center mt-4">
                    <a href="#apply" class="btn btn-primary btn-lg btn-icon">
                        Start My Trademark Registration
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M5 12h14"/>
                            <path d="M13 6l6 6-6 6"/>
                        </svg>
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>
<?php /* Source service pages do not include this extra CTA. */ if (false): render_component('default-cta'); endif; ?>
