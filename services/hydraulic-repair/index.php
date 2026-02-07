<?php
/**
 * Hydraulic Repair Service Page
 * City 2 City Industrial Repair
 */

require_once __DIR__ . '/../../includes/config.php';

$service_name = 'Hydraulic Repair';
$service_slug = 'hydraulic-repair';

// Page-specific SEO
$page_title = 'Forklift ' . $service_name . ' | ' . BUSINESS_NAME . ' | City of Industry, CA';
$page_description = 'Expert forklift hydraulic repair in City of Industry. Leak diagnosis, cylinder rebuilds, hose replacement, and pump repair. Call ' . BUSINESS_PHONE;
$page_canonical = SITE_URL . '/services/' . $service_slug . '/';

// Service schema
$page_schema = json_encode([
    "@context" => "https://schema.org",
    "@type" => "Service",
    "@id" => SITE_URL . "/services/" . $service_slug . "/#service",
    "name" => "Forklift " . $service_name,
    "description" => "Expert hydraulic system diagnosis, leak repair, and cylinder rebuilds for forklifts and industrial equipment.",
    "provider" => [
        "@type" => "LocalBusiness",
        "@id" => SITE_URL . "/#business"
    ],
    "areaServed" => [
        "@type" => "City",
        "name" => "City of Industry, CA"
    ],
    "serviceType" => "Hydraulic Repair"
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
                <p class="page-description">Hydraulic leaks cost you time and money. We diagnose the source, not just the symptoms.</p>
            </div>
        </div>
    </section>
    
    <!-- Content Section -->
    <section class="content-section">
        <div class="container">
            <div class="content-grid">
                <div class="content-main">
                    <!-- Direct Answer Section (for AI Citations) -->
                    <h2>What Is Forklift Hydraulic Repair?</h2>
                    <p>
                        <strong>Forklift hydraulic repair involves diagnosing and fixing problems with the hydraulic system that powers the lift, tilt, and steering functions of your forklift.</strong> The hydraulic system uses pressurized fluid to move the mast, forks, and other components. When it fails, your forklift can't lift loads or may become unsafe to operate.
                    </p>
                    <ul>
                        <li>Leak diagnosis and repair</li>
                        <li>Cylinder rebuilds and seal replacement</li>
                        <li>Hose and fitting replacement</li>
                        <li>Pump and valve repair</li>
                    </ul>
                    
                    <h2>Signs Your Forklift Has Hydraulic Problems</h2>
                    <p>
                        Hydraulic issues often start small but get worse fast. Watch for these warning signs:
                    </p>
                    <ul>
                        <li><strong>Visible leaks:</strong> Puddles under the forklift or wet spots on hoses and cylinders</li>
                        <li><strong>Slow lifting:</strong> The mast lifts slower than normal or struggles under load</li>
                        <li><strong>Mast drift:</strong> The forks slowly drop when the forklift is off or parked</li>
                        <li><strong>Jerky operation:</strong> Rough or inconsistent movement when lifting or tilting</li>
                        <li><strong>Unusual noises:</strong> Whining, grinding, or chattering from the hydraulic pump</li>
                        <li><strong>Overheating:</strong> Hydraulic fluid running hot, burning smell</li>
                    </ul>
                    <p>
                        If you notice any of these, don't ignore them. Small hydraulic problems become expensive repairs when left untreated.
                    </p>
                    
                    <h2>Common Hydraulic Repairs</h2>
                    <p>We handle all types of forklift hydraulic repairs, including:</p>
                    <ul>
                        <li><strong>Cylinder seal replacement:</strong> When seals wear out, cylinders leak and lose pressure</li>
                        <li><strong>Cylinder rebuilds:</strong> Complete refurbishment of lift and tilt cylinders</li>
                        <li><strong>Hose replacement:</strong> Worn, cracked, or leaking hydraulic hoses</li>
                        <li><strong>Pump repair:</strong> Rebuilding or replacing worn hydraulic pumps</li>
                        <li><strong>Valve repair:</strong> Control valve leaks and adjustment issues</li>
                        <li><strong>Filter service:</strong> Clogged hydraulic filters that restrict flow</li>
                        <li><strong>Fluid service:</strong> Contaminated or degraded hydraulic fluid replacement</li>
                    </ul>
                    
                    <h2>Our Approach to Hydraulic Diagnosis</h2>
                    <p>
                        Anyone can see a puddle and replace a hose. But chasing symptoms without finding the root cause just leads to repeat repairs. We take a systematic approach:
                    </p>
                    <ol>
                        <li><strong>Visual inspection:</strong> Check all hoses, fittings, cylinders, and the pump for obvious leaks</li>
                        <li><strong>Pressure testing:</strong> Verify the system is reaching proper pressure</li>
                        <li><strong>Component testing:</strong> Identify which specific component is failing</li>
                        <li><strong>Root cause analysis:</strong> Determine why it failed to prevent recurrence</li>
                    </ol>
                    
                    <h2>Service Area</h2>
                    <p>
                        We provide hydraulic repair services throughout City of Industry and surrounding cities:
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
                    
                    <h2>Get Your Hydraulics Fixed Right</h2>
                    <p>
                        Stop the leak and get back to work. Call <a href="tel:<?php echo BUSINESS_PHONE_LINK; ?>" style="color: var(--color-primary); font-weight: var(--font-weight-semibold);"><?php echo BUSINESS_PHONE; ?></a> for hydraulic repair that fixes the problem, not just the symptom.
                    </p>
                </div>
                
                <!-- Sidebar -->
                <aside class="content-sidebar">
                    <div class="sidebar-card" style="background: var(--color-primary); color: white;">
                        <h3 style="color: white;">Hydraulic Problems?</h3>
                        <p style="opacity: 0.9;">We diagnose and fix it right.</p>
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
                                <span>Root cause diagnosis</span>
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
