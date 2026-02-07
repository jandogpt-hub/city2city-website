<?php
/**
 * Services Index Page
 * City 2 City Industrial Repair
 */

require_once __DIR__ . '/../includes/config.php';

// Page-specific SEO
$page_title = 'Forklift Repair Services | ' . BUSINESS_NAME . ' | City of Industry, CA';
$page_description = 'Mobile forklift repair services including emergency repair, maintenance, hydraulic repair, and electrical diagnostics. Serving City of Industry and surrounding areas.';
$page_canonical = SITE_URL . '/services/';

require_once __DIR__ . '/../includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <nav class="breadcrumb" aria-label="Breadcrumb">
                    <a href="<?php echo SITE_URL; ?>/">Home</a>
                    <span>/</span>
                    <span>Services</span>
                </nav>
                <h1 class="page-title">Our Forklift Repair Services</h1>
                <p class="page-description">From emergency breakdowns to scheduled maintenance, we keep your industrial equipment running.</p>
            </div>
        </div>
    </section>
    
    <!-- Services Grid -->
    <section class="section">
        <div class="container">
            <div class="services-grid">
                <?php foreach ($services as $service): ?>
                <article class="service-card">
                    <div class="service-icon">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <?php if ($service['icon'] === 'wrench'): ?>
                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                            <?php elseif ($service['icon'] === 'bolt'): ?>
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                            <?php elseif ($service['icon'] === 'gear'): ?>
                            <circle cx="12" cy="12" r="3"/>
                            <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
                            <?php elseif ($service['icon'] === 'droplet'): ?>
                            <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/>
                            <?php else: ?>
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                            <?php endif; ?>
                        </svg>
                    </div>
                    <h2><?php echo $service['name']; ?></h2>
                    <p><?php echo $service['description']; ?></p>
                    <a href="<?php echo SITE_URL; ?>/services/<?php echo $service['slug']; ?>/" class="service-link">
                        Learn More
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"/>
                            <polyline points="12 5 19 12 12 19"/>
                        </svg>
                    </a>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    
    <!-- Brands Section -->
    <section class="section brands-section">
        <div class="container">
            <header class="section-header">
                <span class="section-label">All Major Brands</span>
                <h2 class="section-title">Forklift Brands We Service</h2>
            </header>
            
            <div class="brands-list">
                <?php foreach ($brands_serviced as $brand): ?>
                <span class="brand-tag"><?php echo $brand; ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    
    <!-- Equipment Types -->
    <section class="section">
        <div class="container">
            <header class="section-header">
                <span class="section-label">Equipment We Repair</span>
                <h2 class="section-title">Types of Industrial Equipment</h2>
            </header>
            
            <div class="services-grid">
                <div class="service-card">
                    <h3>Electric Forklifts</h3>
                    <p>Battery-powered lift trucks including 3-wheel and 4-wheel sit-down electric forklifts.</p>
                </div>
                <div class="service-card">
                    <h3>Propane/LPG Forklifts</h3>
                    <p>Internal combustion forklifts powered by liquid propane gas.</p>
                </div>
                <div class="service-card">
                    <h3>Diesel Forklifts</h3>
                    <p>Heavy-duty diesel-powered forklifts for outdoor and high-capacity applications.</p>
                </div>
                <div class="service-card">
                    <h3>Reach Trucks</h3>
                    <p>Narrow aisle reach trucks and order pickers for warehouse applications.</p>
                </div>
                <div class="service-card">
                    <h3>Pallet Jacks</h3>
                    <p>Electric and manual pallet jacks, walkie pallet trucks, and rider pallet jacks.</p>
                </div>
                <div class="service-card">
                    <h3>Scissor Lifts</h3>
                    <p>Electric and rough terrain scissor lifts for elevated work platforms.</p>
                </div>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
