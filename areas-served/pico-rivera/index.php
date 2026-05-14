<?php
/**
 * Pico Rivera Area Page
 * City 2 City Industrial Repair
 */

require_once __DIR__ . '/../../includes/config.php';

$city_name = 'Pico Rivera';
$city_slug = 'pico-rivera';
$city_state = 'CA';

// Page-specific SEO
$page_title = 'Forklift Repair in ' . $city_name . ', ' . $city_state . ' | ' . BUSINESS_NAME;
$page_description = 'Mobile forklift repair services in ' . $city_name . '. Mobile forklift repair in Pico Rivera. Call ' . BUSINESS_PHONE;
$page_canonical = SITE_URL . '/areas-served/' . $city_slug . '/';

// Local Business schema for this city
$page_schema = json_encode([
    "@context" => "https://schema.org",
    "@type" => "LocalBusiness",
    "@id" => SITE_URL . "/areas-served/" . $city_slug . "/#localbusiness",
    "name" => BUSINESS_NAME . " - " . $city_name,
    "description" => "Mobile forklift repair services in " . $city_name . ", " . $city_state . ". We come to your facility for fast, warranty-backed repairs.",
    "url" => $page_canonical,
    "telephone" => BUSINESS_PHONE,
    "address" => [
        "@type" => "PostalAddress",
        "addressLocality" => $city_name,
        "addressRegion" => $city_state,
        "addressCountry" => "US"
    ],
    "areaServed" => [
        "@type" => "City",
        "name" => $city_name . ", " . $city_state
    ],
    "parentOrganization" => [
        "@type" => "LocalBusiness",
        "@id" => SITE_URL . "/#business"
    ]
], JSON_UNESCAPED_SLASHES);

require_once __DIR__ . '/../../includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <nav class="breadcrumb" aria-label="Breadcrumb">
                    <a href="<?php echo SITE_URL; ?>/">Home</a>
                    <span>/</span>
                    <a href="<?php echo SITE_URL; ?>/areas-served/">Areas Served</a>
                    <span>/</span>
                    <span><?php echo $city_name; ?></span>
                </nav>
                <h1 class="page-title">Forklift Repair in <?php echo $city_name; ?>, <?php echo $city_state; ?></h1>
                <p class="page-description">Mobile forklift repair for warehouses, distribution centers, and industrial facilities in <?php echo $city_name; ?> and surrounding communities.</p>
            </div>
        </div>
    </section>
    
    <!-- Content Section -->
    <section class="content-section">
        <div class="container">
            <div class="content-grid">
                <div class="content-main">
                    <!-- Direct Answer Section -->
                    <h2>Mobile Forklift Repair in <?php echo $city_name; ?></h2>
                    <p class="lead">
                        <strong>City 2 City Industrial Repair provides same-day mobile forklift repair in <?php echo $city_name; ?>, <?php echo $city_state; ?>.</strong> We serve businesses with fast, on-site service to minimize downtime.
                    </p>
                    <p>
                        When your forklift goes down, every minute costs money. That's why we offer same-day mobile repair service. We come directly to your warehouse or facility, diagnose the problem on-site, and get your equipment back up and running fast.
                    </p>
                    
                    <h2>Why <?php echo $city_name; ?> Businesses Choose Us</h2>
                    <ul>
                        <li><strong>Local to You:</strong> We're based in Whittier, serving <?php echo $city_name; ?> and surrounding areas.</li>
                        <li><strong>Same-Day Service:</strong> Call in the morning, we're often there by afternoon.</li>
                        <li><strong>No Transportation Needed:</strong> We come to your loading dock, warehouse floor, or yard.</li>
                        <li><strong>Bilingual Service:</strong> Se Habla Español—clear communication for all your team members.</li>
                        <li><strong>Warranty-Backed:</strong> We stand behind every repair we perform.</li>
                    </ul>
                    
                    <h2>Services Available in <?php echo $city_name; ?></h2>
                    <div class="services-grid" style="margin-top: var(--space-4);">
                        <?php foreach ($services as $service): ?>
                        <a href="<?php echo SITE_URL; ?>/services/<?php echo $service['slug']; ?>/" class="service-card" style="padding: var(--space-4);">
                            <h3 style="font-size: var(--text-lg);"><?php echo $service['name']; ?></h3>
                        </a>
                        <?php endforeach; ?>
                    </div>
                    
                    <h2>About <?php echo $city_name; ?></h2>
                    <p>
                        <?php echo $city_name; ?> is an important part of our service area. We understand the specific needs of businesses in this community and are dedicated to keeping your operations running smoothly with reliable forklift maintenance and repair.
                    </p>
                    <p>
                        Whether you are operating a large distribution center or a small warehouse, City 2 City Industrial Repair has the expertise to handle your fleet.
                    </p>
                    
                    <h2>Ready for Fast Forklift Repair?</h2>
                    <p>
                        If you're in <?php echo $city_name; ?> and need forklift repair, call <a href="tel:<?php echo BUSINESS_PHONE_LINK; ?>" style="color: var(--color-primary); font-weight: var(--font-weight-semibold);"><?php echo BUSINESS_PHONE; ?></a> now. We offer same-day service and 24/7 emergency availability.
                    </p>
                </div>
                
                <!-- Sidebar -->
                <aside class="content-sidebar">
                    <div class="sidebar-card" style="background: var(--color-primary); color: white;">
                        <h3 style="color: white;">Forklift Emergency?</h3>
                        <p style="opacity: 0.9;">Call now for fast service in <?php echo $city_name; ?>.</p>
                        <a href="tel:<?php echo BUSINESS_PHONE_LINK; ?>" class="btn btn-accent btn-block" style="margin-top: var(--space-4);">
                            <?php echo BUSINESS_PHONE; ?>
                        </a>
                    </div>
                    
                    <div class="sidebar-card">
                        <h3>Quick Facts</h3>
                        <ul style="display: flex; flex-direction: column; gap: var(--space-3);">
                            <li style="display: flex; justify-content: space-between;">
                                <span style="color: var(--color-foreground-muted);">Response Time:</span>
                                <strong>Same Day</strong>
                            </li>
                            <li style="display: flex; justify-content: space-between;">
                                <span style="color: var(--color-foreground-muted);">Distance:</span>
                                <strong>8 mi</strong>
                            </li>
                            <li style="display: flex; justify-content: space-between;">
                                <span style="color: var(--color-foreground-muted);">Service Tier:</span>
                                <strong>Tier 2</strong>
                            </li>
                            <li style="display: flex; justify-content: space-between;">
                                <span style="color: var(--color-foreground-muted);">Emergency:</span>
                                <strong>24/7</strong>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="sidebar-card">
                        <h3>Nearby Cities</h3>
                        <ul class="footer-links">
                            <li><a href="<?php echo SITE_URL; ?>/areas-served/">View All Service Areas</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
