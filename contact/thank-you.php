<?php
/**
 * Thank You Page
 * City 2 City Industrial Repair
 */

require_once __DIR__ . '/../includes/config.php';

// Page-specific SEO
$page_title = 'Thank You | ' . BUSINESS_NAME;
$page_description = 'Thank you for contacting City 2 City Industrial Repair. We will get back to you shortly.';
$page_canonical = SITE_URL . '/contact/thank-you/';

require_once __DIR__ . '/../includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <nav class="breadcrumb" aria-label="Breadcrumb">
                    <a href="<?php echo SITE_URL; ?>/">Home</a>
                    <span>/</span>
                    <a href="<?php echo SITE_URL; ?>/contact/">Contact</a>
                    <span>/</span>
                    <span>Thank You</span>
                </nav>
                <h1 class="page-title">Message Sent!</h1>
                <p class="page-description">Thank you for reaching out. We've received your message.</p>
            </div>
        </div>
    </section>
    
    <!-- Content -->
    <section class="section">
        <div class="container">
            <div class="content-grid" style="display: block; max-width: 800px; margin: 0 auto; text-align: center;">
                <div style="background: var(--color-background-alt); padding: var(--space-8); border-radius: var(--radius-xl); box-shadow: var(--shadow-md);">
                    <div style="width: 80px; height: 80px; background: var(--color-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto var(--space-6);">
                        <svg style="width: 40px; height: 40px; color: white;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </div>
                    
                    <h2 style="margin-bottom: var(--space-4);">We'll Be in Touch Shortly</h2>
                    <p style="font-size: var(--text-lg); margin-bottom: var(--space-8);">
                        One of our team members will review your message and get back to you as soon as possible.
                        Usually within 24 hours during business days.
                    </p>
                    
                    <div style="display: flex; gap: var(--space-4); justify-content: center; flex-wrap: wrap;">
                        <a href="<?php echo SITE_URL; ?>/" class="btn btn-secondary">
                            Back to Home
                        </a>
                        <a href="tel:<?php echo BUSINESS_PHONE_LINK; ?>" class="btn btn-primary">
                            Call Us Now: <?php echo BUSINESS_PHONE; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
