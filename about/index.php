<?php
/**
 * About Page
 * City 2 City Industrial Repair
 */

require_once __DIR__ . '/../includes/config.php';

// Page-specific SEO
$page_title = 'About Us | ' . BUSINESS_NAME . ' | Whittier, CA';
$page_description = 'Meet Jesse Nevarez, owner of City 2 City Industrial Repair. Serving City of Industry since 2018 with honest, reliable mobile forklift repair services.';
$page_canonical = SITE_URL . '/about/';

require_once __DIR__ . '/../includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <nav class="breadcrumb" aria-label="Breadcrumb">
                    <a href="<?php echo SITE_URL; ?>/">Home</a>
                    <span>/</span>
                    <span>About</span>
                </nav>
                <h1 class="page-title">About City 2 City Industrial Repair</h1>
                <p class="page-description">Locally owned and operated in Whittier, CA. We show up on time, fix it right, and stand behind our work.</p>
            </div>
        </div>
    </section>
    
    <!-- About Content -->
    <section class="section">
        <div class="container">
            <div class="about-grid">
                <div class="about-content">
                    <h2>Our Story</h2>
                    <p>
                        City 2 City Industrial Repair was founded in <?php echo YEAR_ESTABLISHED; ?> by <?php echo OWNER_NAME; ?> with a simple but powerful mission: provide forklift repair services that businesses can actually count on.
                    </p>
                    <p>
                        After <?php echo YEARS_EXPERIENCE; ?>+ years in the industry, Jesse saw a major problem. Too many repair companies wouldn't show up when they said they would. When they did show up, the work wasn't done right. And when problems came back, there was no warranty to fall back on.
                    </p>
                    <p>
                        <strong>That's not how we do things.</strong>
                    </p>
                    <p>
                        At City 2 City, we believe your time matters. Every minute your forklift is down is money lost. That's why we show up on time, diagnose the problem correctly, fix it right the first time, and warranty our work. It's that simple.
                    </p>
                    
                    <h2>Why "City 2 City"?</h2>
                    <p>
                        The name reflects how we work—we're a mobile repair service that travels from city to city, coming directly to your warehouse, distribution center, or job site. No need to transport your equipment to a shop. We bring our fully-equipped service vehicle to you.
                    </p>
                    <p>
                        Based in Whittier, we primarily serve City of Industry and surrounding communities within a 10-mile radius, including West Covina, El Monte, Baldwin Park, Santa Fe Springs, and more.
                    </p>
                    
                    <h2>Our Promise</h2>
                    <ul>
                        <li><strong>On-Time Arrival:</strong> We show up when we say we will. Period.</li>
                        <li><strong>Honest Assessment:</strong> We tell you what's actually wrong, not what costs the most to fix.</li>
                        <li><strong>Quality Repairs:</strong> We fix the problem right the first time.</li>
                        <li><strong>Warranty-Backed:</strong> We stand behind our work. If there's an issue, we make it right.</li>
                        <li><strong>Bilingual Service:</strong> Se Habla Español—clear communication in English or Spanish.</li>
                    </ul>
                    
                    <div class="mt-8">
                        <a href="tel:<?php echo BUSINESS_PHONE_LINK; ?>" class="btn btn-primary btn-large">
                            Call Us: <?php echo BUSINESS_PHONE; ?>
                        </a>
                    </div>
                </div>
                
                <div class="about-image">
                    <img src="<?php echo SITE_URL; ?>/assets/images/city-2-city-industrial-repair-mobile-forklift-repair.jpg" 
                         alt="<?php echo OWNER_NAME; ?> performing mobile forklift repair" 
                         width="600" 
                         height="400"
                         loading="lazy"
                         style="border-radius: var(--radius-xl); box-shadow: var(--shadow-xl);">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Stats Section -->
    <section class="section" style="background: var(--color-background-alt);">
        <div class="container">
            <div class="trust-items" style="justify-content: space-around;">
                <div class="trust-item" style="flex-direction: column; text-align: center;">
                    <span style="font-size: var(--text-4xl); font-weight: var(--font-weight-extrabold); color: var(--color-primary);">2018</span>
                    <span style="font-size: var(--text-sm); color: var(--color-foreground-muted);">Established</span>
                </div>
                <div class="trust-item" style="flex-direction: column; text-align: center;">
                    <span style="font-size: var(--text-4xl); font-weight: var(--font-weight-extrabold); color: var(--color-primary);">15+</span>
                    <span style="font-size: var(--text-sm); color: var(--color-foreground-muted);">Years Experience</span>
                </div>
                <div class="trust-item" style="flex-direction: column; text-align: center;">
                    <span style="font-size: var(--text-4xl); font-weight: var(--font-weight-extrabold); color: var(--color-primary);">5.0</span>
                    <span style="font-size: var(--text-sm); color: var(--color-foreground-muted);">Google Rating</span>
                </div>
                <div class="trust-item" style="flex-direction: column; text-align: center;">
                    <span style="font-size: var(--text-4xl); font-weight: var(--font-weight-extrabold); color: var(--color-primary);">12+</span>
                    <span style="font-size: var(--text-sm); color: var(--color-foreground-muted);">Cities Served</span>
                </div>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
