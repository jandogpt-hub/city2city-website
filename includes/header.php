<?php
/**
 * Header Component
 * City 2 City Industrial Repair
 */

// Include config if not already included
if (!defined('BUSINESS_NAME')) {
    require_once __DIR__ . '/config.php';
}

// Page-specific variables (set before including header)
$page_title = $page_title ?? BUSINESS_NAME;
$page_description = $page_description ?? 'Mobile forklift repair services in City of Industry and surrounding areas. 24/7 emergency service. Call ' . BUSINESS_PHONE;
$page_canonical = $page_canonical ?? SITE_URL;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <link rel="canonical" href="<?php echo htmlspecialchars($page_canonical); ?>">
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($page_canonical); ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo SITE_URL; ?>/assets/images/city2cityindustrialrepair-logo.png">
    <meta property="og:site_name" content="<?php echo BUSINESS_NAME; ?>">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/images/favicon.png">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Cloudflare Turnstile (spam protection) -->
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="/assets/css/styles.css">
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?php echo GTM_ID; ?>');</script>
    <!-- End Google Tag Manager -->
    
    <?php if (isset($page_schema)): ?>
    <!-- Structured Data -->
    <script type="application/ld+json">
    <?php echo $page_schema; ?>
    </script>
    <?php endif; ?>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo GTM_ID; ?>"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <!-- Skip Link -->
    <a href="#main-content" class="skip-link">Skip to main content</a>
    
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-content">
                <div class="top-bar-left">
                    <span class="top-bar-item">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        <a href="tel:<?php echo BUSINESS_PHONE_LINK; ?>"><?php echo BUSINESS_PHONE; ?></a>
                    </span>
                    <span class="top-bar-item top-bar-hours">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                        Mon-Fri: 7AM - 4PM
                    </span>
                </div>
                <div class="top-bar-right">
                    <span class="top-bar-lang">Se Habla Español</span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Header -->
    <header class="site-header" id="site-header">
        <div class="container">
            <div class="header-content">
                <!-- Logo -->
                <a href="/" class="logo" aria-label="<?php echo BUSINESS_NAME; ?> - Home">
                    <img src="/assets/images/city2cityindustrialrepair-logo.png" 
                         alt="<?php echo BUSINESS_NAME; ?> Logo" 
                         width="200" 
                         height="60"
                         loading="eager">
                </a>
                
                <!-- Desktop Navigation -->
                <nav class="main-nav" aria-label="Main navigation">
                    <ul class="nav-list">
                        <li><a href="/" class="<?php echo isCurrentPage('home') || isCurrentPage('') ? 'active' : ''; ?>">Home</a></li>
                        <li class="has-dropdown">
                            <a href="/services/" class="<?php echo strpos(getCurrentPage(), 'services') !== false ? 'active' : ''; ?>">
                                Services
                                <svg class="dropdown-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="6 9 12 15 18 9"/>
                                </svg>
                            </a>
                            <ul class="dropdown-menu">
                                <?php foreach ($services as $service): ?>
                                <li><a href="/services/<?php echo $service['slug']; ?>/"><?php echo $service['name']; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li><a href="/areas-served/" class="<?php echo strpos(getCurrentPage(), 'areas-served') !== false ? 'active' : ''; ?>">Areas Served</a></li>
                        <li><a href="/about/" class="<?php echo isCurrentPage('about') ? 'active' : ''; ?>">About</a></li>
                        <li><a href="/contact/" class="<?php echo isCurrentPage('contact') ? 'active' : ''; ?>">Contact</a></li>
                    </ul>
                </nav>
                
                <!-- CTA Button -->
                <a href="tel:<?php echo BUSINESS_PHONE_LINK; ?>" class="btn btn-primary header-cta">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                    Call Now
                </a>
                
                <!-- Mobile Menu Toggle -->
                <button class="mobile-menu-toggle" aria-label="Toggle menu" aria-expanded="false" aria-controls="mobile-menu">
                    <span class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobile-menu" aria-hidden="true">
            <nav aria-label="Mobile navigation">
                <ul class="mobile-nav-list">
                    <li><a href="/">Home</a></li>
                    <li><a href="/services/">Services</a></li>
                    <li><a href="/areas-served/">Areas Served</a></li>
                    <li><a href="/about/">About</a></li>
                    <li><a href="/contact/">Contact</a></li>
                </ul>
                <a href="tel:<?php echo BUSINESS_PHONE_LINK; ?>" class="btn btn-primary btn-block mobile-cta">
                    Call <?php echo BUSINESS_PHONE; ?>
                </a>
            </nav>
        </div>
    </header>
    
    <main id="main-content">
