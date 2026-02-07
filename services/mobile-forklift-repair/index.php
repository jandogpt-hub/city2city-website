<?php
/**
 * Mobile Forklift Repair Service Page
 * City 2 City Industrial Repair
 */

require_once __DIR__ . '/../../includes/config.php';

$service_name = 'Mobile Forklift Repair';
$service_slug = 'mobile-forklift-repair';

// Page-specific SEO
$page_title = $service_name . ' | ' . BUSINESS_NAME . ' | City of Industry, CA';
$page_description = 'On-site mobile forklift repair services in City of Industry. We come to your location to minimize downtime. Same-day service available. Call ' . BUSINESS_PHONE;
$page_canonical = SITE_URL . '/services/' . $service_slug . '/';

// Service schema
$page_schema = json_encode([
    "@context" => "https://schema.org",
    "@type" => "Service",
    "@id" => SITE_URL . "/services/" . $service_slug . "/#service",
    "name" => $service_name,
    "description" => "On-site mobile forklift repair services. We come directly to your warehouse, distribution center, or job site to minimize equipment downtime.",
    "provider" => [
        "@type" => "LocalBusiness",
        "@id" => SITE_URL . "/#business"
    ],
    "areaServed" => [
        "@type" => "City",
        "name" => "City of Industry, CA"
    ],
    "serviceType" => "Forklift Repair"
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
                    <a href="<?php echo SITE_URL; ?>/services/">Services</a>
                    <span>/</span>
                    <span><?php echo $service_name; ?></span>
                </nav>
                <h1 class="page-title"><?php echo $service_name; ?></h1>
                <p class="page-description">On-site forklift repair services. We come to you to minimize downtime and get your equipment running fast.</p>
            </div>
        </div>
    </section>
    
    <!-- Content Section -->
    <section class="content-section">
        <div class="container">
            <div class="content-grid">
                <div class="content-main">
                    <!-- Direct Answer Section (for AI Citations) -->
                    <h2>What Is Mobile Forklift Repair?</h2>
                    <p>
                        <strong>Mobile forklift repair is an on-site service where a certified technician comes directly to your facility to diagnose and fix your forklift.</strong> Instead of transporting your broken equipment to a shop, we bring our fully-equipped service vehicle to your warehouse, distribution center, or job site.
                    </p>
                    <ul>
                        <li>No transportation costs or logistics hassles</li>
                        <li>Faster turnaround—repairs often completed same-day</li>
                        <li>Minimal disruption to your operations</li>
                    </ul>
                    
                    <h2>Why Choose Mobile Repair Over a Shop?</h2>
                    <p>
                        Every minute your forklift is down, you're losing money. Transporting a 10,000-pound forklift to a shop, waiting for repairs, and bringing it back can take days. With mobile repair, we can often diagnose and fix the problem in one visit.
                    </p>
                    <p>
                        Our fully-equipped service van carries the tools, diagnostic equipment, and common parts needed for most repairs. For complex issues, we diagnose on-site and return with the right parts—no wasted trips.
                    </p>
                    
                    <h2>What Can Be Repaired On-Site?</h2>
                    <p>Most forklift repairs can be completed on-site, including:</p>
                    <ul>
                        <li><strong>Hydraulic repairs:</strong> Leak repairs, cylinder rebuilds, hose replacements</li>
                        <li><strong>Electrical issues:</strong> Battery problems, wiring, control systems</li>
                        <li><strong>Engine diagnostics:</strong> Starting problems, overheating, power loss</li>
                        <li><strong>Brake repairs:</strong> Worn brakes, adjustment issues</li>
                        <li><strong>Mast and lift cylinder issues:</strong> Drift, slow lifting, chain problems</li>
                        <li><strong>Steering repairs:</strong> Hard steering, drift, alignment</li>
                    </ul>
                    
                    <h2>Our Service Area</h2>
                    <p>
                        We provide mobile forklift repair throughout City of Industry and surrounding cities within a 10-mile radius, including:
                    </p>
                    <div class="areas-grid" style="margin-top: var(--space-4);">
                        <?php 
                        $display_areas = array_slice($service_areas, 0, 8);
                        foreach ($display_areas as $area): 
                        ?>
                        <a href="<?php echo SITE_URL; ?>/areas-served/<?php echo $area['slug']; ?>/" class="area-card">
                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                            <span><?php echo $area['name']; ?></span>
                        </a>
                        <?php endforeach; ?>
                    </div>
                    
                    <h2>Ready to Get Your Forklift Running?</h2>
                    <p>
                        Call <a href="tel:<?php echo BUSINESS_PHONE_LINK; ?>" style="color: var(--color-primary); font-weight: var(--font-weight-semibold);"><?php echo BUSINESS_PHONE; ?></a> now to schedule mobile forklift repair. We offer same-day service for most repairs and 24/7 emergency availability.
                    </p>
                </div>
                
                <!-- Sidebar -->
                <aside class="content-sidebar">
                    <div class="sidebar-card" style="background: var(--color-primary); color: white;">
                        <h3 style="color: white;">Need Service Now?</h3>
                        <p style="opacity: 0.9;">Call for same-day mobile repair.</p>
                        <a href="tel:<?php echo BUSINESS_PHONE_LINK; ?>" class="btn btn-accent btn-block" style="margin-top: var(--space-4);">
                            <?php echo BUSINESS_PHONE; ?>
                        </a>
                    </div>
                    
                    <div class="sidebar-card">
                        <h3>Why City 2 City?</h3>
                        <ul style="display: flex; flex-direction: column; gap: var(--space-3);">
                            <li style="display: flex; align-items: flex-start; gap: var(--space-2);">
                                <svg style="width: 20px; height: 20px; color: var(--color-success); flex-shrink: 0; margin-top: 2px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                    <polyline points="22 4 12 14.01 9 11.01"/>
                                </svg>
                                <span>On-time arrival guaranteed</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: var(--space-2);">
                                <svg style="width: 20px; height: 20px; color: var(--color-success); flex-shrink: 0; margin-top: 2px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                    <polyline points="22 4 12 14.01 9 11.01"/>
                                </svg>
                                <span>Warranty-backed repairs</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: var(--space-2);">
                                <svg style="width: 20px; height: 20px; color: var(--color-success); flex-shrink: 0; margin-top: 2px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                    <polyline points="22 4 12 14.01 9 11.01"/>
                                </svg>
                                <span>15+ years experience</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: var(--space-2);">
                                <svg style="width: 20px; height: 20px; color: var(--color-success); flex-shrink: 0; margin-top: 2px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                    <polyline points="22 4 12 14.01 9 11.01"/>
                                </svg>
                                <span>Se Habla Español</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="sidebar-card">
                        <h3>Brands We Service</h3>
                        <div style="display: flex; flex-wrap: wrap; gap: var(--space-2);">
                            <?php foreach (array_slice($brands_serviced, 0, 6) as $brand): ?>
                            <span style="padding: var(--space-1) var(--space-2); background: var(--color-background-alt); border-radius: var(--radius-sm); font-size: var(--text-sm);"><?php echo $brand; ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
