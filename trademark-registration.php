<?php
$pageTitle = 'Trademark Registration — Get Your Trademark Registered by Professionals | Trademark Profs';
$pageDescription = 'Registering your trademark grants you legal protection and exclusive rights to prevent others from infringing on your brand. Packages starting from $35.';
$pageCanonical = '/trademark-registration.php';
$pageName = 'trademark-registration';
$pageStructuredData = json_decode('{"@context":"https://schema.org","@type":"LegalService","name":"Trademark Profs","description":"Trademark registration, search, monitoring and renewal services.","areaServed":"US","priceRange":"$$","telephone":"+1-877-646-1464"}', true);
require __DIR__ . '/includes/head.php';
?>
<?php require __DIR__ . '/includes/header.php'; ?>

<section class="page-hero">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-lg-7">
        <div class="breadcrumb-ms"><a href="index.php">Home</a> / <a href="index.php#services">Services</a> / Trademark Registration</div>
        <span class="section-eyebrow"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l7 3v5c0 4.5-3 8.3-7 10-4-1.7-7-5.5-7-10V6l7-3z"/><path d="M9 12l2 2 4-4"/></svg> Trademark Registration</span>
        <h1>Get Your Trademark Registered by Professionals</h1>
        <p class="lede">Registering your trademark grants you legal protection and exclusive rights to prevent others from infringing on your brand.</p>
        <div class="hero-cta-row mt-4">
          <a href="#apply" class="btn btn-primary btn-lg btn-icon">Register my Trademark <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="M13 6l6 6-6 6"/></svg></a>
          <a href="contact.php" class="btn btn-outline-navy btn-lg">Consult a Trademark Expert</a>
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
<a id="apply"></a>
<section class="section">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-7">
        <form id="regForm" class="form-shell"  action="https://www.trademarkprofs.com/crm/include/steps_new/lead.php" method="POST" novalidate>
          <div class="stepper">
            <div class="sp active"><div class="bar"></div><span class="lbl">Your mark</span></div>
            <div class="sp"><div class="bar"></div><span class="lbl">Details</span></div>
            <div class="sp"><div class="bar"></div><span class="lbl">Contact</span></div>
            <div class="sp"><div class="bar"></div><span class="lbl">Review</span></div>
          </div>

          <div class="form-body">
            <!-- Step 1 -->
            <div class="fstep show">
              <h3 class="mb-3">What are you protecting?</h3>
              <div class="mb-3">
                <label class="form-label">Trademark name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="mark_name" data-review="Trademark" required placeholder="e.g. Bloom &amp; Co">
                <div class="invalid-feedback">Please enter the name or wording you want to protect.</div>
              </div>
              <div class="mb-3">
                <label class="form-label">What type of mark is it? <span class="text-danger">*</span></label>
                <select class="form-select" name="mark_type" data-review="Mark type" required>
                  <option value="">Choose one…</option>
                  <option value="Word mark (name, slogan)">Word mark (name, slogan)</option>
                  <option value="Logo / design">Logo / design</option>
                  <option value="Name + logo combined">Name + logo combined</option>
                </select>
                <div class="invalid-feedback">Select the type of mark.</div>
              </div>
              <div class="mb-2">
                <label class="form-label">Is the mark already in use? <span class="text-danger">*</span></label>
                <select class="form-select" name="in_use" data-review="In use" required>
                    <!--<input type="hidden" name="leadsource" value="lp">-->
                  <option value="">Choose one…</option>
                  <option value="Yes — I'm using it in commerce now">Yes — I'm using it in commerce now</option>
                  <option value="Not yet — I intend to use it soon">Not yet — I intend to use it soon</option>
                </select>
                <div class="invalid-feedback">Let us know its current status.</div>
              </div>
              <div class="d-flex justify-content-end mt-4">
                <button type="button" class="btn btn-primary btn-icon next-step">Continue <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="M13 6l6 6-6 6"/></svg></button>
              </div>
            </div>

            <!-- Step 2 -->
            <div class="fstep">
              <h3 class="mb-3">Tell us about your goods &amp; services</h3>
              <div class="mb-3">
                <label class="form-label">Industry / category <span class="text-danger">*</span></label>
                <select class="form-select" name="industry" data-review="Industry" required>
                  <option value="">Choose one…</option>
                  <option value="Apparel and accessories">Apparel &amp; accessories</option>
                  <option value="Food and beverage">Food &amp; beverage</option>
                  <option value="Technology and software">Technology &amp; software</option>
                  <option value="Health and beauty">Health &amp; beauty</option>
                  <option value="Professional services">Professional services</option>
                  <option value="Retail and e-commerce">Retail &amp; e-commerce</option>
                  <option value="Other">Other</option>
                </select>
                <div class="invalid-feedback">Select the industry that best fits.</div>
              </div>
              <div class="mb-3">
                <label class="form-label">Describe the products or services you offer <span class="text-danger">*</span></label>
                <textarea class="form-control" name="goods" data-review="Goods/services" required placeholder="e.g. Handmade candles and home fragrance products sold online"></textarea>
                <div class="invalid-feedback">A short description helps us classify your mark.</div>
              </div>
              <div class="mb-2">
                <label class="form-label">How many classes do you expect? </label>
                <select class="form-select" name="classes" data-review="Classes">
                  <option value="1 class">1 class</option>
                  <option value="2 classes">2 classes</option>
                  <option value="3+ classes">3+ classes</option>
                  <option value="Not sure — help me decide">Not sure — help me decide</option>
                </select>
                <p class="form-note mt-2">Each class carries a separate $350 USPTO fee. We'll confirm the right classes before filing.</p>
              </div>
              <div class="d-flex justify-content-between mt-4">
                <button type="button" class="btn btn-outline-navy prev-step">Back</button>
                <button type="button" class="btn btn-primary btn-icon next-step">Continue <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="M13 6l6 6-6 6"/></svg></button>
              </div>
            </div>

            <!-- Step 3 -->
            <div class="fstep">
              <h3 class="mb-3">Where should we send your results?</h3>
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label">Full name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="customer_full_name" data-review="Name" required placeholder="Jane Founder">
                  <div class="invalid-feedback">Please enter your name.</div>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="customer_email" data-review="Email" required placeholder="you@company.com">
                  <div class="invalid-feedback">Enter a valid email address.</div>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Phone <span class="text-danger">*</span></label>
                  <input type="tel" class="form-control" name="customer_phone" data-review="Phone" required placeholder="(555) 123-4567">
                  <div class="invalid-feedback">Enter a valid phone number.</div>
                  <input type="hidden" name="data_package_title" value="Basic Package">
                  <input type="hidden" name="data_package_price" value="35">
                  <input type="hidden" name="full_url" id="" value="https://www.trademarkprofs.com/trademark-registration.php">
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
                <label class="form-check-label form-note" for="consent">I agree to be contacted about my trademark and accept the <a href="terms.php">Terms</a> &amp; <a href="privacy-policy.php">Privacy Policy</a>.</label>
                <div class="invalid-feedback">Please accept to continue.</div>
              </div>
              <div class="d-flex justify-content-between mt-4">
                <button type="button" class="btn btn-outline-navy prev-step">Back</button>
                <button type="submit" class="btn btn-primary btn-icon ">Submit</button>
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
          <!--  <p class="mb-1">Thanks — a Trademark Profs specialist will email you within one business day to confirm your details and next steps.</p>-->
          <!--  <p class="form-note">Check your inbox for a confirmation from support@trademarkprofs.com.</p>-->
          <!--  <a href="index.php" class="btn btn-primary mt-2">Back to Home</a>-->
          <!--</div>-->
         </form>
       
      </div>

      <div class="col-lg-5">
        <div class="reveal in ps-lg-3">
          <h3 class="mb-3">What's included</h3>
          <ul class="ticklist mb-4">
            <li>Comprehensive clearance search of federal &amp; state databases</li>
            <li>Correct class selection so your protection matches your business</li>
            <li>Attorney review to catch the errors that get filings refused</li>
            <li>USPTO filing within 48 hours of approval</li>
            <li>A tracking dashboard and status alerts by email</li>
          </ul>
          <div class="card-ms">
            <div class="tst-stars">★★★★★</div>
            <p class="mb-2" style="color:var(--ms-ink);font-weight:500;">“The clearest trademark process I've used. I answered a few questions and it was filed two days later.”</p>
            <div class="tst-who">
              <span class="tst-avatar">MC</span>
              <div><div class="tst-name">Marcus Cole</div><div class="tst-role">Founder, Northpeak</div></div>
            </div>
          </div>
          <div class="mt-4 p-4 rounded-4 bg-soft">
            <div class="d-flex align-items-center gap-2 mb-2"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 13v-1a8 8 0 0 1 16 0v1"/><rect x="2.5" y="13" width="4" height="6" rx="1.5"/><rect x="17.5" y="13" width="4" height="6" rx="1.5"/><path d="M20 19a4 4 0 0 1-4 3h-2"/></svg><strong>Prefer to talk it through?</strong></div>
            <p class="form-note mb-3">Speak with a trademark specialist before you file — free of charge.</p>
            <a href="contact.php" class="btn btn-outline-navy btn-sm">Book a free consultation</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ============ Stats ============ -->
<section class="section pt-0">
  <div class="container">
    <div class="stat-band reveal">
      <div class="row g-4">
                <div class="col-6 col-lg-3">
          <div class="stat">
            <div class="stat-num">1500+</div>
            <div class="stat-lbl">Successful Trademarks Filed</div>
          </div>
        </div>
                <div class="col-6 col-lg-3">
          <div class="stat">
            <div class="stat-num">1000+</div>
            <div class="stat-lbl">Ongoing Filing Process</div>
          </div>
        </div>
                <div class="col-6 col-lg-3">
          <div class="stat">
            <div class="stat-num">500+</div>
            <div class="stat-lbl">4.5/5 Star Ratings</div>
          </div>
        </div>
                <div class="col-6 col-lg-3">
          <div class="stat">
            <div class="stat-num">10+</div>
            <div class="stat-lbl">Years of Experience</div>
          </div>
        </div>
              </div>
    </div>
  </div>
</section>

<!-- ============ Registration process ============ -->
<section class="section pt-0">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6">
        <div class="reveal">
          <span class="section-eyebrow"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3v18"/><path d="M6 21h12"/><path d="M3 8l3-4 3 4"/><path d="M15 8l3-4 3 4"/><path d="M3 8a3 3 0 0 0 6 0"/><path d="M15 8a3 3 0 0 0 6 0"/></svg> How it works</span>
          <h2 class="section-title">Our Trademark Registration Process</h2>
          <p class="section-lede mb-1">Our efficient process registers trademarks and offers legal protection, ensuring peace of mind for your business.</p>
        </div>
        <div class="howto reveal d1">
                    <div class="howto-step">
            <div class="howto-num">01</div>
            <div class="howto-body">
              <h4>Details About Your Trademark</h4>
              <p>Please provide us with specific information regarding your trademark, such as the name of your brand, slogan, or logo.</p>
            </div>
          </div>
                    <div class="howto-step">
            <div class="howto-num">02</div>
            <div class="howto-body">
              <h4>Search for Availability</h4>
              <p>After obtaining the required information, we conduct a comprehensive search to ensure its availability.</p>
            </div>
          </div>
                    <div class="howto-step">
            <div class="howto-num">03</div>
            <div class="howto-body">
              <h4>Application Preparation</h4>
              <p>After verifying the eligibility of your mark, our team will begin the application to initiate the registration process.</p>
            </div>
          </div>
                  </div>
        <a href="#apply" class="btn btn-primary btn-lg btn-icon reveal d2">Start My Trademark Registration <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="M13 6l6 6-6 6"/></svg></a>
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
      <span class="section-eyebrow"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3v18"/><path d="M6 21h12"/><path d="M3 8l3-4 3 4"/><path d="M15 8l3-4 3 4"/><path d="M3 8a3 3 0 0 0 6 0"/><path d="M15 8a3 3 0 0 0 6 0"/></svg> Pricing plans</span>
      <h2 class="section-title">Packages for every stage of your brand</h2>
      <p class="section-lede mx-auto">Discover our range of packages crafted to suit different budgets, ensuring top-notch quality without compromise.</p>
    </div>
    <div class="row g-4 align-items-stretch">
            <div class="col-lg-4">
        <div class="price-card reveal ">
          <div class="price-name">Basic</div>
          <p class="price-desc">Everything you need to get your mark on file.</p>
          <div class="price-badge"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l7 3v5c0 4.5-3 8.3-7 10-4-1.7-7-5.5-7-10V6l7-3z"/><path d="M9 12l2 2 4-4"/></svg> Trademark Profs Guarantee</div>
          <div class="price-from">Starting from</div>
          <div class="price-amt">$35</div>
          <div class="price-gov">+ $350 gov. fee per class</div>
          <ul class="price-feats">
            <li><strong>Direct-Hit Search</strong><span>The federal database provides exact matches for live and pending applications.</span></li><li><strong>Secure Online Account</strong><span>Your status, documents, and crucial deadlines will be conveniently accessible 24/7.</span></li><li><strong>Electronic Delivery</strong><span>We&rsquo;ll deliver the application to you electronically so it will save you time and delivery costs.</span></li>          </ul>
          <a href="#apply" class="btn btn-outline-navy w-100">Get Started Now</a>
        </div>
      </div>
            <div class="col-lg-4">
        <div class="price-card reveal featured">
          <div class="price-name">Standard</div>
          <p class="price-desc">Includes the Basic Package, plus enforcement tools.</p>
          <div class="price-badge"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l7 3v5c0 4.5-3 8.3-7 10-4-1.7-7-5.5-7-10V6l7-3z"/><path d="M9 12l2 2 4-4"/></svg> Trademark Profs Guarantee</div>
          <div class="price-from">Starting from</div>
          <div class="price-amt">$135</div>
          <div class="price-gov">+ $350 gov. fee per class</div>
          <ul class="price-feats">
            <li><strong>Cease &amp; Desist Letter</strong><span>A $35 value, included at no extra cost.</span></li><li><strong>Transfer/Assignment</strong><span>A $35 value, included at no extra cost.</span></li><li><strong>Trademark Monitoring (10 Days Included)</strong><span>A subscription to trademark monitoring notifies you of potential infringers.</span></li>          </ul>
          <a href="#apply" class="btn btn-primary w-100">Get Started Now</a>
        </div>
      </div>
            <div class="col-lg-4">
        <div class="price-card reveal ">
          <div class="price-name">Professional</div>
          <p class="price-desc">Includes the Standard Package, plus priority handling.</p>
          <div class="price-badge"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l7 3v5c0 4.5-3 8.3-7 10-4-1.7-7-5.5-7-10V6l7-3z"/><path d="M9 12l2 2 4-4"/></svg> Trademark Profs Guarantee</div>
          <div class="price-from">Starting from</div>
          <div class="price-amt">$235</div>
          <div class="price-gov">+ $350 gov. fee per class</div>
          <ul class="price-feats">
            <li><strong>Private Registration</strong><span>A $60 value — we can protect your personal information from being publicly displayed.</span></li><li><strong>24-hour Expedited Processing</strong><span>We will assist you in drafting an application within 24 hours of receiving your order.</span></li>          </ul>
          <a href="#apply" class="btn btn-outline-navy w-100">Get Started Now</a>
        </div>
      </div>
          </div>
  </div>
</section>



<!-- ============ Why register ============ -->
<section class="section bg-soft">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <span class="section-eyebrow"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l7 3v5c0 4.5-3 8.3-7 10-4-1.7-7-5.5-7-10V6l7-3z"/><path d="M9 12l2 2 4-4"/></svg> Why it matters</span>
      <h2 class="section-title">Why Is It Important to Register Your Trademark?</h2>
      <p class="section-lede mx-auto">Registering a trademark is an essential step to protect intellectual property and ensure long-term business success.</p>
    </div>
    <div class="row g-4">
            <div class="col-md-6 col-lg-4">
        <div class="card-ms reveal d1">
          <div class="card-ic"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l7 3v5c0 4.5-3 8.3-7 10-4-1.7-7-5.5-7-10V6l7-3z"/><path d="M9 12l2 2 4-4"/></svg></div>
          <h3>Protect from Infringements</h3>
          <p class="mb-0">Our comprehensive approach identifies potential threats, ensuring that your trademarks and copyrights remain secure.</p>
        </div>
      </div>
            <div class="col-md-6 col-lg-4">
        <div class="card-ms reveal d2">
          <div class="card-ic"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 4h8v4a4 4 0 0 1-8 0z"/><path d="M8 6H5a3 3 0 0 0 3 3"/><path d="M16 6h3a3 3 0 0 1-3 3"/><path d="M12 12v4"/><path d="M9 20h6"/><path d="M10 16h4"/></svg></div>
          <h3>Attain Competitive Edge</h3>
          <p class="mb-0">Our customized protection strategies safeguard your intellectual property and establish your brand as distinctive and unique.</p>
        </div>
      </div>
            <div class="col-md-6 col-lg-4">
        <div class="card-ms reveal d3">
          <div class="card-ic"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="9" r="6"/><path d="M9 14l-2 7 5-3 5 3-2-7"/></svg></div>
          <h3>Get Exclusive Rights</h3>
          <p class="mb-0">Our services empower you with exclusive rights to your trademarks that enhance the value of your intellectual property.</p>
        </div>
      </div>
            <div class="col-md-6 col-lg-4">
        <div class="card-ms reveal d1">
          <div class="card-ic"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8z"/><path d="M14 3v5h5"/><path d="M9 15l2 2 4-4"/></svg></div>
          <h3>Legally Certified</h3>
          <p class="mb-0">Our team of experts assist you in navigating the certification process, ensuring legal recognition and protection of your rights.</p>
        </div>
      </div>
            <div class="col-md-6 col-lg-4">
        <div class="card-ms reveal d2">
          <div class="card-ic"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M3 12h18"/><path d="M12 3a15 15 0 0 1 0 18 15 15 0 0 1 0-18z"/></svg></div>
          <h3>Global Expansion</h3>
          <p class="mb-0">Our expertise in navigating international intellectual property laws safeguards your brand&rsquo;s identity, opening doors to new markets.</p>
        </div>
      </div>
            <div class="col-md-6 col-lg-4">
        <div class="card-ms reveal d3">
          <div class="card-ic"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 4l6 6-3 3-6-6z"/><path d="M9 9l-5 5a2 2 0 0 0 3 3l5-5"/><path d="M14 18h7"/></svg></div>
          <h3>Right to File Case</h3>
          <p class="mb-0">Possess the legal right to take action against trademark or copyright infringements. Our services equip you with a legal foundation to pursue unauthorized use.</p>
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
          <img src="assets/photo.php?p=writing-notes&w=900" alt="A researcher reviewing trademark search results" loading="lazy">
        </div>
      </div>
      <div class="col-lg-7">
        <div class="reveal d1">
          <span class="section-eyebrow"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg> Trademark search</span>
          <h2 class="section-title">Why Do You Need to Search Your Trademark?</h2>
          <p class="section-lede mb-4">It ensures that your trademark doesn&rsquo;t infringe on someone else&rsquo;s, and can also prevent you from using a trademark that is already in use.</p>
          <div class="howto mb-0">
                        <div class="howto-step">
              <div class="howto-num"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div>
              <div class="howto-body">
                <h4>Saves Time</h4>
                <p>In order to avoid legal disputes, it is important to register your trademark which can save you valuable time.</p>
              </div>
            </div>
                        <div class="howto-step">
              <div class="howto-num"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3v18"/><path d="M6 21h12"/><path d="M3 8l3-4 3 4"/><path d="M15 8l3-4 3 4"/><path d="M3 8a3 3 0 0 0 6 0"/><path d="M15 8a3 3 0 0 0 6 0"/></svg></div>
              <div class="howto-body">
                <h4>Saves Money</h4>
                <p>Legal protection reduces the risk of expensive legal battles, including litigation costs and potential damages.</p>
              </div>
            </div>
                        <div class="howto-step">
              <div class="howto-num"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 12s4-7 10-7 10 7 10 7-4 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/></svg></div>
              <div class="howto-body">
                <h4>Protect from Imitators</h4>
                <p>It serves as a powerful deterrent against individuals or businesses attempting to steal or infringe upon your brand.</p>
              </div>
            </div>
                      </div>
          <a href="trademark-search.php" class="btn btn-outline-navy mt-4">View More</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ Testimonials ============ -->
<section class="section bg-soft">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <span class="section-eyebrow"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 7h4v6a4 4 0 0 1-4 4"/><path d="M15 7h4v6a4 4 0 0 1-4 4"/></svg> Client testimonials</span>
      <h2 class="section-title">What our clients say</h2>
    </div>
    <div class="row g-4">
            <div class="col-md-6 col-lg-4">
        <div class="tst-card reveal d1">
          <div class="tst-stars">★★★★★</div>
          <p>“Incredible team! Trademark Profs&rsquo; expert guidance made the trademark registration process a breeze. If you&rsquo;re looking for trademark registration expertise, look no further!”</p>
          <div class="tst-who">
            <span class="tst-avatar">JS</span>
            <div><div class="tst-name">Jenny Smith</div><div class="tst-role">CEO of Diversion</div></div>
          </div>
        </div>
      </div>
            <div class="col-md-6 col-lg-4">
        <div class="tst-card reveal d2">
          <div class="tst-stars">★★★★★</div>
          <p>“We were worried about trademark infringements, and that&rsquo;s when we stumbled upon Trademark Profs. Their thorough examination helped us find potential conflicts. I couldn&rsquo;t be happier!”</p>
          <div class="tst-who">
            <span class="tst-avatar">SB</span>
            <div><div class="tst-name">Simon Blake</div><div class="tst-role">Manager at Pixel City</div></div>
          </div>
        </div>
      </div>
            <div class="col-md-6 col-lg-4">
        <div class="tst-card reveal d3">
          <div class="tst-stars">★★★★★</div>
          <p>“Trademark Profs provided an exceptional experience, demonstrating professionalism and expertise throughout the consultation and registration process. Highly recommended!”</p>
          <div class="tst-who">
            <span class="tst-avatar">EL</span>
            <div><div class="tst-name">Eleanor Louis</div><div class="tst-role">Team Lead at Infinite Tech</div></div>
          </div>
        </div>
      </div>
            <div class="col-md-6 col-lg-4">
        <div class="tst-card reveal d1">
          <div class="tst-stars">★★★★★</div>
          <p>“Trademark Profs has done an exceptional job! Their team expertly navigated complex regulations, addressing concerns through clear communication and proactive measures for a successful resolution.”</p>
          <div class="tst-who">
            <span class="tst-avatar">PR</span>
            <div><div class="tst-name">Peter Richard</div><div class="tst-role">Owner of Southern Sea</div></div>
          </div>
        </div>
      </div>
            <div class="col-md-6 col-lg-4">
        <div class="tst-card reveal d2">
          <div class="tst-stars">★★★★★</div>
          <p>“I had a great experience with Trademark Profs. Their timely alerts and comprehensive reports provided valuable insights, allowing proactive protection against potential threats.”</p>
          <div class="tst-who">
            <span class="tst-avatar">MG</span>
            <div><div class="tst-name">Melissa Gabrielle</div><div class="tst-role">CEO of Hive Studio</div></div>
          </div>
        </div>
      </div>
            <div class="col-md-6 col-lg-4">
        <div class="tst-card reveal d3">
          <div class="tst-stars">★★★★★</div>
          <p>“Trademark Profs has been a game-changer for our business. Their expertise and guidance have helped us navigate the complex world of trademark registration with ease. We highly recommend their services to anyone looking to protect their brand.”</p>
          <div class="tst-who">
            <span class="tst-avatar">DT</span>
            <div><div class="tst-name">David Thompson</div><div class="tst-role">Founder of Bright Ideas</div></div>
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
          <span class="section-eyebrow"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 12a8 8 0 0 1-11.5 7.2L4 21l1.8-5.5A8 8 0 1 1 21 12z"/></svg> FAQ</span>
          <h2 class="section-title">Frequently asked questions</h2>
        </div>
        <div class="accordion accordion-ms reveal" id="regFaq">
                    <div class="accordion-item">
            <h3 class="accordion-header"><button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#rf0">What is the significance of trademark registration?</button></h3>
            <div id="rf0" class="accordion-collapse collapse show" data-bs-parent="#regFaq"><div class="accordion-body">Trademark registration is essential to protect your goods or services by granting legal rights to use a unique mark and preventing unauthorized use by others.</div></div>
          </div>
                    <div class="accordion-item">
            <h3 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rf1">Do I need a professional service or can I do it myself?</button></h3>
            <div id="rf1" class="accordion-collapse collapse " data-bs-parent="#regFaq"><div class="accordion-body">While it is possible to register yourself, it is highly recommended to seek professional services to navigate legal complexities.</div></div>
          </div>
                    <div class="accordion-item">
            <h3 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rf2">What happens if my trademark application receives an office action?</button></h3>
            <div id="rf2" class="accordion-collapse collapse " data-bs-parent="#regFaq"><div class="accordion-body">Our experts provide comprehensive responses to regulatory queries, increasing the chances of successful registration.</div></div>
          </div>
                    <div class="accordion-item">
            <h3 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rf3">Can I trademark a logo with multiple elements?</button></h3>
            <div id="rf3" class="accordion-collapse collapse " data-bs-parent="#regFaq"><div class="accordion-body">Our team can assist with trademarking logos that have multiple elements.</div></div>
          </div>
                    <div class="accordion-item">
            <h3 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rf4">What rights do I have if someone infringes on my registered trademark?</button></h3>
            <div id="rf4" class="accordion-collapse collapse " data-bs-parent="#regFaq"><div class="accordion-body">Trademark holders have the right to take legal action for infringement, seeking damages and injunctive relief.</div></div>
          </div>
                  </div>
        <p class="text-center mt-4"><a href="#apply" class="btn btn-primary btn-lg btn-icon">Start My Trademark Registration <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="M13 6l6 6-6 6"/></svg></a></p>
      </div>
    </div>
  </div>
</section>

<!-- ============ CTA band (shared) ============ -->
<section class="section-tight">
  <div class="container">
    <div class="cta-band reveal">
      <span class="badge-soft mb-3" style="background:rgba(255,255,255,.14);color:#fff;">Ready when you are</span>
      <h2>Protect your brand today</h2>
      <p>Join thousands of founders who trust Trademark Profs to secure their trademarks. Start with a free search — no commitment, no card required.</p>
      <div class="d-flex flex-wrap gap-2 justify-content-center">
        <a href="trademark-registration.php" class="btn btn-accent btn-lg btn-icon">Start Your Filing <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="M13 6l6 6-6 6"/></svg></a>
        <a href="trademark-search.php" class="btn btn-ghost-light btn-lg">Run a Free Search</a>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
<?php require __DIR__ . '/includes/scripts.php'; ?>
</body>
</html>

