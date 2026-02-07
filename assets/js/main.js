/**
 * City 2 City Industrial Repair
 * Main JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // ==========================================================================
    // Mobile Menu Toggle
    // ==========================================================================
    
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    if (mobileMenuToggle && mobileMenu) {
        mobileMenuToggle.addEventListener('click', function() {
            const isOpen = mobileMenu.classList.toggle('is-open');
            mobileMenuToggle.setAttribute('aria-expanded', isOpen);
            mobileMenu.setAttribute('aria-hidden', !isOpen);
            
            // Prevent body scroll when menu is open
            document.body.style.overflow = isOpen ? 'hidden' : '';
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!mobileMenu.contains(e.target) && !mobileMenuToggle.contains(e.target)) {
                mobileMenu.classList.remove('is-open');
                mobileMenuToggle.setAttribute('aria-expanded', 'false');
                mobileMenu.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
            }
        });
        
        // Close menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && mobileMenu.classList.contains('is-open')) {
                mobileMenu.classList.remove('is-open');
                mobileMenuToggle.setAttribute('aria-expanded', 'false');
                mobileMenu.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
            }
        });
    }
    
    // ==========================================================================
    // Header Scroll Effect
    // ==========================================================================
    
    const header = document.querySelector('.site-header');
    let lastScroll = 0;
    
    if (header) {
        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
            
            lastScroll = currentScroll;
        }, { passive: true });
    }
    
    // ==========================================================================
    // Smooth Scroll for Anchor Links
    // ==========================================================================
    
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            
            if (targetId === '#') return;
            
            const target = document.querySelector(targetId);
            
            if (target) {
                e.preventDefault();
                
                const headerOffset = 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // ==========================================================================
    // Form Validation (Contact Form)
    // ==========================================================================
    
    const contactForm = document.querySelector('#contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            let isValid = true;
            const requiredFields = contactForm.querySelectorAll('[required]');
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('error');
                } else {
                    field.classList.remove('error');
                }
            });
            
            // Email validation
            const emailField = contactForm.querySelector('[type="email"]');
            if (emailField && emailField.value) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(emailField.value)) {
                    isValid = false;
                    emailField.classList.add('error');
                }
            }
            
            // Phone validation
            const phoneField = contactForm.querySelector('[type="tel"]');
            if (phoneField && phoneField.value) {
                const phoneRegex = /^[\d\s\-\(\)\.+]{10,}$/;
                if (!phoneRegex.test(phoneField.value)) {
                    isValid = false;
                    phoneField.classList.add('error');
                }
            }
            
            if (!isValid) {
                e.preventDefault();
                const firstError = contactForm.querySelector('.error');
                if (firstError) {
                    firstError.focus();
                }
            }
        });
    }
    
    // ==========================================================================
    // Lazy Loading Images
    // ==========================================================================
    
    if ('IntersectionObserver' in window) {
        const lazyImages = document.querySelectorAll('img[data-src]');
        
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                    observer.unobserve(img);
                }
            });
        }, {
            rootMargin: '50px 0px'
        });
        
        lazyImages.forEach(img => imageObserver.observe(img));
    }
    
    // ==========================================================================
    // Click-to-Call Tracking (for GTM/GA4)
    // ==========================================================================
    
    document.querySelectorAll('a[href^="tel:"]').forEach(link => {
        link.addEventListener('click', function() {
            if (typeof dataLayer !== 'undefined') {
                dataLayer.push({
                    'event': 'phone_call',
                    'phone_number': this.href.replace('tel:', ''),
                    'click_location': this.closest('header') ? 'header' : 
                                     this.closest('footer') ? 'footer' :
                                     this.closest('.hero') ? 'hero' :
                                     this.closest('.cta-section') ? 'cta' : 'other'
                });
            }
        });
    });
    
    // ==========================================================================
    // Form Submission Tracking
    // ==========================================================================
    
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function() {
            if (typeof dataLayer !== 'undefined') {
                dataLayer.push({
                    'event': 'form_submission',
                    'form_id': this.id || 'unknown',
                    'form_name': this.name || this.id || 'contact_form'
                });
            }
        });
    });
    
    // ==========================================================================
    // Scroll Animations (Fade In)
    // ==========================================================================
    
    if ('IntersectionObserver' in window) {
        const animateElements = document.querySelectorAll('.animate-on-scroll');
        
        const animateObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });
        
        animateElements.forEach(el => animateObserver.observe(el));
    }
    
});
