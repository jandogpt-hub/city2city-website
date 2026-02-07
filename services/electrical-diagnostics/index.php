<?php
/**
 * Electrical Diagnostics Service Page
 * City 2 City Industrial Repair
 */

require_once __DIR__ . '/../../includes/config.php';

$service_name = 'Electrical Diagnostics';
$service_slug = 'electrical-diagnostics';

// Page-specific SEO
$page_title = 'Forklift ' . $service_name . ' | ' . BUSINESS_NAME . ' | City of Industry, CA';
$page_description = 'Forklift electrical diagnostics and repair in City of Industry. Battery issues, wiring problems, control system troubleshooting. Call ' . BUSINESS_PHONE;
$page_canonical = SITE_URL . '/services/' . $service_slug . '/';

// Service schema
$page_schema = json_encode([
    "@context" => "https://schema.org",
    "@type" => "Service",
    "@id" => SITE_URL . "/services/" . $service_slug . "/#service",
    "name" => "Forklift " . $service_name,
    "description" => "Battery, wiring, and control system troubleshooting and repair for electric and internal combustion forklifts.",
    "provider" => [
        "@type" => "LocalBusiness",
        "@id" => SITE_URL . "/#business"
    ],
    "areaServed" => [
        "@type" => "City",
        "name" => "City of Industry, CA"
    ],
    "serviceType" => "Electrical Diagnostics and Repair"
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
                <h1 class="page-title">Forklift <?php echo $service_name; ?></h1>
                <p class="page-description">From dead batteries to control system faults, we diagnose and fix electrical problems fast.</p>
            </div>
        </div>
    </section>
    
    <!-- Content Section -->
    <section class="content-section">
        <div class="container">
            <div class="content-grid">
                <div class="content-main">
                    <!-- Direct Answer Section (for AI Citations) -->
                    <h2>What Is Forklift Electrical Diagnostics?</h2>
                    <p>
                        <strong>Forklift electrical diagnostics is the process of identifying and troubleshooting problems with the electrical system of your forklift.</strong> This includes the battery and charging system, starter motor, wiring, sensors, and electronic control systems. Modern forklifts—especially electric models—rely heavily on electronics, making proper diagnosis essential.
                    </p>
                    <ul>
                        <li>Battery and charging system testing</li>
                        <li>Wiring inspection and repair</li>
                        <li>Control system fault code diagnosis</li>
                        <li>Sensor and switch troubleshooting</li>
                    </ul>
                    
                    <h2>Signs of Electrical Problems</h2>
                    <p>
                        Electrical issues can show up in many ways. Common symptoms include:
                    </p>
                    <ul>
                        <li><strong>Won't start:</strong> No response when you turn the key or nothing happens when you press the accelerator</li>
                        <li><strong>Short run time:</strong> Battery drains quickly even when fully charged</li>
                        <li><strong>Intermittent operation:</strong> Forklift works sometimes but not others</li>
                        <li><strong>Warning lights:</strong> Dashboard fault codes or warning indicators</li>
                        <li><strong>Loss of power:</strong> Sudden drop in performance or complete shutdown</li>
                        <li><strong>Lights or horn not working:</strong> Individual electrical components fail</li>
                        <li><strong>Slow charging:</strong> Battery takes too long to charge or won't hold a charge</li>
                    </ul>
                    
                    <h2>Common Electrical Repairs</h2>
                    <p>We diagnose and repair all types of forklift electrical problems:</p>
                    
                    <h3>Battery and charging systems</h3>
                    <ul>
                        <li>Battery load testing and capacity checks</li>
                        <li>Battery cable and connection repairs</li>
                        <li>Charger diagnostics and repair</li>
                        <li>Watering system repairs (for flooded lead-acid batteries)</li>
                    </ul>
                    
                    <h3>Wiring and connections</h3>
                    <ul>
                        <li>Damaged wire repair and replacement</li>
                        <li>Corroded connection cleaning and replacement</li>
                        <li>Short circuit diagnosis and repair</li>
                        <li>Ground fault troubleshooting</li>
                    </ul>
                    
                    <h3>Control systems</h3>
                    <ul>
                        <li>Fault code reading and diagnosis</li>
                        <li>Controller repair and replacement</li>
                        <li>Sensor and switch replacement</li>
                        <li>Drive motor diagnostics</li>
                    </ul>
                    
                    <h2>Electric vs. IC Forklift Electrical Systems</h2>
                    <p>
                        We service electrical systems on both electric forklifts and internal combustion (propane/diesel) forklifts. While electric forklifts have more complex electrical systems (drive motors, controllers, large battery packs), IC forklifts also have electrical components that can fail—starters, alternators, ignition systems, and sensors.
                    </p>
                    
                    <h2>Service Area</h2>
                    <p>
                        We provide electrical diagnostic services throughout City of Industry and surrounding cities:
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
                    
                    <h2>Get Your Electrical Issues Diagnosed</h2>
                    <p>
                        Don't guess at electrical problems—get them properly diagnosed. Call <a href="tel:<?php echo BUSINESS_PHONE_LINK; ?>" style="color: var(--color-primary); font-weight: var(--font-weight-semibold);"><?php echo BUSINESS_PHONE; ?></a> for expert electrical diagnostics and repair.
                    </p>
                </div>
                
                <!-- Sidebar -->
                <aside class="content-sidebar">
                    <div class="sidebar-card" style="background: var(--color-primary); color: white;">
                        <h3 style="color: white;">Electrical Problems?</h3>
                        <p style="opacity: 0.9;">We'll find and fix the issue.</p>
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
                                <span>Proper fault diagnosis</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: var(--space-2);">
                                <svg style="width: 20px; height: 20px; color: var(--color-success); flex-shrink: 0; margin-top: 2px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                    <polyline points="22 4 12 14.01 9 11.01"/>
                                </svg>
                                <span>Electric & IC forklifts</span>
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
