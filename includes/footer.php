<?php
/**
 * Footer Component
 * City 2 City Industrial Repair
 */

// Include config if not already included
if (!defined('BUSINESS_NAME')) {
    require_once __DIR__ . '/config.php';
}
?>
    </main>
    
    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <div class="cta-text">
                    <h2>Forklift Down? We're On Our Way.</h2>
                    <p>Every minute counts when your equipment isn't running. Call now and get a certified technician dispatched to your location.</p>
                </div>
                <div class="cta-actions">
                    <a href="tel:<?php echo BUSINESS_PHONE_LINK; ?>" class="btn btn-primary btn-large">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        <?php echo BUSINESS_PHONE; ?>
                    </a>
                    <a href="<?php echo SITE_URL; ?>/contact/" class="btn btn-outline-light btn-large">Request a Quote</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <!-- Column 1: About -->
                <div class="footer-column">
                    <img src="<?php echo SITE_URL; ?>/assets/images/city2cityindustrialrepair-logo.png" 
                         alt="<?php echo BUSINESS_NAME; ?>" 
                         class="footer-logo"
                         width="180"
                         height="54"
                         loading="lazy">
                    <p class="footer-about"><?php echo BUSINESS_TAGLINE; ?>. Mobile forklift repair services you can count on. We show up on time and stand behind our work.</p>
                    <div class="footer-social">
                        <a href="<?php echo GBP_URL; ?>" target="_blank" rel="noopener noreferrer" aria-label="Google Business Profile" class="social-link">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Column 2: Services -->
                <div class="footer-column">
                    <h3 class="footer-heading">Our Services</h3>
                    <ul class="footer-links">
                        <?php foreach ($services as $service): ?>
                        <li><a href="<?php echo SITE_URL; ?>/services/<?php echo $service['slug']; ?>/"><?php echo $service['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <!-- Column 3: Areas -->
                <div class="footer-column">
                    <h3 class="footer-heading">Areas Served</h3>
                    <ul class="footer-links footer-links-grid">
                        <?php 
                        $display_areas = array_slice($service_areas, 0, 8);
                        foreach ($display_areas as $area): 
                        ?>
                        <li><a href="<?php echo SITE_URL; ?>/areas-served/<?php echo $area['slug']; ?>/"><?php echo $area['name']; ?></a></li>
                        <?php endforeach; ?>
                        <li><a href="<?php echo SITE_URL; ?>/areas-served/">View All Areas →</a></li>
                    </ul>
                </div>
                
                <!-- Column 4: Contact -->
                <div class="footer-column">
                    <h3 class="footer-heading">Contact Us</h3>
                    <ul class="footer-contact">
                        <li>
                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                            <a href="tel:<?php echo BUSINESS_PHONE_LINK; ?>"><?php echo BUSINESS_PHONE; ?></a>
                        </li>
                        <li>
                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                            <a href="mailto:<?php echo BUSINESS_EMAIL; ?>"><?php echo BUSINESS_EMAIL; ?></a>
                        </li>
                        <li>
                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                            <span><?php echo BUSINESS_ADDRESS_FULL; ?></span>
                        </li>
                        <li>
                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <polyline points="12 6 12 12 16 14"/>
                            </svg>
                            <span>Mon-Fri: 7AM - 4PM</span>
                        </li>
                    </ul>
                    <p class="footer-lang"><strong>Se Habla Español</strong></p>
                </div>
            </div>
            
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <p class="copyright">&copy; <?php echo date('Y'); ?> <?php echo BUSINESS_NAME; ?>. All rights reserved.</p>
                    <p class="footer-tagline">Locally owned and operated in Whittier, CA since <?php echo YEAR_ESTABLISHED; ?>.</p>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Mobile Call Button (Fixed) -->
    <a href="tel:<?php echo BUSINESS_PHONE_LINK; ?>" class="mobile-call-btn" aria-label="Call <?php echo BUSINESS_PHONE; ?>">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
        </svg>
    </a>
    
    <!-- Scripts -->
    <script src="<?php echo SITE_URL; ?>/assets/js/main.js" defer></script>
</body>
</html>
