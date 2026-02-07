<?php
/**
 * Emergency Repair Service Page
 * City 2 City Industrial Repair
 */

require_once __DIR__ . '/../../includes/config.php';

$service_name = 'Emergency Forklift Repair';
$service_slug = 'emergency-repair';

// Page-specific SEO
$page_title = '24/7 ' . $service_name . ' | ' . BUSINESS_NAME . ' | City of Industry, CA';
$page_description = '24/7 emergency forklift repair in City of Industry. Forklift down? We answer, we show up, we fix it. Call ' . BUSINESS_PHONE . ' for immediate service.';
$page_canonical = SITE_URL . '/services/' . $service_slug . '/';

// Service schema
$page_schema = json_encode([
    "@context" => "https://schema.org",
    "@type" => "Service",
    "@id" => SITE_URL . "/services/" . $service_slug . "/#service",
    "name" => $service_name,
    "description" => "24/7 emergency forklift repair services. When your equipment breaks down outside normal hours, we're here to get you running again.",
    "provider" => [
        "@type" => "LocalBusiness",
        "@id" => SITE_URL . "/#business"
    ],
    "areaServed" => [
        "@type" => "City",
        "name" => "City of Industry, CA"
    ],
    "serviceType" => "Emergency Forklift Repair",
    "availableChannel" => [
        "@type" => "ServiceChannel",
        "availableLanguage" => ["English", "Spanish"],
        "servicePhone" => BUSINESS_PHONE
    ],
    "hoursAvailable" => [
        "@type" => "OpeningHoursSpecification",
        "dayOfWeek" => ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
        "opens" => "00:00",
        "closes" => "23:59"
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
                    <a href="<?php echo SITE_URL; ?>/services/">Services</a>
                    <span>/</span>
                    <span><?php echo $service_name; ?></span>
                </nav>
                <h1 class="page-title">24/7 <?php echo $service_name; ?></h1>
                <p class="page-description">Forklift emergency? We answer, we show up, we fix it. Day or night.</p>
            </div>
        </div>
    </section>
    
    <!-- Content Section -->
    <section class="content-section">
        <div class="container">
            <div class="content-grid">
                <div class="content-main">
                    <!-- Direct Answer Section (for AI Citations) -->
                    <h2>What Is Emergency Forklift Repair?</h2>
                    <p>
                        <strong>Emergency forklift repair is an urgent on-site service for when your equipment breaks down outside normal business hours or when you can't wait for a scheduled appointment.</strong> We respond to calls 24/7, including nights, weekends, and holidays.
                    </p>
                    <ul>
                        <li>Available 24 hours a day, 7 days a week</li>
                        <li>Fast response times—we understand downtime costs money</li>
                        <li>Fully equipped for most common emergency repairs</li>
                    </ul>
                    
                    <h2>When to Call for Emergency Service</h2>
                    <p>
                        Not every repair is an emergency, but when your operation depends on that forklift, waiting until Monday isn't an option. Call our emergency line when:
                    </p>
                    <ul>
                        <li><strong>Critical equipment is down</strong> and your operation can't continue</li>
                        <li><strong>Safety issues</strong> like brake failure, steering problems, or hydraulic leaks</li>
                        <li><strong>Deadline pressure</strong>—you have a shipment that must go out</li>
                        <li><strong>After-hours breakdown</strong>—nights, weekends, or holidays</li>
                    </ul>
                    
                    <h2>How Our Emergency Service Works</h2>
                    <p>When you call our emergency line, here's what happens:</p>
                    <ol>
                        <li><strong>You call, we answer.</strong> Jesse personally handles emergency calls—no voicemail, no call center.</li>
                        <li><strong>We diagnose over the phone</strong> to understand the issue and prepare the right parts.</li>
                        <li><strong>We're on our way.</strong> Our service van is stocked for most common repairs.</li>
                        <li><strong>We fix it on-site.</strong> Most emergency repairs can be completed in one visit.</li>
                    </ol>
                    
                    <h2>Common Emergency Repairs</h2>
                    <p>We handle all types of urgent forklift issues, including:</p>
                    <ul>
                        <li><strong>Hydraulic failures:</strong> Sudden loss of lift, mast drift, major leaks</li>
                        <li><strong>Electrical problems:</strong> Won't start, sudden power loss, dead battery</li>
                        <li><strong>Brake failures:</strong> Loss of braking, unusual noise, safety concerns</li>
                        <li><strong>Engine issues:</strong> Overheating, won't start, running rough</li>
                        <li><strong>Steering problems:</strong> Loss of steering control, hard steering</li>
                    </ul>
                    
                    <h2>Service Area</h2>
                    <p>
                        We provide emergency forklift repair throughout City of Industry and surrounding cities within a 10-mile radius:
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
                    
                    <h2>Forklift Emergency? Call Now.</h2>
                    <p>
                        Don't let a breakdown stop your operation. Call <a href="tel:<?php echo BUSINESS_PHONE_LINK; ?>" style="color: var(--color-primary); font-weight: var(--font-weight-semibold);"><?php echo BUSINESS_PHONE; ?></a> now for emergency forklift repair. We answer, we show up, we fix it.
                    </p>
                </div>
                
                <!-- Sidebar -->
                <aside class="content-sidebar">
                    <div class="sidebar-card" style="background: var(--color-accent); color: black;">
                        <h3 style="color: black;">24/7 Emergency Line</h3>
                        <p>Forklift down? Call now.</p>
                        <a href="tel:<?php echo BUSINESS_PHONE_LINK; ?>" class="btn btn-primary btn-block" style="margin-top: var(--space-4);">
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
                                <span>We answer—no voicemail</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: var(--space-2);">
                                <svg style="width: 20px; height: 20px; color: var(--color-success); flex-shrink: 0; margin-top: 2px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                    <polyline points="22 4 12 14.01 9 11.01"/>
                                </svg>
                                <span>Fast response times</span>
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
