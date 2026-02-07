<?php
/**
 * Contact Page
 * City 2 City Industrial Repair
 */

require_once __DIR__ . '/includes/config.php';

// Page-specific SEO
$page_title = 'Contact Us | ' . BUSINESS_NAME . ' | ' . BUSINESS_PHONE;
$page_description = 'Contact City 2 City Industrial Repair for mobile forklift repair services in City of Industry. Call ' . BUSINESS_PHONE . ' for same-day service.';
$page_canonical = SITE_URL . '/contact/';

require_once __DIR__ . '/includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <nav class="breadcrumb" aria-label="Breadcrumb">
                    <a href="<?php echo SITE_URL; ?>/">Home</a>
                    <span>/</span>
                    <span>Contact</span>
                </nav>
                <h1 class="page-title">Contact Us</h1>
                <p class="page-description">Forklift down? Call now for fast, reliable mobile repair service.</p>
            </div>
        </div>
    </section>
    
    <!-- Contact Content -->
    <section class="section">
        <div class="container">
            <div class="contact-grid">
                <!-- Contact Info -->
                <div class="contact-info">
                    <h2>Get in Touch</h2>
                    <p style="color: var(--color-foreground-muted); margin-bottom: var(--space-8);">
                        Ready to get your forklift back up and running? Give us a call or send us a message. We respond quickly.
                    </p>
                    
                    <div class="contact-methods" style="display: flex; flex-direction: column; gap: var(--space-6);">
                        <!-- Phone -->
                        <div class="contact-method" style="display: flex; gap: var(--space-4); align-items: flex-start;">
                            <div style="width: 48px; height: 48px; background: var(--color-primary); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg style="width: 24px; height: 24px; color: white;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 style="font-size: var(--text-lg); margin-bottom: var(--space-1);">Phone</h3>
                                <a href="tel:<?php echo BUSINESS_PHONE_LINK; ?>" style="font-size: var(--text-xl); font-weight: var(--font-weight-bold); color: var(--color-primary);"><?php echo BUSINESS_PHONE; ?></a>
                                <p style="font-size: var(--text-sm); color: var(--color-foreground-muted); margin-top: var(--space-1);">Se Habla Español</p>
                            </div>
                        </div>
                        
                        <!-- Email -->
                        <div class="contact-method" style="display: flex; gap: var(--space-4); align-items: flex-start;">
                            <div style="width: 48px; height: 48px; background: var(--color-primary); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg style="width: 24px; height: 24px; color: white;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                    <polyline points="22,6 12,13 2,6"/>
                                </svg>
                            </div>
                            <div>
                                <h3 style="font-size: var(--text-lg); margin-bottom: var(--space-1);">Email</h3>
                                <a href="mailto:<?php echo BUSINESS_EMAIL; ?>" style="color: var(--color-primary);"><?php echo BUSINESS_EMAIL; ?></a>
                            </div>
                        </div>
                        
                        <!-- Address -->
                        <div class="contact-method" style="display: flex; gap: var(--space-4); align-items: flex-start;">
                            <div style="width: 48px; height: 48px; background: var(--color-primary); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg style="width: 24px; height: 24px; color: white;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>
                            </div>
                            <div>
                                <h3 style="font-size: var(--text-lg); margin-bottom: var(--space-1);">Location</h3>
                                <p><?php echo BUSINESS_ADDRESS_FULL; ?></p>
                                <p style="font-size: var(--text-sm); color: var(--color-foreground-muted); margin-top: var(--space-1);">Serving City of Industry &amp; surrounding areas</p>
                            </div>
                        </div>
                        
                        <!-- Hours -->
                        <div class="contact-method" style="display: flex; gap: var(--space-4); align-items: flex-start;">
                            <div style="width: 48px; height: 48px; background: var(--color-primary); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg style="width: 24px; height: 24px; color: white;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polyline points="12 6 12 12 16 14"/>
                                </svg>
                            </div>
                            <div>
                                <h3 style="font-size: var(--text-lg); margin-bottom: var(--space-1);">Hours</h3>
                                <p>Monday - Friday: 7:00 AM - 4:00 PM</p>
                                <p style="font-size: var(--text-sm); color: var(--color-accent); font-weight: var(--font-weight-semibold); margin-top: var(--space-1);">24/7 Emergency Service Available</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Google Map -->
                    <div style="margin-top: var(--space-8); border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-lg);">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3306.8372!2d-118.021333248!3d33.959329496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2d45e5e7e5e5e%3A0x3c1f35a27e0c8306!2s11704%20Merit%20Ln%2C%20Whittier%2C%20CA%2090601!5e0!3m2!1sen!2sus!4v1234567890"
                            width="100%" 
                            height="300" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            title="City 2 City Industrial Repair location map">
                        </iframe>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="contact-form">
                    <h2 style="margin-bottom: var(--space-6);">Send Us a Message</h2>
                    <form id="contact-form" action="#" method="POST">
                        <div class="form-group">
                            <label for="name" class="form-label">Name *</label>
                            <input type="text" id="name" name="name" class="form-input" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" class="form-input" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-input">
                        </div>
                        
                        <div class="form-group">
                            <label for="company" class="form-label">Company Name</label>
                            <input type="text" id="company" name="company" class="form-input">
                        </div>
                        
                        <div class="form-group">
                            <label for="equipment" class="form-label">Equipment Type</label>
                            <select id="equipment" name="equipment" class="form-input">
                                <option value="">Select equipment type</option>
                                <option value="electric-forklift">Electric Forklift</option>
                                <option value="propane-forklift">Propane/LPG Forklift</option>
                                <option value="diesel-forklift">Diesel Forklift</option>
                                <option value="reach-truck">Reach Truck</option>
                                <option value="pallet-jack">Pallet Jack</option>
                                <option value="scissor-lift">Scissor Lift</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message" class="form-label">Describe the Issue *</label>
                            <textarea id="message" name="message" class="form-textarea" required placeholder="Tell us about the problem you're experiencing..."></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-large btn-block">
                            Send Message
                        </button>
                        
                        <p style="font-size: var(--text-sm); color: var(--color-foreground-muted); margin-top: var(--space-4); text-align: center;">
                            Need immediate help? <a href="tel:<?php echo BUSINESS_PHONE_LINK; ?>" style="color: var(--color-primary); font-weight: var(--font-weight-semibold);">Call <?php echo BUSINESS_PHONE; ?></a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
