<?php
/**
 * Site Configuration
 * City 2 City Industrial Repair
 * 
 * Central configuration file for all site-wide settings.
 */

// Prevent direct access
if (!defined('SITE_ROOT')) {
    define('SITE_ROOT', dirname(__DIR__));
}

// =============================================================================
// BUSINESS INFORMATION
// =============================================================================
define('BUSINESS_NAME', 'City 2 City Industrial Repair');
define('BUSINESS_TAGLINE', 'Keeping Your Business Moving');
define('BUSINESS_PHONE', '(626) 709-3085');
define('BUSINESS_PHONE_LINK', '+16267093085');
define('BUSINESS_EMAIL', 'city2city19@gmail.com');
define('BUSINESS_ADDRESS_STREET', '11704 Merit Ln');
define('BUSINESS_ADDRESS_CITY', 'Whittier');
define('BUSINESS_ADDRESS_STATE', 'CA');
define('BUSINESS_ADDRESS_ZIP', '90601');
define('BUSINESS_ADDRESS_FULL', '11704 Merit Ln, Whittier, CA 90601');

// Coordinates
define('BUSINESS_LAT', '33.959329496');
define('BUSINESS_LNG', '-118.021333248');

// Owner
define('OWNER_NAME', 'Jesse Nevarez');
define('YEAR_ESTABLISHED', '2018');
define('YEARS_EXPERIENCE', '15');

// =============================================================================
// WEBSITE SETTINGS
// =============================================================================
define('SITE_URL', 'https://city2cityindustrialrepair.com');
define('SITE_NAME', 'City 2 City Industrial Repair');

// =============================================================================
// GOOGLE BUSINESS PROFILE
// =============================================================================
define('GBP_CID', '4333624708884476038');
define('GBP_URL', 'https://maps.google.com/maps?cid=4333624708884476038');
define('GBP_KNOWLEDGE_GRAPH_ID', '/g/11fjn60vjb');
define('GBP_PLUS_CODE', '33.959329496,-118.021333248');

// =============================================================================
// TRACKING & ANALYTICS
// =============================================================================
define('GTM_ID', 'GTM-NWSW8PX8');
define('GA4_ID', 'G-R2FMT0Q8QQ');

// =============================================================================
// HOURS OF OPERATION
// =============================================================================
$business_hours = [
    'Monday'    => '7:00 AM - 4:00 PM',
    'Tuesday'   => '7:00 AM - 4:00 PM',
    'Wednesday' => '7:00 AM - 4:00 PM',
    'Thursday'  => '7:00 AM - 4:00 PM',
    'Friday'    => '7:00 AM - 4:00 PM',
    'Saturday'  => 'Closed',
    'Sunday'    => 'Closed'
];

// Schema format
$schema_hours = [
    'Mo 07:00-16:00',
    'Tu 07:00-16:00',
    'We 07:00-16:00',
    'Th 07:00-16:00',
    'Fr 07:00-16:00'
];

// =============================================================================
// SERVICES
// =============================================================================
$services = [
    [
        'name' => 'Mobile Forklift Repair',
        'slug' => 'mobile-forklift-repair',
        'description' => 'On-site mobile forklift repair services. We come to you to minimize downtime.',
        'icon' => 'wrench'
    ],
    [
        'name' => 'Emergency Repair',
        'slug' => 'emergency-repair',
        'description' => '24/7 emergency forklift repair services when you need them most.',
        'icon' => 'bolt'
    ],
    [
        'name' => 'Forklift Maintenance',
        'slug' => 'forklift-maintenance',
        'description' => 'Preventative maintenance programs to keep your equipment running smoothly.',
        'icon' => 'gear'
    ],
    [
        'name' => 'Hydraulic Repair',
        'slug' => 'hydraulic-repair',
        'description' => 'Expert hydraulic system diagnosis, leak repair, and cylinder rebuilds.',
        'icon' => 'droplet'
    ],
    [
        'name' => 'Electrical Diagnostics',
        'slug' => 'electrical-diagnostics',
        'description' => 'Battery, wiring, and control system troubleshooting and repair.',
        'icon' => 'lightning'
    ]
];

// =============================================================================
// SERVICE AREAS
// =============================================================================
$service_areas = [
    // Tier 1: Primary (0-5 miles)
    [
        'name' => 'City of Industry',
        'slug' => 'city-of-industry',
        'state' => 'CA',
        'tier' => 1,
        'distance' => '0 mi',
        'description' => 'Serving the industrial heart of Los Angeles County.'
    ],
    [
        'name' => 'Whittier',
        'slug' => 'whittier',
        'state' => 'CA',
        'tier' => 1,
        'distance' => '4 mi',
        'description' => 'Locally based in Whittier, providing fast response times.'
    ],
    [
        'name' => 'West Covina',
        'slug' => 'west-covina',
        'state' => 'CA',
        'tier' => 1,
        'distance' => '5 mi',
        'description' => 'Mobile forklift repair throughout West Covina.'
    ],
    [
        'name' => 'La Puente',
        'slug' => 'la-puente',
        'state' => 'CA',
        'tier' => 1,
        'distance' => '2 mi',
        'description' => 'Quick response forklift service in La Puente.'
    ],
    [
        'name' => 'Hacienda Heights',
        'slug' => 'hacienda-heights',
        'state' => 'CA',
        'tier' => 1,
        'distance' => '2 mi',
        'description' => 'On-site forklift repair for Hacienda Heights businesses.'
    ],
    // Tier 2: Extended (5-10 miles)
    [
        'name' => 'Baldwin Park',
        'slug' => 'baldwin-park',
        'state' => 'CA',
        'tier' => 2,
        'distance' => '6 mi',
        'description' => 'Industrial forklift services in Baldwin Park.'
    ],
    [
        'name' => 'El Monte',
        'slug' => 'el-monte',
        'state' => 'CA',
        'tier' => 2,
        'distance' => '5 mi',
        'description' => 'Forklift repair and maintenance in El Monte.'
    ],
    [
        'name' => 'Santa Fe Springs',
        'slug' => 'santa-fe-springs',
        'state' => 'CA',
        'tier' => 2,
        'distance' => '9 mi',
        'description' => 'Serving industrial facilities in Santa Fe Springs.'
    ],
    [
        'name' => 'Pico Rivera',
        'slug' => 'pico-rivera',
        'state' => 'CA',
        'tier' => 2,
        'distance' => '8 mi',
        'description' => 'Mobile forklift repair in Pico Rivera.'
    ],
    [
        'name' => 'Covina',
        'slug' => 'covina',
        'state' => 'CA',
        'tier' => 2,
        'distance' => '8 mi',
        'description' => 'Expert forklift service in Covina.'
    ],
    [
        'name' => 'La Mirada',
        'slug' => 'la-mirada',
        'state' => 'CA',
        'tier' => 2,
        'distance' => '9 mi',
        'description' => 'Forklift repair services in La Mirada.'
    ],
    [
        'name' => 'Rowland Heights',
        'slug' => 'rowland-heights',
        'state' => 'CA',
        'tier' => 2,
        'distance' => '4 mi',
        'description' => 'On-site forklift repair in Rowland Heights.'
    ]
];

// =============================================================================
// BRANDS SERVICED
// =============================================================================
$brands_serviced = [
    'Toyota',
    'Yale', 
    'Hyster',
    'Crown',
    'Nissan',
    'Komatsu',
    'Caterpillar',
    'Clark',
    'Mitsubishi',
    'Doosan',
    'Raymond',
    'Jungheinrich'
];

// =============================================================================
// HELPER FUNCTIONS
// =============================================================================

/**
 * Get the current page slug from URL
 */
function getCurrentPage() {
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $path = trim($path, '/');
    return empty($path) ? 'home' : $path;
}

/**
 * Check if current page matches given slug
 */
function isCurrentPage($slug) {
    return getCurrentPage() === $slug;
}

/**
 * Format phone for display
 */
function formatPhone($phone) {
    return preg_replace('/(\d{3})(\d{3})(\d{4})/', '($1) $2-$3', preg_replace('/\D/', '', $phone));
}
