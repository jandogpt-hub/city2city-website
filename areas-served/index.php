<?php
/**
 * Areas Served Index Page
 * City 2 City Industrial Repair
 */

require_once __DIR__ . '/../includes/config.php';

// Page-specific SEO
$page_title = 'Areas Served | Forklift Repair in City of Industry &amp; Surrounding Cities';
$page_description = 'Mobile forklift repair services in City of Industry, Whittier, West Covina, El Monte, Baldwin Park, and surrounding areas. Call ' . BUSINESS_PHONE;
$page_canonical = SITE_URL . '/areas-served/';

require_once __DIR__ . '/../includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <nav class="breadcrumb" aria-label="Breadcrumb">
                    <a href="<?php echo SITE_URL; ?>/">Home</a>
                    <span>/</span>
                    <span>Areas Served</span>
                </nav>
                <h1 class="page-title">Areas We Serve</h1>
                <p class="page-description">Mobile forklift repair throughout City of Industry and surrounding communities within a 10-mile radius.</p>
            </div>
        </div>
    </section>
    
    <!-- Primary Service Areas -->
    <section class="section">
        <div class="container">
            <header class="section-header">
                <span class="section-label">Primary Coverage</span>
                <h2 class="section-title">Tier 1 Service Areas (0-5 Miles)</h2>
                <p class="section-subtitle">Our core service area with the fastest response times.</p>
            </header>
            
            <div class="areas-grid">
                <?php 
                $tier1 = array_filter($service_areas, function($a) { return $a['tier'] === 1; });
                foreach ($tier1 as $area): 
                ?>
                <a href="<?php echo SITE_URL; ?>/areas-served/<?php echo $area['slug']; ?>/" class="area-card">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                        <circle cx="12" cy="10" r="3"/>
                    </svg>
                    <span><?php echo $area['name']; ?>, <?php echo $area['state']; ?></span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    
    <!-- Extended Service Areas -->
    <section class="section" style="background: var(--color-background-alt);">
        <div class="container">
            <header class="section-header">
                <span class="section-label">Extended Coverage</span>
                <h2 class="section-title">Tier 2 Service Areas (5-10 Miles)</h2>
                <p class="section-subtitle">Extended service area with same-day availability.</p>
            </header>
            
            <div class="areas-grid">
                <?php 
                $tier2 = array_filter($service_areas, function($a) { return $a['tier'] === 2; });
                foreach ($tier2 as $area): 
                ?>
                <a href="<?php echo SITE_URL; ?>/areas-served/<?php echo $area['slug']; ?>/" class="area-card">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                        <circle cx="12" cy="10" r="3"/>
                    </svg>
                    <span><?php echo $area['name']; ?>, <?php echo $area['state']; ?></span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    
    <!-- Map Section -->
    <section class="section">
        <div class="container">
            <header class="section-header">
                <h2 class="section-title">Our Service Coverage Map</h2>
                <p class="section-subtitle">Based in Whittier, serving the greater City of Industry area.</p>
            </header>
            
            <div style="border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-xl);">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105888.98750461648!2d-118.08!3d33.96!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2d4e5e5e5e5e5%3A0x0!2sCity%20of%20Industry%2C%20CA!5e0!3m2!1sen!2sus!4v1234567890"
                    width="100%" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    title="City 2 City Industrial Repair service area map">
                </iframe>
            </div>
        </div>
    </section>
    
    <!-- Services CTA -->
    <section class="section" style="background: var(--color-background-alt);">
        <div class="container">
            <header class="section-header">
                <h2 class="section-title">Services Available in All Areas</h2>
            </header>
            
            <div class="services-grid">
                <?php foreach ($services as $service): ?>
                <a href="<?php echo SITE_URL; ?>/services/<?php echo $service['slug']; ?>/" class="service-card" style="text-align: center;">
                    <h3><?php echo $service['name']; ?></h3>
                    <p><?php echo $service['description']; ?></p>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
