<?php
/**
 * City of Industry Area Page
 * City 2 City Industrial Repair
 */

require_once __DIR__ . '/../../includes/config.php';

$city_name = 'City of Industry';
$city_slug = 'city-of-industry';
$city_state = 'CA';

// Page-specific SEO
$page_title = 'Forklift Repair in ' . $city_name . ', ' . $city_state . ' | ' . BUSINESS_NAME;
$page_description = 'Mobile forklift repair services in ' . $city_name . '. Same-day service for warehouses and industrial facilities. Call ' . BUSINESS_PHONE;
$page_canonical = SITE_URL . '/areas-served/' . $city_slug . '/';

// Local Business schema for this city
$page_schema = json_encode([
    "@context" => "https://schema.org",
    "@type" => "LocalBusiness",
    "@id" => SITE_URL . "/areas-served/" . $city_slug . "/#localbusiness",
    "name" => BUSINESS_NAME . " - " . $city_name,
    "description" => "Mobile forklift repair services in " . $city_name . ", CA. We come to your facility for fast, warranty-backed repairs.",
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
                <p class="page-description">Mobile forklift repair for warehouses, distribution centers, and industrial facilities in the heart of LA County's industrial hub.</p>
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
                    <p>
                        <strong>City 2 City Industrial Repair provides on-site mobile forklift repair services throughout <?php echo $city_name; ?>, California.</strong> As the largest industrial hub in Los Angeles County, City of Industry is home to over 3,000 businesses and 80,000 workers—and many of those operations rely on forklifts every day.
                    </p>
                    <p>
                        When your forklift goes down, every minute costs money. That's why we offer same-day mobile repair service. We come directly to your warehouse or facility, diagnose the problem on-site, and get your equipment back up and running fast.
                    </p>
                    
                    <h2>Why City of Industry Businesses Choose Us</h2>
                    <ul>
                        <li><strong>Local to You:</strong> We're based right here in Whittier, minutes from City of Industry.</li>
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
                        City of Industry is a unique city in Los Angeles County, with a population of less than 300 permanent residents but over 80,000 daily workers. The city's 12.1 square miles are almost entirely zoned for industrial and commercial use, making it one of the most important logistics and manufacturing centers on the West Coast.
                    </p>
                    <p>
                        With major companies like Mars, Inc., Sunkist Growers, and hundreds of warehouses and distribution centers, forklift reliability is critical to keeping operations running. That's where City 2 City comes in.
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
                                <strong>0-5 miles</strong>
                            </li>
                            <li style="display: flex; justify-content: space-between;">
                                <span style="color: var(--color-foreground-muted);">Service Tier:</span>
                                <strong>Primary</strong>
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
                            <?php 
                            $nearby = array_slice($service_areas, 1, 5);
                            foreach ($nearby as $area): 
                            ?>
                            <li><a href="<?php echo SITE_URL; ?>/areas-served/<?php echo $area['slug']; ?>/"><?php echo $area['name']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
