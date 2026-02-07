<?php
/**
 * Homepage
 * City 2 City Industrial Repair
 */

require_once __DIR__ . '/includes/config.php';

// Page-specific SEO
$page_title = BUSINESS_NAME . ' | Mobile Forklift Repair in City of Industry, CA';
$page_description = 'Mobile forklift repair services in City of Industry and surrounding areas. 24/7 emergency service. We show up on time and warranty our work. Call ' . BUSINESS_PHONE;
$page_canonical = SITE_URL;

// Generate homepage schema
$page_schema = json_encode([
    "@context" => "https://schema.org",
    "@graph" => [
        [
            "@type" => "LocalBusiness",
            "@id" => SITE_URL . "/#business",
            "name" => BUSINESS_NAME,
            "image" => SITE_URL . "/assets/images/city2cityindustrialrepair-logo.png",
            "url" => SITE_URL,
            "telephone" => BUSINESS_PHONE,
            "email" => BUSINESS_EMAIL,
            "priceRange" => "\$\$",
            "address" => [
                "@type" => "PostalAddress",
                "streetAddress" => BUSINESS_ADDRESS_STREET,
                "addressLocality" => BUSINESS_ADDRESS_CITY,
                "addressRegion" => BUSINESS_ADDRESS_STATE,
                "postalCode" => BUSINESS_ADDRESS_ZIP,
                "addressCountry" => "US"
            ],
            "geo" => [
                "@type" => "GeoCoordinates",
                "latitude" => BUSINESS_LAT,
                "longitude" => BUSINESS_LNG
            ],
            "openingHoursSpecification" => [
                [
                    "@type" => "OpeningHoursSpecification",
                    "dayOfWeek" => ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                    "opens" => "07:00",
                    "closes" => "16:00"
                ]
            ],
            "sameAs" => [GBP_URL],
            "areaServed" => array_map(function($area) {
                return [
                    "@type" => "City",
                    "name" => $area['name'] . ", " . $area['state']
                ];
            }, $service_areas),
            "founder" => [
                "@type" => "Person",
                "name" => OWNER_NAME
            ],
            "foundingDate" => YEAR_ESTABLISHED,
            "description" => "Mobile forklift repair services in City of Industry and surrounding areas. We show up on time, fix it right, and warranty our work.",
            "slogan" => BUSINESS_TAGLINE,
            "knowsLanguage" => ["en", "es"],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "5",
                "reviewCount" => "14"
            ]
        ],
        [
            "@type" => "WebSite",
            "@id" => SITE_URL . "/#website",
            "url" => SITE_URL,
            "name" => BUSINESS_NAME,
            "publisher" => [
                "@id" => SITE_URL . "/#business"
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

require_once __DIR__ . '/includes/header.php';
?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        <path d="M9 12l2 2 4-4"/>
                    </svg>
                    Locally Owned &amp; Operated Since 2018
                </div>
                
                <h1 class="hero-title">
                    Forklift Down?<br>
                    <span>We're On Our Way.</span>
                </h1>
                
                <p class="hero-description">
                    Mobile forklift repair that shows up when we say and fixes it right the first time. Serving City of Industry and surrounding areas with honest, warranty-backed service.
                </p>
                
                <div class="hero-actions">
                    <a href="tel:<?php echo BUSINESS_PHONE_LINK; ?>" class="btn btn-accent btn-large">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        Call <?php echo BUSINESS_PHONE; ?>
                    </a>
                    <a href="<?php echo SITE_URL; ?>/services/" class="btn btn-outline-light btn-large">
                        View Our Services
                    </a>
                </div>
                
                <div class="hero-features">
                    <div class="hero-feature">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                        <span>Same-Day Service</span>
                    </div>
                    <div class="hero-feature">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                        <span>Warranty Backed</span>
                    </div>
                    <div class="hero-feature">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="1" y="3" width="15" height="13"/>
                            <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/>
                            <circle cx="5.5" cy="18.5" r="2.5"/>
                            <circle cx="18.5" cy="18.5" r="2.5"/>
                        </svg>
                        <span>Mobile Service</span>
                    </div>
                    <div class="hero-feature">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                        </svg>
                        <span>Se Habla Español</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Trust Bar -->
    <section class="trust-bar">
        <div class="container">
            <div class="trust-items">
                <div class="trust-item">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                    <span><strong>5.0</strong> Google Rating</span>
                </div>
                <div class="trust-item">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                    <span><strong>15+</strong> Years Experience</span>
                </div>
                <div class="trust-item">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                    <span><strong>All Major</strong> Brands Serviced</span>
                </div>
                <div class="trust-item">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                    <span><strong>24/7</strong> Emergency Available</span>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Services Section -->
    <section class="section" id="services">
        <div class="container">
            <header class="section-header">
                <span class="section-label">What We Do</span>
                <h2 class="section-title">Our Repair Services</h2>
                <p class="section-subtitle">From emergency breakdowns to preventative maintenance, we keep your forklifts running.</p>
            </header>
            
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
                    <h3><?php echo $service['name']; ?></h3>
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
    
    <!-- Why Choose Us -->
    <section class="section why-section" id="why-us">
        <div class="container">
            <div class="why-grid">
                <div class="why-image">
                    <img src="<?php echo SITE_URL; ?>/assets/images/city2cityindustrial-repair-forklift-repair-service-van.jpg" 
                         alt="City 2 City Industrial Repair service van providing mobile forklift repair" 
                         width="600" 
                         height="400"
                         loading="lazy">
                </div>
                <div class="why-content">
                    <span class="section-label">Why Choose Us</span>
                    <h2 class="section-title" style="text-align: left; margin-bottom: var(--space-6);">The Forklift Repair Service You Can Actually Count On</h2>
                    <p style="margin-bottom: var(--space-8); color: var(--color-foreground-muted);">
                        We started City 2 City because the industry needed a repair service that shows up on time and stands behind their work. That's exactly what we deliver.
                    </p>
                    
                    <div class="why-item">
                        <div class="why-item-icon">
                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <polyline points="12 6 12 12 16 14"/>
                            </svg>
                        </div>
                        <div class="why-item-content">
                            <h3>On-Time, Every Time</h3>
                            <p>When we say we'll be there, we mean it. Your downtime costs money—we don't waste it.</p>
                        </div>
                    </div>
                    
                    <div class="why-item">
                        <div class="why-item-icon">
                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            </svg>
                        </div>
                        <div class="why-item-content">
                            <h3>Warranty-Backed Repairs</h3>
                            <p>We stand behind every repair. If something isn't right, we make it right—no excuses.</p>
                        </div>
                    </div>
                    
                    <div class="why-item">
                        <div class="why-item-icon">
                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"/>
                                <path d="M19 10v2a7 7 0 0 1-14 0v-2"/>
                                <line x1="12" y1="19" x2="12" y2="23"/>
                                <line x1="8" y1="23" x2="16" y2="23"/>
                            </svg>
                        </div>
                        <div class="why-item-content">
                            <h3>Bilingual Service</h3>
                            <p>Se Habla Español. We communicate clearly in English and Spanish so there's no confusion.</p>
                        </div>
                    </div>
                    
                    <div class="why-item">
                        <div class="why-item-icon">
                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="1" y="3" width="15" height="13"/>
                                <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/>
                                <circle cx="5.5" cy="18.5" r="2.5"/>
                                <circle cx="18.5" cy="18.5" r="2.5"/>
                            </svg>
                        </div>
                        <div class="why-item-content">
                            <h3>We Come to You</h3>
                            <p>No need to transport your equipment. Our fully-equipped mobile shop comes to your facility.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Areas Served -->
    <section class="section" id="areas">
        <div class="container">
            <header class="section-header">
                <span class="section-label">Where We Work</span>
                <h2 class="section-title">Service Areas</h2>
                <p class="section-subtitle">Mobile forklift repair throughout City of Industry and surrounding communities.</p>
            </header>
            
            <div class="areas-grid">
                <?php foreach ($service_areas as $area): ?>
                <a href="<?php echo SITE_URL; ?>/areas-served/<?php echo $area['slug']; ?>/" class="area-card">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                        <circle cx="12" cy="10" r="3"/>
                    </svg>
                    <span><?php echo $area['name']; ?></span>
                </a>
                <?php endforeach; ?>
            </div>
            
            <div class="text-center mt-8">
                <a href="<?php echo SITE_URL; ?>/areas-served/" class="btn btn-outline">
                    View All Service Areas
                </a>
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
    
    <!-- Reviews Section -->
    <section class="section" id="reviews">
        <div class="container">
            <header class="reviews-header">
                <div class="reviews-rating">
                    <div class="stars">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                        <svg class="icon" viewBox="0 0 24 24">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                        </svg>
                        <?php endfor; ?>
                    </div>
                    <span class="rating-text">5.0 on Google</span>
                </div>
                <h2 class="section-title">What Our Customers Say</h2>
            </header>
            
            <div class="reviews-grid">
                <article class="review-card">
                    <div class="review-stars">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                        <svg class="icon" viewBox="0 0 24 24">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                        </svg>
                        <?php endfor; ?>
                    </div>
                    <p class="review-text">"Our forklift started leaking, so based on the great reviews, I called City 2 City and spoke with Jesse. He was quick to respond and got us back up and running the same day."</p>
                    <p class="review-author">Dino F.</p>
                    <p class="review-source">Google Review</p>
                </article>
                
                <article class="review-card">
                    <div class="review-stars">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                        <svg class="icon" viewBox="0 0 24 24">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                        </svg>
                        <?php endfor; ?>
                    </div>
                    <p class="review-text">"He was quick to do the job and was a better price than others I researched. He fixed it in less than an hour. Highly recommend City 2 City."</p>
                    <p class="review-author">Grethel R.</p>
                    <p class="review-source">Google Review</p>
                </article>
                
                <article class="review-card">
                    <div class="review-stars">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                        <svg class="icon" viewBox="0 0 24 24">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                        </svg>
                        <?php endfor; ?>
                    </div>
                    <p class="review-text">"If I could give 10 stars, I would. Jesse cares about his customers and about his work. Our scissor lift repair was done perfectly."</p>
                    <p class="review-author">Jen B.</p>
                    <p class="review-source">Google Review</p>
                </article>
            </div>
            
            <div class="text-center mt-8">
                <a href="<?php echo GBP_URL; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline">
                    Read All Reviews on Google
                </a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
