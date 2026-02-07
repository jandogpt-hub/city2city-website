<?php
/**
 * 404 Error Page
 * City 2 City Industrial Repair
 */

require_once __DIR__ . '/includes/config.php';

// Set 404 header
http_response_code(404);

// Page-specific SEO
$page_title = 'Page Not Found | ' . BUSINESS_NAME;
$page_description = 'The page you are looking for could not be found. Contact City 2 City Industrial Repair at ' . BUSINESS_PHONE;
$page_canonical = SITE_URL . '/404';

require_once __DIR__ . '/includes/header.php';
?>

    <section class="section" style="text-align: center; padding: var(--space-24) 0;">
        <div class="container">
            <div style="max-width: 600px; margin: 0 auto;">
                <h1 style="font-size: var(--text-6xl); color: var(--color-primary); margin-bottom: var(--space-4);">404</h1>
                <h2 style="font-size: var(--text-3xl); margin-bottom: var(--space-4);">Page Not Found</h2>
                <p style="color: var(--color-foreground-muted); margin-bottom: var(--space-8);">
                    Sorry, the page you're looking for doesn't exist or has been moved. Let's get you back on track.
                </p>
                
                <div style="display: flex; flex-direction: column; gap: var(--space-4); align-items: center;">
                    <a href="<?php echo SITE_URL; ?>/" class="btn btn-primary btn-large">
                        Go to Homepage
                    </a>
                    <p style="color: var(--color-foreground-muted);">or</p>
                    <a href="tel:<?php echo BUSINESS_PHONE_LINK; ?>" class="btn btn-outline btn-large">
                        Call Us: <?php echo BUSINESS_PHONE; ?>
                    </a>
                </div>
                
                <div style="margin-top: var(--space-12);">
                    <h3 style="margin-bottom: var(--space-4);">Looking for something specific?</h3>
                    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: var(--space-3);">
                        <a href="<?php echo SITE_URL; ?>/services/" style="color: var(--color-primary);">Our Services</a>
                        <span style="color: var(--color-border);">|</span>
                        <a href="<?php echo SITE_URL; ?>/areas-served/" style="color: var(--color-primary);">Areas Served</a>
                        <span style="color: var(--color-border);">|</span>
                        <a href="<?php echo SITE_URL; ?>/contact/" style="color: var(--color-primary);">Contact Us</a>
                        <span style="color: var(--color-border);">|</span>
                        <a href="<?php echo SITE_URL; ?>/about/" style="color: var(--color-primary);">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
