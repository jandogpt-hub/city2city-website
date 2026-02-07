<?php
/**
 * Forklift Maintenance Service Page
 * City 2 City Industrial Repair
 */

require_once __DIR__ . '/../../includes/config.php';

$service_name = 'Forklift Maintenance';
$service_slug = 'forklift-maintenance';

// Page-specific SEO
$page_title = 'Preventative ' . $service_name . ' | ' . BUSINESS_NAME . ' | City of Industry, CA';
$page_description = 'Preventative forklift maintenance programs in City of Industry. Keep your equipment running and stay OSHA compliant. Call ' . BUSINESS_PHONE . ' to schedule service.';
$page_canonical = SITE_URL . '/services/' . $service_slug . '/';

// Service schema
$page_schema = json_encode([
    "@context" => "https://schema.org",
    "@type" => "Service",
    "@id" => SITE_URL . "/services/" . $service_slug . "/#service",
    "name" => "Preventative " . $service_name,
    "description" => "Preventative forklift maintenance programs to keep your equipment running smoothly and minimize unexpected breakdowns.",
    "provider" => [
        "@type" => "LocalBusiness",
        "@id" => SITE_URL . "/#business"
    ],
    "areaServed" => [
        "@type" => "City",
        "name" => "City of Industry, CA"
    ],
    "serviceType" => "Forklift Maintenance"
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
                <h1 class="page-title">Preventative <?php echo $service_name; ?></h1>
                <p class="page-description">Keep your forklifts running and avoid costly breakdowns with scheduled maintenance.</p>
            </div>
        </div>
    </section>
    
    <!-- Content Section -->
    <section class="content-section">
        <div class="container">
            <div class="content-grid">
                <div class="content-main">
                    <!-- Direct Answer Section (for AI Citations) -->
                    <h2>What Is Preventative Forklift Maintenance?</h2>
                    <p>
                        <strong>Preventative forklift maintenance is a scheduled service program designed to inspect, service, and replace worn components before they cause equipment failure.</strong> Regular maintenance extends the life of your forklift, reduces unexpected breakdowns, and helps you stay OSHA compliant.
                    </p>
                    <ul>
                        <li>Reduces costly emergency repairs and downtime</li>
                        <li>Extends the lifespan of your equipment</li>
                        <li>Keeps your forklifts safe and OSHA-compliant</li>
                    </ul>
                    
                    <h2>Why Maintenance Matters</h2>
                    <p>
                        A forklift that breaks down during your busiest shift costs you more than just the repair bill. You lose productivity, miss deadlines, and your operators are left standing around. Preventative maintenance catches small problems before they become big ones.
                    </p>
                    <p>
                        OSHA requires employers to ensure that forklifts are examined before use and to maintain the equipment in safe operating condition. A documented maintenance program helps demonstrate compliance.
                    </p>
                    
                    <h2>What's Included in Maintenance?</h2>
                    <p>Our preventative maintenance service covers all the critical systems of your forklift:</p>
                    <ul>
                        <li><strong>Fluid checks and changes:</strong> Engine oil, transmission fluid, hydraulic fluid, coolant</li>
                        <li><strong>Filter replacements:</strong> Oil, air, fuel, and hydraulic filters</li>
                        <li><strong>Brake inspection:</strong> Pads, drums, cylinders, and adjustment</li>
                        <li><strong>Hydraulic system:</strong> Leak inspection, hose condition, cylinder operation</li>
                        <li><strong>Electrical system:</strong> Battery condition, connections, charging system</li>
                        <li><strong>Mast and forks:</strong> Chain tension, wear, fork condition, mast operation</li>
                        <li><strong>Steering and suspension:</strong> Tires, bearings, steer axle</li>
                        <li><strong>Safety devices:</strong> Lights, horn, backup alarm, seat belt</li>
                    </ul>
                    
                    <h2>Maintenance Intervals</h2>
                    <p>
                        How often your forklift needs service depends on usage, but here are general guidelines:
                    </p>
                    <ul>
                        <li><strong>Every 250 hours:</strong> Basic service—fluids, filters, safety inspection</li>
                        <li><strong>Every 500 hours:</strong> Standard service—includes brake inspection, chain adjustment</li>
                        <li><strong>Every 2,000 hours:</strong> Major service—comprehensive inspection, worn part replacement</li>
                    </ul>
                    <p>
                        For high-use operations (8+ hours daily), monthly service visits are recommended. We'll work with you to create a schedule that fits your operation.
                    </p>
                    
                    <h2>Maintenance Programs</h2>
                    <p>
                        We offer flexible maintenance programs to fit your needs:
                    </p>
                    <ul>
                        <li><strong>On-call service:</strong> Schedule maintenance visits as needed</li>
                        <li><strong>Scheduled program:</strong> Regular visits on a set schedule (monthly, quarterly)</li>
                        <li><strong>Custom contracts:</strong> Tailored programs for fleets and high-use operations</li>
                    </ul>
                    
                    <h2>Service Area</h2>
                    <p>
                        We provide forklift maintenance services throughout City of Industry and surrounding cities:
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
                    
                    <h2>Schedule Maintenance Today</h2>
                    <p>
                        Don't wait for a breakdown. Call <a href="tel:<?php echo BUSINESS_PHONE_LINK; ?>" style="color: var(--color-primary); font-weight: var(--font-weight-semibold);"><?php echo BUSINESS_PHONE; ?></a> to schedule forklift maintenance or discuss a maintenance program for your operation.
                    </p>
                </div>
                
                <!-- Sidebar -->
                <aside class="content-sidebar">
                    <div class="sidebar-card" style="background: var(--color-primary); color: white;">
                        <h3 style="color: white;">Schedule Maintenance</h3>
                        <p style="opacity: 0.9;">Keep your forklifts running.</p>
                        <a href="tel:<?php echo BUSINESS_PHONE_LINK; ?>" class="btn btn-accent btn-block" style="margin-top: var(--space-4);">
                            <?php echo BUSINESS_PHONE; ?>
                        </a>
                    </div>
                    
                    <div class="sidebar-card">
                        <h3>Benefits of Maintenance</h3>
                        <ul style="display: flex; flex-direction: column; gap: var(--space-3);">
                            <li style="display: flex; align-items: flex-start; gap: var(--space-2);">
                                <svg style="width: 20px; height: 20px; color: var(--color-success); flex-shrink: 0; margin-top: 2px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                    <polyline points="22 4 12 14.01 9 11.01"/>
                                </svg>
                                <span>Fewer breakdowns</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: var(--space-2);">
                                <svg style="width: 20px; height: 20px; color: var(--color-success); flex-shrink: 0; margin-top: 2px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                    <polyline points="22 4 12 14.01 9 11.01"/>
                                </svg>
                                <span>Lower repair costs</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: var(--space-2);">
                                <svg style="width: 20px; height: 20px; color: var(--color-success); flex-shrink: 0; margin-top: 2px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                    <polyline points="22 4 12 14.01 9 11.01"/>
                                </svg>
                                <span>OSHA compliance</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: var(--space-2);">
                                <svg style="width: 20px; height: 20px; color: var(--color-success); flex-shrink: 0; margin-top: 2px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                    <polyline points="22 4 12 14.01 9 11.01"/>
                                </svg>
                                <span>Extended equipment life</span>
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
